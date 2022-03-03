<?php

namespace App\Http\Livewire\Customer;

use Livewire\Component;

class CustomerDashboard extends Component
{
    public function render()
    {
        return view('livewire.customer.customer-dashboard')->layout('layouts');
    }
}
