@extends('layouts.app')

@section('title-block')Все сообщения@endsection

@section('content')
    <h1>Все сообщения</h1>
@foreach($data as $item)
    <div class="alert alert-info">
        <h3>{{$item->subject}}</h3>
        <p><small>{{$item->created_at}}</small></p>
        <p>{{$item->email}}</p>
        <a href="">
        <button class="btn btn-outline-secondary" >Детали</button>
        </a>
    </div>
@endforeach
@endsection
