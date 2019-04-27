@extends('layout')
@section('title')Navigate The Planet - {{ $country }}
@endsection
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 align="center" style="padding: 10px">Navigate The Planet - {{ $country }}</h2>
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
                <div class="blogpost" style="padding: 8px; background-color: #fff;border-radius: 10px;min-height: 500px;max-height :500px;">
                    <b style="min-height: 186px; max-height: 186px">{{ $blogpost->title }}</b>
                    <br/>
                    Date: <?php echo date('d-m-Y', strtotime($blogpost->date));?>
                    <br/><br/>
                    <img src="/storage/{{$blogpost->photolink}}" width="100%" style="max-height: 230px; border-radius: 10px;">
                    <br/><br/>
                    {!!Str::limit($blogpost->blogpost, 120)!!}
                    <br/><a href="/blog/{{$blogpost->id}}" style="color: #FF8826; font-weight: bold;">Read More</a>
                    @auth
                        <br/>
                        <a href="/editblog/{{$blogpost->id}}" style="color: #FF8826">Edit</a></a>
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

