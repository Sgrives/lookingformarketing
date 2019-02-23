<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Cashier\Billable;

class Company extends Model
{
    use Billable;

    public function jobs()
    {
        return $this->hasMany('App\Job');
    }
}
