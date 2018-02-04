@extends('layouts.app')

@section('content')
@foreach( $arrayPost as $key => $post )
    <div class="col-md-6 col-md-offset-3" style="text-align: center; margin-left: 2%">
    <ul>
        <div class="panel panel-info">
            <div class="panel-heading" style="text-align: left;"> <li>{{$post->titulo}}</li></div>
                <div class="panel-body">
                 <!--Contenido de la caja-->
                </div>
        </div>
       
  	</ul>
  	<a href="{{ url('/home/' . $post->id ) }}">
                        <h4 style="min-height:45px;margin:5px 0 10px 0">
                            Comentar
                        </h4>
                    </a>
       
    <a href="{{ url('/home/' . $post->id ) }}">
        <h4 style="min-height:45px;margin:5px 0 10px 0">
        	Editar
        </h4>
    </a>
    </div>
    @endforeach
@endsection
