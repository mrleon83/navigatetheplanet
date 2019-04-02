@extends('layout')
@section('title')Cat & Leon Navigate The Planet
@endsection
@section('content')


    @auth
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <h1>New Blog</h1>
                    <form method="POST" action="/datacontroller/blog" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="place">Country</label>
                            <select class="form-control" id="place" name="place">
                                @foreach($newplaces as $newplace)
                                    <option value="{{$newplace->country}}">{{$newplace->country}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="place">Town</label>
                            <select class="form-control" id="town" name="town">
                                @foreach($newplaces as $newplace)
                                    <option value="{{$newplace->town}}">{{$newplace->town}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" aria-describedby="datefrom" placeholder="title">
                        </div>
                        <div class="form-group">
                            <label for="date">Date</label>
                            <input type="date" class="form-control" id="date" name="date">
                        </div>
                        <div class="form-group">
                            <label for="title">Blog Post</label>
                            <textarea class="form-control" id="blogpost" name="blogpost" aria-describedby="blogpost" placeholder="title"/ rows="8"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlFile1">Example file input</label>
                            <input type="file" class="form-control-file" id="image" name="photolink">
                        </div>

                        <div class="form-group">
                            <label for="alttext">Image text</label>
                            <input type="text" class="form-control" id="alttext" name="alttext" placeholder="Image description">
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="private" name="private">
                            <label class="form-check-label" for="private">
                                Private?
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="username">Name</label>
                            <input type="text" class="form-control" id="username" name="username" aria-describedby="datefrom" placeholder="username" value="{{  Auth::user()->name }}">
                        </div>
                        <input type="hidden" name="date" value="<?php getdate(); ?>">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    @endauth
    @guest
        <div class="container-fluid">
            <h3>Hey well done for finding me, now go check out the blogs :-)</h3>
        </div>
    @endguest

@endsection