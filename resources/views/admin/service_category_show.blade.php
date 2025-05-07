@extends('admin.layouts.app')

@section('heading', 'View Posts')

@section('rightside_button')
<a href=" " class="btn btn-primary"><i class="fas fa-plus"></i> Add New</a>
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
                                <a href="{{ route('admin.service_category_add') }} " class="btn btn-primary"><i class="fas fa-plus"></i> Add New</a>
                                <tr>
                                    <th>SL</th>
                                    <th>Photo</th>
                                  
                                    <th>Title</th>
                                    <th>Category</th>
                                  
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($all_data as $item)
                                <tr>
                                    <td>{{ $loop->iteration }} </td>
                                    <td>
                                        <img src="{{ asset('uploads/'.$item->photo) }}" alt="" class="w_100">
                                    </td>
                               
                                    <td>{{ $item->category_title }}</td>
                                    <td>
                                        {{ $item->category_description }}
                                    </td>
                                    <td class="pt_10 pb_10">
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