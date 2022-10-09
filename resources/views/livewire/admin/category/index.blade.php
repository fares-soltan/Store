<div class="row">
    <div class="col-md-12">

        @if(session('message'))
            <div class="alert alert-success">{{session('message')}}</div>
        @endif
        <div class="card">
            <div class="card-header">
                <h3>Category
                    <a href="{{url('admin/category/create')}}" class="btn btn-sm btn-primary float-end" style="color: white;">Add Category</a>
                </h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i = 0;
                    @endphp
                        @foreach($categories as $category)
                            @php
                                $i++
                            @endphp
                            <tr>
                                <td>{{ $i}}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->status == '1' ? 'Hidden':'Visible'}}</td>
                                <td>

                                    <a href="{{url('admin/category/'.$category->id.'/edit')}}" class="btn btn-success" style="color: white">Edit</a>
                                    <a href="{{url('admin/category/'.$category->id.'/delete')}}" class="btn btn-danger" style="color: white">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    {{$categories->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
