<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Session;
use App\Models\Annonce;
use App\Models\Message;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:dashboard', ['only' => ['index']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $totalUsers = User::count();
        $totalAnnonces = Annonce::count();
        $totalMessages = Message::count();
        return view('home', compact('totalUsers', 'totalAnnonces','totalMessages'));
    }

    public function chartData2()
    {
        $annonces = Annonce::select('name', 'trainings_count')->get();

    return response()->json($annonces);
    }

    

    public function navnotif()
    {
        $messages = Message::all();
        $latestMessage = $messages->latest()->first();

        return view('main', compact('messages', 'latestMessage'));
    }

}
