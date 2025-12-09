<?php
session_start(); // Start session on every page

// Dummy PG Data (unchanged)
$pGs = [
    1 => [
        'id' => 1,
        'name' => 'Cozy Nest PG - Ahmedabad',
        'city' => 'Ahmedabad',
        'address' => 'Near Maninagar Station, Ahmedabad',
        'price' => 8000,
        'type' => 'Boys',
        'amenities' => ['AC Rooms', 'WiFi', 'Food Included', 'Parking'],
        'image' => 'img/pg1.jpg'
    ],
    2 => [
        'id' => 2,
        'name' => 'Urban Girls PG - Ahmedabad',
        'city' => 'Ahmedabad',
        'address' => 'Vastrapur Road, Ahmedabad',
        'price' => 6500,
        'type' => 'Girls',
        'amenities' => ['WiFi', 'Laundry', 'Gym', 'Security'],
        'image' => 'img/pg2.jpg'
    ],
    3 => [
        'id' => 3,
        'name' => 'Metro Boys Hostel - Mumbai',
        'city' => 'Mumbai',
        'address' => 'Andheri East, Mumbai',
        'price' => 12000,
        'type' => 'Boys',
        'amenities' => ['AC', 'Food', 'Transport', 'Study Room'],
        'image' => 'img/pg3.jpg'
    ],
    4 => [
        'id' => 4,
        'name' => 'Elite Unisex PG - Mumbai',
        'city' => 'Mumbai',
        'address' => 'Bandra West, Mumbai',
        'price' => 15000,
        'type' => 'Unisex',
        'amenities' => ['WiFi', 'AC', 'Pool', '24/7 Security'],
        'image' => 'img/pg4.jpg'
    ],
    5 => [
        'id' => 5,
        'name' => 'Delhi Comfort PG - Delhi',
        'city' => 'Delhi',
        'address' => 'South Extension, Delhi',
        'price' => 9000,
        'type' => 'Girls',
        'amenities' => ['Food', 'WiFi', 'Laundry', 'AC'],
        'image' => 'img/pg5.jpg'
    ],
    6 => [
        'id' => 6,
        'name' => 'Prime Unisex Stay - Delhi',
        'city' => 'Delhi',
        'address' => 'Rohini Sector, Delhi',
        'price' => 11000,
        'type' => 'Unisex',
        'amenities' => ['Parking', 'Gym', 'Study Area', 'Security'],
        'image' => 'img/pg6.jpg'
    ],
    7 => [
        'id' => 7,
        'name' => 'Sunny Unisex PG - Ahmedabad',
        'city' => 'Ahmedabad',
        'address' => 'Navrangpura Area, Ahmedabad',
        'price' => 9500,
        'type' => 'Unisex',
        'amenities' => ['High-Speed WiFi', 'AC', 'Meal Plans', 'Laundry Service', 'CCTV'],
        'image' => 'img/pg1.jpg'  // Add this file; fallback: 'https://via.placeholder.com/300x200?text=PG+7'
    ],
    8 => [
        'id' => 8,
        'name' => 'Bliss Girls Haven - Mumbai',
        'city' => 'Mumbai',
        'address' => 'Dadar Central, Mumbai',
        'price' => 14000,
        'type' => 'Girls',
        'amenities' => ['WiFi', 'AC Rooms', 'Gym Access', 'Food Delivery', 'Study Lounge'],
        'image' => 'img/pg2.jpg'  // Add this file; fallback: 'https://via.placeholder.com/300x200?text=PG+8'
    ],
    9 => [
        'id' => 9,
        'name' => 'Vibrant Unisex Hub - Mumbai',
        'city' => 'Mumbai',
        'address' => 'Lower Parel, Mumbai',
        'price' => 17000,
        'type' => 'Unisex',
        'amenities' => ['Rooftop Terrace', 'WiFi', 'AC', 'Parking', '24/7 Power Backup'],
        'image' => 'img/pg3.jpg'  // Add this file; fallback: 'https://via.placeholder.com/300x200?text=PG+9'
    ],
    10 => [
        'id' => 10,
        'name' => 'Elite Boys Lodge - Delhi',
        'city' => 'Delhi',
        'address' => 'Karol Bagh, Delhi',
        'price' => 7500,
        'type' => 'Boys',
        'amenities' => ['WiFi', 'Food Included', 'Laundry', 'Gaming Zone', 'Security'],
        'image' => 'img/pg4.jpg'  // Add this file; fallback: 'https://via.placeholder.com/300x200?text=PG+10'
    ],
     11 => [
        'id' => 11,
        'name' => 'Graceful Girls PG - Delhi',
        'city' => 'Delhi',
        'address' => 'Lajpat Nagar, Delhi',
        'price' => 10500,
        'type' => 'Girls',
        'amenities' => ['AC', 'WiFi', 'Spa Area', 'Meal Options', 'Transport'],
        'image' => 'img/pg5.jpg'  // Add this file; fallback: 'https://via.placeholder.com/300x200?text=PG+11'
    ],
    12 => [
        'id' => 12,
        'name' => 'Harmony Unisex Retreat - Ahmedabad',
        'city' => 'Ahmedabad',
        'address' => 'Satellite Area, Ahmedabad',
        'price' => 12000,
        'type' => 'Girls',
        'amenities' => ['AC', 'WiFi', 'Spa Area', 'Meal Options', 'Transport'],
        'image' => 'img/pg6.jpg'  // Add this file; fallback: 'https://via.placeholder.com/300x200?text=PG+11'
    ],
    13 => [
        'id' => 13,
        'name' => 'sleep Nest PG - Ahmedabad',
        'city' => 'Ahmedabad',
        'address' => 'Near Maninagar Station, Ahmedabad',
        'price' => 8000,
        'type' => 'Boys',
        'amenities' => ['AC Rooms', 'WiFi', 'Food Included', 'Parking'],
        'image' => 'img/pg1.jpg'
    ],
     14 => [
        'id' => 14,
        'name' => 'sleep Nest PG - Ahmedabad',
        'city' => 'Ahmedabad',
        'address' => 'Near Maninagar Station, Ahmedabad',
        'price' => 8000,
        'type' => 'Boys',
        'amenities' => ['AC Rooms', 'WiFi', 'Food Included', 'Parking'],
        'image' => 'img/pg1.jpg'
    ],
];

