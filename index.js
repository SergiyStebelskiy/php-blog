const lang_btn = $('.langs-wrap .lang');

lang_btn.click(function(e) {
    e.preventDefault();
    const lang = $(this).attr('name');
    const posts_wrap = $('ul.posts');
    $.ajax({
        url: `lang.php?lang=${lang}`,
        success: function (data) {
            posts_wrap.html(data);
            $('.langs-wrap .lang.active').removeClass('active');
            $(`.langs-wrap .lang[name=${lang}]`).addClass('active');
        },
        error: function (xhr, status, error) {
            console.error(error)

        }
    });
})