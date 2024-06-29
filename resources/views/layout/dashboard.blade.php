{{-- ini untuk ngasih tau halamannya pake ini  --}}
@extends('layout.template')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=p, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ 'css/Home.css' }}">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="{{ 'css/swiper-bundle.min.css' }}">
</head>
<body>
    <section class="home">
        <!-- Swiper -->
        <div class="swiper bg-slider">
            <div class="swiper-wrapper">
                {{-- pertama --}}
                <div class="swiper-slide dark-layer">
                    <div class="slide first"></div>
                    <img src="/img/12.jpg"/>
                    <div class="text-content">
                        <h2 class="title">Autumn Season</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat hic distinctio labore est aspernatur, dolores voluptate illo minus unde, atque animi? Odio eius dolorem quas vitae aliquid a vel voluptas.</p>
                    </div>
                </div>
                
                {{-- kedua --}}
                 <div class="swiper-slide dark-layer slide second">
                    <img src="/img/11.jpg"/>
                    <div class="text-content">
                        <h2 class="title">Autumn Season</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat hic distinctio labore est aspernatur, dolores voluptate illo minus unde, atque animi? Odio eius dolorem quas vitae aliquid a vel voluptas.</p>
                    </div>
                </div>


            </div>
        </div>

        <div class="bg-slider-thumbs">
            {{-- thumbs-container tambahkan ini buat bikin ada box sizing--}}
            <div class="swiper-wrapper">
                <div class="slider">
                    <div class="slides">
                        <input type="radio" name="radio-btn" id="radio1">
                        <input type="radio" name="radio-btn" id="radio2">
                    </div>
                    <div class="navigation-manual">
                        <label for="radio1" class="manual-btn"></label>
                        <label for="radio2" class="manual-btn"></label>
                    </div>
                </div>
            </div>
        </div>
        
    </section>

</body>
</html>
<script src="{{ asset('js/swiper-bundle.min.js') }}" defer></script>
<script src="{{ asset('js/main.js') }}" defer></script>

@endsection
