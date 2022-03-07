<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
 
use App\Models\ServiceCategory;
class AdminServiceCategoryComponent extends Component
{   
   
    public function render(){
         $categories = ServiceCategory::paginate(5);
        return view('livewire.admin.admin-service-category-component', compact('categories'))->layout('layouts.base');
    }
}
