@extends('template')

    @section('main')
    <div class="col-sm-12">

        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
    </div>
        <div class='row' style="margin-top: 50px; justify-content: center;">
            <div class="col-md-3">

            </div>



            <div class="col-md-6">
                <table class="table table-hover">
                    <thead>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Posted On</th>
                        <th>Timestamps</th>
                        <th>Actions</th>
                    </thead>

                    <tbody>
                    @foreach($notes as $note)
                    <tr>
                        <td>{{$note->id}}</td>
                        <td>{{$note->title}}</td>
                        <td style="margin-left:5px;">{{$note->points}}</td>
                        <td style="margin-left:5px;">{{$note->posted}}</td>
                        <td>{{$note->created_at}}</td>
                        <td><a href="{{route('notes.edit', $note->id)}}"><button type="button" class="btn btn-info">Edit</button></a>

                            <form method="post" action="{{ route('notes.destroy', $note->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" style="margin-top: 5px;">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="col-md-3">
            </div>
        </div>
    @endsection
