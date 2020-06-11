<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Admin;
use App\Subuser;
use Auth;

class ProfileClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth:web,subuser,admin');
    }


    public function index()
    {
        //dd(Auth::user()); die();

        if (Auth::guard()->check()) {

            $value = Auth::user();

        }elseif (Auth::guard('admin')->check()) {

            $value = Auth::user();

        }elseif (Auth::guard('subuser')->check()) {

            $value = Auth::user();

        }

        return view('fidelizsms.profile-clients', compact('value'));
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
        $this->validate($request,[
            'nom' => ['required', 'string', 'max:255'],
            'prenoms' => ['required', 'string', 'max:255'],
            'telephone' => ['required', 'unique:users,telephone,'.$id],
            'email' => ['required', 'unique:users,email,'.$id, 'email'],
            'pays' => ['required', 'string'],
            'entreprise' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users,username,'.$id, 'regex:/^\S*$/u'],
            'image' => ['image', 'mimes:jpeg,png,jpg'],
        ]);

        if ($request->hasFile('image')) {

        $imageName = $request->input('nom') . '_' . $request->input('username') . '.' . $request->file('image')->getClientOriginalExtension();
                $request->file('image')->move(base_path() . '/public/ClientsImages', $imageName);

             $image = $imageName;
        
        }else{

            $image = "user.png";
        }

        $nom = $request->input('nom');
        $prenoms = $request->input('prenoms');
        $telephone = $request->input('telephone');
        $email = $request->input('email');
        $pays = $request->input('pays');
        $entreprise = $request->input('entreprise');
        $username = $request->input('username');

        // mise à jour de l'utilisateur
        $data = array('nom'=>$nom,
                    'prenoms'=>$prenoms, 
                'telephone'=>$telephone,
                 'email'=>$email,
                  'pays'=>$pays,
                  'entreprise'=>$entreprise,
                  'username'=>$username,
                  'image'=>$image);

        $is_update = DB::table('users')->where('id', $id)->update($data);

        if ($is_update) {

            Session::flash('success', 'Enregistrement éffectué !');
            return redirect()->route('profile-clients');
            
        }else{

            Session::flash('error', 'Mise à jour non effectué !');

            return back();
        }
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
