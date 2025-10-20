<?php
$pageTitle = "Amenities & Fees";
include('header-amenities.php');
?>
<div class="content-wrapper amenities-page my-3">
    <div class="dorm-info">
        <img src="Pictures/1.png" alt="Antares Dormitory">
        <div class="dorm-details">
            <h2>Antares Dormitory</h2>
            <p>2390 C.L. Montelibano Avenue<br>Bacolod City, Philippines</p>

            <div class="rating-row">
                <p class="rating">⭐ 4.5 (20 Reviews)</p>
                <button class="contact-btn">Contact Owner</button>
            </div>
        </div>
    </div>

    <div class="amenities-list">
        <div class="item">
            <div class="item-details">
                <h2>Bathroom</h2>
                <p>NOT PRIVATE</p>
            </div>
            <i class="fa fa-shower" aria-hidden="true"></i>
        </div>

        <div class="item">
            <div class="item-details">
                <h2>Bed and Mattress</h2>
                <p>NOT INCLUDED</p>
            </div>
            <i class="fa fa-bed" aria-hidden="true"></i>
        </div>

        <div class="item">
            <div class="item-details">
                <h2>Kitchen</h2>
                <p>SHARED</p>
            </div>
            <i class="bi bi-cup-straw icon"></i>
            <i class="bi bi-check-lg checkmark"></i>
        </div>

        <div class="item">
            <div class="item-details">
                <h2>Laundry Service</h2>
                <p>PHP 200 / LOAD</p>
            </div>
            <i class="bi bi-basket icon"></i>
            <i class="bi bi-check-lg checkmark"></i>
        </div>

        <div class="item">
            <div class="item-details">
                <h2>Parking</h2>
                <p>PARKING SPACE</p>
            </div>
            <i class="bi bi-car-front icon"></i>
            <i class="bi bi-check-lg checkmark"></i>
        </div>

        <div class="item">
            <div class="item-details">
                <h2>Security</h2>
                <p>INCLUDED</p>
            </div>
            <i class="bi bi-shield-exclamation icon"></i>
            <i class="bi bi-check-lg checkmark"></i>
        </div>

        <div class="item">
            <div class="item-details">
                <h2>Wi-Fi Internet Access</h2>
                <p>PHP 1,000 / MONTH</p>
            </div>
            <i class="bi bi-wifi icon"></i>
            <i class="bi bi-check-lg checkmark"></i>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>
