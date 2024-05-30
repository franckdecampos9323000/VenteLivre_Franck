<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
class NavbarComposer implements HasMedia
{
    use InteractsWithMedia;

    public function compose(View $view)
    {
        $user = Auth::user();
        $photoProfilUrl = null;

        if ($user) {
            $media = $user->getFirstMedia('photo_profils');
            if ($media) {
                $photoProfilUrl = $media->getUrl();
            }
        }

        $notifications = Message::latest()->take(1)->get();
        $latestMessage = $notifications->first();

        $view->with('photoProfilUrl', $photoProfilUrl)
            ->with('latestMessage', $latestMessage);
    }
}

