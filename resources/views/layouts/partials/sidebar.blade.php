        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="user-profile">
                        <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                        <img src="{{ asset('images/avatar.png') }}" alt="user" />
                        <span class="hide-menu">
                        @hasrole('Admin')
                            Admin
                        @endhasrole
                        @hasrole('Profesor')
                            Profesor
                        @endhasrole
                        @hasanyrole('Alumno 8vo|Alumno 1ro')
                            Alumno
                        @endhasanyrole

                        </span></a>
                            <!-- <ul aria-expanded="false" class="collapse">
                                <li><a href="javascript:void()">My Profile </a></li>
                                <li><a href="javascript:void()">My Balance</a></li>
                                <li><a href="javascript:void()">Inbox</a></li>
                                <li><a href="javascript:void()">Account Setting</a></li>
                                <li><a href="javascript:void()">Logout</a></li>
                            </ul> -->
                        </li>
                        <li class="nav-devider"></li>
                        @hasrole('Admin')
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><span class="hide-menu">Usuarios </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="{{ route('admin.usuarios.index')}}">Listado Usuarios </a>
                                </li>
                                <li><a href="{{ route('admin.usuarios.create')}}">Ingresar Usuario</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><span class="hide-menu">Niveles</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ route('admin.niveles.index')}}">Listado Niveles</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><span class="hide-menu">Ramos</span></a>
                            <ul aria-expanded="false" class="collapse">
                            <li><a href="{{ route('admin.ramos.index')}}">Listado Ramos</a></li>
                            </ul>
                        </li>
                        @endhasrole
                        @hasrole('Profesor')
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><span class="hide-menu">Mis Ramos </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="{{ route('admin.ramosProfesor.index')}}">Listado Ramos </a>
                                </li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><span class="hide-menu">Evaluaciones </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="{{ route('admin.evaluacionesProfesor.index')}}">Listado Evaluaciones </a>
                                </li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><span class="hide-menu">Foros </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="{{ route('admin.forosProfesor.index')}}">Listado Foros </a>
                                </li>
                            </ul>
                        </li>
                        @endhasrole

                        @hasanyrole('Alumno 8vo|Alumno 1ro')
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><span class="hide-menu">Mis Evaluaciones </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="{{ route('admin.evaluacionesAlumnos.index')}}">Listado Evaluaciones </a>
                                </li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><span class="hide-menu">Mi Horario </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="{{ route('admin.calendarioAlumnos.index')}}">ver horario </a>
                                </li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><span class="hide-menu">Mis notas </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="{{ route('admin.calificacionesAlumnos.index')}}">ver notas </a>
                                </li>
                            </ul>
                        </li>
                        @endhasanyrole
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
