@extends('admin.layout')

@section('content')
    <div class="row">
        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="content">
                    <div class="row">
                        <div class="col-xs-5">
                            <div class="icon-big icon-warning text-center">
                                <i class="ti-server"></i>
                            </div>
                        </div>
                        <div class="col-xs-7">
                            <div class="numbers">
                                <p>Total</p>
                                {{ $sponsors->countAll() }}
                            </div>
                        </div>
                    </div>
                    {{-- <div class="footer">
                        <hr />
                        <div class="stats">
                            <i class="ti-reload"></i> Updated now
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="content">
                    <div class="row">
                        <div class="col-xs-5">
                            <div class="icon-big icon-success text-center">
                                <i class="ti-wallet"></i>
                            </div>
                        </div>
                        <div class="col-xs-7">
                            <div class="numbers">
                                <p>Fresh Money</p>
                                {{ $sponsors->countFreshMoney() }}
                            </div>
                        </div>
                    </div>
                    {{-- <div class="footer">
                        <hr />
                        <div class="stats">
                            <i class="ti-calendar"></i> Last day
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="content">
                    <div class="row">
                        <div class="col-xs-5">
                            <div class="icon-big icon-danger text-center">
                                <i class="ti-pulse"></i>
                            </div>
                        </div>
                        <div class="col-xs-7">
                            <div class="numbers">
                                <p>In-Kind</p>
                                {{ $sponsors->countInKind() }}
                            </div>
                        </div>
                    </div>
                    {{-- <div class="footer">
                        <hr />
                        <div class="stats">
                            <i class="ti-timer"></i> In the last hour
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="content">
                    <div class="row">
                        <div class="col-xs-5">
                            <div class="icon-big icon-info text-center">
                                <i class="ti-twitter-alt"></i>
                            </div>
                        </div>
                        <div class="col-xs-7">
                            <div class="numbers">
                                <p>Media Partner</p>
                                {{ $sponsors->countMediaPartner() }}
                            </div>
                        </div>
                    </div>
                    {{-- <div class="footer">
                        <hr />
                        <div class="stats">
                            <i class="ti-reload"></i> Updated now
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="header">
                    <h4 class="title">Email Statistics</h4>
                    <p class="category">Last Campaign Performance</p>
                </div>
                <div class="content">
                    <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>

                    <div class="footer">
                        <div class="chart-legend">
                            <i class="fa fa-circle text-info"></i> Open
                            <i class="fa fa-circle text-danger"></i> Bounce
                            <i class="fa fa-circle text-warning"></i> Unsubscribe
                        </div>
                        <hr>
                        <div class="stats">
                            <i class="ti-timer"></i> Campaign sent 2 days ago
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

@endsection
