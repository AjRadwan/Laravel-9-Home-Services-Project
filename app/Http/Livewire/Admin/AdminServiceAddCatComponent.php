<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Str;
class AdminServiceAddCatComponent extends Component
{

    public function generateSlug(){
        $this->slug = Str::slug($this->name, '-');
    }

    public $name;
    public $slug;
    public $image;
    public function render(){
        return view('livewire.admin.admin-service-add-cat-component')->layout('layouts.base');
    }
}
