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
    <a href="{{ route('home') }}" class="brand-link">
      <img src="{{ asset('img/jivalogo.png') }}" alt="Logo MDP" style="height: 50px;">
      <span class="brand-text fw-light">Jiva Agriculuture</span>
    </a>
  </div>
  <!--end::Sidebar Brand-->

  <!--begin::Sidebar Wrapper-->
  <div class="sidebar-wrapper">
    <nav class="mt-2">
      <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">

        <li class="nav-item">
          <a href="{{ route('home') }}" class="nav-link">
            <i class="nav-icon bi bi-house-door-fill"></i>
            <p>Dashboard</p>
          </a>
        </li>

        @php
          $level = strtolower(Auth::user()->level);
        @endphp

        @if($level === 'admin')
          {{-- Admin Menu --}}
          {{-- <li class="nav-item">
            <a href="{{ route('admin.barang.index') }}" class="nav-link">
              <i class="nav-icon bi bi-box"></i>
              <p>Kelola Barang</p>
            </a>
          </li> --}}
          <li class="nav-item">
            <a href="{{ route('admin.user.index') }}" class="nav-link">
              <i class="nav-icon bi bi-people-fill"></i>
              <p>Kelola User</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.laporan.index') }}" class="nav-link">
              <i class="nav-icon bi bi-file-earmark-bar-graph"></i>
              <p>Laporan Penjualan</p>
            </a>
          </li>

        @elseif($level === 'petani')
          {{-- Petani Menu --}}
          <li class="nav-item">
            <a href="{{ route('petani.barang.index') }}" class="nav-link">
              <i class="nav-icon bi bi-box-seam"></i>
              <p>Stok Barang</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('petani.laporan.index') }}" class="nav-link">
              <i class="nav-icon bi bi-bar-chart-line-fill"></i>
              <p>Laporan Penjualan</p>
            </a>
          </li>

        @elseif($level === 'pembeli')
        
  {{-- Pembeli Menu --}}
  <li class="nav-item">
    <a href="{{ route('pembeli.beli.index') }}" class="nav-link">
      <i class="nav-icon bi bi-cart"></i>
      <p>Beli Barang</p>
    </a>
  </li>
  <li class="nav-item">
    <a href="{{ route('pembeli.riwayat.index') }}" class="nav-link">
      <i class="nav-icon bi bi-clock-history"></i>
      <p>Riwayat Pembelian</p>
    </a>
  </li>


        @elseif($level === 'user')
          {{-- User Menu --}}
          <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link">
              <i class="nav-icon bi bi-info-circle"></i>
              <p>Informasi</p>
            </a>
          </li>
        @endif

      </ul>
    </nav>
  </div>
  <!--end::Sidebar Wrapper-->
</aside>
<!--end::Sidebar-->
