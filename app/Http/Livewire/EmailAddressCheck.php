<?php

namespace App\Http\Livewire;

use Livewire\Component;
use DB;

class EmailAddressCheck extends Component
{
    public $email;
    public $emailMessage = null;

    public function render()
    {
        $emailMessage = $this->emailMessage;
        return view('livewire.email-address-check',compact('emailMessage'));
    }
    public function checkEmail()
    {
        $email = DB::table('admins')
                    ->where('email',$this->email)
                    ->first();
        if(!$email){
            $this->emailMessage = $this->email.' email not found in database';
        }else{
            $this->emailMessage = null;
        }
    }
}
