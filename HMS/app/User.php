<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model {
  protected $table = "User";
  protected $primaryKey = "id";
  public $keyType = 'string';
  public $timestamps = false;
}
