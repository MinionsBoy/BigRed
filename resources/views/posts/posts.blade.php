@extends('layouts.app')

@section('content')
    @if(count($posts)>0)
        <div class="card">
            <div class="card-heading">
                <div class="row">
                    <div class="col-md-12">
                        <v class="card-body">
                            <h1>Posts</h1>
                            <a href="{{route('posts.create')}}" class="btn btn-lg btn-block btn-primary">New
                                post</a>
                            <hr>
                            <table class="table table-stripte post-table">
                                <thead>
                                <th>#</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Created at</th>
                                <th></th>
                                </thead>
                                <tbody>
                                @foreach($posts as $post)
                                    <tr>
                                        <th>{{$post->id}}</th>
                                        <td>{{$post->title}}</td>
                                        <td>{{substr($post->description, 0, 15)}}{{ strlen($post->description)>15 ? "...": ""}}</td>
                                        <td>{{date( 'M j, Y H:i', strtotime($post->created_at)) }}</td>
                                        <td><a href="{{route('posts.show', $post->id)}}" class="btn badge-pill">View</a></td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
        </div>
    @endif
@endsection
