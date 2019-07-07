<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function contactImage(){
        return ($this->image) ? '/storage/'.$this->image : '/icons/default.png';
    }

    public function contactCategory(){
        return ($this->category) ? $this->category : 'None';
    }

}
