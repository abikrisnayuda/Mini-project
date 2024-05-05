@extends('layouts.app')

@section('content')
    <div class="container w-75 px-4 py-4 rounded-4 detail">
        <h2 class="pb-2 text-center">Detail Barang</h2>

        <div class="tempil-detail">

            <form class="row g-3">
                <div class="col-md-12">
                    <label for="kode_barang" class="form-label">Kode Barang</label>

                    <input type="text" name="kode_barang" value="{{ $data_barang->kode_barang }}" class="form-control" id="kode_barang" readonly>
                </div>


                <div class="col-md-12">
                    <label for="nama_barang" class="form-label">Nama Barang</label>

                    <input type="text" name="nama_barang" value="{{ $data_barang->nama_barang }}"  class="form-control" id="nama_barang" readonly>
                </div>
                <div class="col-md-12">
                    <label for="harga_barang" class="form-label">Harga Barang</label>
                    <input type="number" name="harga_barang" value="{{ $data_barang->harga_barang }}"  class="form-control" id="harga_barang" readonly>
                </div>



                <div class="col-md-12">
                    <label for="satuan_barang" class="form-label">Satuan Barang</label>
                    <input type="text" name="satuan_barang" value="{{ $data_barang->satuan->kode_satuan . ' - ' . $data_barang->satuan->nama_satuan }}"  class="form-control" id="satuan_barang" readonly>
                </div>
                <div class="col-md-12">
                    <label for="deskripsi_barang" class="form-label">Deskripsi Barang</label>
                    <textarea name="deskripsi_barang" class="form-control" id="deskripsi_barang" cols="30" rows="3" readonly>{{ $data_barang->deskripsi_barang }}</textarea>
                </div>
                <div class="col-12">
                    <a class="btn btn-success px-4 mt-3 col-12" href="{{route('barangs.index')}}">Kembali</a>
                </div>
            </form>
        </div>
    </div>


@endsection