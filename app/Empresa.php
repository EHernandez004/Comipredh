<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class empresa extends Model implements AutenticableContract
{
    use Authenticatable;
    public $table ="empresas";
}
