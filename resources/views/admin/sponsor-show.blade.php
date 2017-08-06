@extends('admin.layout')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="header text-center">
                    <h4 class="title">{{ $sponsor->company_name }}</h4>
                </div>
                <div class="content">
                    <ul class="list-unstyled team-members">
                        <div class="text-center">
                            <div class="row">
                                <div class="col-md-3 col-md-offset-1">
                                    <h5>{{ $sponsor->pic }}<br /><small>PIC</small></h5>
                                </div>
                                <div class="col-md-4">
                                    <h5>{{ $sponsor->phone }}<br /><small>No Telpon</small></h5>
                                </div>
                                <div class="col-md-3">
                                    <h5>{{ $sponsor->email }}<br /><small>Email</small></h5>
                                </div>
                            </div>
                        </div>
                        <li>
                            <div class="row">
                                <div class="col-xs-12">
                                    Address:
                                    <br />
                                    <p>{{ $sponsor->address }}</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-xs-12">
                                    Explanation:
                                    <br />
                                    <p>{{ $sponsor->explanation }}</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="content">
                    <div class="row">
                        <div class="col-xs-3 text-right">
                            {{-- <btn class="btn btn-sm btn-success btn-icon"><i class="fa fa-envelope"></i></btn> --}}
                        </div>
                        <div class="col-xs-6">
                            {{ $sponsor->getType() }}
                            <br />
                            <span class="text-success"><small>type sponsor</small></span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
