@extends('admin.layout.app')
@section('content')
    <div class="main-content">
        <div class="page-content">
            {{-- @if (session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('message')}}
                </div>
            @endif --}}
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Slug</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>


                            @foreach ($data as $data)
                            <tbody>
                                <tr>
                                    <th scope="row">{{$data->id}}</th>
                                    <td>{{$data->name}}</td>
                                    <td>{{$data->slug}}</td>
                                    <td>{{$data->description}}</td>
                                    <td>{{$data->status}}</td>
                                    <td><img height="40" width="40" src="/admin/category_image/{{$data->image}}" alt=""></td>
                                    <td>
                                        <a href="{{url('admin/delete_category',$data->id)}}" onclick="return confirm('Are you sure to delete this?')" class="btn btn-danger">Delete</a>
                                        <a href="{{url('admin/edit_category',$data->id)}}" class="btn btn-warning">Update</a>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> © Skote.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Design & Develop by Themesbrand
                    </div>
                </div>
            </div>
        </div>
    </footer> --}}
    </div>
    <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
@endsection
