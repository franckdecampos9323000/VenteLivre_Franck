<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Chapter;
use App\Models\Session;
use App\Models\Training;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    protected function nextChapter(Chapter $currentChapter, Training $training)
    {
        $nextChapter = $training->chapters()->where('id', '>', $currentChapter->id)->first();
        return $nextChapter;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainings = Training::with('category')->where('status', 1)->latest()->paginate(10);
        return view('client', compact('trainings'));
    }

    public function dashboard()
    {
        $user = Auth::user(); // Récupère l'utilisateur connecté

        $nbSessions = $user->sessions()->count(); // Compte le nombre de sessions auxquelles l'utilisateur participe
        /* $nbNotifications = $user->notifications()->count(); */ // Compte les notifications

        $sessions = $user->sessions()->where('status', true)->with('training.category')->get();  // Compte le nombre de formations dans les sessions
        $trainings = $sessions->pluck('training')->flatten()->unique(); // Récupère les formations dans les sessions
        $nbTrainings = $trainings->count(); // Compte le nombre de formations

        $categories = $sessions->pluck('training.category')->flatten()->unique(); // Récupère les catégories des formations dans les sessions
        $nbCategories = $categories->count(); // Compte le nombre de catégories dans lesquelles les formations se trouvent
        return view('clients.clientDashboard', ['nbSessions' => $nbSessions, 'nbTrainings' => $nbTrainings, 'nbCategories' => $nbCategories, /* 'nbNotifications' => $nbNotifications, */]);
    }

    public function trainings()
    {
        // récupérer l'ID de l'utilisateur connecté
        $user_id = Auth::id();

        // récupérer les formations auxquelles l'utilisateur est inscrit
        $trainings = Training::whereHas('sessions', function($query) use ($user_id) {
            $query->where('enddate', '>=', now());
            $query->whereHas('users', function($q) use ($user_id) {
                $q->where('user_id', $user_id);
            });
        })->with(['category', 'sessions' => function($query) use ($user_id) {
            $query->where('enddate', '>=', now());
            $query->whereHas('users', function($q) use ($user_id) {
                $q->where('user_id', $user_id);
            });
        }])->latest()->get();

        return view('clients.clientTrainings', compact('trainings'));
    }

    public function scroll(Request $request)
    {
        $perPage = $request->input('per_page', 1);
        $trainings = Training::paginate($perPage);

        return response()->json($trainings);
    }

    public function chapters(Training $training)
    {
        // Récupérer les chapitres pour la formation spécifique
        $chapters = $training->chapters;

        return view('clients.clientChapters', compact('chapters', 'training'));
    }

    public function sequences(Chapter $chapter)
    {
        $sequences = $chapter->sequences;
        $nextChapter = $this->nextChapter($chapter, $chapter->training);
        return view('clients.clientSequences', compact('sequences', 'chapter', 'nextChapter'));
    }

    public function notifications(User $user)
    {
        // Récupérer l'utilisateur connecté
        $user = Auth::user();

        // Récupérer les notifications de l'utilisateur connecté
        $userNotifications = $user->notifications->where('status', true);

        // Compter le nombre total de notifications pour cet utilisateur
        $totalNotificationsUser = $userNotifications->count();

        return view('clients.clientNotifications', compact('userNotifications', 'totalNotificationsUser'));
    }

    /* public function shownotification()
    {
        return view('clients.clientShowNotification');
    } */

    public function profil(User $user)
    {
        $user = Auth::user();
        $photoProfilUrl = null;

        if ($user) {
            $media = $user->getFirstMedia('photo_profils');
            if ($media) {
                $photoProfilUrl = $media->getUrl();
            }
        }
        return view('clients.clientProfil', compact('photoProfilUrl'));
    }
}
