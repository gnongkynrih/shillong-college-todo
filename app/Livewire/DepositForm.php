<?php

namespace App\Livewire;

use Livewire\Component;

class DepositForm extends Component
{
    public $amount;
    public $deposit_date;
    
    public function rules(){
        return [
            'amount' => 'required|numeric|min:1',
            'deposit_date' => 'required|date|lte:today'
        ];
    }
    
    public function messages(){
        return [
            'amount.required' => 'Amount is required',
            'amount.numeric' => 'Amount must be a number',
            'deposit_date.required' => 'Deposit date is required',
            'deposit_date.lte' => 'Deposit date must be less than or equal to today',
        ];
    }
    public function mount(){
        //set the current date
        $this->deposit_date = now()->format('Y-m-d');
    }
    public function saveDeposit(){
        $this->validate();
        
        // Save deposit logic will go here
        
        $this->reset(['amount', 'deposit_date']);
    }
    
    public function render()
    {
        return view('livewire.deposit-form');
    }
}
