<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page - Automated Faculty Evaluation System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
        }

        h1 {
            margin: 0;
        }

        .options {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .options a {
            display: block;
            margin-bottom: 10px;
            padding: 10px;
            background-color: #f0f0f0;
            text-decoration: none;
            color: #333;
            border-radius: 4px;
        }

        .options a:hover {
            background-color: #ddd;
        }

        .logout-btn {
            margin-top: 20px;
            text-align: center;
        }

        .logout-btn button {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <header>
        <h1>Admin Page - Automated Faculty Evaluation System</h1>
    </header>

    <main>
        <div class="options">
            <a href="adminus.php">Add User</a>
            <a href="adminfac.php">Add Faculty</a>
            <a href="adminco.php">Add Course</a>
            <a href="qusform.php">Add Question</a>
        </div>

        <div class="logout-btn">
            <button onclick="logout()">Logout</button>
        </div>
    </main>

    <script>
        // Function to logout (optional)
        function logout() {
            // Your logout logic here
            alert('Logged out successfully.');
            // Redirect to the login page, or implement your preferred logout flow.
        }
    </script>
</body>

</html>
