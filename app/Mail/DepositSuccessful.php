<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DepositSuccessful extends Mailable
{
    use Queueable, SerializesModels;

    public string $user;
    public float $amount;
    public float $balance;

    /**
     * Create a new message instance.
     */
    public function __construct( $user, float $amount, float $balance)
    {
        $this->user = $user;
        $this->amount = $amount;
        $this->balance = $balance;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('Deposit Successful')
            ->view('emails.deposit-successful')
            ->with([
                'user' => $this->user,
                'amount' => $this->amount,
                'balance' => $this->balance,
            ]);
    }
}
