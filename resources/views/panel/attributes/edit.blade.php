@extends('panel.layouts.master')

@section('title' , 'Attributes')

@section('content')

    <div class="col-md-12">
        <form action="{{ route('attributes.update' , $attribute->id) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="card">
                <div class="card-header card-header-primary">
                    <div class="row">
                        <div class="col-md-8">
                            <h4 class="card-title ">Create New portfolio</h4>
                        </div>
                        <div class="col-md-2">
                            <a href="{{ route('attributes.index') }}" class="btn btn-default">
                                <i class="material-icons">keyboard_backspace</i>
                                Back
                            </a>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-info">
                                <i class="material-icons">save</i>
                                Update
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 ">
                            @include('panel.attributes.form')
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection