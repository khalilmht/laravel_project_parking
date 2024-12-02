<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Voitures;

use validor;
use App\Models\Client;
use DB;
use Illuminate\Support\Facades\Validator;

class VoitureController extends Controller
{
    public function voitures(){

        $voitures = DB::table('voitures')
                ->join('clients','voitures.client_id','=','clients.id')
                ->select('clients.*', 'voitures.*')
                // ->where(['voitures.id' => $id])
                ->get();

        return view('voitures', ['voitures' => $voitures]);
    }

    public function create(){
        $clients = Client::get();
        return view('create', ['clients' => $clients]);
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            
            'marque' => 'required',
            'type' => 'required',
            'prix' => 'required',
            'description' => 'required',
            'client_id' => 'required',
        ]);
        // dd($request->client_id);

        if($validator->passes()){
            $voiture = new Voitures();
           
            $voiture->marque = $request->marque;
            $voiture->type = $request->type;
            $voiture->prix = $request->prix;
            $voiture->description = $request->description;
            $voiture->client_id = $request->client_id;
            //  dd($request->client_id);
            // dd($voiture);
            $save = $voiture->save();

            if($request->image){
                $ext = $request->image->getClientOriginalExtension();
                $newFileName = time().rand().'.'.$ext;
                $request->image->move(public_path().'/images/voitures/', $newFileName);
                $voiture->image = $newFileName;
                $save = $voiture->save();
            }
            
            if($save){
                $request->session()->flash('success', 'La voiture est enregistrer avec succes...!');
                return redirect()->route('list.voitures');
            }

        }else{
            return redirect()->route('list.voitures')->withErrors($validator);
        }
    }

    public function facture($id){
        $voiture = DB::table('voitures')
        ->join('clients','voitures.client_id','=','clients.id')
        ->select('clients.*', 'voitures.*')
                ->where(['voitures.id' => $id])
                ->get();

        return view('facture', ['voiture' => $voiture[0]]);
    }


    public function edit($id){
        $voiture = Voitures::findOrFail($id);
        return view('edit_vr' , ['voiture' => $voiture]);
    }

    public function update(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'marque' => 'required',
            'type' => 'required',
            'prix' => 'required',
            'client_id' => 'required',
        ]);

        if($validator->passes()){
            $voiture = Voiture::find($id);
            $voiture->marque = $request->marque;
            $voiture->type = $request->type;
            $voiture->prix = $request->prix;
            $voiture->description = $request->description;
            $voiture->client_id = $request->client_id;
            $save = $voiture->save();

            if($save){
                $request->session()->flash('success', 'La voiture a été modifié avec succés...!');
                return redirect()->route('list.voitures');
            }

        }else{
            return redirect()->route('list.voitures')->withErrors($validator);
        }
    }


    public function destroy(Request $request, $id){
        $voiture = Voitures::findOrFail($id);
        $voiture->delete();

        $request->session()->flash('success', 'La voiture a été supprimé avec succés...!');
        return redirect()->route('list.voitures');
    }


}
