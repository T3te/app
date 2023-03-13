<?php

class UserSession
{
    public function init()
    {
        // Session kezelése
        session_start();
    }

    public function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public function get($key)
    {
        return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
    }

    public function destroy()
    {
        // Session lezárása
        session_destroy();
    }
}
