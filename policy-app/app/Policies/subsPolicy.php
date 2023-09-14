<?php

namespace App\Policies;

use App\Models\User;

class subsPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }
    public function subs_only($user){
        return $user->subs==1;
    }
}
