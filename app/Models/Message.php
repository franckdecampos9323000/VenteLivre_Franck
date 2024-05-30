<?php

namespace App\Models;

use App\Models\User;
use App\Models\Annonce;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Message extends Model
{
    use HasFactory;

    // Retirer les associations par défaut pour les messages
    protected $dispatchesEvents = [];

    protected $fillable = [
        'title',
        'content',
        'status',
        'senddate',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function annonces()
    {
        return $this->belongsToMany(Annonce::class, 'message_annonce');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'message_user');
    }
}
