<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Validator;

class ClientController extends Controller
{
    public function clients(){
        $clients = Client::get();
        return view('clients', ['clients' => $clients]);
    }
    public function create(){
       
        return view('create_cl');
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            
            'nom' => 'required',
            'prenom' => 'required',
            'genre' => 'required',
            'tel' => 'required',
            'adresse' => 'required',
            
        ]);
        if($validator->passes()){
            $client = new Client();
           
            $client->nom = $request->nom;
            $client->prenom = $request->prenom;
            $client->genre = $request->genre;
            $client->tel = $request->tel;
            $client->adresse = $request->adresse;
            
            // dd($voiture);
            $save = $client->save();

            // if($request->image){
            //     $ext = $request->image->getClientOriginalExtension();
            //     $newFileName = time().rand().'.'.$ext;
            //     $request->image->move(public_path().'/images/voitures/', $newFileName);
            //     $voiture->image = $newFileName;
            //     $save = $voiture->save();
            // }
            
            if($save){
                $request->session()->flash('success', 'La voiture est enregistrer avec succes...!');
                return redirect()->route('list.client');
            }

        }else{
            return redirect()->route('list.client')->withErrors($validator);
        }
    }


    public function edit($id){
        $client = Client::findOrFail($id);
        return view('edit_cl' , ['client' => $client]);
    }

    public function update(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'nom' => 'required',
            'prenom' => 'required',
            'genre' => 'required',
            'tel' => 'required',
            'adresse' => 'required',
        ]);
        // dd($request->prenom);
        if($validator->passes()){
            $client = Client::find($id);
            // $client = new Client();
           
            $client->nom = $request->nom;
            $client->prenom = $request->prenom;
            $client->genre = $request->genre;
            $client->tel = $request->tel;
            $client->adresse = $request->adresse;
            
            
            $save = $client->save();
            dd($request->nom);

            if($save){
                $request->session()->flash('success', 'Le client a été modifié avec succes...!');
                return redirect()->route('list.client');
            }
            

        }else{
            return redirect()->route('list.client')->withErrors($validator);
        }

        
    }

    public function destroy(Request $request, $id){
        $client = Client::findOrFail($id);
        $client->delete();

        $request->session()->flash('success', 'Le client a été supprimé avec succés...!');
        return redirect()->route('list.client');
    }

}




