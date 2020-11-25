@extends('principal')
@section('contenido')
<h1> Productos para perros </h1>



----------------------------------------------------------------------
<br> <img src="{{url('https://images.rappi.com/products/2090454313-1596657296473.png?d=200x200')}}"> <br> 
<h2> Alimento para perros </h2>
<ul>
@foreach ($alim as $a)
   <li> {{ $a }} </li>
@endforeach
<button type="submit" class="btn btn-primary">Comprar</button>
</ul>
----------------------------------------------------------------------
<br> <img src="{{url('https://images.rappi.com/products/ecommerce/198303976/198303976_1603511806444.jpg?d=136x136')}}"> <br> 
<h2> Comedero Antideslizante </h2>
<ul>
@foreach ($come as $c)
   <li> {{ $c }} </li>
@endforeach
<button type="submit" class="btn btn-primary">Comprar</button>
</ul>
----------------------------------------------------------------------
<br> <img src="{{url('https://images.rappi.com/products/1686046-1596657230927.png?d=136x136')}}"> <br> 
<h2> Snack Dental </h2>
<ul>
@foreach ($snack as $s)
   <li> {{ $s }} </li>
@endforeach
<button type="submit" class="btn btn-primary">Comprar</button>
</ul>
----------------------------------------------------------------------
<br> <img src="{{url('https://images.rappi.com/products/2090454313-1596657296473.png?d=200x200')}}"> <br> 
<h2> Correa Solaris </h2>
<ul>
@foreach ($correa as $co)
   <li> {{ $co }} </li>
@endforeach
<button type="submit" class="btn btn-primary">Comprar</button>
</ul>
----------------------------------------------------------------------
<br> <img src="{{url('https://images.rappi.com/products/2090454313-1596657296473.png?d=200x200')}}"> <br> 
<h2> Alimento Humedo </h2>
<ul>
@foreach ($alhum as $ah)
   <li> {{ $ah }} </li>
@endforeach
<button type="submit" class="btn btn-primary">Comprar</button>
</ul>
----------------------------------------------------------------------
<br> <img src="{{url('https://images.rappi.com/products/2090454313-1596657296473.png?d=200x200')}}"> <br> 
<h2> Juguete para perro </h2>
<ul>
@foreach ($jug as $j)
   <li> {{ $j }} </li>
@endforeach
<button type="submit" class="btn btn-primary">Comprar</button>
</ul>
----------------------------------------------------------------------
@stop

