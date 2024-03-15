@extends('layouts.app')

@section('title', 'Users Page - PetsApp')

@section('content')


<header class="nav level-2">

    <a href="{{route('dashboard')}}">
        <img src="{{asset ('images/ico-back.svg')}}" alt="back">
    </a>
    <img src="{{asset ('images/logo.svg')}} "width="200px" alt="Logo">
   
    <a href="" class="mburger">
        <img src="{{asset('images/burger.svg')}}"alt="Hamburguer">
    </a>
</header>
<section class="module">
    <h1>MODULE USERs</h1>
    <a class="add" href="{{ url ('users/create')}}">
        <img src="{{asset('images/ico-add.svg')}}" width="30px" alt="">
        Add User
    </a>
    <table>
        <tbody>

     @foreach($users as $user)
        
            <tr>
                <td><img src="{{ asset ('images/' .$user->photo)}}" alt="Pet"></td>
                <td>
                   <span>{{$user->fullname}}</span>
                   <span>{{$user->role}}</span>
                </td>
                <td>
                    <a href="{{url('users/'.$user->id)}}" class="show">
                        <img src="{{asset ('images/ico-search.svg')}}" alt="">
                    </a>
                    <a href="{{url('users/edit/'.$user->id)}}" class="edit">
                        <img src="{{asset ('images/ico-pencil.svg')}}" alt="">
                    </a>
                    <a href="javascript:;" class="delete" data-id="{{$user->id}}">
                        <img src="{{asset ('images/ico-delete.svg')}}" alt="">
                    </a>
                </td>
            </tr>
    @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3">
                    {{$users->links('layouts.paginator')}}
                </td>
            </tr>
        </tfoot>
    </table>
</section>
@endsection

@section('js')
    @if (session('message'))
<script>
    $(document).ready(function(){
        Swal.fire({
            position: "top-end",
            title: "Great Job!",
            text: "{{session('message')}}",
            icon: "success",
            showConfirmButton: false,
            timer: 5000
        })
    })
 </script>
 @endif
 @endsection

