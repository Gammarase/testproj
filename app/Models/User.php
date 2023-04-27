<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    public $name, $email, $isregistered;

    function __construct($name = '', $email = ''){
        if($name != '' && $email != ''){
            $this->name = $name;
            $this->email = $email;
            $this->isregistered = true;
        }else{
            $this->name = null;
            $this->email = null;
            $this->isregistered = false;
        }

    }
}
