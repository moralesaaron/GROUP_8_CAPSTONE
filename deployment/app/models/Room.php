<?php

class Room extends Model
{
  protected $table = 'rooms';

  protected $allowedColumns = [
    'dorm_id',
    'room_number',
    'room_name',
    'room_type',
    'price',
    'description',
    'capacity',
    'amenities',
    'image',
    'status',
    'visibility',
    'created_at',
    'updated_at',
  ];

  public function validate($data)
  {
    $this->errors = [];

    if (empty($data['room_name'])) {
      $this->errors['room_name'] = "Room name is required.";
    }

    if (empty($data['room_type'])) {
      $this->errors['room_type'] = "Room type is required.";
    }

    if (empty($data['price']) || !is_numeric($data['price'])) {
      $this->errors['price'] = "Price must be a valid number.";
    }

    if (empty($data['capacity']) || !is_numeric($data['capacity'])) {
      $this->errors['capacity'] = "Capacity must be a number.";
    }

    if (empty($data['dorm_id'])) {
      $this->errors['dorm_id'] = "Dorm ID is required.";
    }

    return empty($this->errors);
  }

  public function getFeaturedRooms()
  {
    $result =  $this->query("SELECT * FROM rooms WHERE visibility = 'public' AND status = 'available' ORDER BY created_at DESC LIMIT 5");
    return $result ?: [];

  }

}
