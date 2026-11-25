<?php
require_once 'app/Models/UserModel.php';
class UserController {
    public function index() {
        $userModel = new UserModel();
        $users = $userModel->getUsers();
        require 'app/Views/user_view.php';
    }
}