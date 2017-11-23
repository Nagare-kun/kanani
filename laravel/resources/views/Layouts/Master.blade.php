<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title')</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
	<!-- Datepicker Nathan -->
	<link rel="stylesheet" href="{{asset('bower_components/jquery-ui-1.12.1/jquery-ui.min.css')}}">
	<!-- Ionicons -->
	<link rel="stylesheet" href="{{asset('bower_components/Ionicons/css/ionicons.min.css')}}">
	<!-- Theme style -->
	<!-- DataTables -->
	<link rel="stylesheet" href="{{asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
	<!-- Date picker nathan -->
	<link rel="stylesheet" href="">

	<link rel="stylesheet" href="{{asset('plugins/iCheck/all.css')}}">

	<link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css')}}">
	<!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
	<link rel="stylesheet" href="{{asset('dist/css/skins/skin-yellow.min.css')}}">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

	<!-- Google Font -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->

<<<<<<< HEAD
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('/view_dokter')}}"><i class="fa fa-circle-o"></i>Dokter</a></li>
            <li><a href="{{url('/view_jenisrawat')}}"><i class="fa fa-circle-o"></i>Jenis Rawat</a></li>
            <li><a href="{{url('/view_obat')}}"><i class="fa fa-circle-o"></i>Obat</a></li>
            <li><a href="{{url('/view_pegawai')}}"><i class="fa fa-circle-o"></i>Pegawai</a></li>
            <li><a href="{{url('/view_peralatan')}}"><i class="fa fa-circle-o"></i>Peralatan</a></li>
            <li><a href="{{url('/view_periksa')}}"><i class="fa fa-circle-o"></i>Periksa</a></li>
            <li><a href="{{url('/view_supplier')}}"><i class="fa fa-circle-o"></i>Supplier</a></li>
            <li><a href="{{url('/view_userfacial')}}"><i class="fa fa-circle-o"></i>User Facial</a></li>
            <li><a href="{{url('/view_level')}}"><i class="fa fa-circle-o"></i>Level</a></li>
            <li><a href="{{url('/view_satuan')}}"><i class="fa fa-circle-o"></i>Satuan</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Form</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('/view_daftar_pasien')}}"><i class="fa fa-circle-o"></i>Daftar Pasien</a></li>
            <li><a href="{{url('/view_facial_pasien')}}"><i class="fa fa-circle-o"></i>Facial Pasien</a></li>
            <li><a href="{{url('/view_rekam_medis')}}"><i class="fa fa-circle-o"></i>Rekam Medis</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-money"></i> <span>Transaksi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('/view_beli_obat')}}"><i class="fa fa-circle-o"></i> Pembelian Obat</a></li>
            <li><a href="{{url('/view_jual_obat')}}"><i class="fa fa-circle-o"></i> Penjualan Obat</a></li>
            <li><a href="{{url('/view_stock_opname')}}"><i class="fa fa-circle-o"></i> Stock Opname</a></li>
            <li><a href="{{url('/view_penjualan_resep')}}"><i class="fa fa-circle-o"></i> Penjualan Resep</a></li>
            <li><a href="{{url('/view_penulisan_resep')}}"><i class="fa fa-circle-o"></i> Penulisan Resep</a></li>
            <li><a href="{{url('/view_konversi')}}"><i class="fa fa-circle-o"></i> Konsersi Satuan Obat</a></li>
          </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-line-chart"></i> <span>Laporan</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
          <ul class="treeview-menu">
            <li><a href="{{url('/view_absensi')}}"><i class="fa fa-circle-o"></i>Absensi</a></li>
            <li><a href="{{url('/view_inventory')}}"><i class="fa fa-circle-o"></i>Inventory</a></li>
            <li><a href="{{url('/lap_pembelian_obat')}}"><i class="fa fa-circle-o"></i>Pembelian Obat</a></li>
            <li><a href="{{url('/Laporan_insentif_obat')}}"><i class="fa fa-circle-o"></i>Insentif Obat</a></li>
            <li><a href="{{url('/Laporan_insentif')}}"><i class="fa fa-circle-o"></i>Insentif</a></li>
            <li><a href="{{url('/Laporan_perawatan')}}"><i class="fa fa-circle-o"></i>Perawatan</a></li>
            <li><a href="{{url('/Laporan_penjualan')}}"><i class="fa fa-circle-o"></i>Penjualan Obat</a></li>
            <li><a href="{{url('/Laporan_penjualan_detail')}}"><i class="fa fa-circle-o"></i>Penjualan Obat Detil</a></li>
            <li><a href="{{url('/Laporan_perpenju')}}"><i class="fa fa-circle-o"></i>Perawatan dan Penjualan</a></li>
            <li><a href="{{url('/view_lap_foto')}}"><i class="fa fa-circle-o"></i>History Foto</a></li>
            <li><a href="{{url('/lap_stock_opname')}}"><i class="fa fa-circle-o"></i>Stock Opname</a></li>
            <li><a href="{{url('/lap_konversi')}}"><i class="fa fa-circle-o"></i>Konversi Obat</a></li>
            <li><a href="{{url('/view_inventory_resep')}}"><i class="fa fa-circle-o"></i>Inventory Resep</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  @yield('content')

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Simplify Your Business
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">Ide Kreasi</a>.</strong> All rights reserved.
  </footer>
