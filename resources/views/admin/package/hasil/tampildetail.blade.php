@extends('admin.layouts.app')
@section('content')
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Hasil Perangkingan</h3>
			<div class="row">
				<a href="/ahp/bobot/detail/{id}">
					<!-- <button type="button" class="btn btn-primary btn-toastr"><i class="fa fa-plus-square"></i> Tambah Data Rumah</button> -->
				</a>
				<!-- TABLE STRIPED -->
				<div class="panel">
					<div class="panel-heading">
						<h3 class="panel-title">Hasil Perangkingan</h3>
					</div>
					<div class="panel-body">
						<tbod class="table table-striped">
							<thead>
								<tr>
                                <th>Rangking</th>
                                    <th>Nama Perumahan</th>
                                    <th>Fasilitas</th>
                                    <th>Lokasi</th>
                                    <th>Luas Tanah</th>
                                    <th>Harga</th>
                                    <th>Jarak Tempat Kerja</th>
                                    <th>Nilai Ahp</th>
								</tr>
							</thead>
                            <tbody
                            @foreach($hasils as $index => $hasil)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $hasil->nama }}</td>
                                    <td>{{ $hasil->fasilitas }}</td>
                                    <td>{{ $hasil->lokasi }}</td>
                                    <td>{{ $hasil->luas }}</td>
                                    <td>{{ $hasil->harga }}</td>
                                    <td>{{ $hasil->jarak_tempat_kerja }}</td>
                                    <td>{{ $hasil->ahp }}</td>
                                </tr>
                                @endforeach
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