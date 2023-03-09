@extends('admin.layout.app')
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3>Add Category
                                    <a href="{{ route('admin.create_category') }}"
                                        class="btn btn-primary btn-sm float-end">BACK</a>
                                </h3>
                            </div>
                            <div class="card-body">

                                <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="">Name</label>
                                            <input type="text" name="name" class="form-control  @error('name') is-invalid @enderror"">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Slug</label>
                                            <input type="text" name="slug" class="form-control  @error('slug') is-invalid @enderror"">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Description</label>
                                            <input type="text" name="description" class="form-control  @error('description') is-invalid @enderror"">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Image</label>
                                            <input type="file" name="image" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Status</label>
                                            <input type="checkbox" name="Status">
                                        </div>
                                        <div class="col-md-12">
                                            <h4>SEO Tags</h4>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Meta Title</label>
                                            <input type="text" name="meta_title" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Meta Keyword</label>
                                            <textarea name="meta_keyword" class="form-control" rows="2"></textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="">Meta Description</label>
                                            <textarea name="meta_description" class="form-control" rows="3"></textarea>
                                        </div>
                                        <div class="col-md-6 mb-3 mt-4">
                                            <button type="submit" class="btn btn-success float-end">Save</button>
                                        </div>

                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
