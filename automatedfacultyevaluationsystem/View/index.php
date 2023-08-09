<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automated Faculty Evaluation System</title>
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

        h2 {
            border-bottom: 1px solid #333;
            padding-bottom: 5px;
        }

        p {
            line-height: 1.6;
        }

        form {
            margin-top: 20px;
        }

        input[type="text"],
        input[type="password"],
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

        footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    <header>
        <h1>Automated Faculty Evaluation System</h1>
    </header>

    <main>
        <section>
            <h2>Welcome</h2>
            <p>
                Welcome to the Automated Faculty Evaluation System. Please log in to access the system and complete the
                faculty evaluations.
            </p>
            <form>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <button type="submit">Log In</button>
            </form>
        </section>

        <section>
            <h2>Faculty Evaluation Form</h2>
            <!-- Add the faculty evaluation form here -->
        </section>

        <section>
            <h2>Evaluation Results</h2>
            <!-- Add the evaluation results or reports here -->
        </section>
    </main>

    <footer>
        &copy; 2023 Automated Faculty Evaluation System. All rights reserved.
    </footer>
</body>

</html>
