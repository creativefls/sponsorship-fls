@extends('admin.layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-plain">
                <div class="header">
                    <h4 class="title">Tabel Sponsorship</h4>
                    <p class="category">Future Leader Summit 2018</p>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-hover">
                        <thead>
                            <th>No</th>
                            <th>Type</th>
                        	<th>Company</th>
                        	<th>PIC</th>
                        	<th>Email</th>
                        	<th>Mendaftar Pada</th>
                        </thead>
                        <tbody>
                            @foreach ($sponsors as $sponsor)
                                <tr>
                                    <td>{{ $sponsor->id }}</td>
                                    <td>{{ $sponsor->getType() }}</td>
                                    <td>{{ $sponsor->company_name }}</td>
                                    <td>{{ $sponsor->pic }}</td>
                                    <td>{{ $sponsor->email }}</td>
                                    <td>{{ $sponsor->created_at->diffForHumans() }}</td>
                                    <td>
                                        <a href="{{ route('sponsors.show', $sponsor->id) }}" class="btn btn-info">Lihat Lebih Lengkap</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
