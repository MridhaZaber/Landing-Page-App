@extends('admin.layouts.app')

@section('heading', 'Edit Home Page WhyChooseSectionUpdate')

@section('main_content')
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin_whychooseupdate_update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-2" >
                                    <img src="{{ asset('uploads/' . $page_data->photo) }}" alt=""
                                        class="profile-photo w_100_p"  style="height: 30%;">
                                    <input type="file" class="form-control mt-10" name="photo">
                                </div>

                                <div class="col-md-2">
                                    <img src="{{ asset('uploads/' . $page_data->background_photo) }}" alt=""
                                        class="profile-photo w_100_p"  style="height: 30%;">
                                    <input type="file" class="form-control mt-10" name="background_photo">
                                </div>

                                <div class="col-md-2" >
                                    <img src="{{ asset('uploads/' . $page_data->photo1) }}" alt=""
                                        class="profile-photo w_100_p"  style="height: 30%;">
                                    <input type="file" class="form-control mt-10" name="photo1">
                                </div>
                                <div class="col-md-2" >
                                    <img src="{{ asset('uploads/' . $page_data->photo2) }}" alt=""
                                        class="profile-photo w_100_p"  style="height: 30%;">
                                    <input type="file" class="form-control mt-10" name="photo2">
                                </div>
                                <div class="col-md-2" >
                                    <img src="{{ asset('uploads/' . $page_data->photo3) }}" alt=""
                                        class="profile-photo w_100_p"  style="height: 30%;">
                                    <input type="file" class="form-control mt-10" name="photo3">
                                </div>
                                <div class="col-md-2" >
                                    <img src="{{ asset('uploads/' . $page_data->photo4) }}" alt=""
                                        class="profile-photo w_100_p"  style="height: 30%;">
                                    <input type="file" class="form-control mt-10" name="photo4">
                                </div>

                                <div class="col-md-9">
                                    <div class="mb-4">
                                        <label class="form-label">Title</label>
                                        <input type="text" class="form-control" name="title"
                                            value="{{ $page_data->title }}">
                                            </div>
                                    </div>
                                     <div class="col-md-9">
                                    <div class="mb-4">
                                        <label class="form-label">Title Another</label>
                                        <input type="text" class="form-control" name="title1"
                                            value="{{ $page_data->title1 }}">
                                    </div>
                                </div>

                                    <div class="col-md-9">
                                    <div class="mb-4">
                                        <label class="form-label">Title3</label>
                                        <input type="text" class="form-control" name="title3"
                                            value="{{ $page_data->title3 }}">
                                            </div>
                                    </div>
                                    <div class="col-md-9">
                                    <div class="mb-4">
                                        <label class="form-label">Title4</label>
                                        <input type="text" class="form-control" name="title4"
                                            value="{{ $page_data->title4 }}">
                                            </div>
                                    </div>
                                    <div class="col-md-9">
                                    <div class="mb-4">
                                        <label class="form-label">Title5</label>
                                        <input type="text" class="form-control" name="title5"
                                            value="{{ $page_data->title5 }}">
                                            </div>
                                    </div>
                                    <div class="col-md-9">
                                    <div class="mb-4">
                                        <label class="form-label">Title6</label>
                                        <input type="text" class="form-control" name="title6"
                                            value="{{ $page_data->title6 }}">
                                            </div>
                                    </div>

                                    
                                    
                                   <div class="col-md-9">
                                    <div class="mb-4">
                                        <label class="form-label">Description</label>
                                        <textarea name="description" class="form-control h_100" cols="30" rows="10">{{ $page_data->description }}</textarea>
                                    </div>
                                </div>



                                <div class="col-md-9">

                                    <div class="mb-4">
                                        <label class="form-label">Button Name</label>
                                        <input type="text" class="form-control" name="button_name"
                                             value="{{ $page_data->button_name }}">
                                    </div>
                                </div>

                                <div class="col-md-9">
                                    <div class="mb-4">
                                        <label class="form-label">Button URL</label>
                                        <input type="text" class="form-control" name="button_url"
                                            value="{{ $page_data->button_url }}">
                                    </div>
                                </di>

                                <div class="col-md-9">
                                    <div class="mb-4">
                                        <label class="form-label"></label>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                                </div>
                            </di>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
