@extends('layouts.main')

@section('contents')
<div id="app">
    @include('layouts.sidebar')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <div class="page-title">
                <div class="row align-items-center">
                    <div class="col-12 col-md-6">
                        <h3>Edit Kategori</h3>
                        <p class="text-subtitle text-muted">Berikut adalah fitur edit kategori.</p>
                    </div>
                    <div class="col-12 col-md-6 mt-md-0">
                        <div class="text-md-end mb-3 mb-md-0">
                            <a href="/kategori" class="btn btn-primary"><i class="bi bi-arrow-left-circle"></i> Kembali</a>
                        </div>
                    </div>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
            </div>
        </div>


        <section class="section">
            <div class="card">
                <div class="card-body">
                <form class="form" action="{{ route('updateKategori', ['id_kategori' => $kategori->id_kategori]) }}" method="POST" data-parsley-validate>
                        @csrf
                   
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group mandatory">
                                    <label for="nama_kategori" class="form-label">Nama Kategori</label>
                                    <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" value="{{ $kategori->nama_kategori }}" placeholder="Masukkan nama kategori" data-parsley-required="true">
                                </div>

                                <div class="form-group mandatory">
                                    <label for="keterangan_kategori" class="form-label">Keterangan Kategori</label>
                                    <textarea class="form-control" id="keterangan_kategori" name="keterangan_kategori" placeholder="Masukkan keterangan kategori" data-parsley-required="true">{{ $kategori->keterangan_kategori }}</textarea>
                                </div>

                                <div class="form-group text-end mt-3 mb-0">
                                    <button type="submit" class="btn btn-primary me-2">Update</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        @include('layouts.footer')
    </div>
</div>
@endsection
