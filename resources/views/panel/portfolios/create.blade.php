@extends('panel.layouts.master')

@section('title' , 'Portfolios')

@section('content')

    <div class="col-md-12">
        <form action="{{ route('portfolios.store') }}" method="post">
            {{ csrf_field() }}
            {{ method_field('POST') }}
            <div class="card">
            <div class="card-header card-header-primary">
                <div class="row">
                    <div class="col-md-8">
                        <h4 class="card-title ">Create New Portfolio</h4>
                    </div>
                    <div class="col-md-2">
                        <a href="{{ route('portfolios.index') }}" class="btn btn-default">
                            <i class="material-icons">keyboard_backspace</i>
                            Back
                        </a>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-info">
                            <i class="material-icons">save</i>
                            Save
                        </button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 ">
                        @include('panel.portfolios.form')
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>

@endsection