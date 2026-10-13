
<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit;
}
?>

<?php
include('config/db.php'); // <-- adjust path if your DB connection file is elsewhere

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "❌ Please enter a valid email address.";
        exit;
    }

    // Check connection
    if (!$conn) {
        echo "❌ Database connection failed.";
        exit;
    }

    // Prepare SQL
    $stmt = $conn->prepare("INSERT INTO newsletter (email) VALUES (?)");
    $stmt->bind_param("s", $email);

    try {
        if ($stmt->execute()) {
            echo "✅ Thank you for subscribing!";
        } else {
            if ($conn->errno == 1062) { // duplicate email
                echo "⚠️ You are already subscribed!";
            } else {
                echo "❌ Something went wrong. Please try again.";
            }
        }
    } catch (Exception $e) {
        echo "❌ Error: " . $e->getMessage();
    }

    $stmt->close();
    $conn->close();
}
?>
