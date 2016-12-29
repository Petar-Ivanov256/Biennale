$(document).ready(function() {
    var $b = $('.learn-more');
    var $p = $('.second-p-paragraph');

    $b.click(function() {
        var i = $b.index(this);
        $p.hide().eq(i).show()
    })
});
$(".learn-more").one('click', function(){
    $(this).addClass("setColor");
});
