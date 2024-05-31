@props(['report'])

@php
    $data = $report->data;
    $x_label = $report->{'x-axis'}->name;
    $x_type = $report->{'x-axis'}->type;
    $y_label = $report->{'y-axis'}->name;
    $y_type = $report->{'y-axis'}->type;
@endphp

<div class="my-8">
    <h2 class="text-center font-bold text-xl">{{ucfirst($report->name)}}</h2>

    <div class="p-5" x-data='{
        data: @json($data),
        xLabel: @json($x_label),
        yLabel: @json($y_label),
        init() {

            const makeUTCDate = (hour, minute) => {
                let dateObj = new Date();
                dateObj.setHours(8);
                dateObj.setMinutes(30);
                return dateObj.getTime();x
            };

           let seriesData = this.data.map(
                item => [makeUTCDate(item[0][0], item[0][1]), item[1]]);

            var options = {
              series: [{
                  name: "Student",
                  data: [
                      [makeUTCDate(8, 0), 100],
                      [makeUTCDate(8, 30), 90],
                      [makeUTCDate(0, 0), 80],
                      [makeUTCDate(9, 30), -86]
                  ]
              }],
              chart: {
                  height: 350,
                  type: "scatter",
                  zoom: {
                      enabled: true,
                      type: "xy"
                  },
                  toolbar: {
                      tools: {
                          download: true,
                          selection: false,
                          zoom: false,
                          zoomin: false,
                          zoomout: false,
                          pan: false,
                          reset: false
                      }
                  },
              },
              xaxis: {
                  type: "datetime",
                  title: {
                      text: this.xLabel,
                  },
                 labels: {
                    formatter: function(value) {
                        let dateObj = new Date(value);
                        let hours = dateObj.getHours();
                        let minutes = dateObj.getMinutes();
                        return (hours.toString().padStart(2, "0") + ":" + minutes.toString().padStart(2, "0"));
                    }
                 },
              },
              yaxis: {
                  tickAmount: 8,
                  title: {
                      text: this.yLabel,
                  },
              }
            };

            var chart = new ApexCharts(document.querySelector("#scatter-chart"), options);
            chart.render();
        }
    }'>
    </div>

    <div id="scatter-chart"></div>
</div>
