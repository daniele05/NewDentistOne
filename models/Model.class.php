<?php
// gestion avec la bdd cabinet_dentaire

abstract class Model
{
    private static $pdo;

    private static function setBdd()
    {
        self::$pdo = new PDO("mysql:host=localhost;dbname=cabinetdentaire;charset=utf8", "root", "18022013???");
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }

    protected function getBdd()
    {
        if (self::$pdo == null) {
            self::setBdd();
        }
        return self::$pdo;
    }
}