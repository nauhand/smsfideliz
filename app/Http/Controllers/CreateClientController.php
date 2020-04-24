<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Webmozart\Assert\regex;
use App\User;
use Illuminate\Support\Facades\Hash;

class CreateClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        // recuperation des utilisateurs et comptage
        $data_users = User::where('id', '!=', 0)->orderBy('created_at', 'desc')->get();
        $users_size = $data_users->count();

        // recuperation des utilisateurs actifs et comptage
        $active_users = User::where('id', '!=', 0)->where('statut', '=', 'activé')->orderBy('created_at', 'desc')->get();
        $active = $active_users->count();

        // recuperation des utilisateurs inactifs et comptage
        $inactive_users = User::where('id', '!=', 0)->where('statut', '=', 'desactivé')->orderBy('created_at', 'desc')->get();
        $inactive = $inactive_users->count();

        return view('fidelizsms.liste-clients',['users' => $data_users])
        ->withCount($users_size)
        ->withDisponible($active)
        ->withIndisponible($inactive);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nom' => ['required', 'string', 'max:255'],
            'prenoms' => ['required', 'string', 'max:255'],
            'telephone' => ['required', 'unique:users,telephone'],
            'email' => ['required', 'unique:users,email', 'email'],
            'pays' => ['required', 'string'],
            'entreprise' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users,username', 'regex:/^\S*$/u'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'image' => ['required','image', 'mimes:jpeg,png,jpg'],
        ]);

        $user = new User();

        //Ajout d'un image dans le réperoire défini
        $imageName = $request->input('nom') . '_' . $request->input('username') . '.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(base_path() . '/public/ClientsImages', $imageName);

        //dd($imageName); die();

        // insertion en base de données
        $user->nom = $request->input('nom');
        $user->prenoms = $request->input('prenoms');
        $user->telephone = $request->input('telephone');
        $user->email = $request->input('email');
        $user->pays = $request->input('pays');
        $user->entreprise = $request->input('entreprise');
        $user->username = $request->input('username');
        $user->password = Hash::make($request->input('password'));
        $user->image = $imageName;
        $user->statut = "activé";

        $is_saved = $user->save();

        //verification de l'insertion et redirection sur la page concernée
        if ($is_saved) {

            toastr()->success('Nouveau client enregistré avec succès !');
            return redirect()->route('liste-clients');
            
        }else{

            toastr()->error('Nouveau client non enregistré !');
            return back();
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
        $value = User::find($id);
        return view('fidelizsms.details-clients', compact('value'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $value = User::find($id);
        return view('fidelizsms.update-clients', compact('value'));
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
