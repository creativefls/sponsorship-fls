@extends('wizard.layout')

@section('content')
    <div class="card wizard-card" data-color="orange" id="wizardProfile">
        <form action="formSponsorship" method="post">
            {{ csrf_field() }}
            <!--        You can switch " data-color="orange" "  with one of the next bright colors: "blue", "green", "orange", "red", "azure"          -->

            <div class="wizard-header text-center">
                <h3 class="wizard-title">Menjadi Partner Kami</h3>
                <!-- <p class="category">This information will let us know more about you.</p> -->
            </div>

            @include('wizard.register.nav')

            <div class="tab-content">
                @include('wizard.register.tnc')
                @include('wizard.register.benefit')
                @include('wizard.register.form')
            </div>
            <div class="wizard-footer">
                <div class="pull-right">
                    <input type='button' class='btn btn-next btn-fill btn-warning btn-wd' name='next' value='Next' />
                    <input type='submit' class='btn btn-finish btn-fill btn-warning btn-wd' name='finish' value='Submit' />
                </div>

                <div class="pull-left">
                    <input type='button' class='btn btn-previous btn-default btn-wd' name='previous' value='Previous' />
                </div>
                <div class="clearfix"></div>
            </div>
        </form>
    </div>

@endsection
