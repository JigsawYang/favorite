
    
$(document).ready( function() {        

	// sidebar menu click
	$('.templatemo-sidebar-menu li.sub a').click(function(){
		if($(this).parent().hasClass('open')) {
			$(this).parent().removeClass('open');
		} else {
			$(this).parent().addClass('open');
		}
	});  // sidebar menu click

}); // document.ready
var line_cate = [];
var line_num = [];
for(var val in web_click) {
    line_cate.push(web_click[val]['title']);
    line_num.push(parseInt(web_click[val]['click']));

}

var lineChartData = {
    labels : line_cate,
    datasets : [

        {
            label: "My Second dataset",
            fillColor : "rgba(151,187,205,0.2)",
            strokeColor : "rgba(151,187,205,1)",
            pointColor : "rgba(151,187,205,1)",
            pointStrokeColor : "#fff",
            pointHighlightFill : "#fff",
            pointHighlightStroke : "rgba(151,187,205,1)",
            data: line_num
        }
    ]

} // lineChartData


var pie = big_cate.map(function(arr){
    var ran_color = [['#F7464A', '#FF5A5E'], ["#46BFBD", "#5AD3D1"], ["#FDB45C", "#FFC870"], ["#00CC66", "#00CC99"], ["#00FFCC"
        , "#00FFFF"], ['#FFFF00', "#FFFF33"], ['#0099FF', '#00CCFF']];
    var n = Math.floor(Math.random() * ran_color.length);
    return {
        value: parseInt(arr['sort']),
        color:ran_color[n][0],
        highlight: ran_color[n][1],
        label: arr['name']
    }
});


// radar chart

var pie_cate = [];
var pie_num = [];
for(var val in big_cate) {
    pie_cate.push(big_cate[val]['name']);
    pie_num.push(parseInt(big_cate[val]['sort']));

}

var radarData = {
    labels: pie_cate,
    datasets: [
        {
            label: "PV",
            fillColor: "rgba(151,187,205,0.2)",
            strokeColor: "rgba(151,187,205,1)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            data: pie_num,
        },

    ]
}; // radar chart

window.onload = function(){
    var ctx_line = document.getElementById("line-chart").getContext("2d");
    var ctx_bar = document.getElementById("bar-chart").getContext("2d");
    var ctx_pie = document.getElementById("pie-cate").getContext("2d");
    var ctx_doughnut = document.getElementById("doughnut-cate").getContext("2d");
    var ctxRadar = document.getElementById("radar-chart").getContext("2d");

    window.myLine = new Chart(ctx_line).Line(lineChartData, {
        responsive: true
    });
    window.myBar = new Chart(ctx_bar).Bar(lineChartData, {
        responsive: true
    });
    window.myPieChart = new Chart(ctx_pie).Pie(pie,{
        responsive: true
    });
    window.myDoughnutChart = new Chart(ctx_doughnut).Doughnut(pie,{
        responsive: true
    });
    var myRadarChart = new Chart(ctxRadar).Radar(radarData, {
        responsive: true
    });

}