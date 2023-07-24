<div class="col-xl-3">
    <!-- Responsive offcanvas body START -->
    <div class="offcanvas-xl offcanvas-end" tabindex="-1" id="offcanvasSidebar">
        <!-- Offcanvas header -->
        <div class="offcanvas-header bg-light">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">My profile</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasSidebar"
                aria-label="Close"></button>
        </div>
        <!-- Offcanvas body -->
        <div class="offcanvas-body p-3 p-xl-0">
            <div class="bg-dark border rounded-3 p-3 w-100">
                <!-- Dashboard menu -->
                <div class="list-group list-group-dark list-group-borderless collapse-list">
                    <a class="list-group-item {{ in_array(request()->route()->getName(),['dashboard'])? 'active': '' }}"
                        href="{{ route('dashboard') }}"><i class="bi bi-ui-checks-grid fa-fw me-2"></i>Dashboard</a>

                    <a class="list-group-item {{ in_array(request()->route()->getName(),['cursos'])? 'active': '' }}"
                        href="student-subscription.html"><i class="bi bi-card-checklist fa-fw me-2"></i>My
                        Subscriptions</a>

                    <a class="list-group-item {{ in_array(request()->route()->getName(),['mycursos'])? 'active': '' }}"
                        href="{{ route('mycursos') }}"><i class="bi bi-basket fa-fw me-2"></i>Mis Cursos</a>

                    <a class="list-group-item {{ in_array(request()->route()->getName(),['historial-pagos'])? 'active': '' }}"
                        href="{{ route('historial-pagos') }}"><i class="bi bi-credit-card-2-front fa-fw me-2"></i>Payment
                        Info</a>

                    <a class="list-group-item {{ in_array(request()->route()->getName(),['lista-deseos'])? 'active': '' }}"
                        href="{{ route('lista-deseos') }}"><i class="bi bi-cart-check fa-fw me-2"></i>Lista de deseos</a>

                    <a class="list-group-item {{ in_array(request()->route()->getName(),['profile.show'])? 'active': '' }}"
                        href="{{ route('profile.show') }}"><i class="bi bi-pencil-square fa-fw me-2"></i>Editar
                        Perfil</a>

                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf
                        <a class="list-group-item text-danger bg-danger-soft-hover" href="#"
                            onclick="this.parentElement.submit()"><i class="fas fa-sign-out-alt fa-fw me-2"></i>Cerrar Session</a>
                    </form>
                    <!-- Collapse menu -->
                    <a class="list-group-item" data-bs-toggle="collapse" href="#collapseauthentication" role="button"
                        aria-expanded="false" aria-controls="collapseauthentication">
                        <i class="bi bi-lock fa-fw me-2"></i>Dropdown level
                    </a>
                    <!-- Submenu -->
                    <ul class="nav collapse flex-column" id="collapseauthentication" data-bs-parent="#navbar-sidebar">
                        <li class="nav-item"> <a class="nav-link" href="#">Dropdown item</a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="#">Dropdown item</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Responsive offcanvas body END -->
</div>
