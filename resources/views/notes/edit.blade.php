@extends('template')
    @section('main')
    <div class="row">
        <div class="col-md-4">
        </div>

        <div class="col-md-4">
            <form action="{{ route('notes.update', $note->id) }}" method="post">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="Title">Title</label>
                    <input type="text" class="form-control" name="title" value="{{$note->title}}"/>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" name="points" value="{{$note->points}}"/>
                </div>
                    <button type="submit" class="btn btn-success">Update Note</button>
            </form>
        </div>

        <div class="col-md-4">

        </div>
    </div>

    @endsection
