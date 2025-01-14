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
                                <td class="col-2"
                                    style="padding-top: 3px; padding-bottom: 3px;">{{ $char->race->name }}</td>
                            </tr>
                            <tr style="text-align: center;">
                                <td class="col-2" style="padding-top: 3px; padding-bottom: 3px;">Класс</td>
                                <td style="padding-top: 3px; padding-bottom: 3px;">{{ $char->grade->name }}</td>
                            </tr>
                            <tr>
                                <td class="col-4 text-center">Жизни</td>
                                <td class="text-center">{{ $char->hp }}</td>
                            </tr>
                            <tr>
                                <td class="col-4 text-center">
                                    @if ($char->intelligence > $char->agility)
                                        Мана
                                    @else
                                        Стамина
                                    @endif
                                </td>
                                <td class="text-center">{{ $char->{'mpSm'} }}</td>
                            </tr>
                            <tr>
                                <td class="col-4 text-center">Сила</td>
                                <td class="text-center">{{ $char->strength }}</td>
                            </tr>
                            <tr>
                                <td class="col-4 text-center">Ловкость</td>
                                <td class="text-center">{{ $char->agility }}</td>
                            </tr>
                            <tr>
                                <td class="col-4 text-center">Выносливость</td>
                                <td class="text-center">{{ $char->stamina }}</td>
                            </tr>
                            <tr>
                                <td class="col-4 text-center">Восприятие</td>
                                <td class="text-center">{{ $char->reception }}</td>
                            </tr>
                            <tr>
                                <td class="col-4 text-center">Интеллект</td>
                                <td class="text-center">{{ $char->intelligence }}</td>
                            </tr>
                            <tr>
                                <td class="col-4 text-center">Харизма</td>
                                <td class="text-center">{{ $char->charisma }}</td>
                            </tr>
                            <tr>
                                <td class="col-4 text-center">Удача</td>
                                <td class="text-center">{{ $char->luck }}</td>
                            </tr>
                            <tr>
                                <td class="col-4 text-center">Сила воли</td>
                                <td class="text-center">{{ $char->fortitude }}</td>
                            </tr>
                            <tr style="text-align: center;">
                                <td class="col-2" style="padding-top: 3px; padding-bottom: 3px;">Инвентарь</td>
                                <td style="padding-top: 3px; padding-bottom: 3px;">
                                    <label for="gold" style="font-weight: normal;">Золото:</label>

                                    <input type="number" name="gold" id="gold" value="{{ $char->gold }}"
                                           class="form-control" readonly
                                           style="text-align: center; color: gold; font-weight: bold;">
                                    {{ $char->inventory->structure }}

                                    @foreach($char->freePoints as $free_point)
                                        @if($free_point->name)
                                            <p style="margin: 0;">
                                                {{ $free_point->name }} (Количество: {{ $free_point->pivot->quantity }})
                                            </p>
                                        @endif
                                    @endforeach
                                </td>
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
