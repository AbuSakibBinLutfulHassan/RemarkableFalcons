<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminDashboardComponent extends component
{
    public function render()
    {
        return view('livewire.admin.admin-dashboard-component')->layout('layouts.base');
    }
}
