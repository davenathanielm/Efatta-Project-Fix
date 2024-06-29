
$(window).scroll(function() 
{
    var WScroll = $(this).scrollTop();

    //untuk card

    // untuk hitung sudah scroll brapa pixels 
    // if( WScroll > 1000 )
    // {
    //     console.log('ok');
    // }

    // ini untuk cari otomatis
    if( WScroll > $('.parents').offset().top - 450)
        {
            // console.log('ok');

            // jadi ini cara bacanya jquery carikan kelas parents nah setiap kelas yang ada di dalam parents itu dikasi fungsi yang berbeda dengan menggunakan i
            // lalu set Timeout untuk memberikan delay tiap fungsi dan eq untuk memberikan klass muncul sesifik waktu indeks tersebut
            // kalau misal nya gaa pakai i+1 maka gambar pertama akan muncul duluan 
            $('.card').each(function(i)
            {
                setTimeout(function()
                {
                    // $('.parents').eq(i).addClass('muncul');
                    // console.log('ok');
                     $('.card').eq(i).addClass('muncul');
                },100 *(i));
            });
            
            // cara bacanya jquery carikan kelas parents di view di ketinggian tertentu lalu tambahkan kelas muncul
            // $('.parents').addClass('muncul');
        }
    
    if(WScroll > $('.project-title').offset().top - 500)
    {
        // console.log('ok');
        $('.project-title').addClass('update');
        
    }
});

// Javascript untuk detail-img 1
ScrollReveal({
    reset: true,
    duration : 1000,
    delay :500,
    distance : '60px'
    });
ScrollReveal().reveal('.detail-img',{origin:'left'});
// Javascript untuk detail 1 img selesai

// Javascript untuk detail-text 1
ScrollReveal({
    reset: true,
    duration : 1000,
    delay :500,
    distance : '60px'
    });
ScrollReveal().reveal('.detail-text',{origin:'right'});
// Javascript untuk detail-text 1 selesai

// Javascript untuk detail-img 2
ScrollReveal({
    reset: true,
    duration : 1000,
    delay :500,
    distance : '60px'
    });
ScrollReveal().reveal('.detail-img2',{origin:'right'});
// Javascript untuk detail img 2 selesai

// Javascript untuk detail-text 2
ScrollReveal({
    reset: true,
    duration : 1000,
    delay :500,
    distance : '60px'
    });
ScrollReveal().reveal('.detail-text2',{origin:'left'});
// Javascript untuk detail text 2 selesai

// Javascript untuk menu topbar
    // Responsive Navigation Menu Toggle
    const tombolMenu = document.querySelector(".navigasi-menu-button");
    const tombolTutup = document.querySelector(".navigasi-close-button");
    const navigasi = document.querySelector(".navigasi");

    tombolMenu.addEventListener("click",()=>
    {
      navigasi.classList.add("active");
    });

    tombolTutup.addEventListener("click",()=>
    {
      navigasi.classList.remove("active");
    });


    // untuk active navbar
    const navLinkEls = document.querySelector(".nav-link")``;

        