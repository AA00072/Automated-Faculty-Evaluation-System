<?php
class DatabaseConnection
{
    public static function connect()
    {
        // Replace these variables with your actual database credentials
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "sweproject";

        // Create a connection to the database
        $conn = new mysqli($host, $username, $password, $database);

        // Check the connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        return $conn;
    }



    function login($email, $password) {
        global $conn;
    
        // Sanitize input to prevent SQL injection (you can use other sanitization methods as well).
        $email = mysqli_real_escape_string($conn, $email);
    
        // Check if the user exists in the 'user' table.
        $userQuery = "SELECT id, password, type FROM user WHERE email = '$email' LIMIT 1";
        $userResult = mysqli_query($conn, $userQuery);
    
        if (!$userResult || mysqli_num_rows($userResult) === 0) {
            return false;
        }
    
        // User found, retrieve user data.
        $userData = mysqli_fetch_assoc($userResult);
        $userId = $userData['id'];
        $userType = $userData['type'];
        $hashedPassword = $userData['password'];
    
        // Verify the password using password_verify function.
        if (!password_verify($password, $hashedPassword)) {
            return false;
        }
    
        //redirection based on user type.
        switch ($userType) {
            case 'admin':
                header("Location: admin.php");
                break;
            case 'teacher':
                header("Location: teacher.php");
                break;
            case 'student': header("Location: student.php");
               break;
            default:
                // Handle unknown user types or redirect to a default page.
                header("Location: default.php");
                break;
        }
        exit();
    }
    



}

