<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
   protected $guarded= ['teacher_id'];
   protected $primaryKey = 'teacher_id';
}
