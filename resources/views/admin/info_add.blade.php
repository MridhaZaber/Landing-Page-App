@extends('admin.layouts.app')

@section('heading', 'Add Info')

@section('rightside_button')
<a href="{{ route('admin_info_show') }}" class="btn btn-primary"><i class="fas fa-plus"></i> View All</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_info_submit') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                
                            <div class="mb-4">
                                    <label class="form-label">Photo *</label>
                                    <div>
                                        <input type="file" name="info_photo">
                                    </div>
                                </div>    
                                <div class="mb-4">
                                    <label class="form-label">Description *</label>
                                    <textarea name="info_description" class="form-control editor" cols="30" rows="10"></textarea>
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