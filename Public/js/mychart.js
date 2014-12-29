/**
 * Created by Jigsaw on 2014/12/20.
 */
var htmlData = [
    {
        value: 80,
        color:"#F7464A",
        highlight: "#FF5A5E",
        label: "HTML"
    },
    {
        value: 70,
        color: "#46bfbd",
        highlight: "#5ad3d1",
        label: "CSS"
    },
    {
        value: 48,
        color:"#ffa619",
        highlight: "#ff9820",
        label: "Bootstrap"
    },
] // pie chart data

var jsData = [
    {
        value: 75,
        color:"#ffa619",
        highlight: "#ff9820",
        label: "js"
    },
    {
        value: 90,
        color: "#46bfbd",
        highlight: "#5ad3d1",
        label: "jQuery"
    }
] // pie chart data

var phpData = [
    {
        value: 88,
        color:"#ffa619",
        highlight: "#ff9820",
        label: "php"
    },
    {
        value: 80,
        color:"#F7464A",
        highlight: "#FF5A5E",
        label: "ThinkPHP"
    },
] // pie chart data

var linData = [
    {
        value: 60,
        color:"#F7464A",
        highlight: "#FF5A5E",
        label: "ThinkPHP"
    },
    {
        value: 75,
        color: "#46bfbd",
        highlight: "#5ad3d1",
        label: "C"
    },
    {
        value: 73,
        color:"#ffa619",
        highlight: "#ff9820",
        label: "C Standard Lib"
    },
] // pie chart data

var pyData = [
    {
        value: 70,
        color:"#F7464A",
        highlight: "#FF5A5E",
        label: "Python"
    },
    {
        value: 40,
        color: "#46bfbd",
        highlight: "#5ad3d1",
        label: "Django"
    },
    {
        value: 48,
        color:"#ffa619",
        highlight: "#ff9820",
        label: "Flask"
    },
] // pie chart data

var nodeData = [
    {
        value: 70,
        color:"#ffa619",
        highlight: "#ff9820",
        label: "node.js"
    },
    {
        value: 50,
        color: "#46bfbd",
        highlight: "#5ad3d1",
        label: "Express"
    }
] // pie chart data

// radar chart
var radarChartData = {
    labels: ["Sublime", "phpStrom", "Gvim", "VS", "Eclipse", "Zend Studio", "其他太多了"],
    datasets: [
        {
            label: "工具",
            fillColor: "rgba(151,187,205,0.2)",
            strokeColor: "rgba(151,187,205,1)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            data: [99, 80, 90, 95, 60, 60, 100]
        },

    ]
}; // radar chart

// polar area chart
var polarAreaChartData = [
    {
        value: 300,
        color:"#F7464A",
        highlight: "#FF5A5E",
        label: "编程"
    },
    {
        value: 260,
        color: "#46BFBD",
        highlight: "#5AD3D1",
        label: "吉他音乐"
    },
    {
        value: 200,
        color: "#FDB45C",
        highlight: "#FFC870",
        label: "运动"
    },
    {
        value: 180,
        color: "#949FB1",
        highlight: "#A8B3C5",
        label: "电影"
    },


];

window.onload = function(){
    var ctx_pie_hc = document.getElementById("templatemo-pie-chart").getContext("2d");
    var ctx_doughnut_php = document.getElementById("templatemo-doughnut-chart").getContext("2d");
    var ctx_doughnut_js = document.getElementById("doughnut-js").getContext("2d");
    var ctx_doughnut_tk = document.getElementById("doughnut-tk").getContext("2d");
    var ctx_pie_py = document.getElementById("pie-chart").getContext("2d");
    var ctx_doughnut_node = document.getElementById("doughnut-node").getContext("2d");
    var ctxRadar = document.getElementById("radar-chart").getContext("2d");
    var ctxPolar = document.getElementById("polar-chart").getContext("2d");


    window.myPieChart = new Chart(ctx_pie_hc).Pie(htmlData,{
        responsive: true
    });
    window.myDoughnutChart = new Chart(ctx_doughnut_js).Doughnut(jsData,{
        responsive: true
    });
    window.myDoughnutChart = new Chart(ctx_doughnut_php).Doughnut(phpData,{
        responsive: true
    });
    window.myDoughnutChart = new Chart(ctx_doughnut_tk).Doughnut(linData,{
        responsive: true
    });
    window.myPieChart = new Chart(ctx_pie_py).Pie(pyData,{
        responsive: true
    });
    window.myDoughnutChart = new Chart(ctx_doughnut_node).Doughnut(nodeData,{
        responsive: true
    });
    window.myRadarChart = new Chart(ctxRadar).Radar(radarChartData, {
        responsive: true
    });
    window.myPolarAreaChart = new Chart(ctxPolar).PolarArea(polarAreaChartData, {
        responsive: true
    });
}