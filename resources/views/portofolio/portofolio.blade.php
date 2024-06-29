@extends('layout.template')

@section('content')

{{-- Jumbotron --}}
 <div class="head-jumbotron">
       <h1>LET'S START WITH US</h1>
    </div>
   
<div class="gradient-background">
    <div class="head-parent">
        
                <h1 class="project-title">Our Project</h1>
            
                <div class="parents">
                <!-- card-1   -->
                    <div class="head">
                        <div class="card">
                        {{-- <div class="card">
                            <!-- <div class="card-header"> -->
                            <!-- ini untuk keluar folder ../ -->
                            <img src="../img/1.jpg" class="gambar">
                            <div class="card-action"></div>
                            <!-- </div> -->
                            <div class="card-content">
                                <h1 class="card-title">
                                <a href="#head-detail">Living Room </a>
                                </h1>
                                    <p class="card-text">2020
                                </p>
                                <div class="buttons"><a href="">Detail</a></div>
                            </div> --}}
                            <img src="/img/coba.jpg" class="gambar">
                            <div class="img-socialmedia2"></div>
                        </div>
                        
                    </div>

                    <!-- card-2 -->
                    <div class="head">
                            <div class="card">
                            <!-- <div class="card-header"> -->
                            {{-- <img src="../img/2.jpg" class="gambar"> --}}

                            <img src="/img/coba2.jpg" class="gambar">
                            {{-- <div class="card-action2"></div> --}}
                            <!-- </div> -->
                                {{-- <h1 class="card-title">
                                    <a href="#head-detail2">Living Room</a>
                                </h1> --}}
                                {{-- <p class="card-text">2020
                                </p> --}}
                            </div>    
                    </div>

                <!-- card-3 -->
                    <div class="head">
                        <div class="card">
                            <img src="/img/coba.jpg" class="gambar">
                            <div class="img-socialmedia2"></div>
                        </div>
                    </div>
                
                <!-- card-4 -->
                    <div class="head">
                        <div class="card">
                            <img src="/img/coba.jpg" class="gambar">
                            <div class="img-socialmedia2"></div>
                        </div>
                    </div>

                <!-- card-5 -->
                <div class="head">
                    <div class="card">
                        <img src="/img/coba.jpg" class="gambar">
                        <div class="img-socialmedia2"></div>
                    </div>
                </div> 
            </div>
    </div>

    <!-- Bagian Detail Project 1-->
            <img src="../img/1.jpg" class="detail-img">
            <div class="detail-text">
                <h4>Project Descriptions</h4>
                <br>
                <p>Type Of Project: </p>
                <p>Size: </p>
                <p>Location: </p>
                <p>Year: </p>
                
                <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus quas cumque, porro, perspiciatis, ab
                    magni architecto ad recusandae quisquam sequi eaque? Optio quae sint, quam corrupti laborum unde autem
                    similique</p>
            </div>
        <!-- </div> -->
        <div id="head-detail" class="big-img"></div>


    <!-- Bagian Detail Project 2 -->
            <img src="../img/2.jpg" class="detail-img2">
            <div class="detail-text2">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus quas cumque, porro, perspiciatis, ab
                    magni architecto ad recusandae quisquam sequi eaque? Optio quae sint, quam corrupti laborum unde autem
                    similique</p>
            </div>
        <!-- <div id="head-detail2" class="big-img2"></div>  -->

        {{-- Bagian S --}}
</div>

@endsection