@extends('layouts.app')

@section('content')

    <div class="customoverlay">
        <div class="container">
            <div class="row" style="margin-top: 100px; margin-bottom: 20px">
                <h2 class="create-comp-title">Create own post</h2><br>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
    @if(!isset($post->id))
        <form action="{{route('posts.store')}}" method="post" class="form-horizontal">

            @else
                <form method="post" action="/posts/{{$post->id}}">
                    {{method_field('PUT')}}

                    @endif
                    {{csrf_field()}}
                    <h4 class="col-sm-12">Title</h4>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" id="title" name="title"
                                   value="{{old('title', isset($post->title)?$post->title:null)}}">
                        </div>
                    </div>
                    <h4 class="col-sm-12">Description</h4>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                        <textarea class="form-control" id="description" name="description" rows="3">{{old('description', isset($post->description)?$post->description:null)}}
                        </textarea>
                        </div>
                    </div><br>

                        <div class="col-md-4">
                            <div class="well">
                                <hr>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <a href="{{route('posts.index')}}" class="btn btn-danger btn-block">Cancel</a>
                                    </div>
                                    <div class="col-sm-6">

                                        @if(isset($post->id))
                                            <button type="submit" class="btn btn-primary mb-5 mt-2">
                                                Update
                                            </button>
                                        @else

                                            <button type="submit" class="btn btn-primary mb-5 mt-2">
                                                Create
                                            </button>
                                        @endif
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </form>
        </form>
        </div>
    </div>
@endsection
