<?php

class UserService {

    public function userData($id, $username, $publicname){
        $userData = [
            "id" => $id,
            "username" => $username,
            "publicname" => $publicname
        ];

        return $userData;
    }

}