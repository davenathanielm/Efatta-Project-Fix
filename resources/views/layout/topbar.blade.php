
{{-- <div class="topnav">
    <a class="navigasi"{{ ($title == "Contact")? 'active' : '' }}>Contact</a>
    <a class="navigasi"{{ ($title == "Article")? 'active' : '' }}>Article</a>
    <a class="navigasi"{{ ($title == "Profile")? 'active' : '' }} href="/">Profile</a>
    {{-- cara bacanya kalau title nya profile maka active kalau engga maka yaudah kosong  --}}
   


{{-- <nav class="navbar navbar-expand-lg navbar-light">
    <a class= " text navbar-brand" href="#">EFATTA</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link {{ ($title == "Home")? 'active' : '' }}" href="/">Studio</a>
            </li>
              <li class="nav-item">
                <a class="nav-link {{ ($title == "Portofolio")? 'active' : '' }}" href="/Portofolio">Portofolio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($title == "Contact")? 'active' : '' }}" href="/Contact">Contact Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($title == "About")? 'active' : '' }}" href="/About">About</a>
            </li>
             <li class="nav-item">
                <a class="nav-link {{ ($title == "Join")? 'active' : '' }}" href="/Join">Join Our Team</a>
            </li>
         
             
            <li>
                
            </li>
        </ul>
    </div>
</nav> --}}

{{-- topbar sendiri --}}
<link rel="stylesheet" href="{{ 'css/Home.css' }}">
<header>
    <div class="navigasi-bar">
        <a href="" class="logo">efatta</a>
        <div class="navigasi">
            <div class="navigasi-item">
                <i class="uil uil-times navigasi-close-button"></i>
                <a href="/"><i class="uil uil-estate nav_link"></i>Studio</a>
                <a href="/Portofolio"><i class="uil uil-lottiefiles nav_link"></i>Portofolio</a>
                <a href="/Contact"><i class="uil uil-envelope nav_link"></i>Contact</a>
                <a href="/About"><i class="uil uil-circle nav_link"></i>About</a>
                <a href="/Join"><i class="uil uil-users-alt nav_link"></i>Join</a>
            </div>
        </div>
        <i class="uil uil-apps navigasi-menu-button"></i>
    </div>
</header>

