<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Annonce extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    /* protected $table = 'trainings'; */

    protected $fillable = [
        'title',
        'image',
        'description',
        'user_id',
        // 'category_id',
        // 'category',
        'status',
        'allstatus',
        'slug'
    ];

    protected static function boot()
{
    parent::boot();

    // static::updating(function ($training) {
    //     $oldValues = [
    //         'title' => (string) $training->getOriginal('title'),
    //         'description' => is_string($training->getOriginal('description')) ? html_entity_decode($training->getOriginal('description')) : null,
    //         'category' => [
    //             'name' => optional($training->category)->name,
    //         ],
    //     ];
    //     $newValues = [
    //         'title' => (string) $training->title,
    //         'description' => is_string($training->description) ? html_entity_decode($training->description) : null,
    //         'category' => [
    //             'name' => optional($training->category)->name,
    //         ],
    //     ];

    //     History::create([
    //         'model_name' => 'Training',
    //         'model_id' => $training->id,
    //         'old_values' => json_encode($oldValues),
    //         'new_values' => json_encode($newValues),
    //     ]);
    // });
}




    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // public function messages()
    // {
    //     return $this->hasMany(Message::class);
    // }

    public function getTitleAttribute($attribute)
    {
        return Str::title($attribute);
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
}
