@extends('layouts')
@section('content')

<div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="text-left logo p-2 px-5"> <img src="https://i.imgur.com/2zDU056.png" width="50"> </div>
                <div class="invoice p-5">
                    <h5>Commande confirmée !</h5> <span class="font-weight-bold d-block mt-4">Bonjour, </span>{{ $voiture->nom }} <span><span>{{ $voiture->prenom }}</span>, Votre commande a été confirmée et sera expédiée dans les deux prochains jours !</span>
                    <div class="payment border-top mt-3 mb-3 border-bottom table-responsive">
                        <table class="table table-borderless">
                            <tbody>
                                @if ($voiture)
                                    
                                 
                            <tr>

                                <td>
                                    <div class="py-2"> <span class="d-block text-muted">Date de la commande</span> <span>{{ $voiture->created_at }}</span> </div>
                                </td>
                                <td>
                                    <div class="py-2"> <span class="d-block text-muted">No de la commande</span> <span>{{ $voiture->id }}</span> </div>
                                </td>
                                <td>
                                    <div class="py-2"> <span class="d-block text-muted">Payment</span> <span><img src="https://img.icons8.com/color/48/000000/mastercard.png" width="20" /></span> </div>
                                </td>
                                <td>
                                    <div class="py-2"> <span class="d-block text-muted">Adresse du client</span> <span>{{ $voiture->adresse }}</span></div>
                                </td>
                            </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="product border-bottom table-responsive">
                        <table class="table table-borderless">
                            <tbody>
                            {{-- <tr>
                                <td width="20%"> <img src="https://i.imgur.com/u11K1qd.jpg" width="90"> </td>
                                <td width="60%"> <span class="font-weight-bold">Men's Sports cap</span>
                                    <div class="product-qty"> <span class="d-block">Quantity:1</span> <span>Color:Dark</span> </div>
                                </td>
                                <td width="20%">
                                    <div class="text-right"> <span class="font-weight-bold">$67.50</span> </div>
                                </td>
                            </tr> --}}
                            <tr>
                                <td width="20%"> <img src="{{url('images/voitures/'.$voiture -> image)}}" width="250"> </td>
                                <td width="60%"> <span class="font-weight-bold"></span>
                                    <div class="product-product-qty"> <span class="d-block">Marque:  {{ $voiture->marque }}<br></span>Type:   {{ $voiture->type }}<br><span>Description:   {{ $voiture->description }}</span> </div>
                                </td>
                                <td width="20%">
                                    <div class="text-right"> <span class="font-weight-bold">{{ $voiture->prix }}</span> </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row d-flex justify-content-end">
                        <div class="col-md-5">
                            <table class="table table-borderless">
                                <tbody class="totals">
                                <tr>
                                    {{-- <td>
                                        <div class="text-left"> <span class="text-muted">Subtotal</span> </div>
                                    </td>
                                    <td>
                                        <div class="text-right"> <span>$168.50</span> </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="text-left"> <span class="text-muted">Shipping Fee</span> </div>
                                    </td>
                                    <td>
                                        <div class="text-right"> <span>$22</span> </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="text-left"> <span class="text-muted">Tax Fee</span> </div>
                                    </td>
                                    <td>
                                        <div class="text-right"> <span>$7.65</span> </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="text-left"> <span class="text-muted">Discount</span> </div>
                                    </td>
                                    <td>
                                        <div class="text-right"> <span class="text-success">$168.50</span> </div>
                                    </td>
                                </tr>
                                <tr class="border-top border-bottom">
                                    <td> --}}
                                        <div class="text-left"> <span class="font-weight-bold">Total</span> </div>
                                    </td>
                                    <td>
                                        <div class="text-right"> <span class="font-weight-bold">${{ $voiture->prix }}</span> </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <p>Nous enverrons un e-mail de confirmation d'expédition lorsque l'article sera expédié avec succès!</p>
                    <p class="font-weight-bold mb-0">Merci d'avoir acheté chez nous!</p> <span>Equipe Sahara Motors Tchad</span>
                </div>
                <div class="d-flex justify-content-between footer p-3"> <span>Besoin d'aide? visitez notre <a href="#">centre d'aide</a></span> <span>{{ $voiture->created_at }}</span> </div>
            </div>
        </div>
    </div>
</div> 
@endsection


