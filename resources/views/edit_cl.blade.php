@extends('layouts')
@section('content')
    <section id="about">
        <div class="container">

            <div class="container my-5">
                <div class="container my-5 row">
                    <div class="col-md-4"></div>
                    <div class="col-md-6 card">
                        <h4 >Modifier une voiture</h4>


                        <form method="POST" action="{{route('update.client', $client->id)}}" >

                        

                            @csrf
                            @method('put')

                           
                            <div class="mb-3">
                                <label for="nom" class="form-label">Nom</label>
                                <input type="text" name="nom" class="form-control" id="nom" value="{{$client->nom}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="prenom" class="form-label">Prenom</label>
                                <input type="text" name="prenom" class="form-control" id="prenom" value="{{$client->prenom}}" required>
                            </div>
            
                            <div class="mb-3">
                                <label for="genre" class="form-label">Genre</label>
                                <input type="text" name="genre" class="form-control" id="genre" value="{{$client->genre}}" required>
                            </div>
            
                            <div class="mb-3">
                                <label for="tel" class="form-label">Telephone</label>
                                <input type="text" name="genre" class="form-control" id="genre" value="{{$client->tel}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="adresse" class="form-label">Adresse</label>
                                <input type="text" name="adresse" class="form-control" id="adresse" value="{{$client->adresse}}" required>
                            </div>
            
            
{{-- 
                            @foreach($voiture as $voiture)
    <div class="mb-3 row">
        <label for="client_id" class="col-sm-2 col-form-label">{{ $voiture->id }}</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" id="client_id" name="client_id" value="{{ $type->price }}">
        </div>
    </div>
@endforeach --}}

            
                            
                         {{-- <div class="mb-3">
                     <label for="client_id" class="form-label">Choisir le client</label>    
                    
                     <select name="client_id"> 
                        @foreach ($voiture as $voiture) <option value="{{ $voiture->id }}" {{ $selectedId == $voiture->id ? 'selected' : '' }}> {{ $option->nom }} 
                        </option> @endforeach </select>
                    </div> --}}

            
                            {{-- <div class="mb-3">
                                <label for="image   " class="form-label">Image</label>
                                <input type="file" name="image" class="form-control" id="image"  value="{{$voiture->image}}">
                            </div> --}}
            
                            <div class="flex-end" >
                                <button type="submit" class="btn btn-primary mb-3 mx-3">Soumettre</button>
                                <a href="index.php" class="btn btn-outline-warning mb-3">Annuler</a>
                            </div>
            
                        </form>
            
                    </div>
                </div>
            </div>
        </div>
    </section><!-- #about -->
@endsection
