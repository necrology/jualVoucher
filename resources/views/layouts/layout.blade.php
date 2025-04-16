<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Font Awesome 6 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- Google Font: Overpass -->
  <link href="https://fonts.googleapis.com/css2?family=Overpass:wght@400;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@latest/dist/apexcharts.css">
  <title>Hello, world!</title>

  <style>
    /* @font-face {
      font-family: 'Poppins';
      src: url('public/fonts/poppins/Poppins-Regular.otf') format('opentype');
      font-weight: normal;
      font-style: normal;
    } */

    :root {
      --main-color: #008B97;
    }

    body {
      font-family: 'Overpass', sans-serif;
      font-size: 14px;
    }

    .sidebar-collapsed .sidebar {
      width: 70px;
    }

    .sidebar {
      width: 260px;
      min-height: 100vh;
      border-right: 1px solid #dee2e6;
    }

    .sidebar-collapsed .menu-label {
      opacity: 0;
      visibility: hidden;
      width: 0;
      overflow: hidden;
      display: inline-block;
    }

    .menu-label {
      transition: all 0.3s ease;
      white-space: nowrap;
    }

    .menu-button {
      background-color: var(--main-color);
      color: white;
    }

    .menu-button:hover {
      background-color: #007680;
      color: white;
    }

    .menu-outline {
      border: 1px solid var(--main-color);
      border-radius: 5px;
    }

    .menu-outline .btn-link {
      color: var(--main-color);
    }

    .btn-outline-custom {
      border: 1px solid var(--main-color);
      color: var(--main-color);
    }

    .btn-outline-custom:hover {
      background-color: var(--main-color);
      color: white;
    }

    .submenu a {
      display: block;
      padding: 0.25rem 1rem;
      color: #333;
      text-decoration: none;
    }

    .submenu a:hover {
      color: var(--main-color);
    }

    .sidebar-footer {
      position: absolute;
      bottom: 10px;
      right: 20px;
      font-size: 12px;
      color: #888;
    }

    .sidebar-collapsed .sidebar-footer {
      opacity: 0;
      visibility: hidden;
    }

    .sidebar-collapsed .sidebar-footer {
      opacity: 0;
      visibility: hidden;
    }

    .sidebar-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .sidebar-collapsed .sidebar .sidebar-header {
      margin: 0 !important;
      padding: 5px !important;
    }

    .toggle-btn {
      background: none;
      border: none;
      color: #333;
      font-size: 15px;
    }

    .sidebar-collapsed .sidebar .btn .fas {
      margin-top: 70%;
    }

    .show1 {
      display: none;
      visibility: none;
    }

    .sidebar-collapsed .sidebar .btn .fa-folder-plus {
      position: absolute;
      bottom: 50%;
      transform: translateY(+50%);
    }

    .fa-chevron-down,
    .fa-chevron-up {
      position: absolute;
      right: 15px;
      top: 50%;
      transform: translateY(-50%);
    }

    .card-custom1 {
      background-color: #AACDFF;
      border-radius: 10px;
    }

    .card-custom1 h6 {
      font-size: 0.9rem;
      margin-bottom: 0.5rem;
    }

    .card-custom1 .value {
      font-size: 1.5rem;
      font-weight: bold;
      color: #008B97;
    }

    .card-custom {
      background-color: #FFF4DC;
      border-radius: 10px;
    }

    .card-custom h6 {
      font-size: 0.9rem;
      margin-bottom: 0.5rem;
    }

    .card-custom .value {
      font-size: 1.5rem;
      font-weight: bold;
      color: #008B97;
    }

    .filter-group select {
      font-size: 0.85rem;
    }
  </style>
</head>

<body>
  <div class="d-flex" id="app">
    <!-- Sidebar -->
    <div class="sidebar bg-white p-3 position-relative">
      <div class="sidebar-header mb-4">
        <div class="menu-label">
          <small>Dashboard</small>
          <h5>Voucher Champ</h5>
        </div>
        <button class="toggle-btn" id="toggleSidebarBtn" title="Toggle Sidebar">
          <i class="fas fa-bars"></i>
        </button>
      </div>

      <button class="btn menu-button w-100 mb-3" style="font-size: 12px;text-align: left;width: 254px;height: 42px;">
        <i class="fas fa-home me-2"></i> <span class="menu-label">Dashboard</span>
      </button>

      <!-- Collapsible Dropdown -->
      <div class="menu-outline mb-3">
        <button onclick="changepost('i-chev')"
          class="position-relative btn btn-link btn-outline-custom d-flex justify-content-between align-items-center w-100 text-decoration-none fw-semibold"
          data-bs-toggle="collapse" data-bs-target="#generateVoucherMenu" aria-expanded="false"
          style="font-size: 12px;width: 254px;height: 42px;">
          <div><i class="fas fa-folder-plus me-2"></i> <span class="menu-label">Generate
              Voucher <i id="i-chev" class="fas fa-chevron-down"></i></span></div>

          {{-- <div id="iconChevron"><i class="fas fa-chevron-down" style="visibility: none"></i></div> --}}

        </button>
        <div class="collapse mt-2" id="generateVoucherMenu">
          <div class="submenu" style="font-size: 12px">
            <a href="#"><i class="fas fa-random" style="color: #008B97"></i> <span class="menu-label">Generate
                Voucher</span></a></li>
            <a href="#"><i class="fas fa-database" style="color: #008B97"></i> <span class="menu-label">Data
                Voucher</span></a></li>
            <a href="#"><i class="fas fa-history" style="color: #008B97"></i> <span class="menu-label">History
                Pengiriman
                Voucher</span></a></li>
          </div>
        </div>
      </div>

      <!-- Other Menu Buttons -->
      <button class="btn btn-outline-custom w-100 mb-3"
        style="font-size: 12px;text-align: left;width: 254px;height: 42px;">
        <i class="fas fa-file me-2"></i> <span class="menu-label">Histori Penjualan Voucher</span>
      </button>

      <button class="btn btn-outline-custom w-100 mb-3"
        style="font-size: 12px;text-align: left;width: 254px;height: 42px;">
        <i class="fas fa-cog me-2"></i> <span class="menu-label">Setting Penjualan Voucher</span>
      </button>

      <div class="sidebar-footer">Di Beli & Di Jual</div>
    </div>

    <div class="flex-fill p-4">
      @yield('content')
    </div>

  </div>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>

  {{-- <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script> --}}
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  @include('layouts.js')
</body>

</html>