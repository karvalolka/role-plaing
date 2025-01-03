@extends('layouts.main')

@section('content')

    <section id="chars" class="welcome-hero">

        <nav class="navbar navbar-default bootsnav navbar-sticky navbar-scrollspy" data-minus-value-desktop="70"
             data-minus-value-mobile="55" data-speed="1000"
             style="padding: 0; border: none; background: rgba(255, 255, 255, 0.6); margin-top: 40px; backdrop-filter: blur(10px);">
            <div class="container"
                 style="display: flex; justify-content: space-between; align-items: center; padding: 0; margin-top: 0;">
                <!-- Логотип и меню (слева) -->
                <div class="navbar-header" style="display: flex; align-items: center;">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html" style="margin-right: 20px;">list<span>race</span></a>
                </div>

                <!-- Навигационное меню (по центру) -->
                <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu"
                     style="display: flex; justify-content: center; align-items: center; flex-grow: 1;">
                    <ul class="nav navbar-nav" data-in="fadeInDown" data-out="fadeOutUp"
                        style="display: flex; margin-bottom: 0; padding: 0;">
                        <li class="scroll active" style="margin-right: 20px;"><a href="#chars">Персонажи</a></li>
                        <li class="scroll" style="margin-right: 20px;"><a href="#lore">Лор</a></li>
                        <li class="scroll" style="margin-right: 20px;"><a href="#races">Расы</a></li>
                        <li class="scroll" style="margin-right: 20px;"><a href="#grades">Классы</a></li>
                        <li class="scroll" style="margin-right: 20px;"><a href="#free-points">Свободные очки</a></li>
                        <li class="scroll" style="margin-right: 20px;"><a href="#mechanics">Механики</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="welcome-hero-txt">
                <h2>Когда вам покажется, что цель недостижима, не изменяйте цель — изменяйте свой план действий</h2>
                <p>
                    © Конфуций
                </p>
            </div>
        </div>

    </section>

    {{--Персонажи--}}
    <section id="list-topics" class="list-topics">
        <div class="container" style="display: flex; justify-content: center; align-items: center;">
            <div class="list-topics-content d-flex">
                <ul style="display: flex; list-style: none; padding: 0; margin: 0;">
                    @foreach($chars as $char)
                        <li style="margin-right: 20px;"><a href="{{ route('personal.show', ['id' => $char->id]) }}">
                                <div class="single-list-topics-content">
                                    <div class="single-list-topics-icon">
                                        <i class="flaticon-restaurant"></i>
                                    </div>
                                    <h2>{{ $char->name }}</h2>
                                    <p>{{ $racenames[$char->race_id] }}</p>
                                    <p>{{ $gradenames[$char->grade_id] }}</p>
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>


    {{--Лор--}}
    <section id="lore" class="works" style="padding: 60px 0; background-color: #f8f9fa;">
        <div class="container" style="width: 100%; padding-left: 0; padding-right: 0;">
            <div class="section-header" style="text-align: center; margin-bottom: 50px; margin-top: 80px;">
                <h2 style="font-size: 36px; font-weight: bold; color: #333;">Лор</h2>
            </div>
            <div class="works-content" style="display: flex; justify-content: center; flex-wrap: wrap; gap: 20px;">
                @foreach($lores as $lore)
                    <div class="single-how-works"
                         style="text-align: center; width: 300px; margin-bottom: 30px; overflow: hidden; max-height: 450px;">
                        <div class="single-how-works-icon">
                            <i class="flaticon-lightbulb-idea"></i>
                        </div>
                        <h2>{{$lore->era}}</h2>
                        <p style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                            {{$lore->text}}
                        </p>
                        <button class="welcome-hero-btn how-work-btn" onclick="window.location.href='#'">
                            читать полностью
                        </button>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    {{--Расы--}}
    <section id="races" class="explore">
        <div class="container">
            <div class="section-header">
                <h2 style="font-size: 36px; font-weight: bold; color: #333;">Расы</h2>
            </div>
            <div class="works-content" style="display: flex; justify-content: center; flex-wrap: wrap; gap: 20px;">
                @foreach($races as $r)
                    <div class="single-how-works"
                         style="text-align: center; width: 300px; margin-bottom: 30px; overflow: hidden; max-height: 450px;">
                        <div class="single-how-works-icon">
                            <i class="flaticon-lightbulb-idea"></i>
                        </div>
                        <h2 style="margin-top: 20px; margin-bottom: 20px;">{{$r->name}}</h2>
                        <button class="welcome-hero-btn how-work-btn" onclick="window.location.href='#'">
                            Подробности
                        </button>
                    </div>
                @endforeach
            </div>
        </div>

    </section>

    {{--Классы--}}
    <section id="grades" class="reviews">
        <div class="section-header ">
            <h2 style="font-size: 36px; font-weight: bold; color: #333;">Классы</h2>
        </div>
        <div class="works-content" style="display: flex; justify-content: center; flex-wrap: wrap; gap: 20px;">
            @foreach($grades as $grade)
                <div class="single-how-works"
                     style="text-align: center; width: 300px; margin-bottom: 30px; overflow: hidden; max-height: 450px;">
                    <div class="single-how-works-icon">
                        <i class="flaticon-lightbulb-idea"></i>
                    </div>
                    <h2 style="margin-top: 20px; margin-bottom: 20px;">{{$grade->name}}</h2>
                    <button class="welcome-hero-btn how-work-btn" onclick="window.location.href='#'">
                        читать полностью
                    </button>
                </div>
            @endforeach
        </div>
    </section>

    {{--Свободные очки--}}
    <section id="free-points" class="blog">
        <div class="container" style="width: 100%; padding-left: 0; padding-right: 0;">
            <div class="section-header" style="text-align: center; margin-bottom: 50px; margin-top: 80px;">
                <h2 style="font-size: 36px; font-weight: bold; color: #333;">Свободные очки</h2>
            </div>
            <div class="works-content" style="display: flex; justify-content: center; flex-wrap: wrap; gap: 20px;">
                @foreach($freePoints as $freePoint)
                    <div class="single-blog-item"
                         style="text-align: center; width: 300px; margin-bottom: 30px; overflow: hidden; max-height: 450px;">
                        <div class="single-blog-item-img">
                            <img src="{{asset('assets/images/blog/b1.jpg')}}" alt="blog image"
                                 style="width: 100%; height: auto;">
                        </div>
                        <div class="single-blog-item-txt">
                            <h2 style="margin-top: 20px; margin-bottom: 20px;">{{$freePoint->points}}</h2>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{--Механики--}}
    <section id="mechanics" class="subscription">
        <div class="container">
            <div class="subscribe-title text-center">
                <h2 style="font-size: 36px; font-weight: bold; color: #333;">
                    Механики
                </h2>
            </div>
            <div class="works-content" style="display: flex; justify-content: center; flex-wrap: wrap; gap: 20px;">
                @foreach($mechanics as $mechanic)
                    <div class="single-how-works"
                         style="text-align: center; width: 300px; margin-bottom: 30px; overflow: hidden; max-height: 450px;">
                        <div class="single-how-works-icon">
                            <i class="flaticon-lightbulb-idea"></i>
                        </div>
                        <h2 style="margin-top: 20px; margin-bottom: 20px;">{{$mechanic->types}}</h2>
                        <button class="welcome-hero-btn how-work-btn" onclick="window.location.href='#'">
                            читать полностью
                        </button>
                    </div>
                @endforeach
            </div>
        </div>

    </section>

@endsection
