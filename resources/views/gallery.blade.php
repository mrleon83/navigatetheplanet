@extends('layout')
@section('title')Navigate The Planet
@endsection
@section('content')

    <div class="container-fluid gallery">

    <?php $i = 0 ?>
    @foreach($places as $place)
        <?
        //new row when var set to 0
        if($i == 0){
            echo '<div class="row" style="min-height: 200px; margin-top: 10px;">';
        } ?>

        <!-- to hold the blog box -->
            <div class="col-md-3">
                <a href="gallerydetail/{{ $place->place }}" id="{{ $place->place }}" onclick="return getGallery(this.id)" style="color:#666">
                    <div class="blogpost" style="padding: 5px; background-color: #fff;border-radius: 10px; min-height: 200px;">

                        <div class="placetitle" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);font-family: Montserrat;font-size: 2em;">
                            {{ $place->place }}
                        </div>
                    </div>
                </a>
            </div>

            <!-- to close the row div -->
            <?php $i++;
            if($i == 4 ){
                echo "</div>";
                $i = 0;} ?>
        @endforeach

    </div>







    <div class="container-fluid">
        @foreach($images as $image)
            <?php /*
                if($image->place == 'Sri Lanka'){
                    echo $image->photolink;
                    echo "<br/>";
                }*/
            ?>
        @endforeach
    </div>
@endsection