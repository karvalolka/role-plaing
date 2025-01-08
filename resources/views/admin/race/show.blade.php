@extends('admin.layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col-12 text-right">
                <nav aria-label="Breadcrumb">
                    <ol class="breadcrumb justify-content-end mb-0">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.race.index') }}">Расы</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $race->name }}</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-12">
                <h1 class="h3 mb-0 text-gray-800">{{ $race->name }}</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <tbody>
                            @if($race->name)
                                <tr>
                                    <td class="col-4 text-center font-weight-bold">Название</td>
                                    <td class="text-center">{{ $race->name }}</td>
                                </tr>
                            @endif

                            @if($race->hp)
                                <tr>
                                    <td class="col-4 text-center font-weight-bold">Жизни</td>
                                    <td class="text-center">{{ $race->hp }}</td>
                                </tr>
                            @endif

                            @if($race->{'mp/sm'})
                                <tr>
                                    <td class="col-4 text-center font-weight-bold">Мана/Стамина</td>
                                    <td class="text-center">{{ $race->{'mp/sm'} }}</td>
                                </tr>
                            @endif

                            @if($race->strength)
                                <tr>
                                    <td class="col-4 text-center font-weight-bold">Сила</td>
                                    <td class="text-center">{{ $race->strength }}</td>
                                </tr>
                            @endif

                            @if($race->agility)
                                <tr>
                                    <td class="col-4 text-center font-weight-bold">Ловкость</td>
                                    <td class="text-center">{{ $race->agility }}</td>
                                </tr>
                            @endif

                            @if($race->stamina)
                                <tr>
                                    <td class="col-4 text-center font-weight-bold">Выносливость</td>
                                    <td class="text-center">{{ $race->stamina }}</td>
                                </tr>
                            @endif

                            @if($race->reception)
                                <tr>
                                    <td class="col-4 text-center font-weight-bold">Восприятие</td>
                                    <td class="text-center">{{ $race->reception }}</td>
                                </tr>
                            @endif

                            @if($race->intelligence)
                                <tr>
                                    <td class="col-4 text-center font-weight-bold">Интеллект</td>
                                    <td class="text-center">{{ $race->intelligence }}</td>
                                </tr>
                            @endif

                            @if($race->charisma)
                                <tr>
                                    <td class="col-4 text-center font-weight-bold">Харизма</td>
                                    <td class="text-center">{{ $race->charisma }}</td>
                                </tr>
                            @endif

                            @if($race->luck)
                                <tr>
                                    <td class="col-4 text-center font-weight-bold">Удача</td>
                                    <td class="text-center">{{ $race->luck }}</td>
                                </tr>
                            @endif

                            @if($race->fortitude)
                                <tr>
                                    <td class="col-4 text-center font-weight-bold">Сила воли</td>
                                    <td class="text-center">{{ $race->fortitude }}</td>
                                </tr>
                            @endif

                            @if($race->icon_svg)
                                <tr>
                                    <td class="col-4 text-center font-weight-bold">Иконка</td>
                                    <td class="text-center" style="max-width: 50px; height: 50px; overflow: hidden;">
                                        {!! preg_replace('/<svg/', '<svg width="50" height="50"', $race->icon_svg) !!}
                                    </td>
                                </tr>
                            @endif
                            </tbody>
                        </table>

                        <div class="d-flex justify-content-end mt-4">
                            <a href="{{ route('admin.race.edit', $race->id) }}" class="btn btn-success mr-2">
                                <i class="fas fa-pencil-alt"></i> Редактировать
                            </a>
                            <form action="{{ route('admin.race.delete', $race->id) }}" method="POST" class="mb-0">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">
                                    <i class="fas fa-trash"></i> Удалить
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
