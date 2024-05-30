<?php

namespace App\Models;

use App\Models\Chapter;
use App\Models\Session;
use App\Models\Category;
use App\Models\Sequence;
use App\Models\Training;
use App\Models\Notification;
use Laravel\Sanctum\HasApiTokens;
use Spatie\MediaLibrary\HasMedia;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Notifications\ResetPasswordNotification;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements HasMedia
{
    use HasApiTokens, HasFactory, InteractsWithMedia, HasRoles, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'photo_profil',
        'username',
        'email',
        'password',
        'status',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function annonces()
    {
        return $this->hasMany(Annonce::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function messages()
    {
        return $this->belongsToMany(Message::class, 'message_user');
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('photo_profils')
            ->singleFile(); // Pour qu'un utilisateur puisse avoir une seule photo de profil
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }

}
