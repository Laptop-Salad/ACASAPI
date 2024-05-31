@props(['report'])

@php
    $x_categories = $report->{'x-axis'}->categories;
    $series = $report->{'data'};
@endphp


<div class="my-8">
    <h2 class="text-center font-bold text-xl">{{ucfirst($report->name)}}</h2>

    <div class="p-5" x-data='{
        xCategories: @json($x_categories),
        seriesData: @json($series),
        init() {
            var options = {
              series: this.seriesData,
            chart: {
                type: "bar",
                height: 350,
                stacked: true,
            },
            plotOptions: {
                bar: {
                    horizontal: true,
                    dataLabels: {
                        total: {
                        enabled: true,
                        offsetX: 0,
                        }
                    }
                },
            },
            stroke: {
                width: 1,
                colors: ["#fff"]
            },
            xaxis: {
                categories: this.xCategories
            },
            fill: {
                opacity: 1
            },
            legend: {
                position: "top",
                horizontalAlign: "left",
                offsetX: 40
            }
            };

            var chart = new ApexCharts(document.querySelector("#stacked-bar"), options);
            chart.render();
        }
    }'>
    </div>

    <div id="stacked-bar"></div>
</div>
