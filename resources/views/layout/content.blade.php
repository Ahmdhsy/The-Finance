@extends('index')
@section('title','Tambah Data')

@section('content')
<main id="main" class="main bg-secondary">

    <div class="pagetitle text-white">
        <h1 class="text-white">From Pengajuan RAB</h1>
    </div><!-- End Page Title -->

    <section class="section align-items-center">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Halaman Formulir</h5>

                        <!-- General Form Elements -->
                        <form>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Beban MAK.</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Bukti KAS No.</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputDate" class="col-sm-2 col-form-label">Tanggal</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputDate" class="col-sm-2 col-form-label">Tanggal SPPD</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Nama Kegiatan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputDate" class="col-sm-2 col-form-label">Mulai Tanggal</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputDate" class="col-sm-2 col-form-label">Akhir Tanggal</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Jumlah Peserta</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Jumlah Panitia</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control">
                                </div>
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

                            <div class="row mb-3 d-flex flex-column align-items-center justify-content-center">
                                <div class="col-sm-12">
                                    <a href="/halpeserta"><button type="button" class="btn btn-primary">Lanjut</button></a>
                                </div>
                            </div>

                        </form><!-- End General Form Elements -->

                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>

</main><!-- End #main -->
@endsection