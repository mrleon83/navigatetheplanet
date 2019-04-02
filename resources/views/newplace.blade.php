@extends('layout')
@section('title')Cat & Leon Navigate The Planet
@endsection
@section('content')
    @auth
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <h1>New Place</h1>
                    <form method="POST" action="/datacontroller/place">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="country">Country</label>
                            <input type="text" class="form-control" id="country" name="country" aria-describedby="country" placeholder="Country" required>
                        </div>

                        <div class="form-group">
                            <label for="town">Town</label>
                            <input type="text" class="form-control" id="town" name="town" aria-describedby="town" placeholder="Town or locale" required>
                        </div>

                        <div class="form-group">
                            <label for="datefrom">Date From</label>
                            <input type="date" class="form-control" id="datefrom" name="datefrom" aria-describedby="datefrom" required>
                        </div>

                        <div class="form-group">
                            <label for="dateto">Date To</label>
                            <input type="date" class="form-control" id="dateto" name="dateto" aria-describedby="datefrom" required>
                        </div>
                        <input type="hidden" name="type" value="newplace">
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