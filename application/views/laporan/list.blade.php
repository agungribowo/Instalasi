@extends('layouts.master')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Laporan</h2>
            </div>
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    <h2>List Laporan</h2>
                                </div>
                            </div>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Target</th>
                                            <th class="text-center">Nama Customer</th>
                                            <th class="text-center">No Hp</th>
                                            <th class="text-center">Alamat</th>
                                            <th class="text-center">Nama Produk</th>
                                            <th class="text-center">Hasil Perbaikan</th>
                                            <th class="text-center">Installer</th>
                                            <th class="text-center">Hasil Kerja</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        @foreach($data_laporan as $laporan)
                                            <tr>
                                                <td class="text-center">{{ $no }} .</td>
                                                <td class="text-center">Instalasi</td>
                                                <td class="text-center">{{ $laporan['nama_customer'] }}</td>
                                                <td class="text-center">{{ $laporan['no_hp'] }}</td>
                                                <td class="text-center">{{ $laporan['alamat'] }}</td>
                                                <td class="text-center">{{ $laporan['nama_produk'] }}</td>
                                                <td class="text-center">
                                                @if($laporan['hasil_perbaikan'] == NULL || $laporan['hasil_perbaikan'] == '')
                                                    {{ 'Proses Perbaikan' }}
                                                @else
                                                    {{ $laporan['hasil_perbaikan'] }}
                                                @endif
                                                </td>
                                                <td class="text-center">{{ $laporan['nama_installer'] }}</td>
                                                <td class="text-center">{{ $laporan['hasil_kerja'] }}
                                                @if($laporan['hasil_kerja'] == NULL || $laporan['hasil_kerja'] == '')
                                                    {{ 'Proses Pengerjaan' }}
                                                @else
                                                    {{ $laporan['hasil_kerja'] }}
                                                @endif
                                                </td>
                                                <td class="text-center">
                                                    <a href="<?=base_url()?>page/laporan_cetak/{{$laporan['id_jadwal_instalasi']}}" type="button" class="btn btn-info btn-xs waves-effect" target="_blank"><i class="material-icons">print</i></a>
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
    <!-- <div class="modal fade" id="modal_jadwal" tabindex="-1" role="dialog">
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
    </div> -->
@endsection