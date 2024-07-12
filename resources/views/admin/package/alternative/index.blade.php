@extends('admin.layouts.app')
@section('content')
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <h3 class="page-title">Data Alternative</h3>
            <div class="row">
                <!-- <a href="#">
                    <button type="button" class="btn btn-primary btn-toastr"><i class="fa fa-refresh"></i> Refresh</button>
                </a> -->
                <!-- TABLE STRIPED -->
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Data Alternative</h3>
                    </div>
                    <div class="panel-body">
                        @foreach($data_crt as $DC)
                        <form action="{{ route('postalt') }}" method="post">
                            @endforeach
                            @csrf
                            <!-- <div class="row">
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-file-text"></i></span>
                                        <select class="form-control" name="cbname" id="cbname">
                                            @if($data_crt->count() > 0)
                                            @if(isset($data_crt))
                                            @foreach($data_crt as $DC)
                                            <option value="{{ $DC->name }}">{{ $DC->name }}</option>
                                            @endforeach
                                            @else
                                            @foreach($data_crt as $DC)
                                            <option value="{{ $DC->name }}">{{ $DC->name }}</option>
                                            @endforeach
                                            @endif
                                            @else
                                            <option value="none" disabled>Data alternative tidak tersedia</option>
                                            @endif
                                        </select>
                                    </div>
                                </div> -->
                                <div class="col-md-3">
                                    <button type="submit"><i class="fa fa-refresh"></i>Refresh</button>
                                </div>
                            </div>
                        </form>
                        <br>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th width="100px">Nama Peruumahan</th>
                                    <th>Fasilitas</th>
                                    <th>Lokasi</th>
                                    <th width="90px">Luas Tanah</th>
                                    <th>Harga</th>
                                    <th>Jarak Tempat Kerja</th>
            
                                    <!-- <th>Hasil AHP</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @if(isset($data_pilih))
                                @if($data_pilih->count() > 0)
                                @foreach($data_pilih as $DP)
                                <tr>
                                    <td>
                                        <?php
                                        echo $no++;
                                        ?>
                                    </td>
                                    <td>{{ $DP->nama }}</td>
                                    <td>{{ $DP->fasilitas }}</td>
                                    <td>{{ $DP->lokasi }}</td>
                                    <td>{{ $DP->luas }} M<sup>2</sup></td>
                                    <td>Rp. {{ $DP->harga }}</td>
                                    <td>{{ $DP->jarak_tempat_kerja }} KM</td>
                                    <td></td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="6">Data tidak tersedia</td>
                                </tr>
                                @endif
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