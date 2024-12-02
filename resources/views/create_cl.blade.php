@extends('layouts')
@section('content')
    <section id="about">
        <div class="container">

        <div class="container my-5">

            <div class="container my-5 row">
        <div class="col-md-4"></div>
        <div class="col-md-6 card">
            <h4 >Ajouter un nouveau client</h4>


            <form method="POST" action="{{route('store.client')}}" enctype="multipart/form-data">

                @csrf

                

                <div class="mb-3">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" name="nom" class="form-control" id="nom" placeholder="Entrer le nom du client" required>
                </div>
                <div class="mb-3">
                    <label for="prenom" class="form-label">Prenom</label>
                    <input type="text" name="prenom" class="form-control" id="prenom" placeholder="Entrer le prenom du client" required>
                </div>

                <div class="mb-3">
                    <label for="genre" class="form-label">Genre</label>
                    <input type="text" name="genre" class="form-control" id="genre" placeholder="Entrer le genre du client" required>
                </div>

                <div class="mb-3">
                    <label for="tel" class="form-label">Telephone</label>
                    <input type="text" name="tel" class="form-control" id="tel" placeholder="Entrer le telephone du client" required>
                </div>
                <div class="mb-3">
                    <label for="adresse" class="form-label">Adresse</label>
                    <input type="text" name="adresse" class="form-control" id="adresse" placeholder="Entrer l'adresse du client'" required>
                </div>

                {{-- <div class="mb-3">
                    <label for="image   " class="form-label">Image</label>
                    <input type="file" name="image" class="form-control" id="image" placeholder="Enter l'image de la voiture">
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
