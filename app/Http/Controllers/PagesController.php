<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function login()
    {
    	return view('auth.login');
    }

    public function dashboard()
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

    public function ajouterclients()
    {
        return view('fidelizsms.add-clients');
    }

    public function listeclients()
    {
        return view('fidelizsms.liste-clients');
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

    public function rechargecompte()
    {
        return view('fidelizsms.recharge-compte');
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
}
