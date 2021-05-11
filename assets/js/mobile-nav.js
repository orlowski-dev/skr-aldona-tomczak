$('#mb-menu-btn').on('click', function() {
    if (!$('.mb-h-nav').is(':visible')) {
        $('.mb-h-nav').css('display', 'flex')
        $('.mb-h-nav').css('animation', 'slideIn .3s')
        $('.mb-h-nav div').css('animation', 'fadeIn .2s')
    }
})
$('#close-mb-h').on('click', function() {
    console.log('clikc')
    $('.mb-h-nav').css('animation', 'menuSlideUp .3s')
    $('.mb-h-nav div').css('animation', 'fadeOut .2s')
    setTimeout(() => {
        $('.mb-h-nav').css('display', 'none')
    }, 299);
})