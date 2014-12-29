/**
 * Created by Jigsaw on 2014/12/16.
 */

$(function() {
    $(".addActive li:nth-child(1)").attr('class', 'active');

    $('.addActive a').click(function(){
        var url = $(this).attr('href');

        $.post(url, '', function(data) {
            //console.log(data);
            if(data.status) {
                var str = '<div class="">';
                str += '<div class="row tab-feature">';
                $(data.data).each(function (i, val) {
                    console.log(val);
                    str += '<div class="col-md-4">';
                    str += '<div class="list-group">';
                    str += '<a href="' + tabURL + "/id/" + val.id + '" class="list-group-item" style="text-align: center">' + val.name + '&nbsp;&nbsp;&nbsp;&nbsp;点击查看详情</a>';
                    str += '</div></div>';
                });
                str += '</div></div>';
                var tab = $('.tab-content').text();
                if (tab) {
                    $('.tab-content').text("");
                    $('.tab-content').append(str);
                } else {
                    $('.tab-content').append(str);
                }
            }
        }, 'json');
        return false;
    });

    //search
    var input_width = $('#search-term').innerWidth();
    function keysearch() {
        var keyword = $('#search-term').val();
        $.ajax({
            type: "POST",
            contentType: "application/json",
            url: searchURL,
            data: {keyword : keyword},
            dataType: "json",
            success: function (msg) {
                console.log(msg);

                $("#search-term").autocomplete(msg.data, {
                    width: input_width + 2,
                    formatItem: function(row, i, max){
                        return "<table><tr><td align='left'>" + row.title + "</td></tr></table>";
                    },
                    formatMatch: function(row, i, max){
                        return row.title;
                    },
                    formatResult: function(row) {
                        return row.title;
                    }
                });
            }
        });
    }

    $('#search-term').keyup(keysearch);
})