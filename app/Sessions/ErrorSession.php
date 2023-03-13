<?php
class ErrorSession
{
    public function setError($error)
    {
        if (isset($_SESSION['error'])) {
            $error = $_SESSION['error'];
            unset($_SESSION['error']);
        } else {
            $error = null;
        }
    }
}