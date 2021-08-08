<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;



class Student extends Model
{
    use HasFactory, Notifiable;


    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}
