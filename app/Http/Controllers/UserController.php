<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Managers\storeFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:user-list|user-create|user-edit|user-delete', ['only' => ['index','show']]);

        $this->middleware('permission:user-create', ['only' => ['create','store']]);

        $this->middleware('permission:user-edit', ['only' => ['edit','update']]);

        $this->middleware('permission:user-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest()->with('roles')->get();
        // Total number of user
        $totalUsers = User::count();
        // Total number of active status
        $activeCount = User::where('status', true)->count();
        // Total number of inactive status
        $inactiveCount = User::where('status', false)->count();

        return view('admin.users.index', compact('users', 'totalUsers', 'activeCount', 'inactiveCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = new User;
        $roles = Role::pluck('name', 'id')->all(); // Récupère les noms des rôles avec leurs IDs
        return view('admin.users.create', compact('user', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request, storeFile $storeFile)
    {
        $user = new User([
            'photo_profil' => $request->photo_profil,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if ($request->hasFile('photo_profil')) {
            $user->addMediaFromRequest('photo_profil')
                ->toMediaCollection('photo_profils');
        }
        $user->assignRole($request->input('roles'));
        $user->save();

        return redirect()->route('admin.users.index')->with('success', 'Utilisateur créé avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /* return view('admin.users.show'); */
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = Role::pluck('name', 'id')->all();
        $userRole = $user->roles->pluck('id')->toArray();
        return view('admin.users.edit', compact('user', 'roles', 'userRole'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $user, storeFile $storeFile)
    {
        //$user->photo_profil = $request->photo_profil;
        $user->email = $request->email;
        $user->username = $request->username;

        if ($request->hasFile('photo_profil')) {
            $user->clearMediaCollection('photo_profils');
            $user->addMediaFromRequest('photo_profil')
                     ->toMediaCollection('photo_profils');
        }
        //DB::table('model_has_roles')->where('model_id',$id)->delete();
        // Assigner les nouveaux rôles sélectionnés
        //$user->assignRole($request->input('roles'));
        $user->syncRoles($request->input('roles')); //Suprime tout les anciens rôle et garde ceux now select
        $user->save();

        return redirect()->route('admin.users.index')->with('success', 'Utilisateur modifiée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        //si  l'utilisateur a supprimé est celui connecté
        if( auth()->user()->username === $user->username) {
            return redirect()->back()->with('danger', 'Impossible de supprimer cet utilisateur pour l\'instant');
        }
        // supprimer
        $user->delete();
        return redirect()->route('admin.users.index')->with('danger', 'Utilisateur supprimée');
    }

     /**
     * ToggleStatus.
     *
     * @param  \App\Models\User $user
     * @return \Illuminate\Http\Response
     */

     public function toggleStatus($id)
    {
        $user = User::findOrFail($id);
        //si  l'utilisateur a désactivé est celui connecté
        if( auth()->user()->username === $user->username) {
            return redirect()->back()->with('danger', 'Impossible de désactiver cet utilisateur pour l\'instant');
        }
        $user->update([
            'status' => !$user->status
        ]);
        return redirect()->back()->with('success', 'Statut mis à jour avec succès.');
    }

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
        return view('admin.profil', compact('photoProfilUrl'));
    }
}
