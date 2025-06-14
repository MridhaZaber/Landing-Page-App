@extends('admin.layouts.app')

@section('heading', 'Edit Protfolio Category')

@section('rightside_button')
<a href="{{ route('admin_protfolio_category_show') }}" class="btn btn-primary"><i class="fas fa-plus"></i> View All</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_protfolio_category_update',$row_data->id) }}) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">

                           

                               
                           
                                <div class="mb-4">
                                    <label class="form-label">Category Nmae*</label>
                                    <input type="text" class="form-control" name="category_name" value="{{ $row_data->category_name}}">
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