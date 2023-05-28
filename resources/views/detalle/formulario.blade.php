<div class="mb-3">
  <select class="form-select" aria-label="Ventas Realizadas" id="venta_id" name="venta_id">
    <option selected>Selecciona la Venta</option>
    @foreach ($ventas as $venta)
    <option value="{{$venta->id}}">{{$venta->id}}</option>  
    @endforeach
  </select>          
</div>
@foreach($cartCollection as $item)
    <div class="row">

        <div class="col-lg-5">
            <p>
                <b><a href="/shop/{{ $item->attributes->slug }}">{{ $item->name }}</a></b><br>
                <b>Price: </b>${{ $item->price }}<br>
                <b>Sub Total: </b>${{ \Cart::get($item->id)->getPriceSum() }}<br>
                {{--                                <b>With Discount: </b>${{ \Cart::get($item->id)->getPriceSumWithConditions() }}--}}
            </p>
        </div>
    </div>
    <hr>
@endforeach

<div class="text-center">
<a class="btn btn-danger" href="{{url('/detalle')}}" role="button">Cancelar</a>
<button type="submit" class="btn btn-primary">Guardar</button>
</div>