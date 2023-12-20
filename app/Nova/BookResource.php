<?php

namespace App\Nova;

use App\Models\Book;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;

class BookResource extends Resource
{
    public static $model = Book::class;

    public static $title = 'id';

    public static $search = [
        'id', 'first_name', 'last_name', 'phone'
    ];

    public function fields(Request $request): array
    {
        return [
            ID::make()->sortable(),

            Number::make('Tour Id')
                ->sortable()
                ->rules('required', 'integer'),

            Text::make('First Name')
                ->sortable()
                ->rules('required'),

            Text::make('Last Name')
                ->sortable()
                ->rules('required'),

            Text::make('Phone')
                ->sortable()
                ->rules('required'),

            Text::make('Comment')
                ->sortable()
                ->rules('nullable'),
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
}
