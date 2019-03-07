$(document).ready(function () {
    $(document).on('click','.menuBars',function () {
        $('.header .menuContain').slideToggle();
        $('.header .menuBars .fas').toggleClass('fa-bars rotate fa-align-center');
    })
    $(document).on('click','.img-search',function () {
        $('.input-Search').fadeToggle();
        $(this).css('transform','rotate(360deg)');
    })


    $(document).on('mouseup',function (e) {
        //close search input
        var searchInput = $(".search-box");
        if (!searchInput.is(e.target) && searchInput.has(e.target).length === 0){
            $('.input-Search').fadeOut();
        }
        // login fade if other click
        var login = $(".login-page .form , .profile-box");
        if (!login.is(e.target) && login.has(e.target).length === 0){
            $('.login-page').removeClass('d-flex');
        }

        //close menu bar
        var menu = $('.header .menuContain')
        var menuOut = $('.header .menuBars')
        if (!menu.is(e.target) && menu.has(e.target).length === 0 && !menuOut.is(e.target) && menuOut.has(e.target).length === 0){
            $('.menuContain').slideUp();
            $('.header .menuBars .fas').addClass('fa-bars rotate').removeClass('fa-align-center')
        }
    })
    // login & register
    $(document).on('click','.profile-box',function () {
        $('.login-page').toggleClass('d-flex');
    })
    // create account
    $(document).on('click','.createAccount',function () {
        setTimeout(
            function()
            {
                $('.register-form').slideDown(700);
            }, 700);
        $('.login-form').slideUp(700);
    })
    $(document).on('click','.goToLogin',function () {
        setTimeout(
            function () {
                $('.login-form').slideDown(700);
            },700);
        $('.register-form').slideUp(700);
    })
})