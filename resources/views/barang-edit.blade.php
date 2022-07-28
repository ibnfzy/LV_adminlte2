@extends('base')

@section('content')
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><a class="btn btn-info" onclick="history.back()" role="button">Kembali</a></h3>
            </div>
            <div class="panel-body">
                <form action="{{ route('barang.update', $barang->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="barang">Nama Barang</label>
                        <input type="text" value="{{ $barang->nama_barang }}" class="form-control" name="barang"
                            id="barang" placeholder="Nama barang">
                    </div>
                    <div class="form-group">
                        <label for="stok">Stok</label>
                        <input type="number" value="{{ $barang->stok_barang }}" class="form-control" name="stok"
                            id="stok" placeholder="Stok">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <!-- /.row (main row) -->

    </section>
@endsection
