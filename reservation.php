<?php
/**
 * Reservation Form Handler
 * 
 * This file processes reservation form submissions
 * and stores them in the database
 */

// Include database connection
include 'db.php';

// Set header for JSON response
header('Content-Type: application/json');

// Check if request method is POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // Get and sanitize form data
    $name = $conn->real_escape_string(trim($_POST['name']));
    $email = $conn->real_escape_string(trim($_POST['email']));
    $phone = $conn->real_escape_string(trim($_POST['phone']));
    $guests = intval($_POST['guests']);
    $date = $conn->real_escape_string($_POST['date']);
    $time = $conn->real_escape_string($_POST['time']);
    $message = isset($_POST['message']) ? $conn->real_escape_string(trim($_POST['message'])) : '';
    
    // Validate required fields
    if (empty($name) || empty($email) || empty($phone) || empty($guests) || empty($date) || empty($time)) {
        echo json_encode([
            'status' => 'error',
            'message' => 'Please fill in all required fields.'
        ]);
        exit;
    }
    
    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode([
            'status' => 'error',
            'message' => 'Please enter a valid email address.'
        ]);
        exit;
    }
    
    // Validate number of guests
    if ($guests < 1 || $guests > 20) {
        echo json_encode([
            'status' => 'error',
            'message' => 'Number of guests must be between 1 and 20.'
        ]);
        exit;
    }
    
    // Validate date is not in the past
    $selectedDate = strtotime($date);
    $today = strtotime(date('Y-m-d'));
    
    if ($selectedDate < $today) {
        echo json_encode([
            'status' => 'error',
            'message' => 'Please select a future date.'
        ]);
        exit;
    }
    
    // Prepare SQL statement using prepared statements to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO reservations (name, email, phone, guests, date, time, message) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssisss", $name, $email, $phone, $guests, $date, $time, $message);
    
    // Execute the statement
    if ($stmt->execute()) {
        // Success response
        echo json_encode([
            'status' => 'success',
            'message' => 'Reservation submitted successfully! We will contact you soon to confirm your booking.'
        ]);
        
        // Optional: Send email notification to restaurant and customer
        // You can implement email functionality here using PHPMailer or similar
        
    } else {
        // Error response
        echo json_encode([
            'status' => 'error',
            'message' => 'Sorry, there was an error processing your reservation. Please try again or contact us directly.'
        ]);
    }
    
    // Close statement
    $stmt->close();
    
} else {
    // Invalid request method
    echo json_encode([
        'status' => 'error',
        'message' => 'Invalid request method.'
    ]);
}

// Close database connection
$conn->close();
?>
