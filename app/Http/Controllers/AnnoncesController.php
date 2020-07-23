<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Repositories\AdRepository;
use App\{ Annonce,Type,Identite,Region };

class AnnoncesController extends Controller
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
         $annonces = Annonce::where('valides', 1)->orderBy('id', 'DESC')->paginate(6);

        return view('frontend.web.annonces.index',compact('annonces'));
    }

      public function search(Request $request){

        $searchText = $request->get('searchText');
        $annonces = Annonce::where('title',"Like",$searchText."%")->paginate(2);

        return view('frontend.web.annonces.index',compact('annonces','uploads'));
    }

      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function occitanie()
    {      
           $annonces = Region::find(1)
        ->annonces()->where('valides', 1)
        ->orderBy('id', 'DESC')->paginate(12);


        return view('frontend.web.annonces.regions.occitanies', compact('annonces'));
    }


    
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function paysdelaloire()
    {      
           $annonces = Region::find(2)
        ->annonces()->where('valides', 1)
        ->orderBy('id', 'DESC')->paginate(12);


        return view('frontend.web.annonces.regions.paysdelaloires', compact('annonces'));
    }

      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function bretagne()
    {      
           $annonces = Region::find(2)
        ->annonces()->where('valides', 1)
        ->orderBy('id', 'DESC')->paginate(12);


        return view('frontend.web.annonces.regions.bretagnes', compact('annonces'));
    }



      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function centre()
    {      
           $annonces = Region::find(1)
        ->annonces()->where('valides', 1)
        ->orderBy('id', 'DESC')->paginate(12);


        return view('frontend.web.annonces.regions.centres', compact('annonces'));
    }


      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function normandie()
    {      
           $annonces = Region::find(2)
        ->annonces()->where('valides', 1)
        ->orderBy('id', 'DESC')->paginate(12);


        return view('frontend.web.annonces.regions.normandies', compact('annonces'));
    }


      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function iledefrance()
    {      
           $annonces = Region::find(2)
        ->annonces()->where('valides', 1)
        ->orderBy('id', 'DESC')->paginate(12);


        return view('frontend.web.annonces.regions.iledefrances', compact('annonces'));
    }


      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function hautsdefrance()
    {      
           $annonces = Region::find(1)
        ->annonces()->where('valides', 1)
        ->orderBy('id', 'DESC')->paginate(12);


        return view('frontend.web.annonces.regions.hautsdefrances', compact('annonces'));
    }


      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function grandest()
    {      
           $annonces = Region::find(2)
        ->annonces()->where('valides', 1)
        ->orderBy('id', 'DESC')->paginate(12);


        return view('frontend.web.annonces.regions.grandests', compact('annonces'));
    }


    
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function bourgogne()
    {      
           $annonces = Region::find(1)
        ->annonces()->where('valides', 1)
        ->orderBy('id', 'DESC')->paginate(12);


        return view('frontend.web.annonces.regions.bourgognes', compact('annonces'));
    }


      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function auvergne()
    {      
           $annonces = Region::find(1)
        ->annonces()->where('valides', 1)
        ->orderBy('id', 'DESC')->paginate(12);


        return view('frontend.web.annonces.regions.auvergnes', compact('annonces'));
    }


      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function provence()
    {      
           $annonces = Region::find(2)
        ->annonces()->where('valides', 1)
        ->orderBy('id', 'DESC')->paginate(12);


        return view('frontend.web.annonces.regions.provences', compact('annonces'));
    }


    
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function corse()
    {      
           $annonces = Region::find(1)
        ->annonces()->where('valides', 1)
        ->orderBy('id', 'DESC')->paginate(12);


        return view('frontend.web.annonces.regions.corses', compact('annonces'));
    }

     
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function aquitaine()
    {      
           $annonces = Region::find(1)
        ->annonces()->where('valides', 1)
        ->orderBy('id', 'DESC')->paginate(12);


        return view('frontend.web.annonces.regions.aquitaines', compact('annonces'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Annonce $annonce, $slug)
    {

        return view('frontend.web.annonces.show', compact('annonce'));
    }


      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ventesimmobilieres()
    {      
           $annonces = Type::find(2)
        ->annonces()->where('valides', 1)
        ->orderBy('id', 'DESC')->paginate(12);


        return view('frontend.web.annonces.immobiliers.ventesimmobilieres', compact('annonces'));
    }


      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function locationsimmobilieres()
    {      
           $annonces = Type::find(1)
        ->annonces()->where('valides', 1)
        ->orderBy('id', 'DESC')->paginate(12);


        return view('frontend.web.annonces.immobiliers.locationsimmobilieres', compact('annonces'));
    }


    
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function colocations()
    {      
           $annonces = Type::find(2)
        ->annonces()->where('valides', 1)
        ->orderBy('id', 'DESC')->paginate(12);


        return view('frontend.web.annonces.immobiliers.colocations', compact('annonces'));
    }


      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function bureauxcommerces()
    {      
           $annonces = Type::find(1)
        ->annonces()->where('valides', 1)
        ->orderBy('id', 'DESC')->paginate(12);


        return view('frontend.web.annonces.immobiliers.bureauxcommerces', compact('annonces'));
    }


      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function citadines()
    {      
           $annonces = Type::find(1)
        ->annonces()->where('valides', 1)
        ->orderBy('id', 'DESC')->paginate(12);


        return view('frontend.web.annonces.vehicules.citadines', compact('annonces'));
    }


      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function monospaces()
    {      
           $annonces = Type::find(2)
        ->annonces()->where('valides', 1)
        ->orderBy('id', 'DESC')->paginate(12);


        return view('frontend.web.annonces.vehicules.monospaces', compact('annonces'));
    }


      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function berlines()
    {      
           $annonces = Type::find(1)
        ->annonces()->where('valides', 1)
        ->orderBy('id', 'DESC')->paginate(12);


        return view('frontend.web.annonces.vehicules.berlines', compact('annonces'));
    }


      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function utilitaires()
    {      
           $annonces = Type::find(1)
        ->annonces()->where('valides', 1)
        ->orderBy('id', 'DESC')->paginate(12);


        return view('frontend.web.annonces.vehicules.utilitaires', compact('annonces'));
    }


    
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function camions()
    {      
           $annonces = Type::find(1)
        ->annonces()->where('valides', 1)
        ->orderBy('id', 'DESC')->paginate(12);


        return view('frontend.web.annonces.vehicules.camions', compact('annonces'));
    }


      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function quatrequatre()
    {      
           $annonces = Type::find(2)
        ->annonces()->where('valides', 1)
        ->orderBy('id', 'DESC')->paginate(12);


        return view('frontend.web.annonces.vehicules.quatrequatre', compact('annonces'));
    }


      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function informatique()
    {      
           $annonces = Type::find(1)
        ->annonces()->where('valides', 1)
        ->orderBy('id', 'DESC')->paginate(12);


        return view('frontend.web.annonces.multimedias.informatique', compact('annonces'));
    }


    
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function jeuxvideos()
    {      
           $annonces = Type::find(2)
        ->annonces()->where('valides', 1)
        ->orderBy('id', 'DESC')->paginate(12);


        return view('frontend.web.annonces.multimedias.jeuxvideos', compact('annonces'));
    }

     
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sonimage()
    {      
           $annonces = Type::find(2)
        ->annonces()->where('valides', 1)
        ->orderBy('id', 'DESC')->paginate(12);


        return view('frontend.web.annonces.multimedias.sonimage', compact('annonces'));
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function smarphonetelephonie()
    {      
           $annonces = Type::find(2)
        ->annonces()->where('valides', 1)
        ->orderBy('id', 'DESC')->paginate(12);


        return view('frontend.web.annonces.multimedias.smarphonetelephonie', compact('annonces'));
    }


    
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function groselectromenagers()
    {      
           $annonces = Type::find(1)
        ->annonces()->where('valides', 1)
        ->orderBy('id', 'DESC')->paginate(12);


        return view('frontend.web.annonces.maisons.groselectromenagers', compact('annonces'));
    }

     
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function petitselectromenagers()
    {      
           $annonces = Type::find(1)
        ->annonces()->where('valides', 1)
        ->orderBy('id', 'DESC')->paginate(12);


        return view('frontend.web.annonces.maisons.petitselectromenagers', compact('annonces'));
    }


      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function deco()
    {      
           $annonces = Type::find(2)
        ->annonces()->where('valides', 1)
        ->orderBy('id', 'DESC')->paginate(12);


        return view('frontend.web.annonces.maisons.deco', compact('annonces'));
    }

      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mobiliers()
    {      
           $annonces = Type::find(1)
        ->annonces()->where('valides', 1)
        ->orderBy('id', 'DESC')->paginate(12);


        return view('frontend.web.annonces.maisons.mobiliers', compact('annonces'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
