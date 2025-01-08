@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">
        <table style="width: 100%;">
            <tr>
                <td style="text-align: right;">
                    <nav aria-label="Breadcrumb">
                        <ol style="display: inline; padding: 0; margin: 0; list-style: none;">
                            <li style="display: inline; margin-left: 10px;">Механики</li>
                        </ol>
                    </nav>
                </td>
            </tr>
        </table>
        <div class="row">
            <div class="col-xl-2 col-md-6 mb-4">
                <a href="{{ route('admin.mechanic.create') }}" class="btn btn-block btn-primary">Добавить</a>
            </div>
            <div class="col-xl-12 col-md-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Механики</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th class="text-center">Тип</th>
                                <th>Условия</th>
                                <th class="text-center">Иконка</th>
                                <th class="text-center">Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($mechanics as $mechanic)
                                <tr>
                                    <td class="text-center col-2">{{ $mechanic->types }}</td>
                                    <td>{{ $mechanic->conditions }}</td>
                                    <td class="col-1" style="text-align: center; width: 50px; height: 50px;">
                                        <div style="max-width: 50px; max-height: 50px; overflow: hidden; display: flex; justify-content: center; align-items: center;">
                                            {!! preg_replace('/<svg/', '<svg width="50" height="50"', $mechanic->icon_svg) !!}
                                        </div>
                                    </td>
                                    <td class="text-center col-1">
                                        <div class="d-flex justify-content-center align-items-center gap-2">
                                            <a href="{{ route('admin.mechanic.edit', $mechanic->id) }}" class="btn btn-link text-success p-1">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <form action="{{ route('admin.mechanic.delete', $mechanic->id) }}" method="POST">
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
