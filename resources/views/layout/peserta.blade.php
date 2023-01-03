@extends('index')
@section('title','Form Peserta')

@section('content')
<main id="main" class="main bg-secondary">
    <div class="pagetitle text-white">
        <h1 class="text-white">From Pengajuan Peserta</h1>
    </div><!-- End Page Title -->

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Halaman Formulir</h5>

            <!-- General Form Elements -->
            <form>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Jumlah Peserta</label>
                </div>

                <div class="mb-3 col-sm-12" align="center">
                    <table class="table table-bordered border-primary">
                        <thead>
                            <tr class="text-bold text-center table-primary">
                                <th align="center">No</th>
                                <th align="center">Nama</th>
                                <th align="center">Jabatan</th>
                                <th align="center">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody class="text-center border table-bordered" id="looping">

                        </tbody>
                    </table>
                </div>

                <div class="row mb-3" align="end">
                    <div class="col-sm-12">
                        <a href="/halpeserta"><button type="button" class="btn btn-primary">Lanjut</button></a>
                    </div>
                </div>

            </form><!-- End General Form Elements -->

        </div>
    </div>
</main>
@endsection