<?php

class Pubrooms extends Controller
{
    public function show($id)
    {
        $roomModel = new Room();
        $room = $roomModel->first(['id' => $id]);

        if (!$room) {
            $this->view('404');
            return;
        }

        $this->view('pubrooms/show', [
            'room' => $room,
            'room_id' => $room->id
        ]);
    }
}
