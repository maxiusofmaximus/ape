<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';

    protected function title(): Attribute
    {
            return Attribute::make(
                get: function ($value){
                    return ucfirst($value);
                },
                set: function ($value){
                    return strtolower($value);

                }
            );
    }protected function content(): Attribute
    {
            return Attribute::make(
                get: function ($value){
                    return ucfirst($value);
                },
                set: function ($value){
                    return strtolower($value);

                }
            );
    }protected function categoria(): Attribute
    {
            return Attribute::make(
                get: function ($value){
                    return ucfirst($value);
                },
                set: function ($value){
                    return strtolower($value);

                }
            );
    }



}