@extends('admin.layouts.app')

@section('heading', 'Add Protfolio')

@section('rightside_button')
<a href="{{ route('admin_protfolio_show') }}" class="btn btn-primary"><i class="fas fa-plus"></i> View All</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_protfolio_submit') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                
                            <div class="mb-4">
                                    <label class="form-label">Photo *</label>
                                    <div>
                                        <input type="file" name="photo">
                                    </div>
                                </div>    
                                 
                              <div class="mb-4">
                                    <label class="form-label">Sub Title *</label>
                                    <input type="text" class="form-control" name="subtitle" ">
                                </div>

                                 
                              <div class="mb-4">
                                    <label class="form-label">Title *</label>
                                    <input type="text" class="form-control" name="title"">
                                </div>
                                
                                
                               
                                <div class="mb-4">
                                    <label class="form-label"></label>
                                    <button type="submit" class="btn btn-primary">Submit</button>
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