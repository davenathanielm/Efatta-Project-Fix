@extends('layout.template')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ 'css/Portofolio.css' }}">
</head>
<body>
    
    <div class="carousel">
        {{-- list item dark-layer --}}
        <div class="list">
            <div class="item dark-layer">
                <img class="image1" src="/img/12.jpg" alt="">
                
                <div class="content">
                    <div class="author">Dav</div>
                    <div class="title">Gambar</div>
                    <div class="topic">Ada aja lah</div>
                    <div class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam minus ipsam culpa, porro assumenda recusandae iusto quos perspiciatis aperiam cumque, rerum accusamus vero laborum tenetur consectetur nisi sunt explicabo repudiandae? </div>
                </div>   
            </div>

            <div class="item dark-layer">
                <img class="image1" src="/img/8.jpg" alt="">

                <div class="content">
                    <div class="author">Steven</div>
                    <div class="title">Gambar</div>
                    <div class="topic">Ada aja la</div>
                    <div class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. A natus ex reiciendis cumque nostrum aperiam temporibus beatae expedita error consectetur, officia velit non inventore praesentium perferendis at eveniet soluta culpa! </div>
                </div>
            </div>

            <div class="item dark-layer">
                <img class="image1" src="/img/13.jpg" alt="">

                <div class="content">
                    <div class="author">Joe</div>
                    <div class="title">Gambar</div>
                    <div class="topic">Ada ajalah</div>
                    <div class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. A natus ex reiciendis cumque nostrum aperiam temporibus beatae expedita error consectetur, officia velit non inventore praesentium perferendis at eveniet soluta culpa! </div>
                </div>
            </div>
        </div>
        {{-- thumbnail --}} 
        <div class="thumbnail">
           
             <div class="item">
                <img src="/img/8.jpg" alt="">
                <div class="content">
                    <div class="title">
                        Name Slider
                    </div>
                    <div class="description">
                        Description
                    </div>
                </div>
            </div>

             <div class="item">
                <img src="/img/13.jpg" alt="">
                <div class="content">
                    <div class="title">
                        Name Slider
                    </div>
                    <div class="description">
                        Description
                    </div>
                </div>
            </div>

             <div class="item ">
                <img src="/img/12.jpg" alt="">
                <div class="content">
                    <div class="title">
                        Name Slider
                    </div>
                    <div class="description">
                        Description
                    </div>
                </div>
            </div>

        </div>

        <div class="arrows">
            <button id="prev" class="left"><</button>
            <button id="next" class="right">></button>
        </div>
        <div class="time"></div>
    </div>

</body>
</html>
<script src="{{ asset('js/portofolio.js') }}" defer></script>

@endsection