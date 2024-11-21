@extends('admin.layouts.main')

@section('content')
    <div class="container-fluid">

        <div class="row mb-4">
            <div class="col-12">
                <nav aria-label="Breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.skill.index') }}" class="text-muted">Способности</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $skill->name }}</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card shadow-lg border-light rounded-lg bg-gradient">
                    <div class="card-header bg-gradient text-white d-flex align-items-center justify-content-between"
                         style="border-radius: 10px 10px 0 0;">
                        <h3 class="card-title mb-0 text-white font-weight-bold">{{ $skill->name }}</h3>
                        <div class="d-flex ml-auto">
                            <!-- Кнопки действий -->
                            <a href="{{ route('admin.skill.edit', $skill->id) }}"
                               class="btn btn-outline-light btn-action p-2 mr-2" title="Редактировать">
                                <i class="fas fa-pencil-alt"></i> Редактировать
                            </a>
                            <form action="{{ route('admin.skill.delete', $skill->id) }}" method="POST"
                                  class="mb-0 d-inline">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-outline-danger btn-action p-2" title="Удалить">
                                    <i class="fas fa-trash"></i> Удалить
                                </button>
                            </form>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="mb-4">
                            <div class="d-flex align-items-center">
                                <div class="mr-3">
                                    <span class="font-weight-bold text-dark">Уровень:</span>
                                </div>

                                <div class="d-flex align-items-center">

                                    <div class="level-indicator"
                                         style="width: 100px; height: 20px; background-color: {{ $skill->level >= 7 ? '#28a745' : ($skill->level >= 4 ? '#ffc107' : '#dc3545') }}; border-radius: 10px;">
                <span class="level-text"
                      style="position: absolute; width: 100%; text-align: center; color: white; font-weight: bold; line-height: 20px;">
                    {{ $skill->level }}
                </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <table class="table table-bordered table-hover">
                            <tbody>
                            <tr class="bg-light">
                                <td class="col-3 text-center font-weight-bold">Класс</td>
                                <td class="text-center">
                                    @if($skill->grades->isEmpty())
                                        <span class="text-muted">Не задан</span>
                                    @else
                                        @foreach($skill->grades as $grade)
                                            <span class="badge badge-info">{{ $grade->name }}</span><br>
                                        @endforeach
                                    @endif
                                </td>
                            </tr>

                            <tr class="bg-light">
                                <td class="col-3 text-center font-weight-bold">Название</td>
                                <td class="text-center">{{ $skill->name }}</td>
                            </tr>

                            <tr class="bg-light">
                                <td class="col-3 text-center font-weight-bold">Описание</td>
                                <td class="text-center">{{ $skill->description }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .bg-gradient {
            background: linear-gradient(to right, #4e73df, #1cc88a);
        }

        .card {
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .card-header {
            border-bottom: 2px solid #ddd;
            background-color: #007bff;
            padding: 1.25rem;
            border-radius: 10px 10px 0 0;
        }

        .card-body {
            padding: 2rem;
            background-color: #f9f9f9;
            border-radius: 0 0 10px 10px;
        }

        .table {
            border-collapse: separate;
            border-spacing: 0;
            width: 100%;
            background-color: #f9f9f9;
        }

        .table td {
            padding: 12px;
            vertical-align: middle;
            font-size: 1.1rem;
        }

        .table th {
            background-color: #f1f1f1;
            text-align: center;
            font-weight: bold;
            color: #333;
        }

        .table-hover tbody tr:hover {
            background-color: #eef2f7;
            cursor: pointer;
        }

        .level-indicator {
            width: 100%;
            height: 25px;
            background-color: #f0f0f0;
            border-radius: 25px;
            position: relative;
        }

        .level-fill {
            height: 100%;
            border-radius: 25px;
            transition: all 0.3s ease-in-out;
        }

        .level-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-weight: bold;
            color: white;
        }

        .btn-action {
            font-size: 1rem;
            border-radius: 25px;
            padding: 10px 20px;
            transition: background-color 0.3s, transform 0.2s ease-in-out;
            display: inline-flex;
            align-items: center;
        }

        .btn-action i {
            margin-right: 8px;
        }

        .btn-outline-light, .btn-outline-danger {
            border: 2px solid;
            width: 150px;
            justify-content: center;
        }

        .btn-action:hover {
            transform: scale(1.05);
        }

        .btn-outline-light:hover {
            background-color: #f1f1f1;
            border-color: #d1d1d1;
        }

        .btn-outline-danger:hover {
            background-color: #e74a3b;
            border-color: #e74a3b;
            color: white;
        }

        .badge-info {
            background-color: #17a2b8;
            padding: 5px 10px;
            font-size: 1.2rem;
        }

        tr.bg-light td {
            background-color: #f7fafc;
            font-size: 1rem;
            border: 1px solid #ddd;
        }

        .level-indicator {
            background-color: #007bff;
            position: relative;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .level-text {
            color: white;
            font-weight: bold;
        }
    </style>
@endsection
