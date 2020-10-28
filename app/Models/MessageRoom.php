<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessageRoom extends Model
{
    use HasFactory;

    protected $table = 'message_room';

    protected $guarded = ['id'];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function m_details() {

        return $this->hasMany(MessageDetail::class);

    }
}
