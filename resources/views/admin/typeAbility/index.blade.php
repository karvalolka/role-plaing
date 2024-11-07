@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">
        <table style="width: 100%;">
            <tr>
                <td style="text-align: right;">
                    <nav aria-label="Breadcrumb">
                        <ol style="display: inline; padding: 0; margin: 0; list-style: none;">
                            <li style="display: inline; margin-left: 10px;">Типы навыков</li>
                        </ol>
                    </nav>
                </td>
            </tr>
        </table>
        <div class="col-xl-2 row">
                <a href="{{ route('admin.typeAbility.create') }}" class="btn btn-block btn-primary" style="margin-bottom: 20px">Добавить</a>
            <div class="md-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Типы навыков</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Название</th>
                                <th class="text-center">Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($typeAbilities as $typeAbility)
                                <tr>
                                    <td>{{ $typeAbility->name }}</td>
                                    <td class="text-center">
                                        <div class="d-flex justify-content-center align-items-center gap-2">
                                            <a href="{{ route('admin.typeAbility.edit', $typeAbility->id) }}" class="btn btn-link text-success p-1">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <form action="{{ route('admin.typeAbility.delete', $typeAbility->id) }}" method="POST">
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
