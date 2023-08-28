<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PaymentMethod extends Component
{

    public function addPaymentMethod($paymentMethod){
        auth()->user()->addPaymentMethod($paymentMethod);
    }

    public function deletePaymentMethod($paymentMethod){
        auth()->user()->deletePaymentMethod($paymentMethod);
    }

    public function render()
    {
        return view('livewire.payment-method', [
            'intent' => auth()->user()->createSetupIntent(),
            'PaymentMethods' => auth()->user()->PaymentMethods(),
        ]);
    }
}
