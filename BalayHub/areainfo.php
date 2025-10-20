<?php
$pageTitle = "BalayHub";
include('header-areainfo.php');
?>
<div class="content-wrapper areainfo-page my-3">

    <!-- Dorm Info -->
    <div class="dorm-info">
        <img src="Pictures/1.png" alt="Antares Dormitory">
        <div class="dorm-details">
            <h2>Antares Dormitory</h2>
            <p>2380 C.L. Montelibano Avenue<br>Bacolod City, Philippines</p>

            <div class="rating-row">
                <p class="rating">⭐ 4.5 (20 Reviews)</p>
            </div>
        </div>
    </div>

    <!-- Nearby Locations -->
    <div class="nearby-card shadow-sm">
        <div class="d-flex align-items-start gap-2">
            <i class="bi bi-plus-circle-fill text-warning fs-4"></i>
            <div>
                <p class="mb-1">Near <strong>University of St. La Salle</strong></p>
                <p class="mb-1">Near <strong>Lazy Hound Cafe</strong></p>
                <p class="mb-2">Near <strong>Johnny’s Pizza</strong></p>
                <p class="mb-0 text-muted small">and 10 other locations</p>
            </div>
        </div>
        <button class="view-more-btn">View More</button>
    </div>

    <!-- Map Section -->
    <div class="map-container mt-3">
        <img src="Pictures/maps.png" alt="Map of Area" class="map-image">
        <div class="map-legend">
            <span><i class="bi bi-geo-alt-fill text-danger"></i> Pinned Location</span>
            <span><i class="bi bi-hospital text-primary"></i> Hospital</span>
            <span><i class="bi bi-bag text-pink"></i> Store</span>
            <span><i class="bi bi-mortarboard text-purple"></i> School</span>
        </div>
    </div>

</div>
<?php include('footer.php'); ?>