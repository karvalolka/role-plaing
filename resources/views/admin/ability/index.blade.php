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
                            <div class="row">
                                @foreach($abilities as $ability)
                                    <div class="col-md-4 mb-4">
                                        <div class="card shadow-sm border-light rounded">
                                            <div class="card-body">
                                                <!-- Название навыка -->
                                                <h5 class="card-title text-dark font-weight-bold">{{ $ability->name }}</h5>

                                                <!-- Условия (выровненные по правому краю) -->
                                                <div class="d-flex flex-wrap justify-content-end mb-3">
                                                    @php
                                                        $races = array_unique($ability->races->pluck('name')->toArray());
                                                        $classes = array_unique($ability->grades->pluck('name')->toArray());
                                                        $cubes = array_unique($ability->cubes->pluck('name')->toArray());
                                                    @endphp

                                                    @if ($races)
                                                        <span class="badge bg-info me-2 mb-1"><i class="fas fa-users"></i> {{ implode(', ', $races) }}</span>
                                                    @endif

                                                    @if ($classes)
                                                        <span class="badge bg-warning me-2 mb-1"><i class="fas fa-chalkboard-teacher"></i> {{ implode(', ', $classes) }}</span>
                                                    @endif

                                                    @if ($cubes)
                                                        <span class="badge bg-success me-2 mb-1"><i class="fas fa-dice"></i> {{ implode(', ', $cubes) }}</span>
                                                    @endif
                                                </div>
                                            </div>

                                            <!-- Кнопки действий (по центру) -->
                                            <div class="card-footer text-center bg-light">
                                                <div class="d-flex justify-content-center">
                                                    <a href="{{ route('admin.ability.show', $ability->id) }}" class="btn btn-outline-primary p-1 mx-1" title="Просмотр">
                                                        <i class="far fa-eye"></i> <span class="d-none d-md-inline">Просмотр</span>
                                                    </a>
                                                    <a href="{{ route('admin.ability.edit', $ability->id) }}" class="btn btn-outline-success p-1 mx-1" title="Редактировать">
                                                        <i class="fas fa-pencil-alt"></i> <span class="d-none d-md-inline">Редактировать</span>
                                                    </a>
                                                    <form action="{{ route('admin.ability.delete', $ability->id) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-outline-danger p-1 mx-1" title="Удалить">
                                                            <i class="fas fa-trash"></i> <span class="d-none d-md-inline">Удалить</span>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
