@extends('master')
@section('title') | View Todo @endsection
@section('content')

<div class="ro">
    <div class="col-xl-6 col-lg-8 mx-auto">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title"> View Todo </h5>
            </div>

            <div class="card-body">
                <div class="form-group my-3">
                    <label for="title"> Title </label>
                    <input type="text" readonly disabled class="form-control" value="{{ $todo->title ?? '' }}" />
                </div>

                <div class="form-group my-3">
                    <label for="description"> Description </label>
                    <textarea name="description" id="description" readonly disabled class="form-control" placeholder="Description"> {{ $todo->description ?? '' }} </textarea>
                </div>

                <div class="form-group my-3">
                    <label for="completed"> Completed </label>
                    <input type="text" readonly disabled class="form-control" value="{{ $todo->is_completed == 1 ? 'Yes' : 'No' }}" />
                </div>

                <div class="form-group">
                    <a href="{{ route('todos.index') }}" class="btn btn-success"> Back </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
