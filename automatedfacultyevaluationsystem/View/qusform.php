<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Question - Automated Faculty Evaluation System</title>
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

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

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
    </style>
</head>

<body>
    <header>
        <h1>Add Question - Automated Faculty Evaluation System</h1>
    </header>

    <main>
        <form onsubmit="addQuestion(event)">
            <label for="course">Select Course:</label>
            <select id="course" name="course">
                <?php
                // Replace 'your_database', 'your_username', and 'your_password' with your actual database credentials
                $servername = "localhost";
                $username = "your_username";
                $password = "your_password";
                $dbname = "your_database";

                // Create a connection to the database
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check the connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Query to fetch courses from the database
                $sql = "SELECT course_id, course_name FROM courses";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<option value="' . $row['course_id'] . '">' . $row['course_name'] . '</option>';
                    }
                } else {
                    echo '<option value="">No courses found</option>';
                }

                // Close the database connection
                $conn->close();
                ?>
            </select>
            <label for="question">Question:</label>
            <input type="text" id="question" name="question" required>
            <label for="answer1">Answer 1:</label>
            <input type="text" id="answer1" name="answer1" required>
            <label for="answer2">Answer 2:</label>
            <input type="text" id="answer2" name="answer2" required>
            <label for="answer3">Answer 3:</label>
            <input type="text" id="answer3" name="answer3" required>
            <button type="submit" name="submit">Add Question</button>
        </form>
    </main>

    <?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get form data
    $course_id = $_POST['course'];
    $question = $_POST['question'];
    $answer1 = $_POST['answer1'];
    $answer2 = $_POST['answer2'];
    $answer3 = $_POST['answer3'];


    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the query to insert the question and its choices into the database
    $stmt = $conn->prepare("INSERT INTO questions (course_id, question, answer1, answer2, answer3) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("issss", $course_id, $question, $answer1, $answer2, $answer3);

    if ($stmt->execute()) {
        // Question added successfully
        echo "Question added successfully.";
    } else {
        // Error adding question
        echo "Error adding question. Please try again.";
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
}
?>
</body>

</html>
