@extends('index')
@section('title','Home')

@section('content')
<main>
    <div class="container">

        <section class="section error-404 min-vh-100 d-flex flex-column align-items-center justify-content-center">
                <img src="assets/img/logo.png" style="width:100px ;">
                <h2>THE FINANCE</h2>
            <div class="col-sm-12">
                <a href="/konten">
                    <button type="button" class="btn btn-lg btn-rounded btn-block btn-primary container mt-5">Tambah Biaya
                        
                    </button>
                </a>
            </div>
        </section>

    </div>
</main><!-- End #main -->
@endsection