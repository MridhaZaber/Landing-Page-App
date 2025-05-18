@extends('admin.layouts.app')

@section('heading', 'Edit Home Page Stat')

@section('main_content')
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin_stat_update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                

                               

                                <div class="col-md-6" >
                                    <img src="{{ asset('uploads/' . $page_data->background) }}" alt=""
                                        class="profile-photo w_100_p"  style="height: 30%;">
                                    <input type="file" class="form-control mt-10" name="background">
                                </div>

                                <div class="col-md-9">
                                    <div class="mb-4">
                                        <label class="form-label">Stat1 Title *</label>
                                        <input type="text" class="form-control" name="stat1_title"
                                            value="{{ $page_data->stat1_title }}">
                                            </div>
                                    </div>
                                     <div class="col-md-9">
                                    <div class="mb-4">
                                        <label class="form-label">Stat1 Number*</label>
                                        <input type="text" class="form-control" name="stat1_number"
                                            value="{{ $page_data->stat1_number}}">
                                    </div>
                                </div>

                                <div class="col-md-9">
                                    <div class="mb-4">
                                        <label class="form-label">Stat2 Title *</label>
                                        <input type="text" class="form-control" name="stat2_title"
                                            value="{{ $page_data->stat2_title }}">
                                            </div>
                                    </div>
                                     <div class="col-md-9">
                                    <div class="mb-4">
                                        <label class="form-label">Stat2 Number*</label>
                                        <input type="text" class="form-control" name="stat2_number"
                                            value="{{ $page_data->stat2_number}}">
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="mb-4">
                                        <label class="form-label">Stat3 Title *</label>
                                        <input type="text" class="form-control" name="stat3_title"
                                            value="{{ $page_data->stat3_title }}">
                                            </div>
                                    </div>
                                     <div class="col-md-9">
                                    <div class="mb-4">
                                        <label class="form-label">Stat3 Number*</label>
                                        <input type="text" class="form-control" name="stat3_number"
                                            value="{{ $page_data->stat3_number}}">
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="mb-4">
                                        <label class="form-label">Stat4 Title *</label>
                                        <input type="text" class="form-control" name="stat4_title"
                                            value="{{ $page_data->stat4_title }}">
                                            </div>
                                    </div>
                                     <div class="col-md-9">
                                    <div class="mb-4">
                                        <label class="form-label">Stat4 Number*</label>
                                        <input type="text" class="form-control" name="stat4_number"
                                            value="{{ $page_data->stat4_number}}">
                                    </div>
                                </div>

                                 
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
