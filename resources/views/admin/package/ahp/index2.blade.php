@extends('admin.layouts.app')
@section('content')
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Normalisasi Matriks 2</h3>
			<div class="row">
				<!-- TABLE STRIPED -->
				<div class="panel">
					<div class="panel-heading">
						<h3 class="panel-title">Normalisasi Matriks 2</h3>
					</div>
					<div class="panel-body">
						<form action="{{ route('postmatriks2') }}" method="post">
							@csrf
							<table class="table table-striped">
								<thead>
									<tr>
									<th width="50px">Variabel</th>
										<th width="50px">Fasilitas</th>
										<th width="50px">Lokasi</th>
										<th width="50px">Luas</th>
										<th width="50px">Harga</th>
										<th width="50px">Jarak Tempat Kerja</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Fasilitas</td>
										<td><input type="number" name="k1" value="{{ $k1 }}" readonly></td>
										<td><input type="number" name="k2" value="{{ $k2 }}" readonly></td>
										<td><input type="number" name="k3" value="{{ $k3 }}" readonly></td>
										<td><input type="number" name="k4" value="{{ $k4 }}" readonly></td>
										<td><input type="number" name="k5" value="{{ $k5 }}" readonly></td>
										<!-- <td>{{ $k1 }}</td>
									<td>{{ $k2 }}</td>
									<td>{{ $k3 }}</td>
									<td>{{ $k4 }}</td>
									<td>{{ $k5 }}</td> -->
									</tr>
									<tr>
										<td>Lokasi</td>
										<td><input type="number" name="k6" value="{{ $k6 }}" readonly></td>
										<td><input type="number" name="k7" value="{{ $k7 }}" readonly></td>
										<td><input type="number" name="k8" value="{{ $k8 }}" readonly></td>
										<td><input type="number" name="k9" value="{{ $k9 }}" readonly></td>
										<td><input type="number" name="k10" value="{{ $k10 }}" readonly></td>
										<!-- <td>{{ $k6 }}</td>
									<td>{{ $k7 }}</td>
									<td>{{ $k8 }}</td>
									<td>{{ $k9 }}</td>
									<td>{{ $k10 }}</td> -->
									</tr>
									<tr>
										<td>Luas</td>
										<td><input type="number" name="k11" value="{{ $k11 }}" readonly></td>
										<td><input type="number" name="k12" value="{{ $k12 }}" readonly></td>
										<td><input type="number" name="k13" value="{{ $k13 }}" readonly></td>
										<td><input type="number" name="k14" value="{{ $k14 }}" readonly></td>
										<td><input type="number" name="k15" value="{{ $k15 }}" readonly></td>
										<!-- <td>{{ $k11 }}</td>
									<td>{{ $k12 }}</td>
									<td>{{ $k13 }}</td>
									<td>{{ $k14 }}</td>
									<td>{{ $k15 }}</td> -->
									</tr>
									<tr>
										<td>Harga</td>
										<td><input type="number" name="k16" value="{{ $k16 }}" readonly></td>
										<td><input type="number" name="k17" value="{{ $k17 }}" readonly></td>
										<td><input type="number" name="k18" value="{{ $k18 }}" readonly></td>
										<td><input type="number" name="k19" value="{{ $k19 }}" readonly></td>
										<td><input type="number" name="k20" value="{{ $k20 }}" readonly></td>
										<!-- <td>{{ $k16 }}</td>
									<td>{{ $k17 }}</td>
									<td>{{ $k18 }}</td>
									<td>{{ $k19 }}</td>
									<td>{{ $k20 }}</td> -->
									</tr>
									<tr>
										<td>Jarak Tempat Kerja</td>
										<td><input type="number" name="k21" value="{{ $k21 }}" readonly></td>
										<td><input type="number" name="k22" value="{{ $k22 }}" readonly></td>
										<td><input type="number" name="k23" value="{{ $k23 }}" readonly></td>
										<td><input type="number" name="k24" value="{{ $k24 }}" readonly></td>
										<td><input type="number" name="k25" value="{{ $k25 }}" readonly></td>
										<!-- <td>{{ $k21 }}</td>
									<td>{{ $k22 }}</td>
									<td>{{ $k23 }}</td>
									<td>{{ $k24 }}</td>
									<td>{{ $k25 }}</td> -->
									</tr>
									<tr>
										<td>Total</td>
										<td><input type="number" name="k26" value="{{ $k26 }}" readonly></td>
										<td><input type="number" name="k27" value="{{ $k27 }}" readonly></td>
										<td><input type="number" name="k28" value="{{ $k28 }}" readonly></td>
										<td><input type="number" name="k29" value="{{ $k29 }}" readonly></td>
										<td><input type="number" name="k30" value="{{ $k30 }}" readonly></td>
										<!-- <td>{{ $k26 }}</td>
									<td>{{ $k27 }}</td>
									<td>{{ $k28 }}</td>
									<td>{{ $k29 }}</td>
									<td>{{ $k30 }}</td> -->
									</tr>
								</tbody>
							</table>
							<div class="row">
								<div class="col-md-6">
									<button type="submit" class="btn btn-primary btn-block">Normalisasi</button>
								</div>
								<div class="col-md-6">
									<button type="button" class="btn btn-warning btn-block" onclick="kembalibobot();">Cancel</button>
								</div>
							</div>
						</form>
					</div>
					<script>
						function kembalibobot() {
							window.location.href = "/admin/ahp/bobot";
						}
					</script>
				</div>
				<!-- END TABLE STRIPED -->
			</div>
		</div>
	</div>
	<!-- END MAIN CONTENT -->
</div>
@endsection