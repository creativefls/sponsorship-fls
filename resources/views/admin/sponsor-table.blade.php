@extends('admin.layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
                        <div class="card card-plain">
                            <div class="header">
                                <h4 class="title">Table on Plain Background</h4>
                                <p class="category">Here is a subtitle for this table</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover">
                                    <thead>
                                        <th>No</th>
                                        <th>Type</th>
                                    	<th>Company</th>
                                    	<th>PIC</th>
                                    	<th>Phone</th>
                                    	<th>Email</th>
                                    	<th>Mendaftar Pada</th>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 0;
                                        @endphp
                                        @foreach ($sponsors as $sponsor)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $sponsor->type_sponsorship }}</td>
                                                <td>{{ $sponsor->company_name }}</td>
                                                <td>{{ $sponsor->pic }}</td>
                                                <td>{{ $sponsor->phone }}</td>
                                                <td>{{ $sponsor->email }}</td>
                                                <td>{{ $sponsor->created_at->diffForHumans() }}</td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <td>1</td>
                                            <td>Dakota Rice</td>
                                            <td>$36,738</td>
                                            <td>Niger</td>
                                            <td>Oud-Turnhout</td>
                                            <td>$36,738</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
    </div>

@endsection
