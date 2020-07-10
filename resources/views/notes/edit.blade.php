@extends('template')
    @section('main')
    <div class="row" style="margin-top:20px;">
        <div class="col-md-2">
        </div>

        <div class="col-md-8">
            <form action="{{ route('notes.update', $note->id) }}" method="post">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="Title">Title</label>
                    <input type="text" class="form-control" name="title" value="{{$note->title}}"/>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea type="text" class="form-control" name="points">{{$note->points}}</textarea>
                </div>

                <div class="float-right">
                <button type="submit" class="btn btn-success"><i class="fa fa-edit"></i> &nbsp;Update Note</button>
                <a href="{{route('notes.index')}}" class="btn btn-light">Back</a>
                </div>

            </form>
        </div>

        <div class="col-md-2">

        </div>
    </div>

    @endsection
