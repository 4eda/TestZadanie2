@extends('layouts.app')
  
@section('title-block')Новости @endsection 
    
@section('content')

@include('inc.header')
<div class="container">
        @foreach ($data as $el)
    <div>
       <div class=""> <h5>{{ date('d-m-Y',$el['idate'])}}
          <a class="pl-1" href="{{route ('News-One', $el->id)}}"> {!! $el->title !!}</a> </h5>
       </div>
       <div class="mt-3"> <p> {!!$el->announce !!}</p> </div>
    </div>
        <hr>
        @endforeach
    </div>
	
{{$data->links()}} 


@endsection






 

