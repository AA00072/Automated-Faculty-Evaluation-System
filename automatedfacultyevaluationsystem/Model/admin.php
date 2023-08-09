<?php
require "dbconn.php";


class Admin
{
    private $conn;

    public function __construct()
    {
        $this->conn = DatabaseConnection::connect();
    }

    public function userAdd($password, $name, $type, $email)
    {
        // Escape user inputs to prevent SQL injection
        $password = $this->conn->real_escape_string($password);
        $name = $this->conn->real_escape_string($name);
        $email = $this->conn->real_escape_string($email);
        $type = $this->conn->real_escape_string($type); // Escape user type

        $sql = "INSERT INTO User (name, email, password) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sss", $name, $email, $password);

        if ($stmt->execute()) {
            $userID = $stmt->insert_id;

            $userTypeSql = "INSERT INTO UserType (UID, Type) VALUES (?, ?)";
            $userTypeStmt = $this->conn->prepare($userTypeSql);
            $userTypeStmt->bind_param("is", $userID, $type); // Use escaped user type

            if ($userTypeStmt->execute()) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    

    public function addQuestion($question, $choice1, $choice2, $choice3, $courseId)
    {
        // Perform the database query to insert the new question
        $sql = "INSERT INTO question (Qus, CourseID) VALUES (?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("si", $question, $courseId);

        if ($stmt->execute()) {
            $questionId = $this->conn->insert_id;

            // Insert the choices into the questionchoice table
            $choiceSql = "INSERT INTO questionchoice (QuestionID, c1, c2, c3) VALUES (?, ?, ?, ?)";
            $choiceStmt = $this->conn->prepare($choiceSql);
            $choiceStmt->bind_param("isss", $questionId, $choice1, $choice2, $choice3);

            if ($choiceStmt->execute()) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function deleteUser($userID) {
        // Delete from UserType table first
        $userTypeSql = "DELETE FROM UserType WHERE UID = ?";
        $userTypeStmt = $this->conn->prepare($userTypeSql);
        $userTypeStmt->bind_param("i", $userID);

        if ($userTypeStmt->execute()) {
            // If UserType deletion successful, then delete from User table
            $userSql = "DELETE FROM User WHERE ID = ?";
            $userStmt = $this->conn->prepare($userSql);
            $userStmt->bind_param("i", $userID);

            if ($userStmt->execute()) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function editEvaluation($evalID, $newMark) {
        $sql = "UPDATE Evaluation SET Eval = ? WHERE ID = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ii", $newMark, $evalID);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }




}
?>
