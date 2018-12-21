$(document).ready(function () {
    $('.scrollspy').scrollSpy({
        scrollOffset: 0
    });

    // this is for blog post content
    let $grid = $('.post-content').isotope({
        itemSelector: '.s',
        masonry: {
            columnWidth: '.s'
        }
    });
    // filter items on button click
    $('.my_portfolio').on('click', 'button', function () {
        let filterValue = $(this).attr('data-filter');
        $grid.isotope({
            filter: filterValue
        });
    });

    $('.my_portfolio').on('click', 'button', function () {
        $(this).siblings().css('backgroundColor', "rgba(95, 39, 205, 0.7)");
        $(this).siblings().css('boxShadow', "0 2px 20px rgba(95, 39, 205, 0)");
        $(this).css('backgroundColor', "#5f27cd");
        $(this).css('boxShadow', "0 2px 20px rgba(95, 39, 205, 0.7)");
    });
    var skil_bar = document.querySelectorAll('.sk');
    for(let i = 1; i <= skil_bar.length; i++){
        console.log(i);
        $("#bar"+i).barfiller({
            barColor: '#5f27cd', tooltip: true, duration: 1000, animateOnResize: true, symbol: "%"
        });
    }

});