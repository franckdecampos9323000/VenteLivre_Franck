<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Annonce;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreMessageRequest;
use App\Http\Requests\UpdateMessageRequest;

class MessageController extends Controller
{
    function __construct()
    {

        $this->middleware('permission:message-list|message-create|message-edit|message-delete', ['only' => ['index','show']]);

        $this->middleware('permission:message-create', ['only' => ['create','store']]);

        $this->middleware('permission:message-edit', ['only' => ['edit','update']]);

        $this->middleware('permission:message-delete', ['only' => ['destroy']]);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages  = Message::with('user', 'users')->latest()->get();
        // Total number of message
        $totalMessages = Message::all()->count();
        // Total number of active status
        $activeCount = DB::table('messages')->where('status', true)->count();
        // Total number of inactive status
        $inactiveCount = DB::table('messages')->where('status', false)->count();

        return view('admin.messages.index', compact('messages', 'totalMessages', 'activeCount', 'inactiveCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $message = new Message;
        return view('admin.messages.create', compact('message', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMessageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        // Valider les données du formulaire
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'senddate' => 'required|date',
        ]);

         // Convertir la date au format approprié (YYYY-MM-DD)
        $senddate = Carbon::createFromFormat('d-m-Y', $request->input('senddate'))->format('Y-m-d');

        // Créer un nouveau texte
        $message = new Message();
        $message->title = $request->input('title');
        $message->content = $request->input('content');
        $message->senddate = $senddate;
        $message->save();

       $selectedUsers = $request->input('users');

       foreach ($selectedUsers as $userId) {
        $user = User::find($userId);
        if ($user) {
            $user->messages()->attach($message->id);
        }
    }
    
        // Rediriger avec un message de succès
        return redirect()->route('admin.messages.index')->with('success', 'Le message a été enregistrée.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        /* $users = $message->users;
        return view('admin.messages.show', compact('message', 'users')); */
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        /* $users = User::all();
        $message->senddate = Carbon::parse($message->senddate)->format('d-m-Y');
        return view('admin.messages.edit', compact('users', 'message')); */
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMessageRequest  $request
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMessageRequest $request, Message $message)
    {
        /* $senddate = Carbon::createFromFormat('d-m-Y', $request->senddate)->toDateString();

        $message->title = $request->title;
        $message->content = $request->content;
        $message->senddate = $senddate;
        $message->save();

        $users = $request->input('users');
        // Synchroniser les membres de la message avec ceux fournis dans le formulaire
        $message->users()->sync($users);
        $message = 'La message a été modifiée avec succès.';

        return redirect()->route('admin.messages.index')->with('success', $message); */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        $message->delete();
        return redirect()->route('admin.messages.index')->with('danger', 'Message supprimée');
    }

     /**
     * ToggleStatus.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */

     public function toggleStatus($id)
     {
        $message = Message::findOrFail($id);

        $currentDate = now()->format('Y-m-d');

        if ($currentDate < $message->senddate) {
            $status = false;
            $message = 'La message ne peut pas être envoyée pour l\'instant.';
        } else if($currentDate >= $message->senddate){
            $status = true;
            $message = 'Le message est active et a été envoyée';
        }

        $message->update([
            'status' => $status,
            'message' => $message
        ]);

         return redirect()->back()->with('success', $message);
    }
}
