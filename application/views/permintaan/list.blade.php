@extends('layouts.master')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Permintaan</h2>
            </div>
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    <h2>List Permintaan</h2>
                                </div>
                            </div>
                        </div>
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
                                            <th class="text-center">Nama Produk</th>
                                            <th class="text-center">Jenis Produk</th>
                                            <th class="text-center">Tanggal Permintaan</th>
                                            <th class="text-center">Jadwal</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        @foreach($data_permintaan as $permintaan)
                                            <tr>
                                                <td class="text-center">{{ $no }} .</td>
                                                <td class="text-center">{{ $permintaan['kode_permintaan'] }}</td>
                                                <td class="text-center">{{ $permintaan['nama_customer'] }}</td>
                                                <td class="text-center">{{ $permintaan['no_hp'] }}</td>
                                                <td class="text-center">{{ $permintaan['alamat'] }}</td>
                                                <td class="text-center">{{ $permintaan['nama_produk'] }}</td>
                                                <td class="text-center">{{ $permintaan['jenis_produk'] }}</td>
                                                <td class="text-center">{{ $permintaan['tanggal_permintaan'] }}</td>
                                                <td class="text-center">{{ $permintaan['jadwal'] }}</td>
                                                <td class="text-center"> 
                                                    <button type="button" class="btn btn-info btn-sm waves-effect jadwalkan" data-toggle="modal" data-kode_permintaan="{{ $permintaan['kode_permintaan'] }}" data-nama_customer="{{ $permintaan['nama_customer'] }}" data-nama_produk="{{ $permintaan['nama_produk'] }}" data-jenis_produk="{{ $permintaan['jenis_produk'] }}" {{ $permintaan['disabled'] }}> <i class="material-icons">settings</i><span> Jadwalkan </span></button>
                                                </td>
                                            </tr>
                                        <?php $no++;?>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="modal_jadwal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="defaultModalLabel">Jadwal Instalasi</h4>
                </div>
                <?= form_open_multipart('page/jadwal_instalasi') ?>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <label> Kode Instalasi </label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="kode_instalasi" id="kode_installasi" value=" {{ $kode_instalasi }}" readonly style="background-color:#0000002e">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label> Kode Permintaan </label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="kode_permintaan" id="kode_permintaan" readonly style="background-color:#0000002e">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label> Nama Customer </label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nama_customer" id="nama_customer" style="background-color:#0000002e" readonly required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label> Nama Produk </label>
                                <div class="form-group">
                                    <div class="form-line">
                                    <input type="text" class="form-control" name="nama_produk" id="nama_produk" style="background-color:#0000002e" readonly required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label> Jenis Produk </label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="jenis_produk" id="jenis_produk" style="background-color:#0000002e" readonly required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label> Installer </label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <select name="installer" class="form-control" required>
                                            <option value=""> -- Pilih Installer --</option>
                                            @foreach($data_installer as $installer)
                                                <option value="{{ $installer['kode_installer'] }}"> {{ $installer['nama_installer'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <label> Tanggal Instalasi </label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="tanggal_instalasi" id="tanggal_instalasi" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-link waves-effect"> Simpan </button>
                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal"> Keluar </button>
                    </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
@endsection