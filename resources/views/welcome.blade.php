@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
      <img src="/img/pizza-house.png" alt="Pizza House logo">
     <div class="title m-b-md">
         The DSM's Best Pizzas
     </div>
     <p class="msg"> {{ session('msg') }} </p>
     <a href="/pizzas/create">Order a pizza</a>
    </div>
</div>
@endsection
