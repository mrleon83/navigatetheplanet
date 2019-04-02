@extends('layout')
@section('title')Navigate The Planet
@endsection
@section('content')

    <div class="container-fluid">

        @foreach($places as $place)
            <?php
            $files = Storage::disk('public')->files('/'.$place->place);
            foreach($files as $file){ ?>
            <div class="row" style="min-height: 200px; margin-top: 10px;">
                <div class="col-md-12">
                    <div class="blogpost" style="padding: 5px; background-color: #fff;border-radius: 10px;min-height: 250px;">
                        <?php
                        echo '<img src=/storage/'. $file .' class="d-block w-100" alt="...">';
                        ?>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        @endforeach
    </div>

@endsection