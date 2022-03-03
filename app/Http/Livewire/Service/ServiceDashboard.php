<?php

namespace App\Http\Livewire\Service;

use Livewire\Component;

class ServiceDashboard extends Component
{
    public function render()
    {
        return view('livewire.service.service-dashboard')->layout('layouts');
    }
}
