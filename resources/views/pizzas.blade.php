@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
     <div class="content">
        <div class="title m-b-md">
                    Pizza List
        </div>
              
        @foreach($pizzas as $pizza)            
             <p>{{ $loop->index }}-{{ $pizza['type'] }} -- {{ $pizza['base'] }}</p>
         @endforeach
     </div>
</div>
@endsection
