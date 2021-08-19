<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = ['name', 'address', 'phone', 'district', 'nid', 'photo', 'fee', 'email', 'password', 'confirm_password'];
}
