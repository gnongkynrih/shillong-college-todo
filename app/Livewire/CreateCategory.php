<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class CreateCategory extends Component
{
    public $name;
    public function rules(){
        return [
            'name' =>'required|unique:categories,name'
        ];
    }
    public function messages(){
        return [
            'name.required' => 'Category name is mandatory',
            
        ];
    }
    public function saveCategory()
    {
        $this->validate(); //check for validation
        
        Category::create([
            'name' => $this->name,
        ]);
        //clear the input
        $this->reset(['name']);
    }
    

    public function render()
    {
        //select * from category table
        $cat = Category::get();
        return view('livewire.create-category')
            ->with([
                'categories' => $cat
            ]);
    }
}
