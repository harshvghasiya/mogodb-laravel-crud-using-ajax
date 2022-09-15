<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class User extends Model
{
    protected $collection = 'users';
}
