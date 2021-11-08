<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public static function search($q){
        return Book::where('name','LIKE',"%$q%")
                    ->orWhere('category_name' , 'LIKE' , "%$q%")
                    ->paginate(10);
    }

}
