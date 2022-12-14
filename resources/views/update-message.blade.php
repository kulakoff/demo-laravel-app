@extends('layouts.app')

@section('title-block')Обновление записи@endsection

@section('content')
    <h1>Обновление записи</h1>
    <form action="{{route('contact-update-submit',$data->id)}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Имя</label>
            <input type="text" name="name" value="{{$data->name}}" placeholder="Введите имя" id="name" required class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Адрес электронной почты</label>
            <input type="email" name="email" value="{{$data->email}}" placeholder="Введите email" id="email" required class="form-control">
        </div>
        <div class="form-group">
            <label for="subject">Тема сообщения</label>
            <input type="text" name="subject" value="{{$data->subject}}" placeholder="Введите тему собщения" id="subject" required class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Сообщение</label>
            <textarea name="message" id="message"  placeholder="Введите сообщение" required class="form-control">{{$data->message}}</textarea>
        </div>
        <button type="submit" class="btn btn-success mt-2">Изменить</button>
    </form>
@endsection
