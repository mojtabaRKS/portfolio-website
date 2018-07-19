@extends('panel.layouts.master')

@section('title' , 'Attributes')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <div class="row">
                        <div class="col-md-9">
                            <h4 class="card-title ">Attributes</h4>
                            <p class="card-category">click on the add button to create new attribute</p>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ route('attributes.create') }}" class="btn btn-info">
                                <i class="material-icons">add</i>
                                Add new
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Icon</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($attributes as $attribute)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $attribute->name }}</td>
                                    <td>{{ $attribute->description }}</td>
                                    <td>{!! $attribute->icon !!}</td>
                                    <td class="td-actions text-left">
                                        <a href="{{ route('attributes.edit' , $attribute->id) }}" rel="tooltip"
                                           class="text-white btn btn-success btn-round">
                                            <i class="material-icons">edit</i>
                                        </a>
                                        <form action="{{ route('attributes.destroy' , $attribute->id) }}" class="d-inline"
                                              method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" rel="tooltip" class="btn btn-danger btn-round">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </form>
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

@endsection