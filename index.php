<?php
require_once 'config.php';
getHeader();
// Get simple search param
$query = trim($_GET['query'] ?? '');
// Improved Filter PGs by query (better partial matching)
$filteredPGs = [];
if (empty($query)) {
    $filteredPGs = $pGs;  // Show all if no query
} else {
    $queryLower = strtolower($query);
    foreach ($pGs as $pg) {
        $nameLower = strtolower($pg['name']);
        $cityLower = strtolower($pg['city']);
        if (strpos($nameLower, $queryLower) !== false || strpos($cityLower, $queryLower) !== false) {
            $filteredPGs[] = $pg;
        }
    }
}
$isSearch = !empty($query);
?>

<div class="hero">
    <div class="container">
        <h1>Welcome to PGLife</h1>
        <p>Discover comfortable PG accommodations in Ahmedabad, Mumbai, and Delhi.</p>
        <?php if (isLoggedIn()): ?>
            <div class="success">Welcome back, <?php echo htmlspecialchars($_SESSION['user_name']); ?>!</div>
        <?php endif; ?>
        <?php if (!$isSearch): ?>
            <div class="stats">
                <p><strong>6 PGs</strong> available across <strong>3 cities</strong></p>
            </div>
            <h2>Featured PGs</h2>
            <div class="listings featured">
                <?php 
                $featured = array_slice($filteredPGs, 0, 3, true); // First 3
                foreach ($featured as $pg): 
                ?>
                    <div class="pg-card">
                        <img src="<?php echo $pg['image']; ?>" alt="<?php echo $pg['name']; ?>">
                        <h4><a href="detail.php?id=<?php echo $pg['id']; ?>"><?php echo $pg['name']; ?></a></h4>
                        <p><strong>City:</strong> <?php echo $pg['city']; ?></p>
                        <p><strong>Price:</strong> ₹<?php echo $pg['price']; ?>/month</p>
                        <span class="type-tag"><?php echo $pg['type']; ?></span>
                    </div>
                <?php endforeach; ?>
            </div>
            <a href="pgs.php" class="cta-btn">View All PGs</a>
        <?php endif; ?>
    </div>
</div>

<?php if ($isSearch): ?>
<div class="container">
    <div id="results">
        <?php if (empty($filteredPGs)): ?>
            <div class="error">No PGs found. Try adjusting your search!</div>
        <?php else: ?>
            <h2>Search Results (<?php echo count($filteredPGs); ?> found)</h2>
            <div class="listings">
                <?php foreach ($filteredPGs as $pg): ?>
                    <div class="pg-card">
                        <img src="<?php echo $pg['image']; ?>" alt="<?php echo $pg['name']; ?>">
                        <h4><a href="detail.php?id=<?php echo $pg['id']; ?>"><?php echo $pg['name']; ?></a></h4>
                        <p><strong>City:</strong> <?php echo $pg['city']; ?></p>
                        <p><strong>Address:</strong> <?php echo $pg['address']; ?></p>
                        <p><strong>Price:</strong> <span class="price-tag">₹<?php echo $pg['price']; ?>/month</span></p>
                        <p><strong>Type:</strong> <span class="type-tag"><?php echo $pg['type']; ?></span></p>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php endif; ?>

<?php getFooter(); ?>
