<?php

class Pubdorms extends Controller
{
    public function show($id)
    {
        $roomModel = new Room();
        $dormModel = new Dorm();

        // Get the dorm using the ID
        $dorm = $dormModel->first(['id' => $id]);
        if (!$dorm) {
            $this->view('404');
            return;
        }

        // Get all rooms belonging to the selected dorm
        $featuredRooms = $roomModel->getRoomsOfDorm($dorm->id); // Pass $dorm->id here
        $featuredDorms = $dormModel->getFeaturedDorms(); // All dorms

        // Pass dorm info to the view
        $this->view('pubdorms/show', [
            'dorm' => $dorm,
            'dorm_id' => $dorm->id,  // Pass the dorm ID here
            'rooms' => $featuredRooms,
            'dorms' => $featuredDorms,
        ]);
    }
}
