@extends('layouts.app')

@section('content')

    <hr>
    @if(!isset($post->id))
        <form action="{{route('posts.store')}}" method="post" class="form-horizontal">

            @else
                <form method="post" action="/posts/{{$post->id}}">
                    {{method_field('PUT')}}

                    @endif
                    {{csrf_field()}}

                    <div class="col-md-8">
                        <label class="control-label">Title:</label>
                        <div class="controls">
                            <input type="text" name="title" id="title"
                                   value="{{old('title', isset($post->title)?$post->title:null)}}"/>
                            <span class="help-block"></span>
                            <h1></h1>
                            <label class="control-label">Description:</label>
                            <div class="controls">
                                <input type="text" name="description" id="description"
                                       value="{{old('description', isset($post->description)?$post->description:null)}}"/>

                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="well">
                                <hr>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <a href="{{route('posts.index')}}" class="btn btn-danger btn-block">Cancel</a>
                                    </div>
                                    <div class="col-sm-6">

                                        @if(isset($id))
                                            <button type="submit" class="btn btn-success btn-block">
                                                Create
                                            </button>
                                        @else
                                            <button type="submit" class="btn btn-success btn-block">
                                                Update
                                            </button>
                                        @endif
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </form>
        </form>

@endsection
