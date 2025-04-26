<?php include __DIR__ . '/../partials/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dorm Details</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #3f51b5;
            --secondary-color: #ff4081;
            --light-bg: #f8f9fa;
            --dark-text: #333;
            --light-text: #6c757d;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--light-bg);
            color: var(--dark-text);
        }
        
        .hero-section {
            padding: 2rem 0;
            background: linear-gradient(to right, #ffffff, #f0f2ff);
            border-radius: 0.5rem;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            margin-top: 2rem;
            margin-bottom: 2rem;
        }
        
        .dorm-info {
            padding: 1.5rem;
            border-radius: 0.5rem;
            background-color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            position: relative;
            padding-bottom: 1.7rem;
        }
        
        .dorm-name {
            color: var(--primary-color);
            font-weight: 600;
            margin-bottom: 1rem;
            position: relative;
            padding-bottom: 0.5rem;
        }
        
        .dorm-name::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background-color: var(--secondary-color);
        }
        
        .info-label {
            font-weight: 600;
            color: var(--primary-color);
        }
        
        .rooms-section {
            padding: 1.5rem;
            border-radius: 0.5rem;
            background-color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }
        
        .section-title {
            color: var(--primary-color);
            font-weight: 600;
            margin-bottom: 1.5rem;
            text-align: left;
        }
        
        .room-slider {
            position: relative;
            padding: 10px 0;
        }
        
        .room-card {
            border-radius: 0.75rem;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            margin: 10px;
            border: none;
            background: white;
            position: relative;
            padding-bottom: 0.25rem;
        }
        
        .room-img-container {
            overflow: hidden;
            height: 180px;
        }
        
        .room-img {
            height: 180px;
            width: 100%;
            object-fit: cover;
        }
        
        .room-name {
            font-weight: 600;
            font-size: 1rem;
            margin-bottom: 0.25rem;
            color: var(--dark-text);
        }
        
        .room-price {
            color: var(--secondary-color);
            font-weight: 700;
            font-size: 1.1rem;
        }
        
        .room-location {
            color: var(--light-text);
            font-size: 0.85rem;
        }
        
        .scroll-container {
            position: relative;
            scroll-behavior: smooth;
        }
        
        .scroll-button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: white;
            box-shadow: 0 2px 5px rgba(0,0,0,0.15);
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 10;
            cursor: pointer;
        }
        
        .scroll-left {
            left: -15px;
        }
        
        .scroll-right {
            right: -15px;
        }
        
        .no-rooms {
            padding: 2rem;
            text-align: center;
            color: var(--light-text);
            background: rgba(0,0,0,0.02);
            border-radius: 0.5rem;
        }
        
        /* Custom scrollbar */
        .custom-scrollbar::-webkit-scrollbar {
            height: 6px;
        }
        
        .custom-scrollbar::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }
        
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #ccc;
            border-radius: 10px;
        }
        
        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: #aaa;
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .dorm-info, .rooms-section {
                margin-bottom: 1.5rem;
            }
            
            .room-card {
                max-width: 250px;
            }
        }
        
        .orange-footer {
            background-color: #ff9800;
            height: 8px;
            width: 100%;
            margin-top: 2rem;
        }
    </style>
</head>

<body>
    <!-- Main content -->
    <div class="container">
        <div class="hero-section">
            <div class="container">
                <div class="row">
                    <!-- Dorm Info Section -->
                    <div class="col-lg-5 mb-4">
                        <div class="dorm-info">
                            <h2 class="dorm-name"><?= htmlspecialchars($dorm->name) ?></h2>
                            
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-map-marker-alt me-2" style="color: var(--secondary-color);"></i>
                                <p class="mb-0"><span class="info-label">Location:</span> <?= htmlspecialchars($dorm->city) ?>, <?= htmlspecialchars($dorm->province) ?></p>
                            </div>
                            
                            <div>
                                <p class="info-label mb-2">Description:</p>
                                <div class="p-3 bg-light rounded">
                                    <?= nl2br(htmlspecialchars($dorm->description)) ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Available Rooms Section -->
                    <div class="col-lg-7">
                        <div class="rooms-section">
                            <h3 class="section-title">
                                <i class="fas fa-bed me-2" style="color: var(--secondary-color);"></i>
                                Available Rooms
                            </h3>

                            <!-- Available Rooms for this dorm -->
                            <div class="room-slider">
                                <h4 class="mb-3">Featured Rooms</h4>

                                <!-- Scroll controls -->
                                <div class="position-relative">
                                    <button class="scroll-button scroll-left" id="scrollLeft">
                                        <i class="fas fa-chevron-left"></i>
                                    </button>
                                    
                                    <!-- Horizontal scrollable room cards -->
                                    <div class="scroll-container">
                                        <div class="row flex-nowrap overflow-auto custom-scrollbar" id="roomsContainer" style="scroll-snap-type: x mandatory; padding: 10px 5px;">
                                            <?php if (!empty($rooms)): ?>
                                                <?php foreach($rooms as $room): ?>
                                                    <!-- Room Card -->
                                                    <div class="col-10 col-sm-6 col-md-4 col-lg-3" style="scroll-snap-align: start; min-width: 250px;">
                                                        <a href="<?= ROOT ?>/pubrooms/show/<?= $room->id ?>" class="text-decoration-none">
                                                            <div class="room-card">
                                                                <div class="room-img-container">
                                                                    <img src="<?= ROOT ?>/<?= $room->image ?? 'assets/images/no-image.jpg' ?>" 
                                                                         class="card-img-top room-img" 
                                                                         alt="Room Image">
                                                                </div>
                                                                <div class="card-body p-3">
                                                                    <h6 class="room-name"><?= htmlspecialchars($room->room_name); ?></h6>
                                                                    <p class="room-price mb-1">₱<?= number_format($room->price); ?></p>
                                                                    <div class="d-flex align-items-center">
                                                                        <i class="fas fa-location-dot me-1" style="font-size: 0.8rem; color: var(--light-text);"></i>
                                                                        <span class="room-location"><?= htmlspecialchars($room->location); ?></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                <?php endforeach; ?>
                                            <?php else: ?>
                                                <div class="col-12">
                                                    <div class="no-rooms">
                                                        <i class="fas fa-bed mb-3" style="font-size: 2rem; color: var(--light-text);"></i>
                                                        <p class="mb-0">No active rooms found for this dorm.</p>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    
                                    <button class="scroll-button scroll-right" id="scrollRight">
                                        <i class="fas fa-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div> <!-- End Available Rooms Section -->
                </div>
            </div>
        </div>
    </div>

    <div class="orange-footer"></div>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Scroll functionality for room cards
            const scrollContainer = document.getElementById('roomsContainer');
            const scrollLeftBtn = document.getElementById('scrollLeft');
            const scrollRightBtn = document.getElementById('scrollRight');
            
            if (scrollContainer && scrollLeftBtn && scrollRightBtn) {
                // Get width of a single card plus margin
                const cardWidth = 270; // Estimated width of card plus margins
                
                scrollLeftBtn.addEventListener('click', function() {
                    scrollContainer.scrollBy({ left: -cardWidth * 2, behavior: 'smooth' });
                });
                
                scrollRightBtn.addEventListener('click', function() {
                    scrollContainer.scrollBy({ left: cardWidth * 2, behavior: 'smooth' });
                });
            }
        });
    </script>
</body>
</html>

<?php include __DIR__ . '/../partials/footer.php'; ?>