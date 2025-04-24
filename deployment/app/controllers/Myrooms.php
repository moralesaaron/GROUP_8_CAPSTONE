<?php
include_once __DIR__ . "/../helpers/form_helper.php";

class Myrooms extends Controller
{
    public function index($dorm_id)
    {
        require_dorm();

        $roomModel = new Room();
        $rooms = $roomModel->where(['dorm_id' => $dorm_id]);
       

        $this->view('rooms/index', [
            'rooms' => $rooms,
            'dorm_id' => $dorm_id,
        ]);
    }

    

    

    public function create($dorm_id)
{
    require_dorm(); // Ensure user is authenticated and authorized

    $roomModel = new Room();
    $dormModel = new Dorm();
    $errors = [];

    // ✅ Load the dorm data
    $dorm = $dormModel->first(['id' => $dorm_id]);

    // ✅ Handle form submission
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $_POST['dorm_id'] = $dorm_id;

        // ✅ Handle image upload
        $uploadDir = "assets/images/";
        if (!file_exists($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        if (!empty($_FILES['image']['name'])) {
            $imageName = basename($_FILES["image"]["name"]);
            $fileType = pathinfo($imageName, PATHINFO_EXTENSION);
            $allowedTypes = ['jpg', 'png', 'jpeg', 'gif'];

            if (in_array(strtolower($fileType), $allowedTypes)) {
                $uniqueName = time() . '_' . preg_replace('/\s+/', '_', $imageName);
                $targetPath = $uploadDir . $uniqueName;

                if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetPath)) {
                    $_POST['image'] = $targetPath;
                } else {
                    $_POST['image'] = 'assets/images/default.png';
                }
            } else {
                $_POST['image'] = 'assets/images/default.png';
            }
        } else {
            $_POST['image'] = 'assets/images/default.png';
        }

        // ✅ Process amenities (checkboxes or multi-select)
        $_POST['amenities'] = isset($_POST['amenities']) && is_array($_POST['amenities']) 
            ? json_encode($_POST['amenities']) 
            : json_encode([]);

        // ✅ Generate location from dorm info
        if ($dorm) {
            $_POST['location'] = $dorm->city . ', ' . $dorm->province;
        }

        // ✅ Validate and insert
        if ($roomModel->validate($_POST)) {
            $roomModel->insert($_POST);
            redirect('myrooms/index/' . $dorm_id);
        } else {
            $errors = $roomModel->errors;
        }
    }

    // ✅ Render the form view
    $this->view('rooms/create', [
        'errors' => $errors,
        'dorm_id' => $dorm_id,
        'dorm' => $dorm
    ]);
}



    public function edit($id)
    {
        require_dorm();

        $roomModel = new Room();
        $room = $roomModel->first(['id' => $id]);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // 🔽 Added: Encode amenities as JSON before update
            if (isset($_POST['amenities']) && is_array($_POST['amenities'])) {
                $_POST['amenities'] = json_encode($_POST['amenities']);
            } else {
                $_POST['amenities'] = json_encode([]);
            }

            $roomModel->update($id, $_POST);
            redirect('myrooms/index/' . $room->dorm_id);
        }

        $this->view('rooms/edit', ['room' => $room]);
    }

    public function delete($id)
    {
        require_dorm();

        $roomModel = new Room();
        $room = $roomModel->first(['id' => $id]);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $roomModel->delete($id);
            redirect('myrooms/index/' . $room->dorm_id);
        }

        $this->view('rooms/delete', ['room' => $room]);
    }
}
