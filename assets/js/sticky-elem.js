$(document).scroll(function() {
    let value = $(document).scrollTop();
    if (value >= 188) {
        $('.nv-desktop').addClass('active');
        $('.nv-desktop .hd-sep img').attr('src', './assets/ico/bullet-black.svg');
    } else {
        $('.nv-desktop').removeClass('active');
        $('.nv-desktop .hd-sep img').attr('src', './assets/ico/bullet.svg');
    }
})