@extends('base')

@section('content')
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><a class="btn btn-info" href="{{ route('barang.create') }}" role="button">Tambah
                        Barang</a></h3>
            </div>
            <div class="panel-body">
                <table id="table" class="table">
                    <thead>
                        <tr>
                            <th>ID Barang</th>
                            <th>Nama Barang</th>
                            <th>STOK</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($barang as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->nama_barang }}</td>
                                <td>{{ $item->stok_barang }}</td>
                                <td>
                                    <form action="{{ route('barang.destroy', $item->id) }}" method="Post">
                                        <a class="btn btn-primary" href="{{ route('barang.edit', $item->id) }}">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <!-- /.row (main row) -->

    </section>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        });
    </script>
@endsection