// User Management Functions (unchanged from before)
$usersFile = 'users.json';

if (!file_exists($usersFile)) {
    $initialUsers = [
        'admin@example.com' => [
            'name' => 'Admin User',
            'password' => password_hash('admin123', PASSWORD_DEFAULT),
            'id' => 1
        ]
    ];
    file_put_contents($usersFile, json_encode($initialUsers));
}

function getUsers() {
    global $usersFile;
    $json = file_get_contents($usersFile);
    return json_decode($json, true) ?: [];
}

function saveUsers($users) {
    global $usersFile;
    file_put_contents($usersFile, json_encode($users));
}

function authenticateUser($email, $password) {
    $users = getUsers();
    if (isset($users[$email]) && password_verify($password, $users[$email]['password'])) {
        return $users[$email];
    }
    return false;
}

function registerUser($name, $email, $password) {
    $users = getUsers();
    if (isset($users[$email])) {
        return false;
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    }
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $userId = count($users) + 1;
    $users[$email] = [
        'name' => $name,
        'password' => $hashedPassword,
        'id' => $userId
    ];
    saveUsers($users);
    return $users[$email];
}

function isLoggedIn() {
    if (isset($_SESSION['user_id'])) {
        return true;
    }
    if (isset($_COOKIE['remember_token'])) {
        $token = $_COOKIE['remember_token'];
        $users = getUsers();
        foreach ($users as $email => $user) {
            $salt = 'demo_salt';
            if (hash('sha256', $user['id'] . $salt) === $token) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_name'] = $user['name'];
                $_SESSION['user_email'] = $email;
                return true;
            }
        }
    }
    return false;
}

function loginUser($user, $remember = false) {
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['user_name'] = $user['name'];
    $email = array_search($user, getUsers());
    $_SESSION['user_email'] = $email;
    if ($remember) {
        $salt = 'demo_salt';
        $token = hash('sha256', $user['id'] . $salt);
        setcookie('remember_token', $token, time() + (30 * 24 * 60 * 60), '/', '', false, true);
    }
}

function logoutUser() {
    session_destroy();
    if (isset($_COOKIE['remember_token'])) {
        setcookie('remember_token', '', time() - 3600, '/');
    }
}

// PG Filter Function (unchanged)
function filterPGs($pGs, $city = '', $minPrice = 0, $maxPrice = 999999, $type = '') {
    $filtered = [];
    foreach ($pGs as $pg) {
        if (($city === '' || $pg['city'] === $city) &&
            $pg['price'] >= $minPrice &&
            $pg['price'] <= $maxPrice &&
            ($type === '' || $pg['type'] === $type)) {
            $filtered[] = $pg;
        }
    }
    return $filtered;
}

// Updated Header with New Navbar (includes search form)
function getHeader() {
    $isLoggedIn = isLoggedIn();
    $userName = $isLoggedIn ? $_SESSION['user_name'] : '';
    $currentQuery = $_GET['query'] ?? '';  // Preserve query from URL
    echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PG Finder - Find PGs in Ahmedabad, Mumbai, Delhi</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <nav class="navbar">
            <div class="nav-container">
                <a href="index.php" class="nav-logo">
                    <img src="img/logo.png" alt="pg logo" width ="130px">
                </a>
                
                <!-- Fixed Search Bar (Input + Button with Persistence) -->
                <form id="searchForm" method="GET" action="index.php" class="search-bar">
                    <input type="text" name="query" placeholder="Search PGs by name or city (e.g., Mumbai, Cozy)..." class="search-input" value="' . htmlspecialchars($currentQuery) . '">
                    <button type="submit" class="search-btn" title="Search">
                        <span class="search-icon">
                            <img src="img/search.png" alt="search-icon" width="30px">
                        </span> 
                    </button>
                </form>
                
                <!-- Nav Links -->
                <div class="nav-links">
                    <a href="index.php">Home</a>
                    <a href="pgs.php">PGs</a>
                    ' . ($isLoggedIn ? '<span class="user-welcome">Welcome, ' . htmlspecialchars($userName) . '</span><a href="logout.php">Logout</a>' : '<a href="login.php">Login</a> <a href="signup.php">Signup</a>') . '
                </div>
            </div>
        </nav>
        <main>';
}

// Footer (unchanged)
function getFooter() {
    echo '
        </main>
        <footer>
            <p>&copy; 2025 PGLife. All credites reserved</p>
        </footer>
        <script src="script.js"></script>
    </body>
    </html>';
}
?>
