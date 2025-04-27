<?php include "partials/header.php" ?>
<link rel="stylesheet" href="<?php ROOT ?>./assets/css/explore.css">

<body>
    <!-- Hero Section with Gradient Background -->
    <div class="hero-container">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8 hero-text animate-fade-in">
                    <!-- Hero content can be added here if needed -->
                </div>
            </div>
        </div>
    </div>

    <!-- Search Bar Section with Filters -->
    <div class="container search-section">
        <h2 class="section-title animate-slide-up">Find Location</h2>
        <div class="search-filter-container animate-fade-in">
            <!-- Search Input -->
            <div class="search-container">
                <input type="text" id="searchInput" class="search-input" placeholder="ex. Malolos, Bulacan"
                    aria-label="Search">
                <button class="search-button" id="searchButton">
                    <i class="fas fa-search"></i>
                </button>
            </div>

            <!-- Horizontal Filter Options -->
            <div class="filter-container">
                <div class="filter-group">
                    <select id="propertyType" class="filter-select">
                        <option value="all">All Properties</option>
                        <option value="room">Rooms Only</option>
                        <option value="dorm">Dorms Only</option>
                    </select>
                </div>

                <div class="filter-group">
                    <select id="priceRange" class="filter-select">
                        <option value="all">Any Price</option>
                        <option value="0-3000">₱0 - ₱3,000</option>
                        <option value="3000-5000">₱3,000 - ₱5,000</option>
                        <option value="5000-10000">₱5,000 - ₱10,000</option>
                        <option value="10000-999999">₱10,000+</option>
                    </select>
                </div>

                <div class="filter-group">
                    <select id="sortBy" class="filter-select">
                        <option value="featured">Featured</option>
                        <option value="price-low">Price: Low to High</option>
                        <option value="price-high">Price: High to Low</option>
                        <option value="newest">Newest First</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Search Results Section (initially hidden) -->
        <div id="searchResults" class="search-results-container" style="display: none;">
            <div class="section-header">
                <h2 class="section-title">Search Results</h2>
                <div class="section-line"></div>
            </div>

            <!-- Rooms Results Section -->
            <div id="roomResultsSection" class="result-section">
                <h3 class="result-category-title">Rooms</h3>
                <div class="card-scroll-container" id="roomResultsContent">
                    <!-- Room results will be dynamically loaded here -->
                </div>
            </div>

            <!-- Dorms Results Section -->
            <div id="dormResultsSection" class="result-section">
                <h3 class="result-category-title">Dorms</h3>
                <div class="card-scroll-container" id="dormResultsContent">
                    <!-- Dorm results will be dynamically loaded here -->
                </div>
            </div>

            <!-- No results message -->
            <div id="noResultsMessage" class="no-items-message" style="display: none;">
                No properties found matching your criteria.
            </div>
        </div>
    </div>

    <!-- Featured Rooms Section -->
    <div class="container section-container" id="featuredRoomsSection">
        <div class="section-header">
            <h2 class="section-title animate-slide-up">Featured Rooms</h2>
            <div class="section-line"></div>
        </div>

        <!-- Horizontal scrollable room cards -->
        <div class="card-scroll-container">
            <?php if (!empty($data['rooms'])): ?>
                <?php foreach ($data['rooms'] as $room): ?>
                    <!-- Room Card -->
                    <div class="card-item animate-pop" data-type="room" data-price="<?= $room->price ?>"
                        data-location="<?= htmlspecialchars($room->location); ?>">
                        <a href="<?= ROOT ?>/pubrooms/show/<?= $room->id ?>" class="card-link">
                            <div class="custom-card">
                                <div class="card-image-container">
                                    <img src="<?= ROOT ?>/<?= $room->image ?? '' ?>" class="card-image" alt="Room Image">
                                    <div class="card-badge">Featured</div>
                                </div>
                                <div class="card-content">
                                    <h6 class="card-title"><?= htmlspecialchars($room->room_name); ?></h6>
                                    <p class="card-price">₱<?= number_format($room->price); ?></p>
                                    <div class="card-location">
                                        <i class="fas fa-map-marker-alt location-icon"></i>
                                        <small><?= htmlspecialchars($room->location); ?></small>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="no-items-message">No featured rooms found.</p>
            <?php endif; ?>
        </div>

        <!-- View All Button -->
        <div class="view-all-container">
            <a href="<?= ROOT ?>/rooms" class="view-all-button view-rooms-button">VIEW ALL ROOMS</a>
        </div>
    </div>

    <!-- Featured Dorms Section -->
    <div class="container section-container" id="featuredDormsSection">
        <div class="section-header">
            <h2 class="section-title animate-slide-up">Featured Dorms</h2>
            <div class="section-line"></div>
        </div>

        <!-- Horizontal scrollable dorm cards -->
        <div class="card-scroll-container">
            <?php if (!empty($data['dorms'])): ?>
                <?php foreach ($data['dorms'] as $dorm): ?>
                    <!-- Dorm Card -->
                    <div class="card-item animate-pop" data-type="dorm"
                        data-location="<?= htmlspecialchars($dorm->city . ', ' . $dorm->province); ?>">
                        <a href="<?= ROOT ?>/pubdorms/show/<?= $dorm->id ?>" class="card-link">
                            <div class="custom-card">
                                <div class="card-image-container">
                                    <img src="<?= ROOT ?>/<?= $dorm->image ?? '' ?>" class="card-image" alt="Dorm Image">
                                    <div class="card-badge dorm-badge">Featured</div>
                                </div>
                                <div class="card-content">
                                    <h6 class="card-title"><?= htmlspecialchars($dorm->name); ?></h6>
                                    <div class="card-location">
                                        <i class="fas fa-map-marker-alt location-icon"></i>
                                        <small><?= htmlspecialchars($dorm->city . ', ' . $dorm->province); ?></small>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="no-items-message">No featured dorms found.</p>
            <?php endif; ?>
        </div>

        <!-- View All Button -->
        <div class="view-all-container">
            <a href="<?= ROOT ?>/dorms" class="view-all-button view-dorms-button">VIEW ALL DORMS</a>
        </div>
    </div>

    <!-- Add Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Search Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Get elements
            const searchInput = document.getElementById('searchInput');
            const searchButton = document.getElementById('searchButton');
            const searchResults = document.getElementById('searchResults');
            const roomResultsSection = document.getElementById('roomResultsSection');
            const dormResultsSection = document.getElementById('dormResultsSection');
            const roomResultsContent = document.getElementById('roomResultsContent');
            const dormResultsContent = document.getElementById('dormResultsContent');
            const noResultsMessage = document.getElementById('noResultsMessage');
            const propertyTypeFilter = document.getElementById('propertyType');
            const priceRangeFilter = document.getElementById('priceRange');
            const sortByFilter = document.getElementById('sortBy');
            const featuredRoomsSection = document.getElementById('featuredRoomsSection');
            const featuredDormsSection = document.getElementById('featuredDormsSection');

            // Get all room and dorm cards
            const allRoomCards = document.querySelectorAll('.card-item[data-type="room"]');
            const allDormCards = document.querySelectorAll('.card-item[data-type="dorm"]');

            // Function to perform search
            function performSearch() {
                const searchQuery = searchInput.value.toLowerCase().trim();
                const propertyType = propertyTypeFilter.value;
                const priceRange = priceRangeFilter.value;
                const sortBy = sortByFilter.value;

                // Clear previous results
                roomResultsContent.innerHTML = '';
                dormResultsContent.innerHTML = '';
                noResultsMessage.style.display = 'none';

                // If search query is empty and no filters are active, hide search results and show featured sections
                if (searchQuery === '' && propertyType === 'all' && priceRange === 'all' && sortBy === 'featured') {
                    searchResults.style.display = 'none';
                    featuredRoomsSection.style.display = 'block';
                    featuredDormsSection.style.display = 'block';
                    return;
                }

                // Show search results section
                searchResults.style.display = 'block';

                // Hide featured sections when showing search results
                featuredRoomsSection.style.display = 'none';
                featuredDormsSection.style.display = 'none';

                // Filter by property type and search query
                let filteredRooms = [];
                let filteredDorms = [];
                let hasResults = false;

                // Process rooms
                if (propertyType === 'all' || propertyType === 'room') {
                    allRoomCards.forEach(card => {
                        const cardLocation = card.getAttribute('data-location').toLowerCase();
                        const cardPrice = parseInt(card.getAttribute('data-price') || '0');
                        const cardTitle = card.querySelector('.card-title').textContent.toLowerCase();

                        // Check if card matches search query
                        const matchesSearch = searchQuery === '' ||
                            cardLocation.includes(searchQuery) ||
                            cardTitle.includes(searchQuery);

                        // Check if card matches price range
                        let matchesPrice = true;
                        if (priceRange !== 'all') {
                            const [minPrice, maxPrice] = priceRange.split('-').map(Number);
                            matchesPrice = cardPrice >= minPrice && cardPrice <= maxPrice;
                        }

                        if (matchesSearch && matchesPrice) {
                            filteredRooms.push({
                                element: card.cloneNode(true),
                                price: cardPrice
                            });
                        }
                    });
                }

                // Process dorms
                if (propertyType === 'all' || propertyType === 'dorm') {
                    allDormCards.forEach(card => {
                        const cardLocation = card.getAttribute('data-location').toLowerCase();
                        const cardTitle = card.querySelector('.card-title').textContent.toLowerCase();

                        // Check if card matches search query
                        const matchesSearch = searchQuery === '' ||
                            cardLocation.includes(searchQuery) ||
                            cardTitle.includes(searchQuery);

                        if (matchesSearch) {
                            filteredDorms.push({
                                element: card.cloneNode(true)
                            });
                        }
                    });
                }

                // Sort room results
                if (sortBy === 'price-low') {
                    filteredRooms.sort((a, b) => (a.price || 0) - (b.price || 0));
                } else if (sortBy === 'price-high') {
                    filteredRooms.sort((a, b) => (b.price || 0) - (a.price || 0));
                } else if (sortBy === 'newest') {
                    // Assuming newest first is the reverse of the current order
                    filteredRooms.reverse();
                }

                // Sort dorm results (if sorting criteria applies to dorms)
                if (sortBy === 'newest') {
                    filteredDorms.reverse();
                }

                // Display room results
                if (filteredRooms.length > 0) {
                    hasResults = true;
                    roomResultsSection.style.display = 'block';
                    filteredRooms.forEach(item => {
                        roomResultsContent.appendChild(item.element);
                    });
                } else {
                    roomResultsSection.style.display = propertyType === 'room' ? 'block' : 'none';
                    if (propertyType === 'room') {
                        roomResultsContent.innerHTML = '<p class="no-items-message">No rooms found matching your criteria.</p>';
                    }
                }

                // Display dorm results
                if (filteredDorms.length > 0) {
                    hasResults = true;
                    dormResultsSection.style.display = 'block';
                    filteredDorms.forEach(item => {
                        dormResultsContent.appendChild(item.element);
                    });
                } else {
                    dormResultsSection.style.display = propertyType === 'dorm' ? 'block' : 'none';
                    if (propertyType === 'dorm') {
                        dormResultsContent.innerHTML = '<p class="no-items-message">No dorms found matching your criteria.</p>';
                    }
                }

                // Show no results message if needed
                if (!hasResults) {
                    noResultsMessage.style.display = 'block';
                }

                // Conditionally hide sections based on property type
                if (propertyType === 'dorm') {
                    roomResultsSection.style.display = 'none';
                } else if (propertyType === 'room') {
                    dormResultsSection.style.display = 'none';
                }
            }

            // Event listeners
            searchButton.addEventListener('click', performSearch);
            searchInput.addEventListener('keyup', function (event) {
                if (event.key === 'Enter') {
                    performSearch();
                }
            });

            // Add event listeners to filters
            propertyTypeFilter.addEventListener('change', performSearch);
            priceRangeFilter.addEventListener('change', performSearch);
            sortByFilter.addEventListener('change', performSearch);
        });
    </script>
</body>

<?php include "partials/footer.php" ?>