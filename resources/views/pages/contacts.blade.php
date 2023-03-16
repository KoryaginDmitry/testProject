@extends('layouts.main')

@section('title', 'Контакты')

@section('content')
    <div class="text-center">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 fw-normal">Наши контакты</h1>
            <p class="lead fw-normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, distinctio doloremque eum hic inventore provident quas quia quod, rerum saepe, sequi ut velit voluptates! Aut deserunt iste itaque maxime repellendus?</p>
        </div>
    </div>

    <div class="container mb-3">
        <form action="{{ route('contacts.create') }}" method="post" class="form">
            <legend>Форма обратной связи</legend>
            <div class="container">
                <div id="message"></div>
            </div>
            @csrf
            <x-input type="text" text="ФИО" name="fio"></x-input>
            <x-input type="email" text="Почта" name="email"></x-input>
            <x-input type="text" text="Комментарий" name="comment"></x-input>

            <input type="submit" class="btn btn-primary" value="Отправить обращение">
        </form>
    </div>
@endsection
