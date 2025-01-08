@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">
        <table style="width: 100%;">
            <tr>
                <td style="text-align: right;">
                    <nav aria-label="Breadcrumb">
                        <ol style="display: inline; padding: 0; margin: 0; list-style: none;">
                            <li style="display: inline; margin-left: 10px;">Расы</li>
                        </ol>
                    </nav>
                </td>
            </tr>
        </table>
        <div class="row mb-4">
            <div class="col-xl-2 col-md-6">
                <a href="{{ route('admin.race.create') }}" class="btn btn-block btn-primary">Добавить</a>
            </div>
        </div>
        <div class="row">
            <div class="col-4 md-3 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Расы</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Название</th>
                                <th>Иконки</th>
                                <th style="width: 20%; text-align: center;">Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($races as $race)
                                <tr>
                                    <td>{{ $race->name }}</td>
                                    <td class="col-1" style="text-align: center; width: 50px; height: 50px;">
                                        <div style="max-width: 50px; max-height: 50px; overflow: hidden; display: flex; justify-content: center; align-items: center;">
                                            {!! preg_replace('/<svg/', '<svg width="50" height="50"', $race->icon_svg) !!}
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="d-flex justify-content-center align-items-center gap-3">
                                            <a href="{{ route('admin.race.show', $race->id) }}" class="text-primary" title="Просмотр">
                                                <i class="far fa-eye"></i>
                                            </a>
                                            <a href="{{ route('admin.race.edit', $race->id) }}" class="btn btn-link text-success p-1" title="Редактировать">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <form action="{{ route('admin.race.delete', $race->id) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-link p-1 text-danger" title="Удалить">
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
