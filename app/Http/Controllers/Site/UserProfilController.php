<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\{ Annonce, Identite, Region, User, Type };

class UserProfilController extends Controller
{
   
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       $user = Auth::user();
       
       $annonces = $user->annonces()->orderBy('created_at','desc')->paginate(5);
   
        return view('site.profils.index', compact('annonces'));
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
   {
    $identites = Identite::all();
    $types = Type::all();
    $regions = Region::all();

    return view('site.profils.create', compact('identites', 'types', 'regions'));

    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'title'    =>  'required|min:3',
            'description'     =>  'required|min:10',
            'price'     =>  'required',
            'region_id' => 'required',
            'identite_id' => 'required',
            'type_id' => 'required'
        ]);

         // dd(request()->all());
         $annonce = new Annonce();
         $annonce->region_id = $request->region_id;
         $annonce->identite_id = $request->identite_id;
         $annonce->type_id = $request->type_id;
         $annonce->title = $request->title;
         $annonce->description = $request->description;
         $annonce->price = $request->price;
         $annonce->name = auth()->check() ? auth()->user()->name :$request->name;
         $annonce->email = auth()->check() ? auth()->user()->email : $request->email;
         $annonce->image('image', $annonce);
         $annonce->photo('photo', $annonce);
         $annonce->media('media', $annonce);
         $annonce->upload('upload', $annonce);
         $annonce->fichier('fichier', $annonce);
         $annonce->user_id = Auth()->user()->id;
         if ($annonce->save()) {
            return redirect()->route('site.profils.index')->withSuccess('Votre annonce est ajouté avec succès dit boco'); 
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Annonce $annonce)
    {
       

    return view('site.profils.show', compact('annonce'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Annonce $annonce)
    {
        $identites = Identite::all();
        $types = Type::all();
        $regions = Region::all();

        return view('site.profils.edit', compact('identites', 'annonce', 'types', 'regions'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Annonce $annonce)
    {
         $annonce->region_id = $request->region_id;
         $annonce->identite_id = $request->identite_id;
         $annonce->type_id = $request->type_id;
         $annonce->title = $request->title;
         $annonce->description = $request->description;
         $annonce->price = $request->price;
         $annonce->name = auth()->check() ? auth()->user()->name :$request->name;
         $annonce->email = auth()->check() ? auth()->user()->email : $request->email;
         $annonce->image('image', $annonce);
         $annonce->photo('photo', $annonce);
         $annonce->media('media', $annonce);
         $annonce->upload('upload', $annonce);
         $annonce->fichier('fichier', $annonce);
         $annonce->user_id = Auth()->user()->id;
         if ($annonce->save()) {
            return redirect()->route('site.profils.index')->withSuccess('Votre annonce a été modifié avec Succès ');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Annonce $annonce)
    {
        if ($annonce->delete()) {
            return redirect()->route('site.profils.index')->withDanger('Votre annonce a été supprimée avec Succès ');
        }
        //
    }
}

 