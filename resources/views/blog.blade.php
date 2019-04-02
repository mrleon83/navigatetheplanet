@extends('layout')
@section('title')Cat & Leon Navigate The Planet
@endsection
@section('content')

    <div class="container-fluid">

        @foreach($blogs as $blogpost)
            <div class="row">
                <div class="col-md-12">
                    <h2 align="center">{{ $blogpost->place }}</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="blogpost" style="padding: 20px; text-align: center;">
                        <h4>{{ $blogpost->title }}</h4>
                        <br/>
                        Date: <?php echo date('d-m-Y', strtotime($blogpost->date));?>
                        <br/>
                        By: {{ $blogpost->username }}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <img src="/storage/{{$blogpost->photolink}}" width="100%" style="border-radius:10px;" alt="{{$blogpost->alttext}}">
                    <br/><br/><br/>
                </div>
                <div class="col-md-8">
                    <p class="blogposttext">
                        {!! nl2br($blogpost->blogpost) !!}
                        <br/>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    @auth
                        <a href="/editblog/{{$blogpost->id}}">Edit</a></a>
                        <br/>
                    @endauth
                    <br/>
                    <br/>
                    <a href="javascript:history.go(-1)">Back</a>
                </div>
            </div>
        @endforeach
    </div>


@endsection