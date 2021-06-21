@extends("master")
@section("title","Product Page")
@section("content")
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">

                    <div class="card">
                        <div class="pull-center">
                            <a class="btn btn-primary pull-center text-light"  href="{{ route('categorybyproduct.index') }}"> back
                            </a><br><br>
                        </div>
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Create CategoryByProduct</h4>
                            <p class="card-category">Complete new Product</p>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('categorybyproduct.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">

                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="bmd-label-floating">Size</label>
                                                                            <select class="form-control" id="size" name="size">
                                                                                <option value="">-- Select Size --</option>
                                                                                @foreach ($size as $s)
                                                                                    <option value="{{$s->id}}">{{($s->size) }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>


                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="bmd-label-floating">Color</label>
                                                                            <select class="form-control" id="color" name="color">
                                                                                <option value="">-- Select Color --</option>
                                                                                @foreach ($color as $c)
                                                                                    <option value="{{$c->id}}">{{($c->color) }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                </div>

                                <button type="submit" class="btn btn-primary pull-right">Create Product</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
