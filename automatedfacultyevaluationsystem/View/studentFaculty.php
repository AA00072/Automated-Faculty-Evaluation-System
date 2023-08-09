<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form - Automated Faculty Evaluation System</title>
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

        input[type="radio"] {
            margin-right: 5px;
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

        .evaluation-questions {
            display: none;
            margin-top: 20px;
        }

        .evaluation-questions.show {
            display: block;
        }
    </style>
</head>

<body>
    <header>
        <h1>Student Form - Automated Faculty Evaluation System</h1>
    </header>

    <main>
        <section>
            <h2>Select Course for Evaluation</h2>
            <form id="courseForm">
                <label for="course">Select Course:</label>
                <select id="course" name="course" required>
                    <option value="course1">Course 1</option>
                    <option value="course2">Course 2</option>
                    <option value="course3">Course 3</option>
                    <!-- Add more course options -->
                </select>
                <button type="submit">Start Evaluation</button>
            </form>
        </section>

        <section class="evaluation-questions">
            <h2>Evaluation Questions</h2>
            <form id="evaluationForm">
                <!-- Display evaluation questions based on the selected course -->
                <label for="question1">Question 1:</label>
                <input type="radio" id="question1_answer1" name="question1" value="answer1" required>
                <label for="question1_answer1">Answer 1</label>
                <input type="radio" id="question1_answer2" name="question1" value="answer2">
                <label for="question1_answer2">Answer 2</label>
                <!-- Add more questions with radio button options -->
                <br>
                <button type="submit">Submit Evaluation</button>
            </form>
        </section>
    </main>

    <script>
        const courseForm = document.getElementById('courseForm');
        const evaluationQuestions = document.querySelector('.evaluation-questions');

        courseForm.addEventListener('submit', function (event) {
            event.preventDefault();
            evaluationQuestions.classList.add('show');
        });

        const evaluationForm = document.getElementById('evaluationForm');
        evaluationForm.addEventListener('submit', function (event) {
            event.preventDefault();
            // Add logic to submit the evaluation form and handle the responses
            alert('Evaluation submitted successfully.');
        });
    </script>
</body>

</html>
