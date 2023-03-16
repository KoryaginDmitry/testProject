@extends('layouts.main')

@section('title', 'Главная страница')

@section('content')
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
                <h1 class="display-4 fw-normal">О компании</h1>
                <p class="lead fw-normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, distinctio doloremque eum hic inventore provident quas quia quod, rerum saepe, sequi ut velit voluptates! Aut deserunt iste itaque maxime repellendus?</p>
                <a class="btn btn-outline-primary" href="{{ route('company') }}">Подробнее</a>
            </div>
        </div>
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
                <h1 class="display-4 fw-normal">Статьи</h1>
                <p class="lead fw-normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, distinctio doloremque eum hic inventore provident quas quia quod, rerum saepe, sequi ut velit voluptates! Aut deserunt iste itaque maxime repellendus?</p>
                <a class="btn btn-outline-primary" href="{{ route('states') }}">Подробнее</a>
            </div>
        </div>
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
                <h1 class="display-4 fw-normal">Контакты</h1>
                <p class="lead fw-normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, distinctio doloremque eum hic inventore provident quas quia quod, rerum saepe, sequi ut velit voluptates! Aut deserunt iste itaque maxime repellendus?</p>
                <a class="btn btn-outline-primary" href="{{ route('contacts') }}">Подробнее</a>
            </div>
        </div>
@endsection
