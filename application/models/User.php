<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

use \Illuminate\Database\Eloquent\Model;

class User extends Model {
    protected $table = "users";
}