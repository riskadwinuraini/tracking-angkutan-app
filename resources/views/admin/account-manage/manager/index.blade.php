@extends('layouts.admin.app')

@section('content')
        <div class="row">
            <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Akun Manager</h4>
                            <a href="#" class="btn btn-primary btn-sm">Tambah Akun manager</a>
                            <div class="single-table">
                                <div class="table-responsive">
                                    <table class="table table-hover progress-table text-center">
                                        <thead class="text-uppercase">
                                            <tr>
                                                <th scope="col">No.</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">status</th>
                                                <th scope="col">action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($accountManager as $manager)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$manager->name}}</td>
                                                    <td>{{$manager->email}}</td>
                                                    <td>
                                                        <span class="badge bg-{{ ($manager->sim != null) ? 'success' : 'danger'}}">
                                                            {{ ($manager->sim != null) ? 'approved' : 'not approved'}}
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="btn btn-info btn-sm">Kelola akun</a>
                                                        <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                                    </td>
                                                </tr>
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
@endsection