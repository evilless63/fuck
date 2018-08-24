@extends('layouts.admin')

@section('title', 'Создание новой страницы')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                {{ HTML::ul($errors->all()) }}
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('pages.store') }}" method="POST">
                    @csrf

                    <div class="form-group green-border-focus">
                        <label for="title">Заголовок страницы</label>
                        <input type="text" class="form-control" id="title" name="title" aria-describedby="title" placeholder="Укажите заголовок страницы">
                        <small id="titleHelp" class="form-text text-muted">Заголовок будет отображаться вверху страницы</small>
                    </div>

                    <div class="form-group green-border-focus">
                        <label for="meta_desc">Мета описание (не обязательно)</label>
                        <input type="text" class="form-control" id="meta_desc" aria-describedby="meta_desc" name="meta_desc" placeholder="Задайте мета описание страницы">
                        <small id="meta_descHelp" class="form-text text-muted">Опишите здесь, о чем страница (описание будет отображаться в поиске, например, Google и Yandex)</small>
                    </div>

                    <div class="form-group green-border-focus">
                        <label for="meta_keys">Мета ключи (не обязательно)</label>
                        <input type="text" class="form-control" id="meta_keys" aria-describedby="meta_keys" name="meta_keys" placeholder="Задайте мета ключи страницы">
                        <small id="meta_keysHelp" class="form-text text-muted">Укажите ключевые слова, через запятую, чтобы поисковикам, например Google и Yandex было проще понять о чем страница</small>
                    </div>

                    <div class="form-group">                
                        <input type="checkbox" value="1" name="is_active">
                        <label for="meta_keys">Показывать страницу на сайте</label>
                    </div>

                    <div class="form-group green-border-focus">
                        <label for="exampleFormControlTextarea5">Описание (текст) страницы</label>
                        <textarea class="form-control" id="text" name="text" rows="3"></textarea>
                    </div>

                    <button class="btn btn-success">Создать страницу</button>
                </form>
            </div>
        </div>
    </div>
@endsection
