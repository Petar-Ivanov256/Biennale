/**
 * Created by Petar on 13/05/2017.
 */

function getDetailsInner(id, locale,url) {
    //let url = '{{ url('/events/getDetails') }}';
    url += '/' + id;
    $('#inner-gallery').empty();
    if(locale == 'en'){
        $.ajax({
            method: "GET",
            url: url
        }).done(function(event) {
//            console.log(event);
//            console.log(event.event.start);
            $('#event-category').text(event.category.title_en);
            $('#details-date').text(event.event.start);
            $('#details-time').text(event.event.start + ' - ' + event.event.end);
            $('#details-location').html(
                //http://maps.google.com/maps?&z=10&q=36.26577+-92.54324&ll=36.26577+-92.54324
                '<a href="http://maps.google.com/maps?&z=15&q=' + event.event.latitude +'+' + event.event.longitude + 
                '&ll=' + event.event.latitude +'+' + event.event.longitude + '" target="_blank">' + event.event.place_en + '</a>');
            $('#details-artist').text(event.event.participants_en);
            $('#details-entrance').text(event.event.entrance_en);
            $('#details-img').attr('src', event.event.photo1);
            $('#img-ref').attr('href', event.event.photo1);
            if(event.event.photo2 != null){
                if (!$('#img2').length){
                    $('#inner-gallery').append('<a class="gallery" id="photo2" href=""><img class="gal-img" id="img2" src=""/></a>');
                    $('#photo2').attr('href', event.event.photo2);
                    $('#img2').attr('src', event.event.photo2);
                }
            }
            if(event.event.photo3 != null){
                if (!$('#img3').length) {
                    $('#inner-gallery').append('<a class="gallery" id="photo3" href=""><img class="gal-img" id="img3" src=""/></a>');
                    $('#photo3').attr('href', event.event.photo3);
                    $('#img3').attr('src', event.event.photo3);
                }
            }
            if(event.event.photo4 != null){
                if (!$('#img4').length) {
                    $('#inner-gallery').append('<a class="gallery" id="photo4" href=""><img class="gal-img" id="img4" src=""/></a>');
                    $('#photo4').attr('href', event.event.photo4);
                    $('#img4').attr('src', event.event.photo4);
                }
            }
            if(event.event.photo5 != null){
                if (!$('#img5').length) {
                    $('#inner-gallery').append('<a class="gallery" id="photo5" href=""><img class="gal-img" id="img5" src=""/></a>');
                    $('#photo5').attr('href', event.event.photo5);
                    $('#img5').attr('src', event.event.photo5);
                }
            }
            if(event.event.photo6 != null){
                if (!$('#img6').length) {
                    $('#inner-gallery').append('<a class="gallery" id="photo6" href=""><img class="gal-img" id="img6" src=""/></a>');
                    $('#photo6').attr('href', event.event.photo6);
                    $('#img6').attr('src', event.event.photo6);
                }
            }
            if(event.event.photo7 != null){
                if (!$('#img7').length) {
                    $('#inner-gallery').append('<a class="gallery" id="photo7" href=""><img class="gal-img" id="img7" src=""/></a>');
                    $('#photo7').attr('href', event.event.photo7);
                    $('#img7').attr('src', event.event.photo7);
                }
            }
            if(event.event.photo8 != null){
                if (!$('#img8').length) {
                    $('#inner-gallery').append('<a class="gallery" id="photo8" href=""><img class="gal-img" id="img8" src=""/></a>');
                    $('#photo8').attr('href', event.event.photo8);
                    $('#img8').attr('src', event.event.photo8);
                }
            }
            if(event.event.photo9 != null){
                if (!$('#img9').length) {
                    $('#inner-gallery').append('<a class="gallery" id="photo9" href=""><img class="gal-img" id="img9" src=""/></a>');
                    $('#photo9').attr('href', event.event.photo9);
                    $('#img9').attr('src', event.event.photo9);
                }
            }
            if(event.event.photo10 != null){
                if (!$('#img10').length) {
                    $('#inner-gallery').append('<a class="gallery" id="photo10" href=""><img class="gal-img" id="img10" src=""/></a>');
                    $('#photo10').attr('href', event.event.photo10);
                    $('#img10').attr('src', event.event.photo10);
                }
            }
            $('#event-description').html(event.event.description_en);
        });
    }
    else{
        $.ajax({
            method: "GET",
            url: url
        }).done(function(event) {
//            console.log(event);
//            console.log(event.event.start);
            $('#event-category').text(event.category.title);
            $('#details-date').text(event.event.start);
            $('#details-time').text(event.event.start + ' - ' + event.event.end);
            $('#details-location').html(
                '<a href="http://maps.google.com/maps/maps?&z=15&q=' + event.event.latitude +'+' + event.event.longitude + 
                '&ll=' + event.event.latitude +'+' + event.event.longitude + '" target="_blank">' + event.event.place + '</a>');
            $('#details-artist').text(event.event.participants);
            $('#details-entrance').text(event.event.entrance);
            $('#details-img').attr('src', event.event.photo1);
            $('#img-ref').attr('href', event.event.photo1);
            if(event.event.photo2 != null){
                if (!$('#img2').length){
                    $('#inner-gallery').append('<a class="gallery" id="photo2" href=""><img class="gal-img" id="img2" src=""/></a>');
                    $('#photo2').attr('href', event.event.photo2);
                    $('#img2').attr('src', event.event.photo2);
                }
            }
            if(event.event.photo3 != null){
                if (!$('#img3').length) {
                    $('#inner-gallery').append('<a class="gallery" id="photo3" href=""><img class="gal-img" id="img3" src=""/></a>');
                    $('#photo3').attr('href', event.event.photo3);
                    $('#img3').attr('src', event.event.photo3);
                }
            }
            if(event.event.photo4 != null){
                if (!$('#img4').length) {
                    $('#inner-gallery').append('<a class="gallery" id="photo4" href=""><img class="gal-img" id="img4" src=""/></a>');
                    $('#photo4').attr('href', event.event.photo4);
                    $('#img4').attr('src', event.event.photo4);
                }
            }
            if(event.event.photo5 != null){
                if (!$('#img5').length) {
                    $('#inner-gallery').append('<a class="gallery" id="photo5" href=""><img class="gal-img" id="img5" src=""/></a>');
                    $('#photo5').attr('href', event.event.photo5);
                    $('#img5').attr('src', event.event.photo5);
                }
            }
            if(event.event.photo6 != null){
                if (!$('#img6').length) {
                    $('#inner-gallery').append('<a class="gallery" id="photo6" href=""><img class="gal-img" id="img6" src=""/></a>');
                    $('#photo6').attr('href', event.event.photo6);
                    $('#img6').attr('src', event.event.photo6);
                }
            }
            if(event.event.photo7 != null){
                if (!$('#img7').length) {
                    $('#inner-gallery').append('<a class="gallery" id="photo7" href=""><img class="gal-img" id="img7" src=""/></a>');
                    $('#photo7').attr('href', event.event.photo7);
                    $('#img7').attr('src', event.event.photo7);
                }
            }
            if(event.event.photo8 != null){
                if (!$('#img8').length) {
                    $('#inner-gallery').append('<a class="gallery" id="photo8" href=""><img class="gal-img" id="img8" src=""/></a>');
                    $('#photo8').attr('href', event.event.photo8);
                    $('#img8').attr('src', event.event.photo8);
                }
            }
            if(event.event.photo9 != null){
                if (!$('#img9').length) {
                    $('#inner-gallery').append('<a class="gallery" id="photo9" href=""><img class="gal-img" id="img9" src=""/></a>');
                    $('#photo9').attr('href', event.event.photo9);
                    $('#img9').attr('src', event.event.photo9);
                }
            }
            if(event.event.photo10 != null){
                if (!$('#img10').length) {
                    $('#inner-gallery').append('<a class="gallery" id="photo10" href=""><img class="gal-img" id="img10" src=""/></a>');
                    $('#photo10').attr('href', event.event.photo10);
                    $('#img10').attr('src', event.event.photo10);
                }
            }
            $('#event-description').html(event.event.description);
        });
    }
}