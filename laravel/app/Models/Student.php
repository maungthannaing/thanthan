<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;


    //forigen key   
     //cate 
     public function subject()
     {
         return $this->belongsTo(subject::class);
     }

    //att 
     public function att()
     {
         return $this->belongsTo(att::class);
     }

     //department 
     public function department()
     {
         return $this->belongsTo(department::class);
     }

}
