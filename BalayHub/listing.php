<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Listings - BalayHub</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="page-container">
        
        <header class="page-header">
            <button onclick="history.back()" class="back-btn">← Back</button>
            <h1 class="header-title">Available Listings</h1>
        </header>

        <div class="search-container">
            <input
                id="searchInput"
                type="text"
                placeholder="Search Dormitory..."
                class="search-input">
            <svg class="search-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1110.5 3a7.5 7.5 0 016.15 13.65z" />
            </svg>
        </div>

        <div id="listings">

            <div class="listing">
                <img src="https://images.unsplash.com/photo-1555854877-bab0e564b8d5?w=200&h=150&fit=crop"
                    alt="Antares Dormitory"
                    class="listing-image">
                <div class="listing-info">
                    <h2 class="property-name">Antares Dormitory</h2>
                    <p class="property-address">2380 CL Montelibano Avenue, Bacolod City, Philippines</p>
                    <div class="property-rating">
                        <span class="listing-stars">★★★★★</span>
                        <span class="listing-rating">4.5</span>
                    </div>
                    <div class="listing-actions">
                        <a href="#" class="listing-link">View Location in Map</a>
                        <button class="contact-btn">View Property</button>
                    </div>
                </div>
            </div>

            <div class="listing">
                <img src="https://www.bing.com/th/id/OIP.3ZnwxYC1wCh7po87jHd_7gHaEc?w=242&h=211&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2"
                    alt="Jacildo Dormitory"
                    class="listing-image">
                <div class="listing-info">
                    <h2 class="property-name">Jacildo Dormitory</h2>
                    <p class="property-address">549 BS Aquino Drive, Bacolod City, Philippines</p>
                    <div class="property-rating">
                        <span class="listing-stars">★★★★☆</span>
                        <span class="listing-rating">4.0</span>
                    </div>
                    <div class="listing-actions">
                        <a href="#" class="listing-link">View Location in Map</a>
                        <button class="contact-btn">View Property</button>
                    </div>
                </div>
            </div>

            <div class="listing">
                <img src="https://images.unsplash.com/photo-1555930112-0159bcdc3fe5?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1074"
                    alt="Gateway Dormitory"
                    class="listing-image">
                <div class="listing-info">
                    <h2 class="property-name">Gateway Dormitory</h2>
                    <p class="property-address">89 CL Montelibano Avenue, Bacolod City, Philippines</p>
                    <div class="property-rating">
                        <span class="listing-stars">★★★☆☆</span>
                        <span class="listing-rating">3.5</span>
                    </div>
                    <div class="listing-actions">
                        <a href="#" class="listing-link">View Location in Map</a>
                        <button class="contact-btn">View Property</button>
                    </div>
                </div>
            </div>

            <div class="listing">
                <img src="https://images.unsplash.com/photo-1571474039046-42bc4e7f4b98?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1074"
                    alt="Vilej Dorms"
                    class="listing-image">
                <div class="listing-info">
                    <h2 class="property-name">Vilej Dorms</h2>
                    <p class="property-address">Sierra Madre St 6100 Bacolod City Western Visayas</p>
                    <div class="property-rating">
                        <span class="listing-stars">☆☆☆☆☆</span>
                        <span class="listing-rating">Not yet rated</span>
                    </div>
                    <div class="listing-actions">
                        <a href="#" class="listing-link">View Location in Map</a>
                        <button class="contact-btn">View Property</button>
                    </div>
                </div>
            </div>

            <div class="listing">
                <img src="https://www.bing.com/th?id=OLC.ycTYf%2bt1sfL1kw480x360&w=123&h=95&c=8&rs=1&qlt=90&pid=3.1&rm=2"
                    alt="Wall 21 Residences"
                    class="listing-image">
                <div class="listing-info">
                    <h2 class="property-name">Wall 21 Residences</h2>
                    <p class="property-address">Margarita Extension Libertad 6100 Bacolod City Western Visayas</p>
                    <div class="property-rating">
                        <span class="listing-stars">★★★☆☆</span>
                        <span class="listing-rating">3.5</span>
                    </div>
                    <div class="listing-actions">
                        <a href="#" class="listing-link">View Location in Map</a>
                        <button class="contact-btn">View Property</button>
                    </div>
                </div>
            </div>

        </div>

        <p style="text-align: center; font-size: 12px; color: #9ca3af; margin-top: 40px;">End of Listings</p>
    </div>

    <script>
        const searchInput = document.getElementById('searchInput');
        const listings = document.querySelectorAll('.listing');

        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            
            listings.forEach(listing => {
                const propertyName = listing.querySelector('.property-name').textContent.toLowerCase();
                const propertyAddress = listing.querySelector('.property-address').textContent.toLowerCase();
                
                if (propertyName.includes(searchTerm) || propertyAddress.includes(searchTerm)) {
                    listing.style.display = 'flex';
                } else {
                    listing.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>
