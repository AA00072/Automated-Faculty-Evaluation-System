<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Form - Automated Faculty Evaluation System</title>
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

        h2 {
            border-bottom: 1px solid #333;
            padding-bottom: 5px;
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
            margin-right: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: #fff;
        }
    </style>
</head>

<body>
    <header>
        <h1>Teacher Form - Automated Faculty Evaluation System</h1>
    </header>

    <main>
        <section>
            <h2>View Evaluation Results</h2>
            <form>
                <label for="studentName">Student Name:</label>
                <input type="text" id="studentName" name="studentName" required>
                <button type="submit">View Results</button>
            </form>
            <!-- Display evaluation results for the selected student -->
            <table>
                <thead>
                    <tr>
                        <th>Question</th>
                        <th>Answer</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Add rows dynamically based on the evaluation results -->
                    <tr>
                        <td>Question 1</td>
                        <td>Answer 1</td>
                    </tr>
                    <tr>
                        <td>Question 2</td>
                        <td>Answer 2</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section>
            <h2>Add New Evaluation Question</h2>
            <form>
                <label for="facultyName">Faculty Name:</label>
                <input type="text" id="facultyName" name="facultyName" required>
                <label for="facultyId">Faculty ID:</label>
                <input type="text" id="facultyId" name="facultyId" required>
                <label for="question">Question:</label>
                <input type="text" id="question" name="question" required>
                <label for="answer">Answer:</label>
                <input type="text" id="answer" name="answer" required>
                <label for="questionType">Question Type:</label>
                <select id="questionType" name="questionType" required>
                    <option value="multiple_choice">Multiple Choice</option>
                    <option value="essay">Essay</option>
                </select>
                <button type="submit">Add Question</button>
            </form>
        </section>
    </main>

    <footer>
        <!-- No copyright mark -->
    </footer>
</body>

</html>
