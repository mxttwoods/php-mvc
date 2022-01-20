<?php

namespace App\Models;

use Core\Model;
use PDO;

/**
 * Example user model
 */
class User extends Model
{
    /**
     * Get all the users as an associative array
     *
     * @return array
     */
    public static function getAll(): array
    {
        $db = static::getDB();
        $stmt = $db->query('SELECT id, name FROM users');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
