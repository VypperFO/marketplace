<?php

namespace Utils;

class Session
{
    public static function setMessage(string $message): void
    {
        $_SESSION['message'] = $message;
    }

    public static function getMessage(): string
    {
        $msg = $_SESSION['message'] ?? '';
        unset($_SESSION['message']);
        return $msg;
    }
}