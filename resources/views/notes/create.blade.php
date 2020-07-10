@extends('template')

    @section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h2 class="text-center font-weight-bold">Add Notes</h2>
        <div>

            @if ($errors->any())

        <div class="alert alert-danger">

            <ul>
                @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>
        <br />

        @endif

        <form method="post" action="{{ route('notes.store') }}">
            @csrf

            <div class="form-group">
                <label for="Title">Title</label>
                <input type="text" class="form-control" name="title"/>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea rows="2" class="form-control" name="points"></textarea>
            </div>
            <div class="float-right">
                <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i>&nbsp; New Note</button>
                <a role="button" class="btn btn-dark" href="{{route('notes.index')}}">Back</a>

            </div>
        </form>
    </div>
    </div>
    </div>
    @endsection


