<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessageDetail extends Model
{
    use HasFactory;

    protected $table = 'message_detail';

    protected $guarded = ['id'];

    public function m_rooms()
    {
        return $this->belongsTo(MessageRoom::class, 'id_room');
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
