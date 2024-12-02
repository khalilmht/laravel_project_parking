@extends('layouts')
@section('content')
    <section id="about">
        <div class="container">

        <div class="container my-5">
            {{-- <h4>Nouvelle Voiture</h4> --}}

            <div class="container my-5 row">
        <div class="col-md-4"></div>
        <div class="col-md-6 card">
            <h4 >Ajouter une voiture</h4><br><br>


            <form method="POST" action="{{route('store.voitures')}}" enctype="multipart/form-data">

                @csrf


                <div class="mb-3">
                    <label for="marque" class="form-label">Marque</label>
                    <input type="text" name="marque" class="form-control" id="marque" placeholder="Entrer la marque de la voiture" required>
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" name="type" class="form-control" id="type" placeholder="Entrer le type de la voiture" required>
                </div>

                <div class="mb-3">
                    <label for="prix" class="form-label">prix</label>
                    <input type="text" name="prix" class="form-control" id="prix" placeholder="Entrer prix de la voiture" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" name="description" class="form-control" id="description" placeholder="Entrer la description de la voiture" required>
                </div>

                <div class="mb-3">
                    <label for="client_id" class="form-label">Choisir le client</label>
                    <select name="client_id" class="form-control" id="client_id">
                        <!-- <option>Choisir la Matiere</option> -->
                        @foreach($clients as $client)
                            <option value="{{$client->id}}">{{$client->nom}}</option>
                        @endforeach
                    </select>                    
                </div>

                <div class="mb-3">
                    <label for="image   " class="form-label">Image</label>
                    <input type="file" name="image" class="form-control" id="image" placeholder="Enter l'image de la voiture">
                </div>

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
