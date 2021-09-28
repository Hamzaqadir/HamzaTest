@extends('layouts.app')
@section('title', 'User Home')
@section('content')



    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <h3 class="mb-3">User Dashboard</h3>


                    <table class="table table-hover table-striped">
                        <thead>
                        <tr>
                            <th>Product</th>
                            <th>Uploaded Date</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $product->title }}</td>
                                <td>{{ $product->created_at->format('d-M-Y h:i a') }}</td>
                                <td></td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
