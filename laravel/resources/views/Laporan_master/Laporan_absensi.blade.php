@extends('Layouts.Master')

@section('title')
	VIP | Absensi
@endsection


@section('content')

	<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Laporan Absensi
        <small>Admin</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Laporan</a></li>
        <li class="active">Absensi</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-info">
            <div class="box-header"> <!-- Start Header -->
              <button class="btn btn-success">Search</button>
               <a href=""  onclick="window.open('{{url('lap_stock_opname/print')}}', 'newwindow', 'width=300,height=250'); return false;""><button class="btn btn-success" data-toggle="modal" data-target="#Mymodal">Print</button></a>
               <button class="btn btn-success">Clear</button>
              <br><br>
              <label>
					Mulai Tanggal
				</label>
				<input type="text" name="datepicker" id="datepicker">
				<label>
					Sampai Tanggal
				</label>
				<input type="text" name="datepicker1" id="datepicker1">
				<br><br>
            </div>	<!-- End Header -->
           
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped table-scrollable">
              <thead>
                <tr>
					<th>No.</th>
					<th>Kode Karyawan</th>
					<th>Nama Karyawan</th>
					<th>Tanggal</th>
					<th>Jam Masuk</th>
					<th>Jam Keluar</th>
					<th>Jumlah Jam</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td>1</td>
					<td>X-RPL 1</td>
					<td>M Nur Fauzan W</td>
					<td>SMKN 2 Surabaya</td>
					<td>Example</td>
					<td>Example</td>
					<td>Example</td>
				</tr>

				<tr>
					<td>2</td>
					<td>X-RPL 1</td>
					<td>Nathanael Ifandaeru</td>
					<td>SMKN 2 Surabaya</td>
					<td>Example</td>
					<td>Example</td>
					<td>Example</td>
				</tr>

				<tr>
					<td>3</td>
					<td>X-RPL 1</td>
					<td>Inul Yakin</td>
					<td>SMKN 2 Surabaya</td>
					<td>Example</td>
					<td>Example</td>
					<td>Example</td>
				</tr>

				<tr>
					<td>4</td>
					<td>X-RPL 1</td>
					<td>Yoga Bersama Anjing</td>
					<td>SMKN 2 Surabaya</td>
					<td>Example</td>
					<td>Example</td>
					<td>Example</td>
				</tr>
				</tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
    </div>

@endsection
@section('script')
<script>
$ (function () 
{
	$("#datepicker").datepicker();
});
$ (function () 
{
	$("#datepicker1").datepicker();
});
$ (function ()
{
	$("#example1").DataTable({})
})
</script>
@endsection