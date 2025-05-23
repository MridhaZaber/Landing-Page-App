@extends('admin.layouts.app')

@section('heading', 'Edit Home Page info')

@section('main_content')
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin_home_info_update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="{{ asset('uploads/' . $page_data->info_photo) }}" alt=""
                                        class="profile-photo w_100_p">
                                    <input type="file" class="form-control mt-10" name="info_photo">
                                </div>


                                
                                <div class="col-md-9">
                                    <div class="mb-4">
                                        <label class="form-label">Title</label>
                                        <input type="text" class="form-control" name="info_title"
                                            value="{{ $page_data->info_title }}">
                                    </div>
                                    
                                   
                                    
                                    <div class="mb-4">
                                        <label class="form-label"></label>
                                        <button type="submit" class="btn btn-primary">Update</button>
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
