@extends('layouts.master')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Customer</h2>
            </div>
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    <h2>List Customer</h2>
                                </div>
                            </div>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Nama Customer</th>
                                            <th class="text-center">No Hp</th>
                                            <th class="text-center">Alamat</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        @foreach($data_customer as $customer)
                                            <tr>
                                                <td class="text-center">{{ $no }} .</td>
                                                <td class="text-center">{{ $customer['kode_customer'] }}</td>
                                                <td class="text-center">{{ $customer['nama_customer'] }}</td>
                                                <td class="text-center">{{ $customer['no_hp'] }}</td>
                                                <td class="text-center">{{ $customer['alamat'] }}</td>
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