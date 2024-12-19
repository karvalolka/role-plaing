@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">
        <table style="width: 100%;">
            <tr>
                <td style="text-align: right;">
                    <nav aria-label="Breadcrumb">
                        <ol style="display: inline; padding: 0; margin: 0; list-style: none;">
                            <li style="display: inline; margin-left: 10px;">Инвентарь</li>
                        </ol>
                    </nav>
                </td>
            </tr>
        </table>
        <div class="row">
            <div class="col-xl-2 col-md-6 mb-4">
                <a href="{{ route('admin.inventory.create') }}" class="btn btn-block btn-primary">Добавить</a>
            </div>
            <div class="col-xl-12 col-md-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Инвентарь</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered" style="table-layout: fixed;">
                            <thead>
                            <tr>
                                <th class="text-center col-1">Значение кости</th>
                                <th>Предметы</th>
                                <th class="text-center col-1">Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($inventories as $inventory)
                                <tr>
                                    <td class="text-center" style="padding-top: 5px; padding-bottom: 5px;">{{ $inventory->cube }}</td>
                                    <td style="padding-top: 5px; padding-bottom: 5px;">
                                        @foreach(explode("\n", $inventory->structure) as $line)
                                            <p>{{ $line }}</p>
                                        @endforeach
                                    </td>
                                    <td class="text-center" style="padding-top: 5px; padding-bottom: 5px;">
                                        <div class="d-flex justify-content-center align-items-center gap-2">
                                            <a href="{{ route('admin.inventory.edit', $inventory->id) }}" class="btn btn-link text-success p-1">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <form action="{{ route('admin.inventory.delete', $inventory->id) }}" method="POST">
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
