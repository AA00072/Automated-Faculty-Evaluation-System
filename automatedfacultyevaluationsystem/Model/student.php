<?php
require "dbconn.php";
class Student {
        private $conn;

        public function getQuestion($questionID) {
            $conn = DatabaseConnection::connect();
            $sql = "SELECT Qus, c1, c2, c3 FROM Question 
                    INNER JOIN QuestionChoice ON Question.ID = QuestionChoice.QuestionID
                    WHERE Question.ID = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("i", $questionID);
            $stmt->execute();
    
            $result = $stmt->get_result();
    
            if ($row = $result->fetch_assoc()) {
                echo "Question: " . $row['Qus'] . "<br>";
                echo "Options: " . $row['c1'] . ", " . $row['c2'] . ", " . $row['c3'] . "<br><br>";
            } else {
                echo "Question not found.";
            }
            $conn->close();
        }
}


?>