<?php
require "dbconn.php";
class DatabaseHandler {
    private $conn;

    public function addQuestion($qus, $courseID, $c1, $c2, $c3) {
        $conn = DatabaseConnection::connect();
        $sql = "INSERT INTO Question (Qus, CourseID) VALUES (?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("si", $qus, $courseID);

        if ($stmt->execute()) {
            $questionID = $stmt->insert_id;

            $choiceSql = "INSERT INTO QuestionChoice (QuestionID, c1, c2, c3) VALUES (?, ?, ?, ?)";
            $choiceStmt = $this->conn->prepare($choiceSql);
            $choiceStmt->bind_param("isss", $questionID, $c1, $c2, $c3);

            if ($userStmt->execute()) {
                $conn->close();
                return true;
            } else {
                $conn->close();
                return false;
            }
        } else {
            $conn->close();
            return false;
        }
    }

    public function editEvaluation($evalID, $newMark) {
        $sql = "UPDATE Evaluation SET Eval = ? WHERE ID = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ii", $newMark, $evalID);

        if ($stmt->execute()) {
            $conn->close();
            return true;
        } else {
            $conn->close();
            return false;
        }
    }

   
}

?>