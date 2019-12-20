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
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-account"></i><span class="hide-menu">Usuarios </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="{{ route('admin.usuarios.index')}}">Listado Usuarios </a>
                                </li>
                                <li><a href="{{ route('admin.usuarios.create')}}">Ingresar Usuario</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Niveles</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ route('admin.niveles.index')}}">Listado Niveles</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-settings"></i><span class="hide-menu">Ramos</span></a>
                            <ul aria-expanded="false" class="collapse">
                            <li><a href="{{ route('admin.ramos.index')}}">Listado Ramos</a></li>
                            </ul>
                        </li>
                        @endhasrole

                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><span class="hide-menu">Mis Ramos </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="{{ route('admin.ramosProfesor.index')}}">Listado Ramos </a>
                                </li>
                            </ul>
                        </li>

                        <!-- <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-engine"></i><span class="hide-menu">Mantenciones</span></a>
                            <ul aria-expanded="false" class="collapse">
                            <li><a href="app-calendar.html">Listado mantenciones</a></li>
                                <li><a href="app-chat.html">Nueva mantencion</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-wrench"></i><span class="hide-menu">Tecnicos</span></a>
                            <ul aria-expanded="false" class="collapse">
                            <li><a href="app-calendar.html">Listado Tecnicos</a></li>
                                <li><a href="app-chat.html">Nueva Tecnico</a></li>
                            </ul>
                        </li> -->

                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
