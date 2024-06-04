@extends('master')
@section('title') | Create Todo @endsection
@section('content')

<div class="row">
    <div class="col-xl-6 col-lg-8 mx-auto">
        <form action="{{ route('todos.story') }}" method="POST">
        @csrf
        <div class="card">
            <div class="card-header">
                <h5 class="card-title"> Create Todo </h5>
            </div>

            <div class="card-body">
                <div class="form-group my-3">
                    <label for="title"> Title </label>
                    <input type="text" required name="title" id="title" placeholder="Title" class="form-control" />
                </div>

                <div class="form-group my-3">
                    <label for="description"> Description </label>
                    <textarea name="description" id="description" required class="form-control" placeholder="Description"></textarea>
                </div>

                <div class="form-group">
                    <button class="btn btn-success" type="submit"> Save </button>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
@endsection
