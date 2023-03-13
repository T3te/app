<?php

class UserModel extends ConnectModel {
    public function getUserByUsernamePassword($username, $password) {
        $stmt = $this->db->prepare('SELECT * FROM users WHERE username = :username AND password = :password');
        $stmt->execute(array(':username' => $username, ':password' => $password));
        
        if ($stmt->rowCount() > 0) {
            $error          = null;
            $result         = $stmt->fetch(PDO::FETCH_ASSOC);
            $id             = $result['id'];
            $username       = $result['username'];
            $publicname     = $result['publicname'];

            $userService    = new \UserService();
            $userData       = $userService->userData($id, $username, $publicname);

            $userSession    = new \UserSession();
            $userSession->set('userData', $userData);
            return array('error' => $error);
        } else {
            $error = "Sikertelen bejelentkezés";
            return array('error' => $error);
        }
    }

    public function getUserById($id) {
        $stmt = $this->db->prepare('SELECT * FROM users WHERE id = :id');
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}