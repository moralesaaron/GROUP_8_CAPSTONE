<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Details</title>
    <style>
        /* Custom styles for enhanced UI */
        .hero-section {
            padding: 3rem 0;
            background-color: #f8f9fa;
            border-radius: 1rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            margin-top: 3rem;
            margin-bottom: 3rem;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        
        .hero-section:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        }
        
        .room-image-container {
            position: relative;
            overflow: hidden;
            border-radius: 0.75rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.5s ease;
        }
        
        .room-image-container:hover {
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }
        
        .room-image {
            width: 100%;
            height: auto;
            transition: transform 0.8s ease;
        }
        
        .room-image-container:hover .room-image {
            transform: scale(1.03);
        }
        
        .room-details {
            padding: 1.5rem;
            animation: fadeIn 0.6s ease-in-out;
        }
        
        .room-title {
            color: #2c3e50;
            font-weight: 700;
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 0.5rem;
        }
        
        .room-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, #3498db, #2980b9);
            animation: expandLine 0.8s ease forwards;
        }
        
        .detail-item {
            margin-bottom: 1rem;
            animation: slideInRight 0.5s ease forwards;
            opacity: 0;
            transform: translateX(20px);
        }
        
        .detail-item:nth-child(1) { animation-delay: 0.1s; }
        .detail-item:nth-child(2) { animation-delay: 0.2s; }
        .detail-item:nth-child(3) { animation-delay: 0.3s; }
        
        .price-tag {
            font-size: 1.4rem;
            font-weight: 600;
            color: #27ae60;
        }
        
        .location-tag {
            color: #7f8c8d;
            font-weight: 500;
            display: flex;
            align-items: center;
        }
        
        .location-tag i {
            margin-right: 0.5rem;
        }
        
        .description-box {
            background-color: white;
            padding: 1.5rem;
            border-radius: 0.5rem;
            margin-top: 1rem;
            border-left: 4px solid #3498db;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
            line-height: 1.6;
        }
        
        .apply-btn {
            padding: 0.8rem 2rem;
            font-weight: 600;
            border-radius: 2rem;
            background: linear-gradient(135deg, #3498db, #2980b9);
            border: none;
            color: white;
            margin-top: 1.5rem;
            position: relative;
            overflow: hidden;
            z-index: 1;
            transition: all 0.3s ease;
        }
        
        .apply-btn:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #2980b9, #3498db);
            z-index: -2;
        }
        
        .apply-btn:before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            z-index: -1;
        }
        
        .apply-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(52, 152, 219, 0.4);
        }
        
        .apply-btn:hover:before {
            width: 100%;
        }
        
        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @keyframes slideInRight {
            from { 
                opacity: 0;
                transform: translateX(20px);
            }
            to { 
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        @keyframes expandLine {
            from { width: 0; }
            to { width: 60px; }
        }
        
        @media (max-width: 768px) {
            .room-details {
                padding-top: 2rem;
            }
        }
    </style>
</head>
<body>
    <?php
    include __DIR__ . '/../partials/header.php';
    ?>
    
    <!-- main content -->
    <div class="container hero-section">
        <div class="container">
            <div class="row">
                <!-- Left Column -->
                <div class="col-md-5 text-center">
                    <div class="room-image-container">
                        <img src="<?= ROOT ?>/<?= $room->image ?? 'assets/images/default.png' ?>" class="room-image" alt="Room Image">
                    </div>
                </div>

                <!-- Right Column -->
                <div class="col-md-7">
                    <div class="room-details">
                        <h2 class="room-title"><?= htmlspecialchars($room->room_name) ?></h2>
                        
                        <div class="detail-item">
                            <p class="price-tag"><i class="fas fa-tag"></i> ₱<?= number_format($room->price) ?></p>
                        </div>
                        
                        <div class="detail-item">
                            <p class="location-tag"><i class="fas fa-map-marker-alt"></i> <?= htmlspecialchars($room->location) ?></p>
                        </div>
                        
                        <div class="detail-item">
                            <p><strong>Description:</strong></p>
                            <div class="description-box">
                                <?= nl2br(htmlspecialchars($room->description)) ?>
                            </div>
                        </div>
                        
                        <a href="<?= ROOT ?>/apply/<?= $room_id ?>" class="btn apply-btn">
                            Apply for Room
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Add Font Awesome for icons (via CDN)
        if (!document.getElementById('font-awesome-css')) {
            const fontAwesomeLink = document.createElement('link');
            fontAwesomeLink.id = 'font-awesome-css';
            fontAwesomeLink.rel = 'stylesheet';
            fontAwesomeLink.href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css';
            document.head.appendChild(fontAwesomeLink);
        }
    </script>

    <?php include __DIR__ . '/../partials/footer.php'; ?>
</body>
</html>