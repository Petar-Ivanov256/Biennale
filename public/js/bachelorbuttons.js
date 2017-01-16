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


$(document).ready(function() {
    var $b = $('.buttons-archive');
    var $p = $('.second-p-paragraph');

    $b.click(function() {
        var i = $b.index(this);
        $p.hide().eq(i).show()
    })
});

$(".buttons-archive").one('click', function(){
    $(this).addClass("setColor");
});

var inputs = document.querySelectorAll( '.inputfile' );
Array.prototype.forEach.call( inputs, function( input )
{
    var label	 = input.nextElementSibling,
        labelVal = label.innerHTML;

    input.addEventListener( 'change', function( e )
    {
        var fileName = '';
        if( this.files && this.files.length > 1 )
            fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
        else
            fileName = e.target.value.split( '\\' ).pop();

        if( fileName )
            label.querySelector( 'span' ).innerHTML = fileName;
        else
            label.innerHTML = labelVal;
    });
});