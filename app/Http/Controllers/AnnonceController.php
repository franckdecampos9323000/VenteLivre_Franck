<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use App\Models\Chapter;
use App\Models\History;
use App\Models\Message;
use App\Managers\storeFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreAnnonceRequest;
use App\Http\Requests\UpdateAnnonceRequest;

class AnnonceController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:annonce-list|annonce-create|annonce-edit|annonce-delete|annonce-history', ['only' => ['index','show']]);

        $this->middleware('permission:annonce-create', ['only' => ['create','store']]);

        $this->middleware('permission:annonce-edit', ['only' => ['edit','update']]);

        $this->middleware('permission:annonce-delete', ['only' => ['destroy']]);

        $this->middleware('permission:annonce-history', ['only' => ['history']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $annonces  = Annonce::with('user')->latest()->get();
        // Total number of annonce
        $totalAnnonces = Annonce::all()->count();
        // Total number of active status
        $activeCount = DB::table('annonces')->where('status', true)->count();
        // Total number of inactive status
        $inactiveCount = DB::table('annonces')->where('status', false)->count();

        return view('admin.annonces.index', compact('annonces', 'totalAnnonces', 'activeCount', 'inactiveCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$categories = Message::all();
        $annonce = new Annonce;
        return view('admin.annonces.create', compact('annonce'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAnnonceRequest  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(StoreAnnonceRequest $request , storeFile $storeFile)
    // {
    //     $annonce = new Annonce([
    //         'image' => $request->image,
    //         'title' => $request->title,
    //         'description' => $request->description,
    //     ]);
    //     $annonce->user()->associate(auth()->user());
    //     $storeFile->addFile($annonce['image'] , 'imagest' , $annonce);
    //     $annonce->save();

    //     return redirect()->route('admin.annonces.index')->with('success', 'Annonce créée avec succès');

    // }
    public function store(StoreAnnonceRequest $request , storeFile $storeFile)
{

        // Récupérer le fichier image
        $image = $request->file('image');

        // Générer un nom de fichier unique pour l'image
        $imageName = time().'.'.$image->extension();

        // Déplacer le fichier téléchargé vers le dossier de stockage public
        $image->move(public_path('images'), $imageName);

        // Créer une nouvelle instance d'Annonce avec les données du formulaire
        $annonce = new Annonce([
            'image' => $imageName, // Enregistrer le nom du fichier dans la base de données
            'title' => $request->title,
            'description' => $request->description,
        ]);

        // Associer l'utilisateur authentifié à l'annonce
        $annonce->user()->associate(auth()->user());

        // Enregistrer l'annonce dans la base de données
        $annonce->save();

        // Rediriger avec un message de succès
        return redirect()->route('admin.annonces.index')->with('success', 'Annonce créée avec succès');
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function show(Annonce $annonce)
    {
        return view('admin.annonces.show', compact('annonce'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function edit(Annonce $annonce)
    {
        //$categories = Message::all();
        return view('admin.annonces.edit', compact('annonce'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAnnonceRequest  $request
     * @param  \App\Models\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    // public function update(UpdateAnnonceRequest $request, Annonce $annonce, storeFile $storeFile)
    // {
    //     $annonce->title = $request->title;
    //     $annonce->description = $request->description;
    //     //$annonce->category_id = $request->category_id;

    //     //$annonce->category()->associate($request->category_id);
    //     $annonce->user()->associate(auth()->user());

    //     if ($request->hasFile('image')) {
    //         // Supprimer l'ancienne image si elle existe
    //         if ($annonce->getFirstMedia('imagest')) {
    //             $annonce->getFirstMedia('imagest')->delete();
    //         }

    //         $storeFile->addFile($request->file('image'), 'imagest', $annonce);
    //     }

    //     $annonce->save();

    //     return redirect()->route('admin.annonces.index')->with('success', 'Formation modifiée avec succès');
    // }

    public function update(UpdateAnnonceRequest $request, Annonce $annonce)
    {
        // Mettre à jour les attributs de l'annonce avec les données du formulaire
        $annonce->title = $request->title;
        $annonce->description = $request->description;

        // Vérifiez si une nouvelle image est fournie dans la demande
        if ($request->hasFile('image')) {
            // Traitement de l'image
            // Télécharger et enregistrer la nouvelle image
            $imagePath = $request->file('image')->store('images', 'public');

            // Mettre à jour le nom de fichier de l'image dans l'annonce
            $annonce->image = $imagePath;

            // Supprimer l'image existante s'il y en a une
            if ($annonce->image) {
                Storage::disk('public')->delete($annonce->image);
            }
        } elseif ($request->has('avatar_remove')) {
            // Si la case à cocher pour supprimer l'image est cochée
            // Supprimer l'image existante
            Storage::disk('public')->delete($annonce->image);
            $annonce->image = null; // Assurez-vous que le champ image est null dans la base de données
        }

        // Sauvegarder les modifications apportées à l'annonce
        $annonce->save();

        // Rediriger avec un message de succès
        return redirect()->route('admin.annonces.index')->with('success', 'Annonce mise à jour avec succès');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $annonce = Annonce::findOrFail($id);
        // Vérifier si l'annonce est utilisée par une autre ressource
        // if ($annonce->chapters()->exists()) {
        //     return redirect()->back()->with('danger', 'Ce chapitre ne peut pas être supprimé car il est utilisé dans un chapitre.');
        // }

        // Si l'annonce n'est pas utilisée, la supprimer
        $annonce->delete();
        return redirect()->route('admin.annonces.index')->with('danger', 'Formation supprimée');
    }

    /**
     * ToggleStatus
     *
     * @param  \App\Models\Message  $category
     * @return \Illuminate\Http\Response
     */

    public function toggleStatus($id, Request $request)
    {
        $annonce = Annonce::findOrFail($id);
        $allStatus = $request->input('allstatus');

        if ($allStatus === '1'){
        Annonce::query()->update(['allstatus' => true]);
        }
        else{
        Annonce::query()->update(['allstatus' => false]);
        }
        // Vérifie si l'annonce est utilisée dans une autre ressource
        if ($annonce->chapters()->exists()) {
            return redirect()->route('admin.annonces.index')->with('danger','L\'annonce est utilisée dans une autre ressource et ne peut donc pas être modifiée.');
        }
        elseif ($annonce->sessions()->exists()) {
            return redirect()->route('admin.annonces.index')->with('danger','L\'annonce est utilisée dans une autre ressource et ne peut donc pas être modifiée.');
        }
        else {
        $annonce->update([
            'status' => !$annonce->status
        ]);

        return redirect()->route('admin.annonces.index')->with('success', 'Formation mise à jour avec succès');
        }
    }

    /**
     * AllStatus
     *
     * @param  \App\Models\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */

    public function allStatus(Request $request)
    {
         // Récupérer la valeur du switch (all_status)
         $allStatus = $request->input('allstatus');

        // Vérifier si le switch est coché (valeur du checkbox est '1')
         if ($allStatus === '1') {
        // Mettre à jour toutes le'annonces en utilisant une requête SQL
        Annonce::query()->update(['allstatus' => true]);

        $annonces  = Annonce::with('category', 'user')->latest()->get();
        // Total number of annonce
        $totalAnnonces = Annonce::all()->count();
        // Total number of active status
        $activeCount = DB::table('annonces')->where('status', true)->count();
        // Total number of inactive status
        $inactiveCount = DB::table('annonces')->where('status', false)->count();

        //Nombre de  ...
        //$numberOfCategories = DB::table('categories')->count();

        // Rediriger vers la route de la liste de'annonces avec un message de succès
        return view('admin.annonces.index', compact('annonces', 'totalAnnonces', 'activeCount', 'inactiveCount'))->with('success', 'Requête validée');
        }
        else
        {
        // Mettre à jour toutes le'annonces en utilisant une requête SQL
        Annonce::query()->update(['allstatus' => false]);
        return redirect()->route('admin.annonces.index')->with('success', 'Requête validée');
        }
    }
}
