@extends('wizard.layout')

@section('content')
    <div class="card wizard-card" data-color="red" id="wizardProfile">
        <div class="wizard-header text-center">
            <h3 class="wizard-title">Terima Kasih</h3>
            <!-- <p class="category">Future Leader Summit 2017</p> -->
            <hr>
        </div>
        <div class="row container-fluid">
            <div class="col-sm-5">
                <p class="description" align="right">
                    <img src="https://user-images.githubusercontent.com/10141928/27992993-bce8de68-64ca-11e7-86d8-50a489d6b744.png" class="img-responsive center-block"/>
                </p>
            </div>
            <div class="col-sm-5 col-sm-offset-1">
                <div class="form-group">
                    <label>Selamat <em>{{ $sponsor->company_name }}</em>, Anda berhasil menjadi bagian Future Leader Summit 2017!</label>
                    <br><br>
                    <p>
                        Terimakasih telah mendaftar dengan <em>{{ $sponsor->email }}</em>. Selanjutnya kami akan menghubungi melalui email. Silakan tunggu.
                    </p>
                    <br>
                    <p>
                        Jadi bagian perubahan menuju Indonesia yang lebih baik melalui Future Leader Summit 2017!
                    </p>
                </div>
            </div>
            <div class="col-sm-12">
                <h5 class="info-text"><a href="https://futureleadersummit.org" class="btn bg-orange btn-fill">Kembali ke Beranda</a></h5>
            </div>

        </div>
    </div>

@endsection
