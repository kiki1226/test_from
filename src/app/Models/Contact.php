<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
         'first_name',
         'last_name',
         'gender',
         'email',
         'tel_area',
         'tel_local',
         'tel_number',
         'address',
         'bilding',
         'inquiry_type',
         'content'
     ];
}
