<!--begin::Sidebar-->
<aside class="app-sidebar bg-body-secondary custom-sidebar" data-bs-theme="dark">

  <style>
    .custom-sidebar .sidebar-brand {
  border-bottom: none !important;
}

.custom-sidebar .sidebar-wrapper {
  border-top: none !important;
}

  </style>
  <!--begin::Sidebar Brand-->
  <div class="sidebar-brand">
    <a href="../index.html" class="brand-link" >
      <img src="{{ asset('img/mdp3.png') }}" alt="Logo MDP" style="height: 60px;">
      <span class="brand-text fw-light">Universitas MDP</span>
    </a>
  </div>
  <!--end::Sidebar Brand-->

  <!--begin::Sidebar Wrapper-->
  <div class="sidebar-wrapper">
    <nav class="mt-2">
      <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="{{ route('layout.home') }}"  class="nav-link">
            <i class="nav-icon bi bi-house-door-fill"></i>
            <p>Home</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('fakultas.index') }}"  class="nav-link">
            <i class="nav-icon bi bi-building"></i>
            <p>Fakultas</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('prodi.index') }}" class="nav-link">
            <i class="nav-icon bi bi-book"></i>
            <p>Program Studi</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('dosen.index') }}" class="nav-link">
            <i class="nav-icon bi bi-person-badge"></i>
            <p>Dosen</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('materi.index') }}" class="nav-link">
            <i class="nav-icon bi bi-journal-text"></i>
            <p>Materi</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('mahasiswa.index') }}" class="nav-link">
            <i class="nav-icon bi bi-people"></i>
            <p>Mahasiswa</p>
          </a>
        </li>
      </ul>
    </nav>
  </div>
  <!--end::Sidebar Wrapper-->
</aside>
<!--end::Sidebar-->
