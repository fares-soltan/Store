@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Add Product
                        <a href="{{url('admin/products')}}" class="btn btn-sm btn-danger text-white float-end">Back</a>
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{url('/admin/products')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">
                                Home
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="seotags-tab" data-bs-toggle="tab" data-bs-target="#seotags-tab-pane" type="button" role="tab" aria-controls="seotags-tab-pane" aria-selected="false">
                                SEO Tags
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="details-tab" data-bs-toggle="tab" data-bs-target="#details-tab-pane" type="button" role="tab" aria-controls="details-tab-pane" aria-selected="false">
                                Details
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="images-tab" data-bs-toggle="tab" data-bs-target="#images-tab-pane" type="button" role="tab" aria-controls="images-tab-pane" aria-selected="false">
                                Images
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                            <div class="mb-3">
                                <label class="p-2 pt-4">Select Category</label>
                                <select name="category_id" class="form-select">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                                @error('category_id')<small class="text-danger">{{$message}}</small>@enderror
                            </div>
                            <div class="mb-3">
                                <label>Product Name</label>
                                <input type="text" name="name" class="form-control">
                                @error('name')<small class="text-danger">{{$message}}</small>@enderror
                            </div>
                            <div class="mb-3">
                                <label>Product Slug</label>
                                <input type="text" name="slug" class="form-control">
                                @error('slug')<small class="text-danger">{{$message}}</small>@enderror
                            </div>
                            <div class="mb-3">
                                <label class="p-1">Select Brand</label>
                                <select name="brand" class="form-select">
                                    @foreach($brands as $brand)
                                        <option value="{{$brand->name}}">{{$brand->name}}</option>
                                    @endforeach
                                </select>
                                @error('brand')<small class="text-danger">{{$message}}</small>@enderror
                            </div>
                            <div class="mb-3">
                                <label>Small Description</label>
                                <textarea rows="4" name="small_description" class="form-control"></textarea>
                                @error('small_description')<small class="text-danger">{{$message}}</small>@enderror
                            </div>
                            <div class="mb-3">
                                <label>Description</label>
                                <textarea rows="4" name="description" class="form-control"></textarea>
                                @error('description')<small class="text-danger">{{$message}}</small>@enderror
                            </div>
                        </div>
                        <div class="tab-pane fade" id="seotags-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                            <div class="mb-3 pt-4">
                                <label>Meta Title</label>
                                <input type="text" name="meta_title" class="form-control">
                                @error('meta_title')<small class="text-danger">{{$message}}</small>@enderror
                            </div>
                            <div class="mb-3">
                                <label>Meta Description</label>
                                <input type="text" name="meta_description" class="form-control">
                                @error('meta_description')<small class="text-danger">{{$message}}</small>@enderror
                            </div>
                            <div class="mb-3">
                                <label>Meta Keyword</label>
                                <input type="text" name="meta_keyword" class="form-control">
                                @error('meta_keyword')<small class="text-danger">{{$message}}</small>@enderror
                            </div>
                        </div>
                        <div class="tab-pane fade" id="details-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                            <div class="row">
                                <div class="col-md-4 pt-4">
                                    <div class="mb-3">
                                        <label>Original Price</label>
                                        <input type="text" name="original_price" class="form-control">
                                        @error('original_price')<small class="text-danger">{{$message}}</small>@enderror
                                    </div>
                                </div>
                                <div class="col-md-4 pt-4">
                                    <div class="mb-3">
                                        <label>Selling Price</label>
                                        <input type="text" name="selling_price" class="form-control">
                                        @error('selling_price')<small class="text-danger">{{$message}}</small>@enderror
                                    </div>
                                </div>
                                <div class="col-md-4 pt-4">
                                    <div class="mb-3">
                                        <label>Quantity</label>
                                        <input type="text" name="quantity" class="form-control">
                                        @error('quantity')<small class="text-danger">{{$message}}</small>@enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label>Trending</label>
                                        <input type="checkbox" name="trending">
                                        @error('trending')<small class="text-danger">{{$message}}</small>@enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label>Status</label>
                                        <input type="checkbox" name="status">
                                        @error('status')<small class="text-danger">{{$message}}</small>@enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="images-tab-pane" role="tabpanel" aria-labelledby="images-tab" tabindex="0">
                            <div class="mb-3 pt-4">
                                <label class="pb-4">Upload Product Image</label>
                                <input type="file" name="image" class="form-control">
                                @error('image')<small class="text-danger">{{$message}}</small>@enderror
                            </div>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary" style="color: white;">Create</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
