<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marque extends Model
{
    protected $table = 'marques';

    protected $fillable = ['nom'];
}