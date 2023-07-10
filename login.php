<?php
// Set database credentials
// $servername = "localhost";
// $email_id = "email";
// $password = "password";
// $dbname = "cari";


// Create connection
$conn= mysqli_connect('localhost','root');
    if($conn){
        echo"Connection Successfully";
    }
    else{
        echo "No connection";
    }
    mysqli_select_db($conn,'cari');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the user has submitted the login form
if (isset($_POST['login'])) {
    
    // Sanitize the user input
    $email = mysqli_real_escape_string($conn, $_POST['email_id']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    // Retrieve user data from the database
    $sql = "SELECT * FROM userdata WHERE email_id='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    // $result = mysqli_fetch_array($result);
    // die(var_dump(($result)));
    
    if ($result->num_rows > 0) {
        // User exists, so set a session variable and redirect to dashboard
        session_start();
        $_SESSION['email'] = $email_id;
        header('Location: index.html');
        exit();
    } else {
        // User does not exist, show an error message
        $error = "Invalid email or password";
        
    }
    
}

?>