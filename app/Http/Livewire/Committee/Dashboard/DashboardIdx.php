<?php

namespace App\Http\Livewire\Committee\Dashboard;

use Livewire\Component;

class DashboardIdx extends Component
{
    public function render()
    {
        return view('livewire.committee.dashboard.dashboard-idx')->layout('adminlte::page');
    }
}
