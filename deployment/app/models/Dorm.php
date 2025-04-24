<?php

class Dorm extends Model
{
  protected $table = 'dorms';

  protected $allowedColumns = [
    'user_id',
    'name',
    'address',
    'city',
    'province',
    'description',
    'total_rooms',
    'available_rooms',
    'image',
    'status',
    'created_at',
    'updated_at',
  ];

  public function validate($data)
  {
    $this->errors = [];

    if (empty($data['name'])) {
      $this->errors['name'] = "Dorm name is required.";
    }

    if (empty($data['address'])) {
      $this->errors['address'] = "Address is required.";
    }

    if (empty($data['city'])) {
      $this->errors['city'] = "City is required.";
    }

    if (empty($data['province'])) {
      $this->errors['province'] = "Province is required.";
    }

    if (!isset($data['total_rooms']) || !is_numeric($data['total_rooms']) || $data['total_rooms'] < 0) {
      $this->errors['total_rooms'] = "Total rooms must be a positive number.";
    }

    if (!isset($data['available_rooms']) || !is_numeric($data['available_rooms']) || $data['available_rooms'] < 0) {
      $this->errors['available_rooms'] = "Available rooms must be a positive number.";
    }

    if ($data['available_r ooms'] > $data['total_rooms']) {
      $this->errors['available_rooms'] = "Available rooms cannot exceed total rooms.";
    }

    if (empty($data['description'])) {
      $this->errors['description'] = "Description is required.";
    }

    // Optional: check for image or status, depending on your needs

    return empty($this->errors);
  }  

  public function getFeaturedDorms() {
    $result = $this->query("SELECT * FROM dorms WHERE status = 'active' LIMIT 5");
    return $result ?: [];
}
}
