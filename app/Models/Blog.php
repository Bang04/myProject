<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //방법1
    // protected $fillable =[
    //     'user_id', 'title', 'description'
    // ];

    //방법2
    protected $guarded =[];
}
