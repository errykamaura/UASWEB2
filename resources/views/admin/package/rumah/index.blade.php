@extends('admin.layouts.app')
@section('content')
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Master Rumah</h3>
			<div class="row">
				<a href="/admin/rumah/form">
					<!-- <button type="button" class="btn btn-primary btn-toastr"><i class="fa fa-plus-square"></i> Tambah Data Rumah</button> -->
				</a>
				<!-- TABLE STRIPED -->
				<div class="panel">
					<div class="panel-heading">
						<h3 class="panel-title">Data Rumah</h3>
					</div>
					<div class="panel-body">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>No.</th>
									<th width="100px">Nama Perumahan</th>
									<th>Fasilitas</th>
									<th>Lokasi</th>
									<th width="90px">Luas Tanah</th>
									<th>Harga</th>
									<th>Jarak Tempat Kerja</th>
									<th width="250px">Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; ?>
								@if($data_rumah->count() > 0)
								@foreach($data_rumah as $DR)
								<tr>
									<td>
										<?php
										echo $no++;
										?>
									</td>
									<td>{{ $DR->nama }}</td>
									<td>{{ $DR->fasilitas }}</td>
									<td>{{ $DR->lokasi }}</td>
									<td>{{ $DR->luas }} M<sup>2</sup></td>
									<td>Rp. {{ $DR->harga }}</td>
									<td>{{ $DR->jarak_tempat_kerja }} KM</td>
									<td>
										<button type="button" class="btn btn-info btn-toastr">
											<a href="/admin/rumah/formedit/{{ $DR->id }}" style="color:white;">Update</a>
										</button>
										<button type="button" class="btn btn-danger btn-toastr">
											<a href="/admin/rumah/hapusrumah/{{ $DR->nama}}" style="color:white;">Delete</a>
										</button>
									</td>
								</tr>
								@endforeach
								@else
								<tr>
									<td colspan="6">Data tidak tersedia</td>
								</tr>
								@endif
							</tbody>
						</table>
					</div>
				</div>
				<!-- END TABLE STRIPED -->
			</div>
		</div>
	</div>
	<!-- END MAIN CONTENT -->
</div>
@endsection