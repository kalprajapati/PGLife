<?php
require_once 'config.php';
getHeader();

$message = '';
$error = '';

// Handle login form submission
if ($_POST) {
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $remember = isset($_POST['remember']);
    
    if (empty($email) || empty($password)) {
        $error = 'Please fill all fields.';
    } else {
        $user = authenticateUser($email, $password);
        if ($user) {
            loginUser($user, $remember);
            header('Location: index.php');
            exit;
        } else {
            $error = 'Invalid email or password.';
        }
    }
}
?>

<div class="container">
    <h2>Login to PG Finder</h2>
    <?php if ($error): ?>
        <div class="error"><?php echo htmlspecialchars($error); ?></div>
    <?php endif; ?>
    
    <form method="POST" class ="login-form">
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        
        <label>
            <input type="checkbox" name="remember" value="1"> Remember me
        </label>
        
        <button type="submit">Login</button>
        <p>Don't have an account? <a href="signup.php">Sign up here</a>.</p>
    </form>
    
    
    
    
    <a href="index.php" class="back-btn">Back to Home</a>
</div>

<?php getFooter(); ?>
