<?php

class Bd
{
    protected static ?PDO $bd = null;

    public static function getBD(): PDO
    {
        if (is_null(self::$bd)) {
            self::$bd = new PDO('mysql:dbname=tp02;host=host.docker.internal', 'root', 'root');
        }
        return self::$bd;
    }
}