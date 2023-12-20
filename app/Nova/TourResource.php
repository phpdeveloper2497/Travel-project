<?php

namespace App\Nova;

use App\Models\Tour;
use Ebess\AdvancedNovaMediaLibrary\Fields\Images;
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
use Laravel\Nova\Fields\BelongsTo;
use Trin4ik\NovaSwitcher\NovaSwitcher;
use Laravel\Nova\Fields\FormData;
use Laravel\Nova\Http\Requests\NovaRequest;

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
            BelongsTo::make(__('Place'), 'place', PlaceResource::class)->showCreateRelationButton()->modalSize('7xl'),
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
            Images::make('ИЗОБРАЖЕНИЕ', 'tour_main') // second parameter is the media collection name
            ->conversionOnIndexView('thumb') // conversion used to display the image on the model's index page
            ->fullSize()
                ->enableExistingMedia(),
            Currency::make('Price')->min(1)->max(100000)->step(1),
            NovaSwitcher::make(__("Banner"), 'banner')->trueLabel('Вкл')
                ->falseLabel('Выкл'),
            NovaSwitcher::make(__("Top"), 'top')->trueLabel('Вкл')
                ->falseLabel('Выкл'),
            NovaSwitcher::make(__("Discount"), 'discount')->trueLabel('Вкл')
                ->falseLabel('Выкл'),
            Number::make(__("Discount amount"), 'discount_amount')->dependsOn(
                ['discount'],
                function (Text $field, NovaRequest $request, FormData $formData) {
                    if ($formData->discount == 1 && $formData->discount == true) {
                        $field->readonly(false)->rules(['required', 'integer']);
                    }
                }
            )->min(1)->max(100)->step(1),
            Panel::make('Images', [
                Images::make('Images', 'tour_gallery') // second parameter is the media collection name
                ->conversionOnIndexView('thumb') // conversion used to display the image on the model's index page
                ->fullSize()
                ->enableExistingMedia()
            ])
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
