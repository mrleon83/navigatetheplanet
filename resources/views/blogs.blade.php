@extends('layout')
@section('title')Navigate The Planet - {{ $country }}
@endsection
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 align="center">Navigate The Planet - {{ $country }}</h2>
            </div>
        </div>
    <?php $i = 0 ?>
    @foreach($blogs as $blogpost)
        <?
        //new row when var set to 0
        if($i == 0){
            echo '<div class="row" style="min-height: 200px; margin-top: 10px;">';
        } ?>

        <!-- to hold the blog box -->
            <div class="col-md-3">
                <div class="blogpost" style="padding: 5px; background-color: #fff;border-radius: 10px;min-height: 439px;">
                    <b>{{ $blogpost->title }}</b>
                    <br/>
                    Date: <?php echo date('d-m-Y', strtotime($blogpost->date));?>
                    <br/><br/>
                    <img src="/storage/{{$blogpost->photolink}}" width="100%" style="max-height: 237px;">
                    <br/><br/>
                    {!!Str::limit($blogpost->blogpost, 120)!!} <a href="/blog/{{$blogpost->id}}">Read More</a>
                    @auth
                        <a href="/editblog/{{$blogpost->id}}">Edit</a></a>
                        <br/>
                    @endauth
                </div>
            </div>

            <!-- to close the row div -->
            <?php $i++;
            if($i == 4 ){
                echo "</div>";
                $i = 0;} ?>
        @endforeach

    </div>
@endsection

