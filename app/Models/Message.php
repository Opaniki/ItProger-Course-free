<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public $timestamps = false; // Отключаем автоматическое добавление полей created_at и updated_at
}
