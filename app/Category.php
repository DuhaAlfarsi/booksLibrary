<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function book(){
        return $this->belongTo(Book::class);
    }
}
