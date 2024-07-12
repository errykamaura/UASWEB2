@extends('admin.layouts.app')
@section('content')
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <h3 class="page-title">Daftar Rekomendasi Perumahan</h3>
            <div class="row">
                <!-- TABLE STRIPED -->
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Daftar Rekomendasi Perumahan</h3>
                    </div>
                    <div style="margin-left: 30px;">
                        @foreach($data_max as $DM)
                        <button type="button" class="btn btn-info btn-toastr">
                            <a href="/ahp/bobot/posthasilrekomendasi" style="color:white;">Report</a>
                        </button>
                        <button type="button" class="btn btn-danger btn-toastr">
                            <a href="/ahp/bobot" style="color:white;">Hitung Ulang</a>
                        </button>
                        @endforeach
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
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
                            <tbody>
                                <tr>
                                    <?php $no = 1; ?>
                                    @if($data_hasil->count() > 0)
                                    @foreach($data_hasil as $DH)
                                    <td>
                                        <?php
                                        echo $no++;
                                        ?>
                                    </td>
                                    <td>{{ $DH->nama }}</td>
                                    <td>{{ $DH->fasilitas }}</td>
                                    <td>{{ $DH->lokasi }}</td>
                                    <td>{{ $DH->luas }} M<sup>2</sup></td>
                                    <td>Rp. {{ $DH->harga }}</td>
                                    <td>{{ $DH->jarak_tempat_kerja }}</td>
                                    <td>{{ $DH->ahp }}</td>
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