@extends("master")
@section("title","Product Page")
@section("content")
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">

                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">update Product</h4>
                            <p class="card-category">Complete new Product</p>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('product.update',$product->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                @if($product->product_img)
                                    <img id="original" src="{{('/productimg/'.$product->product_img)}}" height="70px" width="70px" >
                                @endif
                                <div class="row">
                                    <strong>Upload Product Image:</strong>
                                    <input type="file" name="product_img" class="form-control" value="{{$product->product_img}}">
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select name="category[]" class=" form-control select2 select2-hidden-accessible" multiple=""
                                                data-placeholder="Select a category" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                            @foreach($category as $c)
                                                <option value="{{$c->id}}"
                                                        @foreach($product->category as $procat)
                                                        @if($procat->id == $c->id)
                                                        selected
                                                    @endif
                                                    @endforeach

                                                >{{$c->category_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Product Name</label>
                                            <input type="text" name="product_name" class="form-control" value="{{$product->product_name}}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Description</label>
                                            <input type="text" name="description" class="form-control" value="{{$product->description}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Slug	</label>
                                            <input type="text" name="slug" class="form-control" value="{{$product->slug}}">
                                        </div>
                                    </div>

                                </div>
                                <button type="submit" class="btn btn-primary pull-right">Update Product</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

