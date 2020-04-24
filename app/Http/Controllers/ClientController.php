<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('fidelizsms.dashboard');
    }

    public function repertoire()
    {
        return view('fidelizsms.repertoire');
    }

    public function listecampagnes()
    {
        return view('fidelizsms.liste-campagnes');
    }

    public function nouvellecampagne()
    {
        return view('fidelizsms.new-campagne');
    }

    public function listecontact()
    {
        return view('fidelizsms.liste-contact');
    }

    public function ajoutercontact()
    {
        return view('fidelizsms.add-contact');
    }

    public function detailscampagne()
    {
        return view('fidelizsms.details-campagnes');
    }

    public function confirmcampagne()
    {
        return view('fidelizsms.confirmation-page');
    }

    public function profileclients()
    {
        return view('fidelizsms.profile-clients');
    }

    public function ajoutersouscompte()
    {
        return view('fidelizsms.add-sous-compte');
    }

    public function listesouscompte()
    {
        return view('fidelizsms.liste-sous-compte');
    }

    public function listerecharge()
    {
        return view('fidelizsms.liste-recharge');
    }

    public function rechargesouscompte()
    {
        return view('fidelizsms.recharge-souscompte');
    }

    public function demanderecharge()
    {
        return view('fidelizsms.demande-recharge');
    }

    public function listerapports()
    {
        return view('fidelizsms.liste-rapport');
    }

    public function createrapport()
    {
        return view('fidelizsms.new-rapport');
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
