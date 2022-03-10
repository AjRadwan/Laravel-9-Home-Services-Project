<?php

namespace App\Http\Livewire\Admin;
use App\Models\ServiceCategory;
use Illuminate\Support\Str;
use Livewire\Component;

class AdminEditServiceCatComponent extends Component{

   public $category_id;
   public $name;
   public $slug;
   public $image;
   public $newImage;

   public function mount($category_id){
       $scategory = ServiceCategory::find($category_id);
       $this->category_id = $scategory->category_id ;
       $this->name = $scategory->name;
       $this->slug = $scategory->slug;
       $this->image = $scategory->image;
   }

   public function generateSlug(){
    $this->slug = Str::slug($this->name, '-');
}


public function Update($fields){
    $this->validateOnly($fields,[
       'name' => 'required',
       'slug' => 'required',
      ]);
      if($this->newImage){
        $this->validateOnly($fields,[ 
            'newImage' => 'required|mimes:png,jpg'
        ]);
    }
  }



  public function updateService(){
      $this->validate([
        'name' => 'required',
          'slug' => 'required'
      ]);
      if($this->newImage){
          $this->validate([ 
              'newImage' => 'required|mimes:png,jpg'
          ]);
      }
  }


    public function render(){
        return view('livewire.admin.admin-edit-service-cat-component')->layout('layouts.base');
    }
}
