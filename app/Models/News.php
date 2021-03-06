<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';
    // ограничивает изменение столбцов
    protected $guarded = [];

    // возвращает экземпляр пользователя, который является автором этого сообщения
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
