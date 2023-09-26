<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;



    public function user()
    {
        // Una pubicacion pertence a un unico usuario
        return $this->belongsTo(User::class);

    }
}
