<?php

class Explore extends Controller{
public function index(){

    $roomModel = new Room();
    $dormModel = new Dorm();


    $featuredRooms = $roomModel->getFeaturedRooms(); //Rooms
    $featuredDorms = $dormModel->getFeaturedDorms(); //Dorms
    
    
    $this->view('explore', ['rooms' => $featuredRooms, 'dorms' => $featuredDorms,]);


    // $this->view('explore');
    
}    

// public function featuredRooms()
// {
//     $roomModel = $this->model('Room'); // Load the Room model
//     $featuredRooms = $roomModel->getFeaturedRooms(); // Fetch featured rooms
//     $this->view('explore/featuredrooms', ['rooms' => $featuredRooms]); // Load view
// }
    
} 