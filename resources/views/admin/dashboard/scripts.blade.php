<script>
    function registrationChart() {
        var options = {
            chart: {
                height: 400,
                type: "line",
                shadow: {
                    enabled: true,
                    color: "#000",
                    top: 18,
                    left: 7,
                    blur: 10,
                    opacity: 1
                },
                toolbar: {
                    show: false
                }
            },
            colors: ["#3dc7be", "#ffa117"],
            dataLabels: {
                enabled: true
            },
            stroke: {
                width: 5,
                curve: "smooth"
            },
            series: [
                {
                    name: "Enquiry",
                    data: @json($series),
                }
            ],
            grid: {
                borderColor: "#e7e7e7",
                row: {
                    colors: ["#f3f3f3", "transparent"],
                    opacity: 0.0
                }
            },
            xaxis: {
                tickPlacement: 'between',
                categories: @json($categories),
                labels: {
                    style: {
                        colors: "#9aa0ac"
                    }
                }
            },
            yaxis: {
                title: {
                    text: "Enquiry Count"
                },
                labels: {
                    style: {
                        color: "#9aa0ac"
                    }
                },
                min: 0,
            },
            legend: {
                position: "top",
                horizontalAlign: "right",
                floating: true,
                offsetY: -25,
                offsetX: -5
            }
        };

        var chart = new ApexCharts(document.querySelector("#registration-chart"), options);
        chart.render();
    }

    @can('admin')
        registrationChart();
    @endcan
</script>
