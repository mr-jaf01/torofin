<?php

namespace App\Livewire;

use App\Models\app\wallet\walletModel;
use Livewire\Component;

class LocaltransferComponent extends Component
{

    public $recipient = '';

    public function render()
    {
        $wallets = walletModel::where('account_number', 'LIKE', '%'.$this->recipient.'%')->get();
        return view('livewire.localtransfer-component', [
            'wallets' => $wallets
        ]);
    }
}
