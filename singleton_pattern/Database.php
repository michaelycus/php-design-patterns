<?php
declare (strict_types = 1);

final class Database
{
    private static $connection;

    private static $randomNumber;

    private function __construct()
    {
        echo "Connection created \n";
    }

    public static function Connect()
    {
        if (!isset(self::$connection)) {
            self::$connection   = new Database;
            self::$randomNumber = rand(1, 100);
        }

        return self::$connection;
    }

    public static function getRandomNumber(): int
    {
        return self::$randomNumber;
    }

    // private function __clone()
    // {
    // }
}

// $DB = new Database();
$DB1 = Database::Connect();

echo $DB1->getRandomNumber() . "\n";

$DB2 = Database::Connect();

echo $DB2->getRandomNumber() . "\n";

// Function 'clone' is not private, so its possible to do this:
$DB3 = clone $DB1;

var_dump($DB1 === $DB2); // true
var_dump($DB1 === $DB3); // false
