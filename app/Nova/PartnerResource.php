<?php

namespace App\Nova;

use App\Models\Partner;
use Ebess\AdvancedNovaMediaLibrary\Fields\Images;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Outl1ne\NovaSortable\Traits\HasSortableRows;
use Trin4ik\NovaSwitcher\NovaSwitcher;

class PartnerResource extends Resource
{

    use HasSortableRows;

    public static $model = Partner::class;

    public static $title = 'title';

    public static $search = [
        'id', 'title'
    ];

    public function fields(Request $request): array
    {
        return [
            ID::make()->sortable(),

            Text::make(__('Title'), 'title')
                ->sortable()
                ->rules('required'),
            NovaSwitcher::make(__('Status'), 'status')->trueLabel('Вкл')
                ->falseLabel('Выкл'),
            Images::make('изображение', 'partner') // second parameter is the media collection name
            ->conversionOnIndexView('thumb')// conversion used to display the image,
            ->enableExistingMedia()
                ->showStatistics()
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

    public static function singularLabel()
    {
        return __('Partner');
    }

    public static function label()
    {
        return __('Partners');
    }
}
