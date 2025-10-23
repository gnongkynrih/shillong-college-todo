<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Expense;
use App\Models\Balance;
use Illuminate\Support\Facades\Mail;
use App\Mail\WithdrawalMail;
class Expenditure extends Component
{
    public $categories = [];
    public $category_id = null;
    public $expense_date = null;
    public $description = null;
    public $amount = null;

    public function rules(){
        return [
            'category_id' => 'required',
            'expense_date' => 'required|date|before_or_equal:today',
            'description' => 'nullable',
            'amount' => 'required|numeric|min:1',
        ];
    }
    //this function is executed automatically
    //when the page is loaded
    public function mount(){
        //select * from categories where is_active=1
        $this->categories = Category::where('is_active','=',1)->get();
        $this->expense_date = now()->format('Y-m-d');
    }
    public function saveExpenditure(){
        try{
            //call the validation rules
            $this->validate();

            $balance = Balance::first();
            if($balance->amount < $this->amount){
                session()->put('error-message', 'Insufficient balance');
                return redirect()->route('expenditure');
            }
            \DB::beginTransaction();
            //insert into expenses
            $expense = new Expense();
            $expense->category_id = $this->category_id;
            $expense->expense_date = $this->expense_date;
            $expense->description = $this->description;
            $expense->amount = $this->amount;
            $expense->save();

            //update my bank balance
            
            $balance->amount = $balance->amount - $this->amount;
            $balance->save();
            
            \DB::commit();

            //send email
            Mail::to('test@gmail.com')->send(new WithdrawalMail('gordon', $this->expense_date, $this->amount, $balance->amount));
            //clear the form
            $this->category_id = null;
            $this->expense_date = now()->format('Y-m-d');
            $this->description = null;
            $this->amount = null;
            session()->put('success-message', 'Expenditure saved successfully');
        }catch(\Exception $e){
            \DB::rollBack();
            session()->flash('error-message', $e->getMessage());
        }
        $this->redirect(route('expenditure'));
    }
    public function render()
    {
        return view('livewire.expenditure');
    }
}
