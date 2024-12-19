@php use App\Models\Ability; @endphp
@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">
        <table style="width: 100%;">
            <tr>
                <td style="text-align: right;">
                    <nav aria-label="Breadcrumb">
                        <ol style="display: inline; padding: 0; margin: 0; list-style: none;">
                            <li style="display: inline; margin-left: 10px;"><a href="{{route('admin.char.index')}}">Персонажи</a>
                            </li>
                            <li style="display: inline; margin-left: 10px;">{{ $char->name }}
                            </li>

                        </ol>
                    </nav>
                </td>
            </tr>
        </table>
        <div class="row">
            <div class="auto-width mb-4">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h3 class="card-title mb-0">{{ $char->name }}</h3>
                        <div class="d-flex ml-auto">
                            <a href="{{ route('admin.char.edit', $char->id) }}" class="text-success mr-2">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            <form action="{{ route('admin.char.delete', $char->id) }}" method="POST"
                                  class="mb-0">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-link p-0 text-danger">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered" style="margin-top: 0; margin-bottom: 0; padding: 5px;">
                            <tbody>
                            <tr style="text-align: center;">
                                <td class="col-2" style="padding-top: 3px; padding-bottom: 3px;">Название</td>
                                <td style="padding-top: 3px; padding-bottom: 3px;">{{ $char->name }}</td>
                            </tr>
                            <tr style="text-align: center;">
                                <td class="col-2" style="padding-top: 3px; padding-bottom: 3px;">Раса</td>
                                <td class="col-2" style="padding-top: 3px; padding-bottom: 3px;">{{ $char->race->name }}</td>
                            </tr>
                            <tr style="text-align: center;">
                                <td class="col-2" style="padding-top: 3px; padding-bottom: 3px;">Класс</td>
                                <td style="padding-top: 3px; padding-bottom: 3px;">{{ $char->grade->name }}</td>
                            </tr>
                            <tr style="text-align: center;">
                                <td class="col-2" style="padding-top: 3px; padding-bottom: 3px;">Инвентарь</td>
                                <td style="padding-top: 3px; padding-bottom: 3px;">{{ $char->inventory->structure }}</td>
                            </tr>
                            <tr style="text-align: center;">
                                <td class="col-2" style="padding-top: 3px; padding-bottom: 3px;">Навыки</td>
                                <td style="padding-top: 3px; padding-bottom: 3px;">
                                    @foreach($abilities as $ability)
                                        <p style="margin: 0;">{{ $ability->name }}</p>
                                    @endforeach
                                </td>
                            </tr>
                            <tr style="text-align: center;">
                                <td class="col-2" style="padding-top: 3px; padding-bottom: 3px;">Способности</td>
                                <td style="padding-top: 3px; padding-bottom: 3px;">
                                    @foreach($skills as $skill)
                                        <p style="margin: 0;">{{ $skill->name }}</p>
                                    @endforeach
                                </td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
