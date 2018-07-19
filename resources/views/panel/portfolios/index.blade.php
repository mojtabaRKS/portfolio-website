@extends('panel.layouts.master')

@section('title' , 'Portfolios')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <div class="row">
                        <div class="col-md-9">
                            <h4 class="card-title ">Portfolios</h4>
                            <p class="card-category">click on the add button to create new portfolio if you made that</p>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ route('portfolios.create') }}" class="btn btn-info">
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
                                <th>link</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($portfolios as $portfolio)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $portfolio->name }}</td>
                                    <td>
                                        <a href="{{ $portfolio->link }}" class="text-white btn btn-primary" target="_blank">link</a>
                                    </td>
                                    <td class="td-actions text-left">
                                        <a href="{{ route('portfolios.edit' , $portfolio->id) }}" rel="tooltip"
                                           class="text-white btn btn-success btn-round">
                                            <i class="material-icons">edit</i>
                                        </a>
                                        <form action="{{ route('portfolios.destroy' , $portfolio->id) }}" class="d-inline"
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