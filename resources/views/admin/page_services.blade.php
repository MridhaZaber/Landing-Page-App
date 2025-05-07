@extends('admin.layouts.app')

@section('heading', 'Edit Home Page Banner')

@section('main_content')
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin_page_services_update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                             
                                <div class="col-md-9">
                                    <div class="mb-4">
                                        <label class="form-label">Title</label>
                                        <input type="text" class="form-control" name="service_title"
                                            value="{{ $service_data->service_title }}">
                                    </div>
                                    
                                   
                                    <div class="mb-4">
                                        <label class="form-label">Description</label>
                                        <textarea name="service_description" class="form-control h_100" cols="30" rows="10">{{ $service_data->service_description }}</textarea>
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



admin_page_services_update