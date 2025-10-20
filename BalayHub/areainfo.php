<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <title>Area Information - BalayHub</title>
    <meta name="description" content="Learn more information about Antares Dormitory on BalayHub.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="page-container">
        
        <header class="page-header">
            <button onclick="history.back()" class="back-btn">← Back</button>
            <h1 class="header-title">Area Information</h1>
        </header>

        <div class="content">
            <div class="property-card">
                <img src="https://images.unsplash.com/photo-1555854877-bab0e564b8d5?w=200&h=150&fit=crop" 
                     alt="Antares Dormitory" 
                     class="property-image">
                <div class="property-info">
                    <h2 class="property-name">Antares Dormitory</h2>
                    <p class="property-address">2380 C.L. Montelibano Avenue</p>
                    <p class="property-location">Bacolod City, Philippines</p>
                    <div class="property-rating">
                        <span class="star">★</span>
                        <span class="rating-text">4.5 (20 Reviews)</span>
                    </div>
                </div>
            </div>

            <div class="nearby-card">
                <i class="bi bi-plus-circle-fill nearby-icon"></i>
                <div class="nearby-content">
                    <p>Near <strong>University of St. La Salle</strong></p>
                    <p>Near <strong>Lazy Hound Cafe</strong></p>
                    <p>Near <strong>Johnny's Pizza</strong></p>
                    <p class="nearby-footer">and 10 other locations</p>
                </div>
            </div>

            <div class="nearby-actions">
                <button class="view-more-btn">View More</button>
            </div>

            <div class="map-container">
                <img src="Pictures/maps.png" alt="Map of Area" class="map-image">
                <div class="map-legend">
                    <span><i class="bi bi-geo-alt-fill text-danger"></i> Pinned Location</span>
                    <span><i class="bi bi-hospital text-primary"></i> Hospital</span>
                    <span><i class="bi bi-bag text-pink"></i> Store</span>
                    <span><i class="bi bi-mortarboard text-purple"></i> School</span>
                </div>
            </div>

            <div style="height: 40px;"></div>
        </div>
    </div>

    <script>
        document.querySelector('.view-more-btn').addEventListener('click', function() {
            alert('Showing more nearby locations:\n- SM City Bacolod\n- Robinsons Place\n- Capitol Shopping Center\n- University of Negros Occidental-Recoletos\n- And more...');
        });
    </script>
</body>
</html>
