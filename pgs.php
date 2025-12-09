<?php
require_once 'config.php';
getHeader();
?>

<div class="container">
    <h1>All Available PGs</h1>
    <p>Browse all our PG options across Ahmedabad, Mumbai, and Delhi. Use the search bar in the navbar to filter by city, type, or price.</p>
    
    <div id="all-pgs" class="listings">
        <?php foreach ($pGs as $pg): ?>
            <div class="pg-card">
                <img src="<?php echo $pg['image']; ?>" alt="<?php echo $pg['name']; ?>">
                <h4><a href="detail.php?id=<?php echo $pg['id']; ?>"><?php echo $pg['name']; ?></a></h4>
                <p><strong>City:</strong> <?php echo $pg['city']; ?></p>
                <p><strong>Address:</strong> <?php echo $pg['address']; ?></p>
                <p><strong>Price:</strong> <span class="price-tag">₹<?php echo $pg['price']; ?>/month</span></p>
                <p><strong>Type:</strong> <span class="type-tag"><?php echo $pg['type']; ?></span></p>
                <p><strong>Amenities:</strong></p>
                <ul class="amenities-list">
                    <?php 
                    $shortAmenities = array_slice($pg['amenities'], 0, 3);
                    foreach ($shortAmenities as $amenity): 
                    ?>
                        <li><?php echo $amenity; ?></li>
                    <?php endforeach; ?>
                    <?php if (count($pg['amenities']) > 3): ?>
                        <li><a href="detail.php?id=<?php echo $pg['id']; ?>">... View More</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        <?php endforeach; ?>
    </div>
    
    <div class="text-center">
        <a href="index.php" class="back-btn">Back to Home</a>
    </div>
</div>

<?php getFooter(); ?>
