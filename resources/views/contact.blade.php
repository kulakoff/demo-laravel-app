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
            <input type="text" name="name" placeholder="Введите имя" id="name" required class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Адрес электронной почты</label>
            <input type="email" name="email" placeholder="Введите email" id="email" required class="form-control">
        </div>
        <div class="form-group">
            <label for="subject">Тема сообщения</label>
            <input type="text" name="subject" placeholder="Введите тему собщения" id="subject" required class="form-control">
        </div>
        <div class="form-group">
            <label for="subject">Сообщение</label>
            <textarea name="message" id="message" placeholder="Введите сообщение" required class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success mt-2">Отправить</button>
    </form>
@endsection
