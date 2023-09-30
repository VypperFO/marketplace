<?php

namespace Utils;

class Security
{
    public static function xss_safe(string $string): string
    {
        return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
    }
}