<?php

class Explore extends Controller
{
    public function index()
    {
        $roomModel = new Room();
        $dormModel = new Dorm();

        $featuredRooms = $roomModel->getFeaturedRooms(); // Rooms
        $featuredDorms = $dormModel->getFeaturedDorms(); // Dorms

        $this->view('explore', [
            'rooms' => $featuredRooms,
            'dorms' => $featuredDorms,
        ]);
    }

    // Add a search method to handle AJAX search requests
    public function search()
    {
        // Check if it's an AJAX request
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $searchQuery = $_POST['query'] ?? '';
            $propertyType = $_POST['propertyType'] ?? 'all';
            $priceRange = $_POST['priceRange'] ?? 'all';
            $sortBy = $_POST['sortBy'] ?? 'featured';

            $roomModel = new Room();
            $dormModel = new Dorm();

            $results = [
                'rooms' => [],
                'dorms' => []
            ];

            // Get rooms if needed
            if ($propertyType === 'all' || $propertyType === 'room') {
                $rooms = $roomModel->searchRooms($searchQuery, $priceRange, $sortBy);
                $results['rooms'] = $rooms;
            }

            // Get dorms if needed
            if ($propertyType === 'all' || $propertyType === 'dorm') {
                $dorms = $dormModel->searchDorms($searchQuery, $sortBy);
                $results['dorms'] = $dorms;
            }

            // Return JSON response
            header('Content-Type: application/json');
            echo json_encode($results);
            exit;
        }

        // If not an AJAX request, redirect to index
        header('Location: ' . ROOT . '/explore');
        exit;
    }
}