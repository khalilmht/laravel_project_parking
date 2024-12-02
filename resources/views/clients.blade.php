@extends('layouts')
@section('content')
    <section id="about">
        <div class="container">

        <div class="container my-5">
    <h4>liste des clients</h4>

            <div class="flex-end" >
            <a href="{{route('create.client')}}" class="btn btn-sm btn-primary float-right">Nouveau</a>
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
                   
                    <th scope="col">Id</th>
                    <th scope="col">Date</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Genre</th>
                        <th scope="col">Telephone</th>
                        <th scope="col">Adresse</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach($clients as $client)
                            <tr valign="middle">
                                    <td>{{$client ->id}}</td>
                                    <td>{{$client ->created_at}}</td>
                                    <td>{{$client -> nom}}</td>
                                    <td>{{$client -> prenom}}</td>
                                    <td>{{$client -> genre}}</td>
                                    <td>{{$client -> tel}}</td>
                                    <td>{{$client -> adresse}}</td>
                                    {{-- <td>
                                        @if($voiture -> image != '' && file_exists(public_path().'/images/voitures/'.$voiture -> image))
                                            <img src="{{url('images/voitures/'.$voiture -> image)}}" alt="" width="40" height="50"
                                                class="rounded-circle">
                                        @else
                                            <img src="{{url('assets/images/profile.jpeg')}}" alt="" width="40" height="40"
                                                 class="rounded-circle">
                                        @endif

                                    </td> --}}
                        
                                    <td>
                                    <a class='btn btn-sm btn-outline-warning' href='{{route('edit.client', $client ->id)}}' role='button'>Editer</a>
                                    <a class='btn btn-sm btn-outline-danger' href='#'  role='button' onClick="deleteClient({{$client ->id}});">Supprimer</a>
          
                                    <form action="{{route('delete.client', $client ->id)}}" method="post" id="delete-{{$client->id}}">
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
        function deleteClient(id) {
            if(confirm('Etes vous sure de vouloir supprimer cette enregistrement ?')){
                document.getElementById('delete-' + id).submit();
            }
        }
    </script>



@endsection
