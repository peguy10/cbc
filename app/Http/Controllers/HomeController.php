<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\Array_;
use App\Models\User;
use App\Models\Association;
use App\Models\Cotisation;
use App\Models\Periode;

use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users_count = User::count();
        $periode_count = Periode::count();
        return view('home',compact('users_count','periode_count'));
    }
    public function GenerateAss(){
        $mat=mt_rand(99999, 999999);
        $name = "Association_".$mat;
        $email = "info".$mat."@inov.cm";
        $save = new Association();
        $save->name=$name;
        $save->email=$email;
        $save->phone="690785465";
        $save->adresse="Douala Cameroun";
        $save->pays="Cameroun";
        $save->but="inov association pour creer une association";
        $save->ref_bank="CBC";
        $save->agrement="agrement 1";
        $save->num_com="67983536663233";
        $save->siret="960594";
        $save->code_naf="NAF235";
        $save->reg_com="REG125";
        $save->save();
        return redirect()->back();
    }

    public function Adherant(Request $request){
        $count=User::all()->count();
        $num = $count+1;
	$imageName ="inov.png";
        if($request->photo){
        $imageName = $request->name."".$num.'.'.$request->photo->extension();

        $request->photo->move(public_path('images'), $imageName);

	}

        $mat=mt_rand(99999, 999999);
        $save=new User();
            $save->name= $request->name;
            $save->email= $request->email;
            $save->adresse= $request->adresse;
            $save->phone= $request->phone;
            $save->bank= $request->bank;
            $save->typeAdherent_id= $request->typeAdherent_id;
            $save->hbd= $request->hbd;
            $save->photo= $imageName;
            $save->pays= $request->pays;
            $save->civilite= $request->civilite;
            $save->matricule=$mat;
            $save->password= Hash::make($request->password);
        $save->save();
        return redirect()->back();
    }

    public function cotisationP(Request $request){
        $id=$request->period_id;
        $periodes=Periode::latest()->get();
        $cotisations = Cotisation::where('periode_id',$id)->get();
        $users=user::latest()->get();
        return view('Pages.cotisations',compact('periodes','users','cotisations'))->with('message', 'IT WORKS!'); 
    }
}
