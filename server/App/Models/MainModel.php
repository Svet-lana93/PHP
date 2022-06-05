<?php

namespace App\Models;

use Shmidt\Framework\Models\Model;

class MainModel extends Model
{
    protected $table = 'mains';

    public static function getAll(): string
    {
        return 'getAll work!';
    }
}
