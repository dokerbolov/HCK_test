<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResumeUser extends Model
{
    use HasFactory;

    protected $filltable = [
      'name',
      'surname',
      'date_of_birth',
      'email',
      'tel_number',
      'description'
    ];

}
