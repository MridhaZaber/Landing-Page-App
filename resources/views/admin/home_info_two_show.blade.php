@extends('admin.layouts.app')

@section('heading', 'Edit Home Page info-Two')

@section('main_content')
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin_home_info_two_update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="{{ asset('uploads/' . $page_data->left_wrap_photo) }}" alt=""
                                        class="profile-photo w_100_p">
                                    <input type="file" class="form-control mt-10" name="left_wrap_photo">
                                </div>
                                 <div class="col-md-3">
                                    <img src="{{ asset('uploads/' . $page_data->bottom_wrap_photo1) }}" alt=""
                                        class="profile-photo w_100_p">
                                    <input type="file" class="form-control mt-10" name="bottom_wrap_photo1">
                                </div>
                                 <div class="col-md-3">
                                    <img src="{{ asset('uploads/' . $page_data->bottom_wrap_photo2) }}" alt=""
                                        class="profile-photo w_100_p">
                                    <input type="file" class="form-control mt-10" name="bottom_wrap_photo2">
                                </div>
                                 <div class="col-md-3">
                                    <img src="{{ asset('uploads/' . $page_data->right_photo) }}" alt=""
                                        class="profile-photo w_100_p">
                                    <input type="file" class="form-control mt-10" name="right_photo">
                                </div>


                                
                                <div class="col-md-9">
                                    <div class="mb-4">
                                        <label class="form-label">Title</label>
                                        <input type="text" class="form-control" name="left_wrap_title"
                                            value="{{ $page_data->left_wrap_title }}">
                                    </div>
                                    </div>



                                    
                                    <div class="col-md-9">

                                    <div class="mb-4">
                                    <label class="form-label">Description *</label>
                                    <textarea name="left_wrap_description" class="form-control h_100" cols="30" rows="10">{{ $page_data->left_wrap_description }}</textarea>
                                </div>
                                </div>



                                <div class="col-md-9">
                                    <div class="mb-4">
                                        <label class="form-label">Title</label>
                                        <input type="text" class="form-control" name="bottom_wrap_title1"
                                            value="{{ $page_data->bottom_wrap_title1 }}">
                                    </div>
                                    </div>

                                    
                                    <div class="col-md-9">

                                    <div class="mb-4">
                                    <label class="form-label">Description *</label>
                                    <textarea name="bottom_wrap_description1" class="form-control h_100" cols="30" rows="10">{{ $page_data->bottom_wrap_description1 }}</textarea>
                                </div>
                                </div>


                                
                                <div class="col-md-9">
                                    <div class="mb-4">
                                        <label class="form-label">Title</label>
                                        <input type="text" class="form-control" name="bottom_wrap_title2"
                                            value="{{ $page_data->bottom_wrap_title2 }}">
                                    </div>
                                    </div>

                                    
                                    <div class="col-md-9">

                                    <div class="mb-4">
                                    <label class="form-label">Description *</label>
                                    <textarea name="bottom_wrap_description2" class="form-control h_100" cols="50" rows="50">{{ $page_data->bottom_wrap_description2 }}</textarea>
                                </div>
                                </div>
                                    
                                   
                                     <div class="col-md-9">
                                    <div class="mb-4">
                                        <label class="form-label"></label>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
