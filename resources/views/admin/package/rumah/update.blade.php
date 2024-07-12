@extends('admin.layouts.app')
@section('content')
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <h3 class="page-title">Master Rumah</h3>
            <div class="row">
                <div class="panel col-md-6 col-md-offset-3">
                    <div class="panel-heading">
                        <h3 class="panel-title">Form Update Data Rumah</h3>
                    </div>
                    <div class="panel-body">
                        @foreach($data_rumah as $DR)
                        <form action="/admin/rumah/formedit/updaterumah/{id}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-home"></i></span>
                                <input class="form-control" placeholder="Nama Rumah" name="nama" type="text" value="{{ $DR->nama }}" readonly>
                            </div>
                            <br>
                            <p>Fasilitas</p>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-home"></i></span>
                                <select class="form-control" name="cbfasilitas">
                                    @if($data_crtlt->count() > 0)
                                    @foreach($data_crtlt as $DCLT)
                                    @if($DCLT->nilaik == $DR->fasilitas)
                                    <option value="{{ $DR->fasilitas }}" selected>{{ $DCLT->nilaik }}</option>
                                    @else
                                    <option value="{{ $DCLT->nilaik }}">{{ $DCLT->nilaik }}</option>
                                    @endif
                                    @endforeach
                                    @else
                                    <option value="none" disabled>Data tidak tersedia</option>
                                    @endif
                                </select>
                            </div>
                            <br>
                            <p>Lokasi</p>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-bed"></i></span>
                                <select class="form-control" name="cblokasi">
                                    @if($data_crtkm->count() > 0)
                                    @foreach($data_crtkm as $DCKM)
                                    @if($DCKM->nilaik == $DR->lokasi)
                                    <option value="{{ $DR->lokasi }}" selected>{{ $DCKM->nilaik }}</option>
                                    @else
                                    <option value="{{ $DCKM->nilaik }}">{{ $DCKM->nilaik }}</option>
                                    @endif
                                    @endforeach
                                    @else
                                    <option value="none" disabled>Data tidak tersedia</option>
                                    @endif
                                </select>
                            </div>
                            <br>
                            <p>Luas Tanah</p>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-map"></i></span>
                                <input class="form-control" placeholder="Luas Tanah" name="luas" type="number" value="{{ $DR->luas }}">
                                <span class="input-group-addon">M<sup>2</sup></span>
                            </div>
                            <br>
                            <p>Harga</p>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-tags"></i></span>
                                <input class="form-control" placeholder="Harga Rumah" name="harga" type="Number" value="{{ $DR->harga }}">
                            </div>
                            <br>
                            <p>Jarak Tempat Kerja</p>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-tags"></i></span>
                                <input class="form-control" placeholder="Jarak" name="jarak_tempat_kerja" type="text" value="{{ $DR->jarak_tempat_kerja }}">
                            </div>
                            <!-- <p>Jarak Tempat Kerja</p>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-car"></i></span>
                                <select class="form-control" name="cbjarak_tempat_kerja">
                                    @if($data_crtgr->count() > 0)
                                    @foreach($data_crtgr as $DCGR)
                                    @if($DCGR->nilaik == $DR->jarak_tempat_kerja)
                                    <option value="{{ $DR->jarak_tempat_kerja }}" selected>{{ $DCGR->nilaik }}</option>
                                    @else
                                    <option value="{{ $DCGR->nilaik }}">{{ $DCGR->nilaik }}</option>
                                    @endif
                                    @endforeach
                                    @else
                                    <option value="none" disabled>Data tidak tersedia</option>
                                    @endif
                                </select> -->
                            </div>
                          
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary btn-block">Update Data</button>
                                </div>
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-warning btn-block" onclick="kembalirumah();">Cancel</button>
                                </div>
                            </div>
                        </form>
                        @endforeach
                    </div>
                    <!-- Script -->
                    <script>
                        function kembalirumah() {
                            window.location.href = "/admin/rumah";
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>
@endsection