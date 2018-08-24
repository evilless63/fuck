@extends('layouts.admin')

@section('title', 'Page Title')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a class="btn btn-primary" href="{{ route('pages.create') }}">Создать новую страницу</a>    
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Название</th>
                            <th scope="col">Описание</th>
                            <th scope="col">Активно</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pages as $page)
                        <tr>
                            <th scope="row">{{ $loop->count }}</th>
                            <td>{{ $page->title }}</td>
                            <td>{{ $page->text }}</td>
                            <td>{{ $page->is_active }}</td>
                            <td><a href="{{ route('pages.edit', $page->id) }}">Редактировать</a></td>
                            <td>
                                <form action="{{ route('pages.destroy', $page->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button>Удалить</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
