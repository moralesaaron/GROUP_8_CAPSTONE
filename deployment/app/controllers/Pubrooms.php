<?php

class Room extends Model
{
    // Existing methods...

    // Get rooms of a specific dorm
    public function getRoomsOfDorm($dormId)
    {
        $query = "SELECT * FROM rooms WHERE dorm_id = ? ORDER BY featured DESC, id DESC";
        return $this->query($query, [$dormId]);
    }

    // Get featured rooms
    public function getFeaturedRooms()
    {
        $query = "SELECT * FROM rooms WHERE featured = 1 LIMIT 10";
        return $this->query($query);
    }

    // Search for rooms with filters
    public function searchRooms($searchQuery, $priceRange = 'all', $sortBy = 'featured')
    {
        $params = [];

        // Start building the query
        $query = "SELECT * FROM rooms WHERE 1=1";

        // Add search condition if search query exists
        if (!empty($searchQuery)) {
            $query .= " AND (room_name LIKE ? OR location LIKE ?)";
            $params[] = "%$searchQuery%";
            $params[] = "%$searchQuery%";
        }

        // Add price range filter
        if ($priceRange !== 'all') {
            list($minPrice, $maxPrice) = explode('-', $priceRange);
            $query .= " AND price BETWEEN ? AND ?";
            $params[] = $minPrice;
            $params[] = $maxPrice;
        }

        // Add sorting
        switch ($sortBy) {
            case 'price-low':
                $query .= " ORDER BY price ASC";
                break;
            case 'price-high':
                $query .= " ORDER BY price DESC";
                break;
            case 'newest':
                $query .= " ORDER BY created_at DESC";
                break;
            default:
                $query .= " ORDER BY featured DESC, id DESC";
                break;
        }

        return $this->query($query, $params);
    }

    // Search for rooms within a specific dorm
    public function searchRoomsInDorm($dormId, $searchQuery = '', $priceRange = 'all', $sortBy = 'featured')
    {
        $params = [$dormId];

        // Start building the query
        $query = "SELECT * FROM rooms WHERE dorm_id = ?";

        // Add search condition if search query exists
        if (!empty($searchQuery)) {
            $query .= " AND (room_name LIKE ? OR location LIKE ?)";
            $params[] = "%$searchQuery%";
            $params[] = "%$searchQuery%";
        }

        // Add price range filter
        if ($priceRange !== 'all') {
            list($minPrice, $maxPrice) = explode('-', $priceRange);
            $query .= " AND price BETWEEN ? AND ?";
            $params[] = $minPrice;
            $params[] = $maxPrice;
        }

        // Add sorting
        switch ($sortBy) {
            case 'price-low':
                $query .= " ORDER BY price ASC";
                break;
            case 'price-high':
                $query .= " ORDER BY price DESC";
                break;
            case 'newest':
                $query .= " ORDER BY created_at DESC";
                break;
            default:
                $query .= " ORDER BY featured DESC, id DESC";
                break;
        }

        return $this->query($query, $params);
    }
}