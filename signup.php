<?php
require_once 'config.php';
getHeader();

$message = '';
$error = '';

// Handle signup form submission
if ($_POST) {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirmPassword = $_POST['confirm_password'] ?? '';
    
    if (empty($name) || empty($email) || empty($password)) {
        $error = 'Please fill all fields.';
    } elseif ($password !== $confirmPassword) {
        $error = 'Passwords do not match.';
    } elseif (strlen($password) < 6) {
        $error = 'Password must be at least 6 characters.';
    } else {
        $user = registerUser($name, $email, $password);
        if ($user) {
            // Auto-login after signup
            loginUser($user, false);
            header('Location: index.php');
            exit;
        } else {
            $error = 'Email already exists or invalid email.';
        }
    }
}
?>

<div class="container">
    <h2>Sign Up for PG Finder</h2>
    <?php if ($error): ?>
        <div class="error"><?php echo htmlspecialchars($error); ?></div>
    <?php endif; ?>
    <?php if ($message): ?>
        <div class="success"><?php echo htmlspecialchars($message); ?></div>
    <?php endif; ?>
    
    <form method="POST" class ="signup-form">
        <div>
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" minlength="6" required>
        </div>
        
        <div>
            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>
        </div>
        
        
        <button type="submit">Sign Up</button>
    </form>
    
    <p>Already have an account? <a href="login.php">Login here</a>.</p>
    
    <a href="index.php" class="back-btn">Back to Home</a>
</div>

<?php getFooter(); ?>
