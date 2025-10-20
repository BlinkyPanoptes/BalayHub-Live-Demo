<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <title>Amenities & Fees - BalayHub</title>
    <meta name="description" content="Learn more information about Antares Dormitory on BalayHub.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="page-container">
        
        <header class="page-header">
            <button onclick="history.back()" class="back-btn">← Back</button>
            <h1 class="header-title">Amenities & Fees</h1>
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

            <div class="amenities-list">
                <div class="amenities-item">
                    <i class="fa fa-shower amenities-icon" aria-hidden="true"></i>
                    <div class="amenities-details">
                        <h3>Bathroom</h3>
                        <p>NOT PRIVATE</p>
                    </div>
                </div>

                <div class="amenities-item">
                    <i class="fa fa-bed amenities-icon" aria-hidden="true"></i>
                    <div class="amenities-details">
                        <h3>Bed and Mattress</h3>
                        <p>NOT INCLUDED</p>
                    </div>
                </div>

                <div class="amenities-item">
                    <i class="bi bi-cup-straw amenities-icon"></i>
                    <div class="amenities-details">
                        <h3>Kitchen</h3>
                        <p>SHARED</p>
                    </div>
                    <i class="bi bi-check-lg amenities-checkmark"></i>
                </div>

                <div class="amenities-item">
                    <i class="bi bi-basket amenities-icon"></i>
                    <div class="amenities-details">
                        <h3>Laundry Service</h3>
                        <p>PHP 200 / LOAD</p>
                    </div>
                    <i class="bi bi-check-lg amenities-checkmark"></i>
                </div>

                <div class="amenities-item">
                    <i class="bi bi-car-front amenities-icon"></i>
                    <div class="amenities-details">
                        <h3>Parking</h3>
                        <p>PARKING SPACE</p>
                    </div>
                    <i class="bi bi-check-lg amenities-checkmark"></i>
                </div>

                <div class="amenities-item">
                    <i class="bi bi-shield-exclamation amenities-icon"></i>
                    <div class="amenities-details">
                        <h3>Security</h3>
                        <p>INCLUDED</p>
                    </div>
                    <i class="bi bi-check-lg amenities-checkmark"></i>
                </div>

                <div class="amenities-item">
                    <i class="bi bi-wifi amenities-icon"></i>
                    <div class="amenities-details">
                        <h3>Wi-Fi Internet Access</h3>
                        <p>PHP 1,000 / MONTH</p>
                    </div>
                    <i class="bi bi-check-lg amenities-checkmark"></i>
                </div>
            </div>

            <div style="height: 40px;"></div>
        </div>
    </div>
</body>
</html>
