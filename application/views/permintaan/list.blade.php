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
@endsection