<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    public function category()
    {
        return $this->hasOne('App\Category', 'id', 'category_id');
    }

    public function type()
    {
        return $this->hasOne('App\Type', 'id', 'type_id');
    }

    public function desk()
    {
        return $this->hasOne('App\Desk', 'id', 'desk_id');
    }

    public function location()
    {
        return $this->hasOne('App\Location', 'id', 'location_id');
    }
}
