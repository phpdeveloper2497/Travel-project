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

            Text::make(__('First Name'), 'first_name')
                ->sortable()
                ->rules('required'),

            Text::make(__('Last Name'), 'last_name')
                ->sortable()
                ->rules('required'),

            Text::make(__('Email'), 'email')
                ->sortable()
                ->rules('nullable', 'email', 'max:254'),

            Text::make(__('Phone'), 'phone')
                ->sortable()
                ->rules('nullable'),

            Text::make(__('Message'), 'message')
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


    public static function singularLabel()
    {
        return __('Ticket');
    }

    public static function label()
    {
        return __('Tickets');
    }

    public static function authorizedToCreate(Request $request)
    {
        return false;
    }

    public function authorizedToUpdate(Request $request)
    {
        return false;
    }

    public function authorizedToReplicate(Request $request)
    {
        return false;
    }
}
