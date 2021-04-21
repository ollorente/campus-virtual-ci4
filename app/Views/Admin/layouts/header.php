<div id="wrapper">

    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url(route_to(('admin_dash'))) ?>">
            <div class="sidebar-brand-icon rotate-n-15">
                <img src="https://res.cloudinary.com/un1c0lm4y0r/image/upload/v1607725128/logo_sietic_tni1d8.png" alt="Backoffice">
            </div>
            <div class="sidebar-brand-text mx-3">Backoffice</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url(route_to(('admin_dash'))) ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Virtualidad
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#courses" aria-expanded="true" aria-controls="courses">
                <i class="fab fa-discourse"></i>
                <span>Cursos</span>
            </a>
            <div id="courses" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Components:</h6>
                    <a class="collapse-item" href="<?php echo base_url(route_to(('admin_courses'))) ?>">Listado</a>
                    <a class="collapse-item" href="<?php echo base_url(route_to(('admin_new_course'))) ?>">Nuevo curso</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#graduates" aria-expanded="true" aria-controls="graduates">
                <i class="fas fa-user-graduate"></i>
                <span>Diplomados</span>
            </a>
            <div id="graduates" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Utilities:</h6>
                    <a class="collapse-item" href="<?php echo base_url(route_to(('admin_graduates'))) ?>">Listado</a>
                    <a class="collapse-item" href="<?php echo base_url(route_to(('admin_new_graduate'))) ?>">Nuevo diplomado</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#programs" aria-expanded="true" aria-controls="programs">
                <i class="fas fa-graduation-cap"></i>
                <span>Programas</span>
            </a>
            <div id="programs" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Utilities:</h6>
                    <a class="collapse-item" href="<?php echo base_url(route_to(('admin_programs'))) ?>">Listado</a>
                    <a class="collapse-item" href="<?php echo base_url(route_to(('admin_new_program'))) ?>">Nuevo programa</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Ayudas
        </div>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tools" aria-expanded="true" aria-controls="tools">
                <i class="fas fa-tools"></i>
                <span>Herramientas</span>
            </a>
            <div id="tools" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Utilities:</h6>
                    <a class="collapse-item" href="<?php echo base_url(route_to(('admin_tools'))) ?>">Listado</a>
                    <a class="collapse-item" href="<?php echo base_url(route_to(('admin_new_tool'))) ?>">Nueva herramienta</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tutorials" aria-expanded="true" aria-controls="tutorials">
                <i class="fas fa-magic"></i>
                <span>Tutoriales</span>
            </a>
            <div id="tutorials" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Utilities:</h6>
                    <a class="collapse-item" href="<?php echo base_url(route_to(('admin_tutorials'))) ?>">Listado</a>
                    <a class="collapse-item" href="<?php echo base_url(route_to(('admin_new_tutorial'))) ?>">Nuevo tutorial</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Materiales
        </div>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#objects" aria-expanded="true" aria-controls="objects">
                <i class="fas fa-object-ungroup"></i>
                <span>Objetos</span>
            </a>
            <div id="objects" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Utilities:</h6>
                    <a class="collapse-item" href="<?php echo base_url(route_to(('admin_objects'))) ?>">Listado</a>
                    <a class="collapse-item" href="<?php echo base_url(route_to(('admin_new_object'))) ?>">Nuevo objeto</a>
                    <?php if (isset($_objects)): ?><a class="collapse-item" href="<?php echo base_url(route_to(('admin_dash'))) ?>">Subir imagen</a><?php endif ?>
                    <?php if (isset($_objects)): ?><a class="collapse-item" href="<?php echo base_url(route_to(('admin_dash'))) ?>">Subir objeto</a><?php endif ?>
                </div>
            </div>
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#resources" aria-expanded="true" aria-controls="resources">
                <i class="fab fa-sourcetree"></i>
                <span>Recursos</span>
            </a>
            <div id="resources" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Utilities:</h6>
                    <a class="collapse-item" href="<?php echo base_url(route_to(('admin_resources'))) ?>">Listado</a>
                    <a class="collapse-item" href="<?php echo base_url(route_to(('admin_new_resource'))) ?>">Nuevo recurso</a>
                    <?php if (isset($_resource)): ?><a class="collapse-item" href="<?php echo base_url(route_to(('admin_dash'))) ?>">Subir foto</a><?php endif ?>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">
        <!-- Heading -->
        <div class="sidebar-heading">
            Configuraciones
        </div>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#settings" aria-expanded="true" aria-controls="settings">
                <i class="fab fa-sourcetree"></i>
                <span>Configuraciones</span>
            </a>
            <div id="settings" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Utilities:</h6>
                    <a class="collapse-item" href="<?php echo base_url(route_to(('admin_setting_menus'))) ?>">Menús</a>
                    <a class="collapse-item" href="<?php echo base_url(route_to(('admin_setting_objects'))) ?>">Objetos</a>
                    <a class="collapse-item" href="<?php echo base_url(route_to(('admin_setting_resources'))) ?>">Recursos</a>
                    <a class="collapse-item" href="<?php echo base_url(route_to(('admin_setting_roles'))) ?>">Roles</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">
        <!-- Heading -->
        <div class="sidebar-heading">Configuración</div>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#users" aria-expanded="true" aria-controls="users">
                <i class="fas fa-users"></i>
                <span>Usuarios</span>
            </a>
            <div id="users" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Utilities:</h6>
                    <a class="collapse-item" href="<?php echo base_url(route_to(('admin_setting_users'))) ?>">Listado</a>
                    <a class="collapse-item" href="<?php echo base_url(route_to(('admin_setting_new_user'))) ?>">Nuevo recurso</a>
                </div>
            </div>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">oscar.llorente</span>
                            <img class="img-profile rounded-circle" src="/assets/img/user.png">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="<?php echo base_url(route_to(('admin_profile'))) ?>">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Perfil
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Configuraciones
                            </a>
                            <a class="dropdown-item" href="<?php echo base_url(route_to(('home'))) ?>" target="_blank">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Ver sitio web
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?php echo base_url(route_to('admin_signout')) ?>" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Salir
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->