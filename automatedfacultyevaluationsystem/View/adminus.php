<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page - User Management</title>
    <style>
        /* Your CSS styles here */
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

        form {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .success-msg {
            color: green;
            margin-top: 10px;
        }

        .error-msg {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <header>
        <h1>Admin Page - User Management</h1>
    </header>

    <main>
        <form method="POST" action="">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <label for="usertype">User Type:</label>
            <select id="usertype" name="usertype" required>
                <option value="1">Admin</option>
                <option value="2">Faculty</option>
                <option value="3">Student</option>
            </select>
            <button type="submit" name="submit">Add User</button>
        </form>

        <?php
        // Include the user_functions.php file
        require 'user_functions.php';

        // Check if the form is submitted
        if (isset($_POST['submit'])) {
            // Get the form data
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $usertype = $_POST['usertype'];

            // Call the userAdd function from the included file and handle any errors
            $result = userAdd($name, $email, $password, $usertype);
            if ($result['success']) {
                echo '<p class="success-msg">' . $result['message'] . '</p>';
            } else {
                echo '<p class="error-msg">' . $result['message'] . '</p>';
            }
        }
        ?>
    </main>
</body>

</html>
