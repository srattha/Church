<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <!-- <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
      admin
    </title>

    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
    @yield('css')
  </head>

  <body class="user-profile">
    <div class="wrapper ">
      <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
      -->
      <div class="logo">

        <a href="" class="simple-text logo-normal">
          คริสตจักร ม้งไหม่พัฒนา {{ Request::is('news') }}
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="{{ Request::is('activities') ? 'active' : '' }}">
            <a href="/activities">
              <i class="now-ui-icons design_app"></i>
              <p>รูปกิจกรรม</p>
            </a>
          </li>
          <li class="{{ Request::is('news') ? 'active' : '' }}">
            <a href="/news">
              <i class="now-ui-icons education_atom"></i>
              <p>จัดการ ข่าวประชาสัมพันธ์</p>
            </a>
          </li>
          
        </ul>
      </div>
    </div>
    @yield('content')
  </div>

  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
</body>
@yield('script')@yield('css')
</html>