<!-- 
=======
<body class="hold-transition sidebar-mini skin-yellow">
	<div class="wrapper">

		<!-- Main Header -->
		@include('Layouts._header')
		<!-- Left side column. contains the logo and sidebar -->
		<aside class="main-sidebar">

			<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">

				<!-- Sidebar user panel (optional) -->
				<div class="user-panel">
					<div class="pull-left image">
						<img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
					</div>
					<div class="pull-left info">
						<p>Alexander Pierce</p>
						<!-- Status -->
						{{--
						<a href="#">
							<i class="fa fa-circle text-success"></i> Online</a> --}}
					</div>
				</div>

				<!-- search form (Optional) -->
				<form action="#" method="get" class="sidebar-form">
					<div class="input-group">
						<input type="text" name="q" class="form-control" placeholder="Search...">
						<span class="input-group-btn">
							<button type="submit" name="search" id="search-btn" class="btn btn-flat">
								<i class="fa fa-search"></i>
							</button>
						</span>
					</div>
				</form>
				<!-- /.search form -->

				<!-- Sidebar Menu -->
				@include('Layouts._sideleft')
				<!-- /.sidebar-menu -->
			</section>
			<!-- /.sidebar -->
		</aside>

		@yield('content')

		<!-- Main Footer -->
		@include('Layouts._footer')
		<!-- 
>>>>>>> c92775a65473a039af9dafbdceba74c0a4197c98
    </div>
  </aside> -->
		<!-- /.control-sidebar -->
		<!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
		<div class="control-sidebar-bg"></div>
	</div>
	<!-- ./wrapper -->

	<!-- REQUIRED JS SCRIPTS -->
	<!-- jQuery 3 -->
	<script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
	<!-- DataTables -->
	<script src="{{asset('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
	<!-- Date Picker Nathan -->
	<script src="{{asset('bower_components/jquery-ui-1.12.1/jquery-ui.min.js')}}"></script>
	<!-- SlimScroll -->
	<script src="{{asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<!-- FastClick -->
	<script src="{{asset('bower_components/fastclick/lib/fastclick.js')}}"></script>
	<!-- AdminLTE App -->
	<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="{{asset('plugins/iCheck/icheck.min.js')}}"></script>
	<!-- InputMask -->

	{{--
	<script src="{{asset('dist/js/demo.js')}}"></script> --}}
	<!-- page script -->

	@yield('script')

	<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>

</html>