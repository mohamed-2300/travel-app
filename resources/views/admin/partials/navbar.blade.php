<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
  <div class="container-fluid py-1 px-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm">
          <a class="opacity-5 text-dark" href="{{ route('admin.dashboard') }}">Pages</a>
        </li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">
          @yield('title')
        </li>
      </ol>
      <h6 class="font-weight-bolder mb-0">@yield('title')</h6>
    </nav>
    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
      <!-- Barre de recherche -->
      <div class="ms-md-auto pe-md-3 d-flex align-items-center">
        <div class="input-group">
          <span class="input-group-text text-body"><i class="material-icons">search</i></span>
          <input type="text" class="form-control" placeholder="Rechercher...">
        </div>
      </div>
      <!-- Liens à droite -->
      <ul class="navbar-nav  justify-content-end">
        <li class="nav-item d-flex align-items-center mx-5">
          <a href="{{ route('admin.dashboard') }}" class="nav-link text-body font-weight-bold px-0">
            <i class="material-icons">home</i>
            <span class="d-sm-inline d-none"></span>
          </a>
        </li>
        <li class="nav-item dropdown pe-2 d-flex align-items-center">
          <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="material-icons cursor-pointer">notifications</i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
            <li class="mb-2">
              <a class="dropdown-item border-radius-md" href="javascript:;">
                <div class="d-flex py-1">
                  <div class="my-auto">
                    <img src="{{ asset('assets/img/team-2.jpg') }}" class="avatar avatar-sm me-3">
                  </div>
                  <div class="d-flex flex-column justify-content-center">
                    <h6 class="text-sm font-weight-normal mb-1">
                      <span class="font-weight-bold">Nouvelle notif</span> reçue
                    </h6>
                    <p class="text-xs text-secondary mb-0">Il y a 2 minutes</p>
                  </div>
                </div>
              </a>
            </li>
            <!-- Ajoute d'autres notifications ici -->
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
