<?php

class User extends Eloquent {
  public $timestamps = false;
  protected $table = 'users';
  protected $primaryKey = 'uid';
}
