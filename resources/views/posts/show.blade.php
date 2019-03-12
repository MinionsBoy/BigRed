
@extends('layouts.app')

@section('content')
    <hr>
<div class="col-md-8">
    <h1>{{ $post->title }}</h1>
    <p class="lead">{{$post->description}}</p>

</div>
    <div class="col-md-4">
        <div class="well">
            <dl class="dl-horizontal">
                <dt>Create at</dt>
                <dd>{{date( 'M j, Y H:i', strtotime($post->created_at)) }}</dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>Last update:</dt>
                <dd>{{date( 'M j, Y H:i', strtotime($post->updated_at)) }}</dd>
            </dl>
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <a href="{{route('posts.edit', $post->id)}}" class="btn btn-primary btn-block">Edit</a>
                </div>
                <div class="col-sm-6">
                    <form action="{{url('posts/'.$post->id)}}" method="POST">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}

                        <button class="btn btn-danger">
                            Delete
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>

    @endsection
