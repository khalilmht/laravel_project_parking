@extends('layouts')
@section('content')
    <section id="about">
        <div class="container">

        <div class="container my-5">
    <h4>liste des voitures</h4>

            <div class="flex-end" >
            <a href="{{route('create.voitures')}}" class="btn btn-sm btn-primary float-right">Nouveau</a>
            </div>

            @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show">
                {{Session::get('success')}}
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            @endif

            <table class="table table-hover table-responsive">
                    <thead>
                    <tr>
                   
                    <th scope="col">Ref</th>
                    <th scope="col">Date</th>
                    <th scope="col">Client</th>
                   
                    <th scope="col">Marque</th>
                    <th scope="col">Type</th>
                    <th scope="col">Prix</th>
                       
                        <th scope="col">Image</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach($voitures as $voiture)
                            <tr valign="middle">
                                    <td>{{$voiture ->id}}</td>
                                    <td>{{$voiture ->created_at}}</td>
                                    <td>{{$voiture -> nom}}</td>
                                  
                                    <td>{{$voiture -> marque}}</td>
                                    <td>{{$voiture -> type}}</td>
                                    <td>{{$voiture -> prix}}</td>
                                   
                                    <td>
                                        @if($voiture -> image != '' && file_exists(public_path().'/images/voitures/'.$voiture -> image))
                                            <img src="{{url('images/voitures/'.$voiture -> image)}}" alt="" width="40" height="50"
                                                class="rounded-circle">
                                        @else
                                            <img src="{{url('assets/images/profile.jpeg')}}" alt="" width="40" height="40"
                                                 class="rounded-circle">
                                        @endif

                                    </td>
                        
                                    <td>
                                    <a class='btn btn-sm btn-outline-primary' href='{{route('facture.client', $voiture ->id)}}' role='button'>Facture</a>
                                    <a class='btn btn-sm btn-outline-warning' href='{{route('edit.voiture', $voiture ->id)}}' role='button'>Editer</a>
                                    
                                    {{-- <a class='btn btn-sm btn-outline-danger' href='#' role='button' onClick="return confirm('Delete This account?')">Supprimer</a> --}}

                                    <a class='btn btn-sm btn-outline-danger' href='#'  role='button' onClick="deleteVoiture({{$voiture ->id}});">Supprimer</a>
          
                                    <form action="{{route('delete.voiture', $voiture ->id)}}" method="post" id="delete-{{$voiture->id}}">
                                    @csrf
                                                @method('delete')

                                   </form>
                                </td>
                            

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section><!-- #about -->

    <script>
        function deleteVoiture(id) {
            if(confirm('Etes vous sure de vouloir supprimer cette enregistrement ?')){
                document.getElementById('delete-' + id).submit();
            }
        }
    </script>

@endsection
