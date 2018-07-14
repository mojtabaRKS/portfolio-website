@extends('panel.layouts.master')

@section('title' , 'Skills')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <div class="row">
                        <div class="col-md-9">
                            <h4 class="card-title ">Skills</h4>
                            <p class="card-category">click on the add button to create new skill if you achieved
                                that</p>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ route('skills.create') }}" class="btn btn-info">
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
                                <th>Tools</th>
                                <th>Percent</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($skills as $skill)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $skill->name }}</td>
                                    <td>{{ $skill->description }}</td>
                                    <td>{{ $skill->tools }}</td>
                                    <td>{{ $skill->percent }} %</td>
                                    <td class="td-actions text-left">
                                        <a href="{{ route('skills.change.activation' , $skill->id) }}" rel="tooltip" class="btn btn-info btn-round">
                                            @if($skill->is_active)
                                                <i class="material-icons">check</i>
                                            @else
                                                <i class="material-icons">close</i>
                                            @endif
                                        </a>
                                        <a href="{{ route('skills.edit' , $skill->id) }}" rel="tooltip"
                                           class="text-white btn btn-success btn-round">
                                            <i class="material-icons">edit</i>
                                        </a>
                                        <form action="{{ route('skills.destroy' , $skill->id) }}" class="d-inline"
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