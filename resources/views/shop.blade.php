@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 80px">
        
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-7">
                        <h4>Productos</h4>
                    </div>
                </div>
                <hr>
                <div class="row">
                    @foreach ($categorias as $cat )
                    <h5>{{$cat->nombre}}</h5>  
                    @foreach($productos as $prod)
                    @if (($cat->nombre)==($prod->categorias->nombre))
                        
                    <div class="col-lg-3">
                        
                        <div class="card" style="margin-bottom: 20px; height: auto; background-color: #FFF5E4; align-items: center; padding-top: 10px; ">
                            <img src="{{asset($prod->image_path) }}"
                                 class="img-fluid img-thumnail imagen"
                                 style="text-align:center; height: 140px; width: 140px;display: block; border-radius: 20%; "
                                 alt="{{ $prod->image_path }}"
                            >
                            <div class="card-body">
                              
                                <a href=""><h6 class="card-title">{{ $prod->nombre }}</h6></a>
                                <p>{{$prod->descripcion}}</p>
                                <p>${{$prod->precio}}</p>
                                <p>{{$prod->categorias->nombre}}</p>
                                <p></p>
                                <form action="{{ route('cart.store') }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" value="{{ $prod->id }}" id="id" name="id">
                                    <input type="hidden" value="{{ $prod->nombre }}" id="name" name="name">
                                    <input type="hidden" value="{{ $prod->precio }}" id="price" name="price">
                                    <input type="hidden" value="{{ $prod->image_path}}" id="img" name="img">
                                    <input type="hidden" value="{{ $prod->descripcion }}" id="slug" name="slug">
                                    <input type="hidden" value="1" id="quantity" name="quantity">
                                    <div class="card-footer" style="background-color: white;">
                                          <div class="row">
                                            <button class="btn btn-sm btn-card btn-color" class="tooltip-test" title="add to cart" >
                                                <i class="fa fa-shopping-cart" >Agregar al carrito</i> 
                                            </button>
                                        </div>
                                    </div>
                                </form>
                               
                            </div>
                           
                        </div>
                       
                    </div>
                 
                    @endif

                    @endforeach
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <style>
        .btn-color:hover{
            background-color: #FF9494;
            color: white;
        }
        /* Flashing */
            .imagen:hover{
                opacity: 1;
                -webkit-animation: flash 1.5s;
                animation: flash 1.5s;
            }
            @-webkit-keyframes flash {
                0% {
                    opacity: .4;
                }
                100% {
                    opacity: 1;
                }
            }
            @keyframes flash {
                0% {
                    opacity: .4;
                }
                100% {
                    opacity: 1;
                }
            }
           
    </style>
@endsection