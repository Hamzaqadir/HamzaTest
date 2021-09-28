@extends('layouts.app')
@section('title', 'New Product')
@section('content')

    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <h3 class="mb-3">New Product</h3>

                    <form action="{{ route('user-products.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Product Title</label>
                                    <input type="text" name="title" id="title" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="image1">Image 1</label>
                                    <input type="file" name="image1" id="image1" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="image2">Image 2</label>
                                    <input type="file" name="image2" id="image2" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="image3">Image 3</label>
                                    <input type="file" name="image3" id="image3" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="{{ route('home') }}"  class="btn btn-default">Go Back</a>
                                </div>
                            </div>
                        </div>


                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
