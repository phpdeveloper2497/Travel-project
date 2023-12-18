<?php

namespace App\Nova;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;

class TicketResource extends Resource
{
    public static $model = Ticket::class;

    public static $title = 'id';

    public static $search = [
        'id', 'first_name', 'last_name', 'message'
    ];

    public function fields(Request $request): array
    {
        return [
            ID::make()->sortable(),

            Text::make('First Name')
                ->sortable()
                ->rules('required'),

            Text::make('Last Name')
                ->sortable()
                ->rules('required'),

            Text::make('Email')
                ->sortable()
                ->rules('nullable', 'email', 'max:254'),

            Text::make('Phone')
                ->sortable()
                ->rules('nullable'),

            Text::make('Message')
                ->sortable()
                ->rules('required'),
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
