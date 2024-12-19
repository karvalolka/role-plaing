@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">
        <table style="width: 100%;">
            <tr>
                <td style="text-align: right;">
                    <nav aria-label="Breadcrumb">
                        <ol style="display: inline; padding: 0; margin: 0; list-style: none;">
                            <li style="display: inline; margin-left: 10px;">Персонажи</li>
                        </ol>
                    </nav>
                </td>
            </tr>
        </table>
        <div class="row">
            <div class="col-xl-2 col-md-6 mb-4">
                <a href="{{ route('admin.char.create') }}" class="btn btn-block btn-primary">Добавить</a>
            </div>
            <div class="col-xl-12 col-md-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Персонажи</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Имя персонажа</th>
                                <th>Имя пользователя</th>
                                <th class="text-center col-1">Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($chares as $char)
                                <tr>
                                    <td>{{ $char->name }}</td>
                                    <td>{{ $char->user->name}}</td>
                                    <td class="text-center">
                                        <div class="d-flex justify-content-center align-items-center gap-2">
                                            <a href="{{ route('admin.char.show', $char->id) }}" class="btn btn-link p-1 mx-1">
                                                <i class="far fa-eye"></i>
                                            </a>
                                            <a href="{{ route('admin.char.edit', $char->id) }}" class="btn btn-link text-success p-1">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <form action="{{ route('admin.char.delete', $char->id) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-link p-1 text-danger">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
