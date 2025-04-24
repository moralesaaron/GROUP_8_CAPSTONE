<?php

class Mydorms extends Controller
{
  
  public function index()
  {
    
    if (!isset($_SESSION['USER']) || $_SESSION['USER']->role !== 'dorm') {
      redirect('login');
    }

    $dormModel = new Dorm();

    $userId = $_SESSION['USER']->id;
    $data['dorms'] = $dormModel->where(['user_id' => $userId]);

    $this->view('dorms/index', $data);
  }

  public function create()
{
  if (!isset($_SESSION['USER']) || $_SESSION['USER']->role !== 'dorm') {
    redirect('login');
  }

  $errors = [];
  $dorm = new Dorm();

  // Define the upload folder
  $folder = "assets/images/";
  if (!file_exists($folder)) {
    mkdir($folder, 0777, true);
  }

  // Handle image upload
  if (!empty($_FILES['image']['name'])) {
    $imageName = basename($_FILES["image"]["name"]);
    $fileType = pathinfo($imageName, PATHINFO_EXTENSION);
    $allowedTypes = ['jpg', 'png', 'jpeg', 'gif'];

    if (in_array(strtolower($fileType), $allowedTypes)) {
      // Create unique filename
      $uniqueName = time() . '_' . preg_replace('/\s+/', '_', $imageName);
      $targetFilePath = $folder . $uniqueName;

      if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
        $_POST['image'] = $targetFilePath; // Save full relative path
      } else {
        $_POST['image'] = 'assets/images/default.png'; // fallback on error
      }
    } else {
      $_POST['image'] = 'assets/images/default.png'; // fallback if invalid format
    }
  } else {
    $_POST['image'] = 'assets/images/default.png'; // fallback if no image uploaded
  }

  // Handle form submission
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_POST['user_id'] = $_SESSION['USER']->id;

    if ($dorm->validate($_POST)) {
      $dorm->insert($_POST);
      redirect('mydorms');
    } else {
      $errors = $dorm->errors;
    }
  }

  $this->view('dorms/create', ['errors' => $errors]);
}


  public function edit($id)
  {
    require_dorm(); // you can define this function like your `require_admin()`

    $dorm = new Dorm();
    $row = $dorm->first(['id' => $id]);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $dorm->update($id, $_POST);
      redirect('mydorms');
    }

    $this->view('dorms/edit', ['dorm' => $row]);
  }

  public function delete($id)
  {
    require_dorm();

    $dorm = new Dorm();
    $row = $dorm->first(['id' => $id]);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $dorm->delete($id);
      redirect('mydorms');
    }

    $this->view('dorms/delete', ['dorm' => $row]);
  }

  public function viewdorm($id)
{
    if (!isset($_SESSION['USER']) || $_SESSION['USER']->role !== 'dorm') {
        redirect('login');
    }

    $dormModel = new Dorm();
    $roomModel = new Room(); // Make sure you have a Room model

    $userId = $_SESSION['USER']->id;

    // Get the dorm for this user
    $dorm = $dormModel->first(['id' => $id, 'user_id' => $userId]);

    if (!$dorm) {
        // $this->view('errors/404', ['message' => 'Dorm not found or access denied.']);
        // return;
    }

    // Get rooms belonging to this dorm
    $rooms = $roomModel->where(['dorm_id' => $id]);

    $this->view('dorms/view', [
        'dorm' => $dorm,
        'rooms' => $rooms,
    ]);
}


}
