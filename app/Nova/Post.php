<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Http\Requests\NovaRequest;
use Outl1ne\NovaTranslatable\HandlesTranslatable;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Trin4ik\NovaSwitcher\NovaSwitcher;
use Ebess\AdvancedNovaMediaLibrary\Fields\Images;
class Post extends Resource
{
    use HandlesTranslatable;

    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Post>
     */
    public static $model = \App\Models\Post::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'title', 'desc'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),
            Text::make(__("Title"), 'title')->translatable(),
            Trix::make(__("Content"), 'desc')->translatable(),
            NovaSwitcher::make(__("Status"), 'status')->trueLabel('Вкл')
                ->falseLabel('Выкл'),
            DateTime::make(__('Published at'), 'published_at'),
            Images::make('Основное изображение', 'post') // second parameter is the media collection name
            ->conversionOnIndexView('thumb')// conversion used to display the image,
            ->enableExistingMedia()
                ->showStatistics()
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }

    public static function label()
    {
        return __('Posts');
    }

    public static function singularLabel()
    {
        return __('Post');
    }
}
