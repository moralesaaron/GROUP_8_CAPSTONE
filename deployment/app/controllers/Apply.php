<?php

class Apply extends Controller
{
    public function index($room_id = null)
    {
        if (!Auth::logged_in()) {
            redirect('login');
        }

        if (!$room_id) {
            redirect('explore');
        }

        $errors = [];
        $application = new Application();
        $user = new User();
        $room = new Room();
        $dorm = new Dorm(); // Load dorm model

        // Get user and room data
        $user_data = $user->first(['id' => Auth::user()->id]);
        $room_data = $room->first(['id' => $room_id]);

        if (!$room_data) {
            redirect('explore');
        }

        $dorm_id = $room_data->dorm_id;
        $user_image = $user_data->id_image ?? null;

        // Fetch dorm info
        $dorm_data = $dorm->first(['id' => $dorm_id]);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'user_id' => Auth::user()->id,
                'room_id' => $room_id,
                'dorm_id' => $dorm_id,
                'status' => 'pending',
                'user_image' => $user_image,
                'applied_at' => date('Y-m-d H:i:s'),
                'expires_at' => date('Y-m-d H:i:s', strtotime("+30 days")),
                'room_name' => $room_data->room_name,
                'dorm_name' => $dorm_data->name ?? '',
                'price' => $room_data->price,
            ];

            if ($application->validate($data)) {
                $application->insert($data);
                redirect('explore');
            } else {
                $errors = $application->errors;
            }
        }

        $this->view('apply', [
            'room_id' => $room_id,
            'user_image' => $user_image,
            'errors' => $errors,
            'room_name' => $room_data->room_name,
            'dorm_name' => $dorm_data->name ?? '',
            'price' => $room_data->price,
        ]);
        
    }
}
