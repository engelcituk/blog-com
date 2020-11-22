<?php

namespace App\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class UserWasCreated
{
    use Dispatchable, SerializesModels;
    //publicas para que listener puede accederlas
    public $user;
    public $password;

    /**
     * Create a new event instance.
     * 
     * @return void
     */
    public function __construct($user, $password)
    {
        $this->user = $user;
        $this->password = $password;

    }
}
