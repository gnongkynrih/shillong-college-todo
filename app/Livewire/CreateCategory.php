<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class CreateCategory extends Component
{
    public $name;
    public $isEdit;
    public $categoryId;
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
    //this function is called each time a page is loaded
    public function mount(){
        $this->isEdit = false;
    }
    public function saveCategory()
    {
        $this->validate(); //check for validation
        
        if($this->isEdit){
            // Category::where('id', $this->categoryId)->update([
            //     'name' => $this->name,
            // ]);
            //search the category
            $cat = Category::find($this->categoryId);
            $cat->name = $this->name;
            $cat->save();
            $this->isEdit = false;
        }else{
            Category::create([
                'name' => $this->name,
            ]);
        }
        //clear the input
        $this->reset(['name']);
        session()->put('success-message', 'Category saved successfully');
        return redirect()->route('category');
    }
    
    public function editCategory($id){
        //find the category from the table base on id
        //select * from categories where id = $id
        $cat = Category::find($id); //search base on primary key
        $this->name = $cat->name;
        $this->isEdit = true;
        $this->categoryId = $id;
    }
    
    public function toggleStatus($id){
        $cat = Category::find($id);//finds the category
        $cat->is_active = !$cat->is_active; //if true make false else make true
        // if($cat->is_active == true){
        //     $cat->is_active = false;
        // }else{
        //     $cat->is_active = true;
        // }
        $cat->save();
        session()->put('success-message', 'Category status updated successfully');
        return redirect()->route('category');
    }
    public function render()
    {
        //select * from category table
        // $cat = Category::get();
         $cat = Category::paginate(5); //get 2 records at a time
        return view('livewire.create-category')
            ->with([
                'categories' => $cat
            ]);
    }
}
