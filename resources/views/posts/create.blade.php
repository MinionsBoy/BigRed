@extends('layouts.app')

@section('content')
    <div class="card-body">

<div class="col-md-8 col-md-offset-2">
            <div class="widget-content nopadding">
                <form action="{{route('posts.store')}}" method="post" class="form-horizontal">
                    {{csrf_field()}}

                        <label class="control-label">Title</label>
                        <div class="controls">
                            <input type="text" name="title" id="title"/>
                            <span class="help-block"></span> </div>

                        <label class="control-label">Description</label>
                        <div class="controls">
                            <textarea type="text" name="description" id="description" ></textarea>
                        </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
</div>
    </div>
@endsection
