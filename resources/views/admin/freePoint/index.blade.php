@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">
        <table style="width: 100%;">
            <tr>
                <td style="text-align: right;">
                    <nav aria-label="Breadcrumb">
                        <ol style="display: inline; padding: 0; margin: 0; list-style: none;">
                            <li style="display: inline; margin-left: 10px;">Свободные очки</li>
                        </ol>
                    </nav>
                </td>
            </tr>
        </table>
        <div class="row">
            <div class="col-xl-2 col-md-6 mb-4">
                <a href="{{ route('admin.freePoint.create') }}" class="btn btn-block btn-primary">Добавить</a>
            </div>
            <div class="col-xl-12 col-md-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Свободные очки</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tbody>
                            <div class="row">
                                @foreach($groupedFreePoints as $cost => $points)
                                    <div class="col-md-12 mb-4">
                                        <h4 class="font-weight-bold">Стоимость: <span style="color: blue;">{{ $cost }}</span></h4>
                                        <div class="row">
                                            @foreach($points as $freePoint)
                                                <div class="col-md-6 mb-3">
                                                    <div class="d-flex justify-content-between align-items-center border p-3">
                                                        <div>
                                                            <h5 class="mb-0">
                                                                @if($freePoint->name)
                                                                    {{ $freePoint->name }}
                                                                @elseif($freePoint->gold)
                                                                    {{ $freePoint->gold }} золота
                                                                @endif
                                                            </h5>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <a href="{{ route('admin.freePoint.edit', $freePoint->id) }}" class="btn btn-link text-success me-2">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                            <form action="{{ route('admin.freePoint.delete', $freePoint->id) }}" method="POST">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit" class="btn btn-link text-danger">
                                                                    <i class="fas fa-trash"></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
