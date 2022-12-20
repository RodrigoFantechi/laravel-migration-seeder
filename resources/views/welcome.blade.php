@extends('layouts.app')

@section('content')
<section class="jumbo">
    <div class="px-4 py-5 my-5 text-center">
        <h1 class="display-5 fw-bold">Centered hero</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Primary button</button>
                <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button>
            </div>
        </div>
    </div>
</section>
<section class="train bg-light p-5">
    <div class="container">
        <div class="row row-cols-3 g-4">
            @foreach ($trains as $key => $train)
        <div class="col {{$key === count($trains)-1 ? 'mx-auto' : ''}}">
            <div class="card text-center h-100 p-3 shadow">
                <h6>{{$train->company}}</h6>
                <h4 class="mb-3">{{$train->departure_station}}</h4>
                <h4>{{$train->arrival_station}}</h4>
                <p>{{$train->departure_time}} / {{$train->arrival_time}}</p>
                <p> Train N°{{$train->train_code}}</p>
                <p>Number of Carriages° {{$train->number_of_carriages}} </p>
                <p>{{$train->in_time === 1 ? 'IN ORARIO' : 'in ritardo'}}</p>
                <p>{{$train->in_cancelled === 0 ? '' : 'CANCELLATO'}}</p>
                

            </div>
        </div>
            @endforeach
        </div>
    </div>

</section>
@endsection