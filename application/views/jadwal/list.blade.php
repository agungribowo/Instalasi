@extends('layouts.master')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Jadwal</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <?=form_open('page/jadwal') ?>
                                <div class="row clearfix">
                                    <div class="col-md-4">
                                        <b>Dari</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">date_range</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="date" class="form-control" name="dari_tanggal" id="dari_tanggal" value="<?=$dari?>" placeholder="Mohon Pilih Tanggal Disini...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <b>Sampai</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">date_range</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="date" class="form-control" name="sampai_tanggal" id="sampai_tanggal" value="<?=$sampai?>" placeholder="Mohon Pilih Tanggal Disini...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                    <p></p>
                                    <br>
                                        <button type="submit" name="submit" class="btn bg-grey btn-xs btn-block waves-effect">
                                            <i class="material-icons">date_range</i>
                                            <span>SELECT TANGGAL</span>
                                        </button>
                                    </div>
                                </div>
                            <?=form_close()?>
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th class="text-center">Kode Permintaan</th>
                                                <th class="text-center">Nama Customer</th>
                                                <th class="text-center">No Hp</th>
                                                <th class="text-center">Alamat</th>
                                                <th class="text-center">Installer</th>
                                                <th class="text-center">Tanggal Instalasi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $no = 1 @endphp
                                            @foreach($data_jadwal as $jadwal)
                                                <tr>
                                                    <td class="text-center">{{ $no }} .</td>
                                                    <td class="text-center">{{ $jadwal['kode_permintaan'] }}</td>
                                                    <td class="text-center">{{ $jadwal['nama_customer'] }}</td>
                                                    <td class="text-center">{{ $jadwal['no_hp'] }}</td>
                                                    <td class="text-center">{{ $jadwal['alamat'] }}</td>
                                                    <td class="text-center">{{ $jadwal['nama_installer'] }}</td>
                                                    <td class="text-center">{{ $jadwal['tanggal_instalasi'] }}</td>
                                                </tr>
                                            @php $no++ @endphp
                                            @endforeach
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection