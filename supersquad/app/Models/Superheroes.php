<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Superheroes extends Model
{
   protected $fillable = [
       'hero_name',
       'secret_identity',
       'powers',
       'power_catagory',
       'origin',
   ];
}
