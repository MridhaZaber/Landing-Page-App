@extends('admin.layouts.app')

@section('heading', 'View Protfolio')

@section('rightside_button')
<a href="{{ route('admin_protfolio_add') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add New</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example1">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                   
                                
                                    <th>Sub Title</th>
                                    <th>Title</th>
                                    <th>Category Name</th>
                                    <th>Photo</th>
                                    
                                   
                                    
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($all_data as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td  style="width:30%">{{ $item->subtitle}}</td>
                                    <td  style="width:25%">{{ $item->title}}</td>
                                    <td  style="width:10%">{{ $item->rportfoliocategory->category_name  ?? 'No category'}}
                                    
                                    <td>
                                        <img src="{{ asset('uploads/'.$item->photo) }}" alt="" class="w_50">
                                    </td>
                                   
                                    
                                    <td class="pt_10 pb_10">
                                        <a href="{{ route('admin_protfolio_edit',$item->id) }}" class="btn btn-primary">Edit</a>
                                        <a href="{{ route('admin_protfolio_delete',$item->id) }}" class="btn btn-danger" onClick="return confirm('Are you sure?');">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection