@extends('master')
@section('title') | Update Todo @endsection
@section('content')

<div class="row">
    <div class="col-xl-6 col-lg-8 mx-auto">
        <form action="{{ route('todos.update', $todo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card">
            <div class="card-header">
                <h5 class="card-title"> Update Todo </h5>
            </div>

            <div class="card-body">
                <div  class="form-group my-3">
                    <label for="title"> Title </label>
                    <input type="text" name="title" required id="title" class="form-control" placeholder="Title" value="{{ $todo ? $todo->title : '' }}" />
                </div>

                <div  class="form-group my-3">
                    <label for="description"> Description </label>
                    <textarea name="description" required id="description" class="form-control" placeholder="Description"> {{ $todo ? $todo->description : '' }} </textarea>
                </div>

                <div  class="form-group my-3">
                    <label for="completed"> Completed </label>
                    <select name="completed" id="completed" class="form-control">
                        <option value="1" {{ $todo->is_completed == 1 ? 'selected' : '' }}> Yes </option>
                        <option value="0" {{ $todo->is_completed == 0 ? 'selected' : '' }}> No </option>
                    </select>
                </div>

                <div class="form-group">
                    <button class="btn btn-success" type="submit"> Update </button>
                    <a href="{{ route('todos.index') }}" class="btn btn-info"> Back </a>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>

@endsection
