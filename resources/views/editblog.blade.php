@extends('layout')
@section('title')Cat & Leon Navigate The Planet
@endsection
@section('content')

    <div class="container-fluid">

        @foreach($blogs as $blogpost)
            <div class="row">
                <div class="col-sm-12">
                    <h1>Edit Blog</h1>
                    <form method="POST" action="/datacontroller/updateblog" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="place">Country</label>
                            <input type="text" class="form-control" id="place" name="place" aria-describedby="country" placeholder="Country" value="{{ $blogpost->place }}">
                        </div>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" aria-describedby="title" placeholder="title" value="{{ $blogpost->title }}">
                        </div>
                        <div class="form-group">
                            <label for="date">Date</label>
                            <input name="date" type="date" class="form-control" id="date" aria-describedby="date">
                        </div>
                        <div class="form-group">
                            <label for="title">Blog Post</label>
                            <textarea class="form-control" id="blogpost" name="blogpost" aria-describedby="blogpost" placeholder="title"/ rows="8" >{{ $blogpost->blogpost }}</textarea>
                        </div>
                        <div class="form-group">
                            <img src="/storage/{{$blogpost->photolink}}" width="30%" style="border-radius:10px;">
                            <label for="exampleFormControlFile1">Upload new image</label>
                            <input type="file" class="form-control-file" id="image" name="photolink">
                        </div>
                        <div class="form-group">
                            <label for="alttext">Image text</label>
                            <input type="text" class="form-control" id="alttext" name="alttext" placeholder="Image description">
                        </div>
                        <div class="form-group">
                            <label for="username">Blogger</label>
                            <input type="text" class="form-control" id="username" name="username" aria-describedby="datefrom" value="{{ $blogpost->username }}">
                        </div>
                        <input type="hidden" name="blogid" value="{{ $blogid }}">
                        <input type="hidden" name="datedited" value="<?php getdate(); ?>">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        @endforeach

    </div>


@endsection