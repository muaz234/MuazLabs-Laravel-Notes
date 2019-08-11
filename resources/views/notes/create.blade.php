@extends('template')

    @section('main')
    <div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Add Notes</h1>
    <div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif
        <form method="post" action="{{ route('notes.store') }}">
            @csrf
            <div class="form-group">
                <label for="Title">Title</label>
                <input type="text" class="form-control" name="title"/>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" name="points"/>
            </div>

            <button type="submit" class="btn btn-primary-outline">Create New Note</button>
        </form>
    </div>
    </div>
    </div>
    @endsection


