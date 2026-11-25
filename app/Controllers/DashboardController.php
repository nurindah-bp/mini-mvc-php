<?php
class DashboardController {
    public function index() {
        require_once 'app/Views/layouts/header.php';
        require_once 'app/Views/dashboard.php';
        require_once 'app/Views/layouts/footer.php';
    }
}