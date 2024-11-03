@php use App\Models\Ability; @endphp
@extends('admin.layouts.main')

@section('content')
    <div class="container-fluid">
        <table style="width: 100%;">
            <tr>
                <td style="text-align: right;">
                    <nav aria-label="Breadcrumb">
                        <ol style="display: inline; padding: 0; margin: 0; list-style: none;">
                            <li style="display: inline; margin-left: 10px;">Навыки</li>
                        </ol>
                    </nav>
                </td>
            </tr>
        </table>

        <div class="row">
            <div class="col-xl-2 col-md-6 mb-4">
                <a href="{{ route('admin.ability.create') }}" class="btn btn-block btn-primary">Добавить навык</a>
            </div>
            <div class="col-xl-12 col-md-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Навыки</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tbody>
                            @foreach($groupedAbilities as $classRace => $abilitiesByCondition)
                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <h4 class="font-weight-bold">Принадлежность: <span style="color: blue;">{{ $classRace }}</span></h4>
                                        <hr class="my-3">
                                        <div class="row">
                                            @foreach($abilitiesByCondition as $conditions => $abilities)
                                                <h5 class="font-weight-bold">Условия: <span style="color: red;">{{ $conditions }}</span></h5>
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        @foreach($abilities as $ability)
                                                            <div class="col-md-6 mb-3">
                                                                <div class="card p-3 border">
                                                                    <div class="d-flex justify-content-between align-items-center">
                                                                        <div>
                                                                            <h5 class="mb-0">{{ $ability->name }}</h5>
                                                                            @if(!empty($ability->condition))
                                                                                    <?php
                                                                                    $conditionValues = json_decode($ability->condition);
                                                                                    $conditionNames = array_map(function($value) {
                                                                                        return Ability::getConditionName($value);
                                                                                    }, (array)$conditionValues);
                                                                                    ?>
                                                                                <small class="text-muted">Условия: {{ implode(', ', $conditionNames) }}</small>
                                                                            @endif
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="{{ route('admin.ability.show', $ability->id) }}" class="btn btn-link p-1">
                                                                                <i class="far fa-eye"></i>
                                                                            </a>
                                                                            <a href="{{ route('admin.ability.edit', $ability->id) }}" class="btn btn-link text-success me-2">
                                                                                <i class="fas fa-pencil-alt"></i>
                                                                            </a>
                                                                            <form action="{{ route('admin.ability.delete', $ability->id) }}" method="POST" class="d-inline">
                                                                                @csrf
                                                                                @method('delete')
                                                                                <button type="submit" class="btn btn-link text-danger">
                                                                                    <i class="fas fa-trash"></i>
                                                                                </button>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <hr class="my-4">
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-5">
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
