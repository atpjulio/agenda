<aside class="sidebar">
    <div class="sidebar-container">

        <div class="sidebar-header">
            <div class="brand">
                <div class="logo">
                    <img src="{{ asset('img/logo.png') }}" height="40" style="margin-top: -50px;">
                    <!--
                    <span class="l l1"></span>
                    <span class="l l2"></span>
                    <span class="l l3"></span>
                    <span class="l l4"></span>
                    <span class="l l5"></span>
                    -->
                </div>
                {!! config('constants.companyInfo.name') !!}
            </div>
        </div>

        <nav class="menu">
            <ul class="sidebar-menu metismenu" id="sidebar-menu">

                <li class="@if(Request::is('home*')) active @endif">
                    <a href="{{ route('home') }}">
                        <i class="fa fa-home"></i> Inicio
                    </a>
                </li>
                @role('admin|user')
                <li class="@if(Request::is('contact*')) open active @endif">
                    <a href="">
                        <i class="fas fa-address-book"></i> Clientes
                        <i class="fa arrow"></i>
                    </a>
                    <ul class="sidebar-nav">
                        <li class="@if(Request::is('contact/create')) active @endif" >
                            <a href="{{ route('contact.create') }}">
                                <i class="fa fa-plus"></i>&nbsp;
                                Nuevo Cliente
                            </a>
                        </li>
                        <li class="@if(Request::is('contact')) active @endif" >
                            <a href="{{ route('contact.index') }}">
                                <i class="fas fa-list"></i>&nbsp;
                                Listado de Clientes
                            </a>
                        </li>
                    </ul>
                </li>
                @endrole
                @role('admin|user')
                <li class="@if(Request::is('appointment*')) open active @endif">
                    <a href="">
                        <i class="far fa-calendar-alt"></i> Citas
                        <i class="fa arrow"></i>
                    </a>
                    <ul class="sidebar-nav">
                        <li class="@if(Request::is('appointment/create')) active @endif" >
                            <a href="{{ route('appointment.create') }}">
                                <i class="fa fa-plus"></i>&nbsp;
                                Nueva Cita
                            </a>
                        </li>
                        <li class="@if(Request::is('appointment')) active @endif" >
                            <a href="{{ route('appointment.index') }}">
                                <i class="fas fa-list"></i>&nbsp;
                                Listado de Citas
                            </a>
                        </li>
                    </ul>
                </li>
                @endrole
                @role('admin')
                <li class="@if(Request::is('project*')) open active @endif">
                    <a href="">
                        <i class="fas fa-cubes"></i> Proyectos
                        <i class="fa arrow"></i>
                    </a>
                    <ul class="sidebar-nav">
                        <li class="@if(Request::is('project/create')) active @endif" >
                            <a href="{{ route('project.create') }}">
                                <i class="fa fa-plus"></i>&nbsp;
                                Nuevo Proyecto
                            </a>
                        </li>
                        <li class="@if(Request::is('project')) active @endif" >
                            <a href="{{ route('project.index') }}">
                                <i class="fas fa-list"></i>&nbsp;
                                Listado de Proyectos
                            </a>
                        </li>
                    </ul>
                </li>
                @endrole
                @role('admin')
                <li class="@if(Request::is('provider*')) open active @endif">
                    <a href="">
                        <i class="fas fa-user-friends"></i> Proveedores
                        <i class="fa arrow"></i>
                    </a>
                    <ul class="sidebar-nav">
                        <li class="@if(Request::is('provider/create')) active @endif" >
                            <a href="{{ route('provider.create') }}">
                                <i class="fa fa-plus"></i>&nbsp;
                                Nuevo Proveedor
                            </a>
                        </li>
                        <li class="@if(Request::is('provider')) active @endif" >
                            <a href="{{ route('provider.index') }}">
                                <i class="fas fa-list"></i>&nbsp;
                                Listado de Proveedores
                            </a>
                        </li>
                    </ul>
                </li>
                @endrole
                {{--
                <li class="active open" >
                    <a href="">
                        <i class="fa fa-area-chart"></i> Charts
                        <i class="fa arrow"></i>
                    </a>

                    <ul class="sidebar-nav">
                        <li class="active" >
                            <a href="charts-flot.html">
                                Flot Charts
                            </a>
                        </li>

                        <li class="active" >
                            <a href="charts-morris.html">
                                Morris Charts
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="active open" >
                    <a href="">
                        <i class="fa fa-table"></i> Tables
                        <i class="fa arrow"></i>
                    </a>

                    <ul class="sidebar-nav">
                        <li class="active" >
                            <a href="static-tables.html">
                                Static Tables
                            </a>
                        </li>

                        <li class="active" >
                            <a href="responsive-tables.html">
                                Responsive Tables
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="active" >
                    <a href="forms.html">
                        <i class="fa fa-pencil-square-o"></i> Forms
                    </a>
                </li>

                <li class="active open">
                    <a href="">
                        <i class="fa fa-desktop"></i> UI Elements
                        <i class="fa arrow"></i>
                    </a>

                    <ul class="sidebar-nav">
                        <li class="active">
                            <a href="buttons.html">
                                Buttons
                            </a>
                        </li>

                        <li class="active">
                            <a href="cards.html">
                                Cards
                            </a>
                        </li>

                        <li class="active">
                            <a href="typography.html">
                                Typography
                            </a>
                        </li>

                        <li class="active">
                            <a href="icons.html">
                                Icons
                            </a>
                        </li>

                        <li class="active">
                            <a href="grid.html">
                                Grid
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="active open">

                    <a href="">
                        <i class="fa fa-file-text-o"></i> Pages
                        <i class="fa arrow"></i>
                    </a>

                    <ul class="sidebar-nav">
                        <li class="active">
                            <a href="login.html">
                                Login
                            </a>
                        </li>

                        <li class="active">
                            <a href="signup.html">
                                Sign Up
                            </a>
                        </li>

                        <li class="active">
                            <a href="reset.html">
                                Reset
                            </a>
                        </li>

                        <li class="active">
                            <a href="error-404.html">
                                Error 404 App
                            </a>
                        </li>

                        <li class="active">
                            <a href="error-404-alt.html">
                                Error 404 Global
                            </a>
                        </li>

                        <li class="active">
                            <a href="error-500.html">
                                Error 500 App
                            </a>
                        </li>

                        <li class="active">
                            <a href="error-500-alt.html">
                                Error 500 Global
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="">
                        <i class="fa fa-sitemap"></i> Menu Levels
                        <i class="fa arrow"></i>
                    </a>

                    <ul class="sidebar-nav">

                        <li>
                            <a href="#">
                                Second Level Item
                                <i class="fa arrow"></i>
                            </a>

                            <ul class="sidebar-nav">

                                <li>
                                    <a href="#">
                                        Third Level Item
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        Third Level Item
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li>
                            <a href="#">
                                Second Level Item
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                Second Level Item
                                <i class="fa arrow"></i>
                            </a>

                            <ul class="sidebar-nav">

                                <li>
                                    <a href="#">
                                        Third Level Item
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        Third Level Item
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        Third Level Item
                                        <i class="fa arrow"></i>
                                    </a>

                                    <ul class="sidebar-nav">

                                        <li>
                                            <a href="#">
                                                Fourth Level Item
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                Fourth Level Item
                                            </a>
                                        </li>
                                    </ul>

                                </li>
                            </ul>
                        </li>

                    </ul>
                </li>

                <li class="active" >
                    <a href="screenful.html">
                        <i class="fa fa-bar-chart"></i> Agile Metrics <span class="label label-screenful">by Screenful</span>
                    </a>
                </li>

                <li class="active" >
                    <a href="https://github.com/modularcode/modular-admin-html">
                        <i class="fa fa-github-alt"></i> Theme Docs
                    </a>
                </li>
                --}}

            </ul>
        </nav>

    </div>

    {{--> app/_common/sidebar/customize/customize--}}

</aside>
<div class="sidebar-overlay" id="sidebar-overlay"></div>
<div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
