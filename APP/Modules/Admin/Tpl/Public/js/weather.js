/**
 * Created by Jigsaw on 2014/12/17.
 */
$(function() {

    //var b = $('#wcode').find('option:selected').text();
    $('#wcode').change(function(){
        var a = $('#wcode').val();
        var url = weatherUrl;
        //console.log(a);
        $.post(url, {city : a}, function(data){
            $('#iweather a').text(data.data['weatherinfo']['city']);
            $('#iweather a').append("<span class='badge'>" + data.data['weatherinfo']['weather'] + "&nbsp;" + data.data['weatherinfo']['temp1'] + "--" + data.data['weatherinfo']['temp2'] + "</span>")
        }, 'json');
    });
})