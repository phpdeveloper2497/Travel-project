<?php

namespace App\Nova;

use App\Models\Place;
use Ebess\AdvancedNovaMediaLibrary\Fields\Images;
use Eminiarts\Tabs\Traits\HasTabs;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Outl1ne\NovaSortable\Traits\HasSortableRows;
use Outl1ne\NovaTranslatable\HandlesTranslatable;
use Trin4ik\NovaSwitcher\NovaSwitcher;

class PlaceResource extends Resource
{

    use HandlesTranslatable;
    use HasTabs;
    use HasSortableRows;

    public static $model = Place::class;

    public static $title = 'title';

    public static $search = [
        'id', 'title', 'description'
    ];

    public function fields(Request $request): array
    {
        return [
            ID::make()->sortable(),
            Text::make(__('Title'), 'title')->translatable(),
            Textarea::make(__('Description'), 'description')->translatable(),
            Images::make('ИЗОБРАЖЕНИЕ', 'place') // second parameter is the media collection name
            ->conversionOnIndexView('thumb') // conversion used to display the image on the model's index page
            ->fullSize()
                ->enableExistingMedia(),
            NovaSwitcher::make(__("Status"), 'status')->trueLabel('Вкл')
                ->falseLabel('Выкл'),
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
        return __('Place');
    }

    public static function label()
    {
        return __('Places');
    }
}
