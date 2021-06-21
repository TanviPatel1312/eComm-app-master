@extends("master")
@section("title","Product Page")
@section("content")
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">

                    <div class="card">
                        <div class="pull-center">
                            <a class="btn btn-primary pull-center text-light"  href="{{ route('product.index') }}"> back
                            </a><br><br>
                        </div>
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Create product</h4>
                            <p class="card-category">Complete new Product</p>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">

                                    <strong>Upload Product Image:</strong>
                                    <input type="file" name="product_img" class="form-control">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Category</label>
                                            <select class="form-control" id="category" name="category">
                                                <option value="">-- Select Category --</option>
                                                @foreach ($category as $c)
                                                    <option value="{{$c->id}}">{{($c->category_name) }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Product Name</label>
                                            <input type="text" name="product_name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Description</label>
                                            <input type="text" name="description" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">slug	</label>
                                            <input type="slug" name="slug" class="form-control">
                                        </div>
                                    </div>
                                </div>
{{--                                <div class="row">--}}
{{--                                    <div class="col-md-12">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label class="bmd-label-floating">Size</label>--}}
{{--                                            <select class="form-control" id="size" name="size">--}}
{{--                                                <option value="">-- Select Size --</option>--}}
{{--                                                @foreach ($size as $s)--}}
{{--                                                    <option value="{{$s->id}}">{{($s->size) }}</option>--}}
{{--                                                @endforeach--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-md-12">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label class="bmd-label-floating">Color</label>--}}
{{--                                            <select class="form-control" id="color" name="color">--}}
{{--                                                <option value="">-- Select Color --</option>--}}
{{--                                                @foreach ($color as $c)--}}
{{--                                                    <option value="{{$c->id}}">{{($c->color) }}</option>--}}
{{--                                                @endforeach--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

                                <button type="submit" class="btn btn-primary pull-right">Create Product</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
