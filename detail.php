<?php
require_once 'config.php';
getHeader();

$id = intval($_GET['id'] ?? 0);
$pg = $pGs[$id] ?? null;

if (!$pg) {
    echo '<div class="container"><p>PG not found.</p></div>';
    getFooter();
    exit;
}

$isLoggedIn = isLoggedIn();

// Handle dummy booking form submission (only if logged in)
$message = '';
if ($_POST && $isLoggedIn) {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    if ($name && $email && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = '<div class="success">Booking request sent for ' . $pg['name'] . ' by ' . $_SESSION['user_name'] . '! (Demo only)</div>';
    } else {
        $message = '<div class="error">Please fill valid details.</div>';
    }
} elseif ($_POST && !$isLoggedIn) {
    $message = '<div class="error">Please login to book.</div>';
}
?>

<div class="container">
    <h2><?php echo $pg['name']; ?></h2>
    <?php echo $message; ?>
    
    <div class="pg-detail">
        <img src="<?php echo $pg['image']; ?>" alt="<?php echo $pg['name']; ?>">
        <div class="info">
            <p><strong>City:</strong> <?php echo $pg['city']; ?></p>
            <p><strong>Address:</strong> <?php echo $pg['address']; ?></p>
            <p><strong>Price:</strong> ₹<?php echo $pg['price']; ?>/month</p>
            <p><strong>Type:</strong> <?php echo $pg['type']; ?></p>
            <p><strong>Amenities:</strong></p>
            <ul>
                <?php foreach ($pg['amenities'] as $amenity): ?>
                    <li><?php echo $amenity; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    
    <!-- Dummy Booking Form (Login Required) -->
    <h3>Book Now (Demo - Login Required)</h3>
    <?php if (!$isLoggedIn): ?>
        <div class="error">You must <a href="login.php">login</a> to submit a booking request.</div>
    <?php else: ?>
        <form method="POST" id="bookingForm">
            <p>Logged in as: <?php echo htmlspecialchars($_SESSION['user_name']); ?></p>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($_SESSION['user_name']); ?>" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($_SESSION['user_email']); ?>" required>
            
            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone">
            
            <button type="submit">Submit Booking Request</button>
        </form>
    <?php endif; ?>
    
    <a href="index.php" class="back-btn">Back to Search</a>
</div>

<?php getFooter(); ?>
