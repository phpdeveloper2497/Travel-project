<?php

namespace App\Nova;

use App\Models\Tour;
use Emilianotisato\NovaTinyMCE\NovaTinyMCE;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Laravel\Nova\Fields\Badge;
use Laravel\Nova\Fields\Currency;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Panel;
use Outl1ne\NovaTranslatable\HandlesTranslatable;
use Murdercode\TinymceEditor\TinymceEditor;
use Eminiarts\Tabs\Traits\HasTabs;
use Eminiarts\Tabs\Tabs;
use Eminiarts\Tabs\Tab;
use SimpleSquid\Nova\Fields\AdvancedNumber\AdvancedNumber;
use Outl1ne\NovaSortable\Traits\HasSortableRows;

class TourResource extends Resource
{
    use HandlesTranslatable;
    use HasTabs;
    use HasSortableRows;

    public static $model = Tour::class;

    public static $title = 'title';

    public static $search = [
        'id', 'title'
    ];

    public function fields(Request $request): array
    {
        return [
            ID::make()->sortable(),
            Text::make('Title')->translatable(),
            Textarea::make('Short Description')->translatable(),
            Tabs::make('Description', [
                Tab::make('RU', [
                    NovaTinyMCE::make(__('Description'), 'description_ru')->fullWidth()->hideFromDetail()->hideFromIndex(),
                    TinymceEditor::make(__('Description'), 'description_ru')->fullWidth()->hideWhenCreating()->hideWhenUpdating(),
                ]),
                Tab::make('UZ', [
                    NovaTinyMCE::make(__('Description'), 'description_uz')->fullWidth()->hideFromDetail()->hideFromIndex(),
                    TinymceEditor::make(__('Description'), 'description_uz')->fullWidth()->hideWhenCreating()->hideWhenUpdating()
                ]),
                Tab::make('EN', [
                    NovaTinyMCE::make(__('Description'), 'description_en')->fullWidth()->hideFromDetail()->hideFromIndex(),
                    TinymceEditor::make(__('Description'), 'description_en')->fullWidth()->hideWhenCreating()->hideWhenUpdating()
                ])
            ]),
            Text::make('Days')->translatable(),
            Text::make('Season')->translatable(),
            Text::make('Area')->translatable(),
            Text::make('From To')->translatable(),
            Select::make('Status')->searchable()->options([
                1 => 'Опубликовано',
                2 => 'Остановлено',
                3 => 'Удалено',
            ])->displayUsingLabels()->hideFromIndex()->hideFromDetail(),
            Badge::make('Status')->map([
                1 => 'success',
                2 => 'warning',
                3 => 'danger',
            ])->icons([
                'danger' => 'trash',
                'success' => 'check-circle',
                'warning' => 'exclamation-circle',
            ])->labels([
                1 => 'Опубликовано',
                2 => 'Остановлено',
                3 => 'Удалено',
            ]),
            Currency::make('Price')->currency('UZS')->locale('uz'),
            Number::make('Category Id')
                ->rules('nullable', 'integer'),
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
        return __('Tour');
    }

    public static function label()
    {
        return __('Tours');
    }
}
