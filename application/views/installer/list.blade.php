@extends('layouts.master')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Installer</h2>
            </div>
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    <h2>List Installer</h2>
                                </div>
                                <div class="col-xs-12 col-sm-6 aligh-right">
                                    <a href="#modal_tambah" class="btn btn-info btn-sm pull-right" data-toggle="modal"> <i class="material-icons"> add </i> <span> Tambah </span></a>
                                </div>
                            </div>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Kode Installer</th>
                                            <th class="text-center">Nama Installer</th>
                                            <th class="text-center">No Hp</th>
                                            <th class="text-center">Alamat</th>
                                            <th class="text-center">Username</th>
                                            <th class="text-center">Foto</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1 @endphp
                                        @foreach($installer as $ins)
                                            <tr>
                                                <td class="text-center">{{ $no }} .</td>
                                                <td class="text-center">{{ $ins['kode_installer'] }}</td>
                                                <td class="text-center">{{ $ins['nama_installer'] }}</td>
                                                <td class="text-center">{{ $ins['no_hp'] }}</td>
                                                <td class="text-center">{{ $ins['alamat'] }}</td>
                                                <td class="text-center">{{ $ins['username'] }}</td>
                                                <td class="text-center">
                                                    <img src="<?=base_url()?>_assets/img/foto_profile/installer/{{ $ins['foto'] }}" alt="foto" class="img-circle img-responsive" style="height:65px; width:65px;">
                                                </td>
                                                <td class="text-center"> 
                                                    <a href="javascrpt:void(0)" type="button" class="btn btn-warning btn-sm edit_installer" data-toggle="modal" data-kode_installer="{{ $ins['kode_installer'] }}" data-nama_installer="{{ $ins['nama_installer'] }}" data-no_hp="{{ $ins['no_hp'] }}" data-alamat="{{ $ins['alamat'] }}" data-username="{{ $ins['username'] }}"> Ubah</a>
                                                    <a href="<?=base_url()?>page/installer_hapus/{{ $ins['id_installer'] }}" type="button" class="btn btn-danger btn-sm"> Hapus</a>
                                                </td>
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
    </section>
    <div class="modal fade" id="modal_tambah" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="defaultModalLabel">Tambah Installer</h4>
                </div>
                <?= form_open_multipart('page/installer_tambah') ?>
                    <div class="modal-body">
                            <label for="kode_installer"> Kode Installer </label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="kode_installer" id="kode_installer" value="{{ $kode_installer }}" readonly style="background-color:#0000002e">
                                </div>
                            </div>

                            <label for="nama_installer"> Nama Installer </label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="nama_installer" id="nama_installer" required>
                                </div>
                            </div>

                            <label for="no_hp"> No Hp </label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="no_hp" id="no_hp" required>
                                </div>
                            </div>

                            <label for="alamat"> Alamat </label>
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea name="alamat" id="alamat" class="form-control no-resize" cols="32" rows="2"></textarea>
                                </div>
                            </div>

                            <label for="username"> Username </label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="username" id="username" required>
                                </div>
                            </div>

                            <label for="password"> Password </label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="password" class="form-control" name="password" id="password" required>
                                </div>
                            </div>

                            <label for="foto"> Foto </label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="file" class="form-control" name="foto" id="foto">
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
    <div class="modal fade" id="modal_edit" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="defaultModalLabel">Edit Installer</h4>
                </div>
                <?= form_open_multipart('page/installer_edit') ?>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="edit_kode_installer"> Kode Installer </label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="edit_kode_installer" id="edit_kode_installer" readonly style="background-color:#0000002e">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="edit_nama_installer"> Nama Installer </label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="edit_nama_installer" id="edit_nama_installer" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="edit_no_hp"> No Hp </label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="edit_no_hp" id="edit_no_hp" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="edit_alamat"> Alamat </label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea name="edit_alamat" id="edit_alamat" class="form-control no-resize" cols="32" rows="2"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="edit_username"> Username </label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="edit_username" id="edit_username" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="edit_password"> Password </label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="password" class="form-control" name="edit_password" id="password" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <label for="edit_foto"> Foto </label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="file" class="form-control" name="edit_foto" id="edit_foto">
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