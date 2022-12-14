@extends('layouts.app')

@section('title-block')Страница контактов@endsection

@section('content')
    <h1>Страница контактов</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </div>
    @endif

    <form action="{{route('contact-form')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Имя</label>
            <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Адрес электронной почты</label>
            <input type="email" name="email" placeholder="Введите email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="subject">Тема сообщения</label>
            <input type="text" name="subject" placeholder="Введите тему собщения" id="subject" class="form-control">
        </div>
        <div class="form-group">
            <label for="subject">Сообщение</label>
            <textarea name="message" id="message" placeholder="Введите сообщение" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success mt-2">Отправить</button>
    </form>
@endsection
