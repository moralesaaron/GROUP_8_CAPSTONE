<?php

// app/models/Application.php
class Application extends Model
{
  protected $table = 'applications';

  protected $allowedColumns = [
    'user_id',
    'room_id',
    'dorm_id',
    'status',
    'applied_at',
    'expires_at',
    'paid_at',
    'user_image',
  ];

  public function validate($data)
  {
    $this->errors = [];

    // Example validation
    // if (empty($data['message'])) {
    //   $this->errors['message'] = "Message is required.";
    // }

    return empty($this->errors);
  }

  // ✅ New method to fetch applications for a dorm owner
  public function getApplicationsForOwner($owner_id)
{
    $query = "
        SELECT a.*, 
               CONCAT(u.firstname, ' ', u.middlename, ' ', u.lastname) AS full_name,
               r.room_number,
               d.name AS dorm_name,
               d.address AS dorm_address
        FROM applications a
        JOIN rooms r ON a.room_id = r.id
        JOIN dorms d ON r.dorm_id = d.id
        JOIN users u ON a.user_id = u.id
        WHERE d.user_id = :owner_id
        ORDER BY a.applied_at DESC
    ";

    return $this->query($query, ['owner_id' => $owner_id]);
}



}
