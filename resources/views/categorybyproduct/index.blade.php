@extends("master")
@section("title","Color Page")
@section("content")
    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="pull-right">
                            <a class="btn btn-primary pull-right text-light"  href="{{ route('categorybyproduct.create') }}"> Create New ProductCategory
                            </a>
                        </div>
                        <br>

                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">ProductCategory Table</h4>
                            <p class="card-category"> Here is a subtitle for this table</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Product
                                    </th>
                                    <th>
                                        Category
                                    </th>
                                    <th width="280px">Action</th>
                                    </thead>
                                    @foreach($categorybyproduct as $cp)
                                        <tr>
                                            <td>{{++$i}}</td>
                                            <td>{{$cp->product_id}}</td>
                                            <td>{{$cp->category_id}}</td>
                                            <td>
                                                <form action="{{route('categorybyproduct.destroy',$cp->id)}}" method="POST">
                                                    <button class="btn btn-success">
                                                        <a href="{{route('categorybyproduct.edit',$cp->id)}}" title="show">
                                                            Edit</a>
                                                    </button>

                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')">
                                                        Delete
                                                    </button>
                                                </form>
                                            </td>


                                        </tr>

                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
