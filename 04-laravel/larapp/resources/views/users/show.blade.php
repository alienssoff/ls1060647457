@extends('layouts.app')

@section('title', 'Show User - PetsApp')

@section('content')


<header class="nav level-2">

    <a href="{{url('users')}}">
        <img src="{{asset ('images/ico-back.svg')}}" alt="back">
    </a>
    <img src="{{asset ('images/logo.svg')}} "width="200px" alt="Logo">
   
    <a href="" class="mburger">
        <img src="{{asset('images/burger.svg')}}"alt="Hamburguer">
    </a>
</header>
        <section class="show">
            <h1>Show User</h1>  
            <img src="{{asset('images/'.$user->photo)}}" class="photo" alt="Photo"> 
            <p class="role">{{$user->role}}</p>
            <div class="info">
                <p>{{$user->document}}</p>
                <p>{{$user->fullname}}</p>
                <p>{{$user->email}}</p>
                <p>{{$user->phone}}</p>
                <p>{{$user->gender}}</p>
                <p>{{Carbon\Carbon::parse($user->birthdate)->diffforhumans()}}</p>
            </div>
        </section>
    
  

@endsection