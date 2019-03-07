$(document).ready(function () {

    $(document).on('click','.searchBar--select',function () {
        $(this).toggleClass('border-rounded-right-0')
    })
    $(document).on('click', function(event) {
        if (!$(event.target).closest('.searchBar--select').length) {
            $('.searchBar--select').removeClass('border-rounded-right-0');
        }
        if(!$(event.target).closest('.filter-box').length && !$(event.target).closest('.btn-filter-show').length){
            $('.filter-box').slideUp();
        }
    });
    $(document).on('click','.btn-filter-show',function () {
        $('.filter-box').slideToggle();
    })

    $(window).on('resize',function () {
        if($(window).width() >800){
            $('.filter-box').slideUp(1);
        }
    })
})