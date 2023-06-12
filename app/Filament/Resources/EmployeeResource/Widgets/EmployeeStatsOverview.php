<?php

namespace App\Filament\Resources\EmployeeResource\Widgets;

use App\Models\Employee;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class EmployeeStatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('All Employees', Employee::all()->count()),
            Card::make(
                'Youngest Employee',
                Employee::orderByDesc('birth_date')->first()->birth_date->toDayDateTimeString()
            ),
            Card::make(
                'Oldest Hire',
                Employee::orderByDesc('date_hired')->first()->date_hired->toDayDateTimeString()
            ),
        ];
    }
}
