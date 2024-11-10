@php use App\Models\Ability; @endphp
@extends('admin.layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col-xl-2 col-md-6">
                <a href="{{ route('admin.ability.create') }}" class="btn btn-block btn-primary">Добавить навык</a>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Навыки</h3>
                    </div>
                    <div class="card-body">
                        @if ($abilities->isEmpty())
                            <p>Нет доступных навыков.</p>
                        @else
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th style="width: 80%;">Название</th>
                                    <th style="width: 10%; text-align: center;">Условия</th>
                                    <th style="width: 10%; text-align: center;">Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($abilities as $ability)
                                    <tr>
                                        <td>{{ $ability->name }}</td>
                                        <td class="text-center">
                                            @php

                                                $races = array_unique($ability->races->pluck('name')->toArray());
                                                $classes = array_unique($ability->grades->pluck('name')->toArray());
                                                $cubes = array_unique($ability->cubes->pluck('name')->toArray());
                                            @endphp

                                            <div class="d-flex flex-column">
                                                @if ($races)
                                                    <span class="badge bg-info mb-1"><i class="fas fa-users"></i> {{ implode(', ', $races) }}</span>
                                                @endif

                                                @if ($classes)
                                                    <span class="badge bg-warning mb-1"><i class="fas fa-chalkboard-teacher"></i> {{ implode(', ', $classes) }}</span>
                                                @endif

                                                @if ($cubes)
                                                    <span class="badge bg-success mb-1"><i class="fas fa-dice"></i> {{ implode(', ', $cubes) }}</span>
                                                @endif
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="d-flex justify-content-center">
                                                <a href="{{ route('admin.ability.show', $ability->id) }}" class="btn btn-link p-1" title="Просмотр">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                                <a href="{{ route('admin.ability.edit', $ability->id) }}" class="btn btn-link text-success me-2" title="Редактировать">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>
                                                <form action="{{ route('admin.ability.delete', $ability->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-link text-danger" title="Удалить">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
