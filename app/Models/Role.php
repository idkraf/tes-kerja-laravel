<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App;

class Role extends Model
{
    protected $with = ['role_translations'];
}
