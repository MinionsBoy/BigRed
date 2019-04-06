@extends('layouts.app')

@section('content')

    <hr>

    @if(count($posts)>0)
                <div class="row">
                    <div class="span12">
                        <div class="widget-box">
                            <a href="{{route('posts.create')}}" class="btn btn-icon-pg btn-success">New post</a>
                            <div class="widget-title">
                                <h1>Posts</h1>
                            </div>
                            <div class="widget-content nopadding">
                                <ul class="recent-posts">
                                    @foreach($posts as $post)

                                        <li>
                                            <div class="user-thumb">
                                                <img width="40" src="/img/demo/av3.jpg" alt="User">
                                            </div>
                                            <div class="article-post">
                                                <div class="fr">
                                                    <a href="{{route('posts.show', $post->id)}}" class="btn-mini btn-primary btn-icon-pg"> Show</a>

                                                </div>
                                                <span class="user-info"> By user {{$post->user_id}} / Date: {{date( 'M j, Y H:i', strtotime($post->created_at)) }} </span>
                                                <p>{{$post->title}}</p>
                                            </div>
                                            <td>{{substr($post->description, 0, 15)}}{{ strlen($post->description)>30 ? "...": ""}}</td>
                                        </li>
                                    @endforeach
                                </ul>

                            </div>
                            {{--<table class="table table-stripte post-table">--}}
                                {{--<thead>--}}
                                {{--<th>#</th>--}}
                                {{--<th>Title</th>--}}
                                {{--<th>Description</th>--}}
                                {{--<th>Created at</th>--}}
                                {{--<th></th>--}}
                                {{--</thead>--}}
                                {{--<tbody>--}}
                                {{--@foreach($posts as $post)--}}
                                    {{--<tr>--}}
                                        {{--<th>{{$post->id}}</th>--}}
                                        {{--<td>{{$post->title}}</td>--}}
                                        {{--<td>{{substr($post->description, 0, 15)}}{{ strlen($post->description)>15 ? "...": ""}}</td>--}}
                                        {{--<td>{{date( 'M j, Y H:i', strtotime($post->created_at)) }}</td>--}}
                                        {{--<td><a href="{{route('posts.show', $post->id)}}" class="btn badge-pill">View</a></td>--}}
                                    {{--</tr>--}}
                                {{--@endforeach--}}


                                {{--</tbody>--}}
                            {{--</table>--}}
                    </div>
                </div>
            </div>
    @endif
@endsection
