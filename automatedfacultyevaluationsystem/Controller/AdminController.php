<?php

require_once(__ROOT__ . "Model/admin.php");

class AdminController {
    private $admin;

    public function __construct() {
        $this->admin = new Admin(); // Create an instance of the Admin model
    }

    public function addUser($password, $name, $type, $email) {
        return $this->admin->userAdd($password, $name, $type, $email);
    }

    public function addQuestion($question, $choice1, $choice2, $choice3, $courseId) {
        return $this->admin->addQuestion($question, $choice1, $choice2, $choice3, $courseId);
    }

    public function deleteUser($userID) {
        return $this->admin->deleteUser($userID);
    }

    public function editEvaluation($evalID, $newMark) {
        return $this->admin->editEvaluation($evalID, $newMark);
    }
}

?>