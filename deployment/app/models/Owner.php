<?php

class Owner extends Model
{
  protected $table = "users"; 
  protected $allowedColumns = [
    'firstname',
    'lastname',
    'email',
    'password',
    'image',
    'role',
    'token',
    'date'
  ];

  public function validate($data)
  {
    $this->errors = [];

    if (empty($data['firstname'])) {
      $this->errors['firstname'] = 'First name is required';
    }

    if (empty($data['lastname'])) {
      $this->errors['lastname'] = 'Last name is required';
    }

    if (empty($data['email'])) {
      $this->errors['email'] = 'Email is required';
    } else if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
      $this->errors['email'] = 'Email is not valid';
    }

    if (empty($data['password'])) {
      $this->errors['password'] = 'Password is required';
    } else if (strlen($data['password']) < 6) {
      $this->errors['password'] = 'Password must be at least 6 characters long';
    }

    return empty($this->errors);
  }

  public function getUserById($id)
  {
    return $this->where(['id' => $id]);
  }
}
