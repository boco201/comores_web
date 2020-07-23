<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\{ Annonce,Type,Identite,Region };

class AdminValidesController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $annonces = Annonce::where('valides', 0)->paginate(12); 

        return view('backend.admin.valides.index', compact('annonces'));
    }

      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function occitanie()
    {      
           $annonces = Region::find(1)
        ->annonces()->where('valides', 0)
        ->orderBy('id', 'DESC')->paginate(12);


        return view('backend.admin.valides.occitanie', compact('annonces'));
    }

   
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function paysdelaloire()
    {      
           $annonces = Region::find(2)
        ->annonces()->where('valides', 0)
        ->orderBy('id', 'DESC')->paginate(12);


        return view('backend.admin.valides.paysdelaloire', compact('annonces'));
    }

    
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function bretagne()
    {      
           $annonces = Region::find(3)
        ->annonces()->where('valides', 0)
        ->orderBy('id', 'DESC')->paginate(12);


        return view('backend.admin.valides.bretagne', compact('annonces'));
    }

         /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function centre()
    {      
           $annonces = Region::find(4)
        ->annonces()->where('valides', 0)
        ->orderBy('id', 'DESC')->paginate(12);


        return view('backend.admin.valides.centre', compact('annonces'));
    }

   
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function normandie()
    {      
           $annonces = Region::find(5)
        ->annonces()->where('valides', 0)
        ->orderBy('id', 'DESC')->paginate(12);


        return view('backend.admin.valides.normandie', compact('annonces'));
    }

    
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function iledefrance()
    {     
           $annonces = Region::find(6)
        ->annonces()->where('valides', 0)
        ->orderBy('id', 'DESC')->paginate(12);


        return view('backend.admin.valides.iledefrance', compact('annonces'));
    }

          /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function hautsdefrance()
    {      
           $annonces = Region::find(7)
        ->annonces()->where('valides', 0)
        ->orderBy('id', 'DESC')->paginate(12);


        return view('backend.admin.valides.hautsdefrance', compact('annonces'));
    }

   
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function grandest()
    {      
           $annonces = Region::find(8)
        ->annonces()->where('valides', 0)
        ->orderBy('id', 'DESC')->paginate(12);


        return view('backend.admin.valides.grandest', compact('annonces'));
    }

    
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function bourgogne()
    {      
           $annonces = Region::find(9)
        ->annonces()->where('valides', 0)
        ->orderBy('id', 'DESC')->paginate(12);


        return view('backend.admin.valides.bourgogne', compact('annonces'));
    }

         /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function auvergne()
    {      
           $annonces = Region::find(10)
        ->annonces()->where('valides', 0)
        ->orderBy('id', 'DESC')->paginate(12);


        return view('backend.admin.valides.auvergne', compact('annonces'));
    }

   
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function provence()
    {      
           $annonces = Region::find(11)
        ->annonces()->where('valides', 0)
        ->orderBy('id', 'DESC')->paginate(12);


        return view('backend.admin.valides.provence', compact('annonces'));
    }

    
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function corse()
    {      
           $annonces = Region::find(12)
        ->annonces()->where('valides', 0)
        ->orderBy('id', 'DESC')->paginate(12);


        return view('backend.admin.valides.corse', compact('annonces'));
    }


      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function aquitaine()
    {      
           $annonces = Region::find(13)
        ->annonces()->where('valides', 0)
        ->orderBy('id', 'DESC')->paginate(12);


        return view('backend.admin.valides.aquitaine', compact('annonces'));
    }






    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

      /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Annonce $annonce)
    {
        $annonce->update([
         'valides' => request()->has('valides')
        ]);

        return back();
    }

      /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Annonce $annonce)
    {
        $annonce->delete();

        return redirect('/annonces/valides');
    }
}
