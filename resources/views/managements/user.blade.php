@extends('layouts.app')
@section('users')
<nav class="navbar navbar-light">
    <div class="container-fluid d-flex justify-content-end me-3">
        <form class="float-right me-2">
            <a href="#" class="btn btn-primary">Tambah</a>
        </form>
    </div>
</nav>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Siswa</h4>
                <p class="card-description">untuk profil dan manajemen user</p>
                <table class="table table-striped text-center">
                    <thead>
                        <tr>
                            <th> # </th>
                            <th> Nama Siswa </th>
                            <th> Kelas </th>
                            <th> Saldo </th>
                            <th> Aksi </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-1">
                                1
                            </td>
                            <td> Jennie Kim </td>
                            <td>
                            <div class="py-1">
                                XII RPL
                            </div>
                            </td>
                            <td> Rp 100000 </td>
                            <td> 
                                <a href="#" class="btn btn-warning btn-fw"><i class="mdi mdi-pencil"></i> Edit</a>
                                <a href="#" class="btn btn-danger btn-fw ms-4"><i class="mdi mdi-delete"></i> Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-1">
                                2
                            </td>
                            <td> Adrian Jones </td>
                            <td>
                            <div class="py-1">
                                XII AKL 1
                            </div>
                            </td>
                            <td> Rp 175000 </td>
                            <td> 
                                <a href="#" class="btn btn-warning btn-fw"><i class="mdi mdi-pencil"></i> Edit</a>
                                <a href="#" class="btn btn-danger btn-fw ms-4"><i class="mdi mdi-delete"></i> Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-1">
                                3
                            </td>
                            <td> John Richards </td>
                            <td>
                            <div class="py-1">
                                XII OTKP 2
                            </div>
                            </td>
                            <td> Rp 25000 </td>
                            <td> 
                                <a href="#" class="btn btn-warning btn-fw"><i class="mdi mdi-pencil"></i> Edit</a>
                                <a href="#" class="btn btn-danger btn-fw ms-4"><i class="mdi mdi-delete"></i> Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection