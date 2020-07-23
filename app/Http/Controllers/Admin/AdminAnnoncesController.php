<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Repositories\AdRepository;
use Illuminate\Support\Facades\DB;
use App\{ Annonce,Type,Identite,Region };


class AdminAnnoncesController extends Controller
{
     /**
     * Ad repository.
     *
     * @var App\Repositories\AdRepository
     */
    protected $adRepository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(AdRepository $adRepository)
    {
        $this->adRepository = $adRepository;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $annonces = Annonce::where('valides', 1)->orderBy('id', 'DESC')->paginate(12);

       return view('backend.admin.annonces.index', compact('annonces'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, Annonce $annonce)
   {
    $types = Type::all();
    $identites = Identite::all();
    $regions = Region::all();

    return view('backend.admin.annonces.create',compact('types','identites','regions'));

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
            return redirect()->route('products.annonces.index')->withSuccess('Votre annonce est ajouté avec succès dit boco'); 
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $annonce = Annonce::find($id);

        return view('backend.admin.annonces.show',compact('annonce'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
   {
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Annonce::find($id)->delete();

       return redirect('/annonces/posts');
    }
}
