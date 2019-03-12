@extends('layouts.app')

@section('content')

    <hr>

    <form method="post" action="/posts/{{$post->id}}">
{{csrf_field()}}
        {{method_field('PUT')}}
        <div class="col-md-8">
            <label class="control-label">Title:</label>
            <div class="controls">
                <input type="text" name="title" id="title"
                       value="{{$post->title}}"/>
                <span class="help-block"></span>
                <h1></h1>
                <label class="control-label">Description:</label>
                <div class="controls">
                    <input type="text" name="description" id="description"
                           value="{{$post->description}}"/>
                </div>

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
                            <a href="{{route('posts.show', $post->id)}}" class="btn btn-danger btn-block">Cancel</a>
                        </div>
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-success btn-block">

                                Save

                            </button>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
@stop
