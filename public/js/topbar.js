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

        
        // $('.project-title').addClass('update');
        
