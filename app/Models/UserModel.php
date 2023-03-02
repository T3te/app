<?php
use ConnectModel;

class UserModel extends ConnectModel {
    public function getUserById($id) {
        $stmt = $this->db->prepare('SELECT * FROM users WHERE id = :id');
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

$userModel = new UserModel();
$user = $userModel->getUserById(1);
echo $user['name'];