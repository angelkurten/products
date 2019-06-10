@extends('main')

@section('content')
    <section>
        <table class="table table-dark">
            <thead>
            <tr>
                <td scope="col">Name</td>
                <td scope="col">Stock</td>
                <td scope="col">Price</td>
                <td scope="col">Status</td>
            </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->stock }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->state }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        <div>
            <form action="{{ route('product_import_csv') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                    </div>
                    <div class="custom-file">
                        <input name="csv" type="file" class="custom-file-input" id="csv" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="csv">Choose file</label>
                    </div>
                </div>


                <button type="submit" class="btn btn-primary btn-lg">Upload</button>
            </form>
        </div>
    </section>
@endsection
