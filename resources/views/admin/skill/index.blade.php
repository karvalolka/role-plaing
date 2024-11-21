@php use App\Models\Ability; @endphp
@extends('admin.layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col-xl-2 col-md-6">
                <a href="{{ route('admin.skill.create') }}" class="btn btn-block btn-primary">Добавить Способность</a>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Способности</h3>
                    </div>
                    <div class="card-body">
                        @if ($skills->isEmpty())
                            <p>Нет доступных способностей.</p>
                        @else
                            <div class="row">
                                @foreach($skills as $skill)
                                    <div class="col-md-4 mb-4">
                                        <div class="card shadow-lg border-light rounded-lg overflow-hidden">

                                            <div class="card-body d-flex justify-content-between align-items-center">
                                                <h5 class="card-title text-dark font-weight-bold mb-0">{{ $skill->name }}</h5>
                                                <h5 class="card-title text-primary font-weight-bold mb-0">Уровень: {{ $skill->level }}</h5>
                                            </div>

                                            <div class="card-footer bg-light text-center">
                                                <div class="d-flex justify-content-center">

                                                    <a href="{{ route('admin.skill.show', $skill->id) }}" class="btn btn-outline-primary btn-sm p-3 mx-2 rounded-pill shadow-sm transition-all" title="Просмотр">
                                                        <i class="far fa-eye"></i> <span class="d-none d-md-inline">Просмотр</span>
                                                    </a>

                                                    <a href="{{ route('admin.skill.edit', $skill->id) }}" class="btn btn-outline-success btn-sm p-3 mx-2 rounded-pill shadow-sm transition-all" title="Редактировать">
                                                        <i class="fas fa-pencil-alt"></i> <span class="d-none d-md-inline">Редактировать</span>
                                                    </a>

                                                    <form action="{{ route('admin.skill.delete', $skill->id) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-outline-danger btn-sm p-3 mx-2 rounded-pill shadow-sm transition-all" title="Удалить">
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
