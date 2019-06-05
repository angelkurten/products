@extends('main')

@section('content')
    <section>
        <table class="table">
            <thead>
            <tr>
                <td>Name</td>
                <td>Stock</td>
                <td>Price</td>
            </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->stock }}</td>
                        <td>{{ $product->price }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div>
            <form action="{{ route('product_import_csv') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <label for="csv">Subir CSV</label>
                <input type="file" name="csv" id="csv" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" />

                <button type="submit">Upload</button>
            </form>
        </div>
    </section>
@endsection