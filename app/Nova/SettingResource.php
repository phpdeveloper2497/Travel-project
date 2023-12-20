<?php

namespace App\Nova;
use Inspheric\Fields\Url;
use App\Models\Setting;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Email;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;
use Dniccum\PhoneNumber\PhoneNumber;
use Outl1ne\NovaTranslatable\HandlesTranslatable;
class SettingResource extends Resource
{
    use HandlesTranslatable;
    public static $model = Setting::class;

    public static $title = 'id';

    public static $search = [
        'id',
        'phone1',
        'phone2',
        'address',
        'location',
        'email1',
        'email2',
        'facebook',
        'instagram',
        'telegram',
        'youtube'
    ];

    public function fields(Request $request): array
    {
        return [
            ID::make()->sortable(),
            PhoneNumber::make('Phone 1', 'phone1')->format('+#####-###-##-##')->disableValidation()->country('UZ'),
            PhoneNumber::make('Phone 2', 'phone2')->format('+#####-###-##-##')->disableValidation()->country('UZ'),
            Textarea::make('Address', 'address')->translatable(),
            Textarea::make('Location', 'location')->hideFromDetail(),
            Text::make('Location', function (){
                return "<div>{$this->location}</div>";
            })->asHtml()->hideFromIndex(),
            Url::make("Telegram", 'telegram')->rules('url'),
            Url::make("Facebook", 'facebook')->rules('url'),
            Url::make("Instagram", 'instagram')->rules('url'),
            Url::make("YouTube", 'youtube')->rules('url'),
            Email::make(__('Email'), 'email1')->rules('required'),
            Email::make(__('Email'), 'email2')->rules('required'),
        ];
    }

    public function cards(Request $request): array
    {
        return [];
    }

    public function filters(Request $request): array
    {
        return [];
    }

    public function lenses(Request $request): array
    {
        return [];
    }

    public function actions(Request $request): array
    {
        return [];
    }

    public static function label()
    {
        return __('Settings');
    }

    public static function singularLabel()
    {
        return __('Setting');
    }

    public function authorizedToDelete(Request $request)
    {
        return false;
    }

    public function authorizedToReplicate(Request $request)
    {
        return false;
    }


    public static function authorizedToCreate(Request $request)
    {
        return false;
    }
}
