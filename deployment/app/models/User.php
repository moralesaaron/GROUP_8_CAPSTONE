<?php

class User extends Model
{
  protected $table = "users";
  protected $allowedColumns = [
    'firstname',
    'middlename',
    'lastname',
    'address',
    'contact',
    'gender',
    'email',
    'password',
    'image',
    'id_image',
    'role',
    'token',
    'currentroom',
    'topay',
    'appstatus',
    'is_verified',
    'date'
  ];



  public function validate($data)
  {
    $this->errors = [];

    if (empty($data['firstname'])) {
      $this->errors['firstname'] = 'First name is required';
    }

    if (empty($data['middlename'])) {
      // Optional: You could make this required if needed.
      $data['middlename'] = ''; // Default to empty string
    }

    if (empty($data['lastname'])) {
      $this->errors['lastname'] = 'Last name is required';
    }

    // if (empty($data['address'])) {
    //   $this->errors['address'] = 'Address is required';
    // }

    // if (empty($data['contact'])) {
    //   $this->errors['contact'] = 'Contact number is required';
    // } else if (!preg_match('/^[0-9\-\+\s\(\)]+$/', $data['contact'])) {
    //   $this->errors['contact'] = 'Contact number is not valid';
    // }

    // if (empty($data['gender'])) {
    //   $this->errors['gender'] = 'Gender is required';
    // }

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

    // ID image path is set only if upload succeeds
    if (isset($data['id_image']) && empty($data['id_image'])) {
      $this->errors['id_image'] = 'ID image upload failed or missing.';
    }

    return empty($this->errors);
  }


  public function getUserById($id)
  {
    return $this->where(['id' => $id]);
  }
}
