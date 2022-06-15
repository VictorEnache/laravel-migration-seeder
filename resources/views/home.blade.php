@extends('layouts.app')


@section('content')

<section>
    <div class="container">
        <div class="row">
            @foreach($trips as $trip)
                <div class="col">
                    <div class="image">
                        <img src="{{$trip['image']}}" alt="">
                    </div>
                    <div class="text">
                        <strong>{{$trip['Destinazione']}}</strong>
                        <div>{{$trip['prezzo']}}</div>
                        <div>{{$trip['giorni']}}</div>
                        <div>{{$trip['data_partenza']}}</div>
                        <div>{{$trip['data_ritorno']}}</div>
                        <div>{{$trip['attivita']}}</div>
                    </div>
                </div>
                <!-- /.col -->
            @endforeach
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>

@endsection