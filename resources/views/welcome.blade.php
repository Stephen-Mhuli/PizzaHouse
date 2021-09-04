@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
      <img src="/img/pizza-house.png" alt="Pizza House logo">
     <div class="title m-b-md">
         <strong>DSM's Best Pizzas.</strong>
     </div>
     <p class="msg"> {{ session('msg') }} </p>
     <a href="/pizzas/create"><strong class="order">Order a Pizza</strong></a>
    </div>
</div>
@endsection
