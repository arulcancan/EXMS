
am4core.useTheme(am4themes_animated);

var chart = am4core.create("chartdiv", am4charts.PieChart3D);


chart.legend = new am4charts.Legend();

chart.data = [{
    "abc": "Lithuania",
    "xyz": 501.9
}, {
    "abc": "Czech Republic",
    "xyz": 301.9
}, {
    "abc": "Ireland",
    "xyz": 201.1
}, {
    "abc": "Germany",
    "xyz": 165.8
}, {
    "abc": "Australia",
    "xyz": 139.9
}, {
    "abc": "Austria",
    "xyz": 128.3
}, {
    "abc": "UK",
    "xyz": 99
}, {
    "abc": "Belgium",
    "xyz": 60
}, {
    "abc": "The Netherlands",
    "xyz": 50

}];



chart.innerRadius = am4core.percent(40);

var series = chart.series.push(new am4charts.PieSeries3D());
series.dataFields.value = "xyz";
series.dataFields.category = "abc";