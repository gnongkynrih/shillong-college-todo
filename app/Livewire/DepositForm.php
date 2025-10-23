<?php

namespace App\Livewire;

use App\Models\Income;
use App\Models\Balance;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\DepositSuccessful;

class DepositForm extends Component
{
    public $amount;
    public $deposit_date;
    
    public function rules(){
        return [
            'amount' => 'required|numeric|min:1',
            'deposit_date' => 'required|date|before_or_equal:today'
        ];
    }
    
    public function messages(){
        return [
            'amount.required' => 'Amount is required',
            'amount.numeric' => 'Amount must be a number',
            'deposit_date.required' => 'Deposit date is required',
            'deposit_date.before_or_equal' => 'Deposit date must be less than or equal to today',
        ];
    }
    public function mount(){
        //set the current date
        $this->deposit_date = now()->format('Y-m-d');
    }
    public function saveDeposit(){
        $this->validate();
        
        try{
            \DB::beginTransaction();
            // Save deposit logic will go here
            $income = Income::create([
                'amount' => $this->amount,
                'deposit_date' => $this->deposit_date,
            ]);

            $balance = Balance::first(); //get the first record
            if($balance == null){
                $balance = Balance::create([
                    'amount' => $this->amount,
                ]);
            }else{
                $balance->update([
                    'amount' => $balance->amount + $this->amount,
                ]);
            }
            \DB::commit();
            Mail::to('test@gmail.com')->send(new DepositSuccessful('Gordon', (float)$this->amount, (float)$balance->amount));
            // $user = auth()->user();
            // if($user && $user->email){
                
            // }
            session()->flash('success-message', 'Deposit saved successfully');
            

        }catch(\Exception $e){
            \DB::rollBack();
            session()->flash('error-message', 'Deposit failed');
        }
         //return to the deposit form
         return redirect()->route('deposit-form');
    }
    
    public function render()
    {
        return view('livewire.deposit-form');
    }
}
