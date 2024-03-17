@extends('layouts.front')
@section('content')
<body>
  <h1 class="text-3xl font-bold mb-8 text-white mt-6 justify-center flex">Meet Our Trainers</h1>
  <div class="swiper mySwiper mt-6" style="height: 500px">
    <div class="swiper-wrapper">
        @foreach($trainers as $trainer)
            <div class="swiper-slide">
                <img src="{{asset('trainersImages/'.$trainer->image)}}" alt="" class="image-trainer mx-auto">
                <h2 class="text-xl font-semibold text-gray-600 mt-4">{{$trainer->name}}</h2>
                <p class="text-gray-600">Specialty: {{$trainer->speciality}}</p>
            </div>
        @endforeach
    </div>
    <div class="swiper-pagination"></div>
  </div>


  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 30,
      freeMode: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  </script>
</body>

@endsection