<div class="container-fluid">
    <div class="row">
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a class="brand-link">
                <span class="brand-text font-weight-light">Сайт</span>
            </a>

            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        <li class="nav-header">Основа</li>

                        <li class="nav-item">
                            <a href="{{route('admin.lore.index')}}" class="nav-link">
                                <i class="nav-icon fas fa-globe-asia"></i>
                                <p>
                                    Лор
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.inventory.index')}}" class="nav-link">
                                <i class="nav-icon fas fa-boxes"></i>
                                <p>
                                    Инвентарь
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.freePoint.index')}}" class="nav-link">
                                <i class="nav-icon fab fa-free-code-camp"></i>
                                <p>
                                    Свободные очки
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.mechanic.index')}}" class="nav-link">
                                <i class="nav-icon fas fa-cogs"></i>
                                <p>
                                    Механики
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.ability.index')}}" class="nav-link">
                                <i class="nav-icon  fas fa-book"></i>
                                <p>
                                    Навыки
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.race.index')}}" class="nav-link">
                                <i class="nav-icon fas fa-registered"></i>
                                <p>
                                    Расы
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.grade.index')}}" class="nav-link">
                                <i class="nav-icon fas fa-user-graduate"></i>
                                <p>
                                    Классы
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.patch.index')}}" class="nav-link">
                                <i class="nav-icon fas fa-wrench"></i>
                                <p>
                                    Патчи
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.skill.index')}}" class="nav-link">
                                <i class="nav-icon fas fa-wrench"></i>
                                <p>
                                    Способности
                                </p>
                            </a>
                        </li>

                        <li class="nav-header">Вспомогательные</li>

                        <li class="nav-item">
                            <a href="{{route('admin.typeAbility.index')}}" class="nav-link">
                                <i class="nav-icon fas fa-book-open"></i>
                                <p>
                                    Типы навыков
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.cube.index')}}" class="nav-link">
                                <i class="nav-icon fas fa-dice-d6"></i>
                                <p>
                                     D6
                                </p>
                            </a>
                        </li>

                    </ul>
                </nav>
            </div>
        </aside>
    </div>
</div>
