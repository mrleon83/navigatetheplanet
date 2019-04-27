@extends('layout')
@section('title')Cat & Leon Navigate The Planet
@endsection
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 align="center" style="padding: 10px">Navigate The Planet Gallery- {{ $place }}</h2>
            </div>
        </div>
    <?php $i = 0 ?>
    @foreach($images as $image)
            @if($image->photolink != 'uploads/'.$place.'/')
                @if($image->photolink != 'uploads/'.$place.'/')
                    <?php if($i == 0){
                        echo '<div class="row" style="margin-top: 10px;">';
                    } ?>

                <!-- to hold the blog box -->
                    <div class="col-md-3">
                        <div class="blogpost" style="padding: 8px; background-color: #fff;border-radius: 10px;max-height :500px;">
                            <img src="/storage/{{$image->photolink}}" width="100%;border-radius: 10px;">
                        </div>
                    </div>

                    <!-- to close the row div -->
                    <?php $i++;
                    if($i == 4 ){
                        echo "</div>";
                        $i = 0;} ?>
                @endif
            @endif
        @endforeach

    </div>


@endsection

