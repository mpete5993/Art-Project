<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    
    //post comment relationship
    public function post()
    {
        # code...
        return  $this->belongsTo('App\Models\Post');
    }

    public function user()
    {
        # code...
        return  $this->belongsTo('App\Models\User');
    }
}
