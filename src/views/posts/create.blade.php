{{--@extends('layouts.masterAdmin')--}}

{{--@section('content')--}}
    {{--<!-- BEGIN CONTENT -->--}}
    {{--<div class="page-content-wrapper">--}}
        {{--<!-- BEGIN CONTENT BODY -->--}}
        {{--<div class="page-content">--}}
            {{--<!-- BEGIN PAGE HEADER-->--}}
            {{--<!-- BEGIN PAGE BAR -->--}}
            {{--<div class="page-bar">--}}
                {{--<ul class="page-breadcrumb">--}}
                    {{--<li>--}}
                        {{--<a href="index.html">Home</a>--}}
                        {{--<i class="fa fa-circle"></i>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<span>Dashboard</span>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
            {{--<!-- END PAGE BAR -->--}}
            {{--<!-- BEGIN PAGE TITLE-->--}}
            {{--<h1>Add New Post</h1>--}}

            {{--<form method="POST" action="create">--}}
            {{--{{ csrf_field() }}--}}
            {{--<!-- Text Field For Title -->--}}
                {{--<div class="form-group">--}}
                    {{--<label for="title">Title:</label>--}}
                    {{--<input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                    {{--<label for="title">Meta Title:</label>--}}
                    {{--<input type="text" class="form-control" id="meta_title" name="meta_title" value="{{ old('meta_title') }}">--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                    {{--<label for="meta_description">Meta Description:</label>--}}
                    {{--<textarea class="form-control" id="meta_description" rows="3" name="meta_description">{{ old('meta_description') }}</textarea>--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                    {{--<label for="content">Body:</label>--}}
                    {{--<textarea class="form-control" id="content" rows="3" name="content" required>{{ old('content') }}</textarea>--}}
                {{--</div>--}}
                {{--<div class="input-group">--}}
                    {{--<span class="input-group-btn">--}}
                         {{--<a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">--}}
                            {{--<i class="fa fa-picture-o"></i> Choose--}}
                         {{--</a>--}}
                    {{--</span>--}}
                    {{--<input id="thumbnail" class="form-control" type="text" name="filepath" value="{{ old('filepath') }}">--}}
                {{--</div>--}}
                {{--<div class="img-holder"><img id="holder" style="margin-top:15px;max-height:100px;"></div>--}}

                {{--<div class="col-md-4">--}}
                    {{--<div class="form-group">--}}
                        {{--<label for="body">Category:</label>--}}
                        {{--<select name="category_id"  class="form-control">--}}
                            {{--@foreach($categories as $category)--}}
                                {{--<option value="{{$category->id}}">{{$category->name}}</option>--}}
                            {{--@endforeach--}}
                        {{--</select>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="col-md-4">--}}
                    {{--<div class="form-group">--}}
                        {{--<label for="body">Tags:</label>--}}
                        {{--<div class="tags-wrapper">--}}
                            {{--@foreach($tags as  $tag)--}}
                                {{--<div class="tag">--}}
                                    {{--<span>{{ $tag->name }}</span>--}}
                                    {{--<input type="checkbox" name="tags[]" value="{{ $tag->id }}">--}}
                                {{--</div>--}}
                            {{--@endforeach--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="col-md-4">--}}
                    {{--<div class="form-group">--}}
                        {{--<label for="body">Post Style:</label>--}}
                        {{--<select name="post_style"  class="form-control">--}}
                            {{--<option value="1">Style 1</option>--}}
                            {{--<option value="2">Style 2</option>--}}
                            {{--<option value="3">Style 3</option>--}}
                        {{--</select>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-12">--}}
                    {{--<div class="form-group b">--}}
                        {{--<button type="submit" class="btn btn-primary">Submit</button>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</form>--}}
            {{--@include('layouts.errors')--}}
            {{--<div class="clearfix"></div>--}}
            {{--<!-- END DASHBOARD STATS 1-->--}}
        {{--</div>--}}

    {{--</div>--}}
    {{--<!-- END CONTENT -->--}}
{{--@endsection--}}



{{--@section('scripts')--}}
    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>--}}
    {{--<script src="../vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>--}}
    {{--<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>--}}
    {{--<script src="../vendor/laravel-filemanager/js/lfm.js"></script>--}}
    {{--<script>--}}
        {{--var options = {--}}
            {{--filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',--}}
            {{--filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',--}}
            {{--filebrowserBrowseUrl: '/laravel-filemanager?type=Files',--}}
            {{--filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='--}}
        {{--};--}}
        {{--CKEDITOR.replace('content', options);--}}

        {{--$('#lfm').filemanager('image');--}}

    {{--</script>--}}
{{--@endsection--}}