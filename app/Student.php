<?php

namespace App;
use App\Traits\Uuids;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use Uuids;
   
    protected $table = 'students';
    protected $fillable = ['first_name', 'last_name', 'email', 'password'];
    protected $hidden=['id'];
 
}
