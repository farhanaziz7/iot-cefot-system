  setTimeout(function(){
    $.ajax({
      url: './api/ambilData.php',
      success: function(data) {
        var dataX = $.parseJSON(data);
            FusionCharts.ready(function(){
          var fusioncharts = new FusionCharts({
          type: 'line',
          renderAt: 'chart-container',
          width: '700',
          height: '400',
          dataFormat: 'json',
          dataSource: {
              "chart": {
                  "theme": "fusion",
                    "caption": "Data Pakan Ayam",
                    "subCaption": "Hari Ini",
                  "lineThickness": "2",
                  "exportEnabled" : "1",
                  "yAxisName": "Pakan Berkurang (Kilogram)",

                  },
              "data": dataX
              }
            });
              fusioncharts.render();
          });
      },
    });
  },1000);


  setTimeout(function(){
    $.ajax({
      url: './api/ambilData.php',
      success: function(data) {
        var dataX = $.parseJSON(data);
            FusionCharts.ready(function() {
      var stockPriceChart = new FusionCharts({
          id: "stockRealTimeChart",
          type: 'realtimeline',
          renderAt: 'chart-temp',
          width: '700',
          height: '400',
          dataFormat: 'json',
          dataSource: {
            "chart": {
              "caption": "Data Suhu Kandang",
              "refreshinterval": "1",
              "yaxisminvalue": "35",
              "yaxismaxvalue": "36",
            "xAxisName": "Suhu Saat Ini",
              "numdisplaysets": "10",
              "labeldisplay": "rotate",
                  "exportEnabled" : "1",
                "yAxisName": "Suhu Pada Kandang (˚C)",
              "theme": "fusion"
            },
            "categories": [{
              "category": [{
                "label": "Start"
              }]
            }],
            "dataset": [{
                "data":[{
                    "value":0
                }]
            }],
          },
          "events": {
            "initialized": function(e) {

              function updateData() {
                $.ajax({
                  url: './api/ambilDataSuhuSec.php',
                  success: function(data) {
                    var dataX = $.parseJSON(data);
                    console.log(dataX);
                    label = dataX['label'];
                    suhu = dataX['value'];

                    var chartRef = FusionCharts("stockRealTimeChart");
                      strData = "&label=" + label +
                      "&value=" +
                      suhu;
                    // Feed it to chart.
                    chartRef.feedData(strData);

                  },
                });
              }

              var myVar = setInterval(function() {
                updateData();
              }, 1000);
            }
          }
        })
        .render();
        });

      },
    });
  },1000);






