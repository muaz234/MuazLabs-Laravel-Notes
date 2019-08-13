@extends('template')

    @section('main')

    <div class="col-sm-12">

        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
    </div>
            <div class="text-center" style="margin-top: 10px;">
                    <a href="{{ route('notes.create') }}" class="btn btn-primary" >Add New Note</a>
        </div>

        <div class='row' style="margin-top: 50px; justify-content: center;">
            <div class="col-md-1">

            </div>


            <div class="col-md-10">
                <div class="table-responsive">
                    <table class="table table-bordered" style="width: 100% !important;">
                        <thead>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Posted On</th>
                            <th>Timestamps</th>
                            <th>Actions</th>
                            <th></th>
                        </thead>

                        <tbody>
                        @foreach($notes as $note)
                            <tr>
                                <td style="vertical-align: middle;">{{$note->id}}</td>
                                <td style="vertical-align: middle;">{{$note->title}}</td>
                                <td style="margin-left:5px; vertical-align: middle;">{{$note->points}}</td>
                                <td style="margin-left:5px; vertical-align: middle;">{{$note->posted}}</td>
                                <td style="color:blue; vertical-align: middle;">{{$note->created_at}}</td>
                                <div class="btn-group">
                                <td class="text-center"><a href="{{route('notes.edit', $note->id)}}"><button type="button" class="btn btn-info btn-block">Edit</button></a></td>
                                <td>
                                        <form method="post" action="{{route('notes.destroy', $note->id)}}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="delete btn btn-danger btn-block">Delete</button>
                                    </form>
                                </td>
                            </div>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-md-1">
            </div>
        </div>
    @endsection
