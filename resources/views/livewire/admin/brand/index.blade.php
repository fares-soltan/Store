<div>

    @include('livewire.admin.brand.modal-form');


    <div class="row">
        <div class="col-md-12">
            @if(session('message'))
                <div class="alert alert-success">{{session('message')}}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>Brands List
                    <a class="btn btn-sm btn-primary float-end" style="color: white;" href="#" data-bs-toggle="modal" data-bs-target="#addBrandModal">Add Brand</a></h4>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $i = 0;
                        @endphp
                        @foreach($brands as $brand)
                            @php
                                $i++
                            @endphp
                            <tr>
                                <td>{{ $i}}</td>
                                <td>{{ $brand->name }}</td>
                                <td>{{ $brand->slug }}</td>
                                <td>{{ $brand->status == '1' ? 'Hidden':'Visible'}}</td>
                                <td>

                                    <a href="#" wire:click="updatebrands({{$brand->id}})" data-bs-toggle="modal" data-bs-target="#updateBrandModal" class="btn btn-success" style="color: white">Edit</a>
                                    <a href="#"  class="btn btn-danger" style="color: white" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div>
                    {{$brands->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@push('script')
    <script>
        window.addEventListener('close-modal',event=>{
            $('#addBrandModal').modal('hide');
            $('#updateBrandModal').modal('hide');
        })
    </script>

@endpush
