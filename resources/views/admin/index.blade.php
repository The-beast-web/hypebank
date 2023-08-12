@extends('admin.layout.master')

@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Admin Dashboard</h3>
                                <div class="nk-block-des text-soft">
                                    <p>Welcome to DashLite Dashboard Template.</p>
                                </div>
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="row g-gs">
                            <div class="col-xxl-3 col-sm-6">
                                <div class="card">
                                    <div class="nk-ecwg nk-ecwg6">
                                        <div class="card-inner">
                                            <div class="card-title-group">
                                                <div class="card-title">
                                                    <h6 class="title">Total Service Revenue</h6>
                                                </div>
                                            </div>
                                            <div class="data">
                                                <div class="data-group">
                                                    <div class="amount"><em class="ni ni-sign-kobo"></em>{{ $revenue->sum('amount') }}</div>
                                                </div>
                                            </div>
                                        </div><!-- .card-inner -->
                                    </div><!-- .nk-ecwg -->
                                </div><!-- .card -->
                            </div><!-- .col -->
                            <div class="col-xxl-3 col-sm-6">
                                <div class="card">
                                    <div class="nk-ecwg nk-ecwg6">
                                        <div class="card-inner">
                                            <div class="card-title-group">
                                                <div class="card-title">
                                                    <h6 class="title">Total Holdings</h6>
                                                </div>
                                            </div>
                                            <div class="data">
                                                <div class="data-group">
                                                    <div class="amount"><em class="ni ni-sign-kobo"></em>{{ number_format($holding->sum('amount')) }}</div>
                                                </div>
                                            </div>
                                        </div><!-- .card-inner -->
                                    </div><!-- .nk-ecwg -->
                                </div><!-- .card -->
                            </div><!-- .col -->
                            <div class="col-xxl-3 col-sm-6">    
                                <div class="card">
                                    <div class="nk-ecwg nk-ecwg6">
                                        <div class="card-inner">
                                            <div class="card-title-group">
                                                <div class="card-title">
                                                    <h6 class="title">Customers</h6>
                                                </div>
                                            </div>
                                            <div class="data">
                                                <div class="data-group">
                                                    <div class="amount">{{ $user->count() }}</div>
                                                </div>
                                            </div>
                                        </div><!-- .card-inner -->
                                    </div><!-- .nk-ecwg -->
                                </div><!-- .card -->
                            </div><!-- .col -->
                            <div class="col-xxl-3 col-sm-6">
                                <div class="card">
                                    <div class="nk-ecwg nk-ecwg6">
                                        <div class="card-inner">
                                            <div class="card-title-group">
                                                <div class="card-title">
                                                    <h6 class="title">Loan Revenue</h6>
                                                </div>
                                            </div>
                                            <div class="data">
                                                <div class="data-group">
                                                    <div class="amount">23,485</div>
                                                </div>
                                            </div>
                                        </div><!-- .card-inner -->
                                    </div><!-- .nk-ecwg -->
                                </div><!-- .card -->
                            </div><!-- .col -->
                            <div class="col-xxl-6 col-md-6">
                                <div class="card card-full">
                                    <div class="nk-ecwg nk-ecwg8 h-100">
                                        <div class="card-inner">
                                            <div class="card-title-group mb-3">
                                                <div class="card-title">
                                                    <h6 class="title">Customer Statistics</h6>
                                                </div>
                                            </div>
                                            <div class="nk-ecwg8-ck">
                                                <canvas class="my-chart" id="salesStatistics"></canvas>
                                            </div>
                                            <div class="chart-label-group ps-5">
                                                <div class="chart-label">{{ now()->startOfYear()->format('F j, Y') }}</div>
                                                <div class="chart-label">{{ now()->endOfYear()->format('F j, Y') }}</div>
                                            </div>
                                        </div><!-- .card-inner -->
                                    </div>
                                </div><!-- .card -->
                            </div><!-- .col -->
                            <div class="col-xxl-6 col-md-6">
                                <div class="card card-full overflow-hidden">
                                    <div class="nk-ecwg nk-ecwg7 h-100">
                                        <div class="card-inner flex-grow-1">
                                            <div class="card-title-group mb-4">
                                                <div class="card-title">
                                                    <h6 class="title">Order Statistics</h6>
                                                </div>
                                            </div>
                                            <div class="nk-ecwg7-ck">
                                                <canvas class="ecommerce-doughnut-s1" id="orderStatistics"></canvas>
                                            </div>
                                            <ul class="nk-ecwg7-legends">
                                                <li>
                                                    <div class="title">
                                                        <span class="dot dot-lg sq" data-bg="#0fac81"></span>
                                                        <span>Completed</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        <span class="dot dot-lg sq" data-bg="#e85347"></span>
                                                        <span>Canclled</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        <span class="dot dot-lg sq" data-bg="#816bff"></span>
                                                        <span>Processing</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div><!-- .card-inner -->
                                    </div>
                                </div><!-- .card -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')


<script type="text/javascript">
    
    var stats =  <?php echo json_encode($stats); ?>;
    var labels =  <?php echo json_encode($labels); ?>;

        NioApp.coms.docReady.push(function() {

            var getData = {
                labels: labels,
                dataUnit: 'People',
                lineTension: .4,
                datasets: [{
                    label: "Total orders",
                    color: "#9d72ff",
                    dash: 0,
                    background: NioApp.hexRGB('#9d72ff', .15),
                    data: stats
                }, {
                    label: "Canceled orders",
                    color: "#eb6459",
                    dash: [6],
                    background: "transparent",
                    data: [
                        stats
                    ]
                }]
            };

            var chartSelector = $('.my-chart');

            _self_id = chartSelector.attr('id');

            _get_data = getData;

            var selectCanvas = document.getElementById(_self_id).getContext("2d");

            var chart_data = [];

            for (var i = 0; i < _get_data.datasets.length; i++) {

                chart_data.push({
                    label: _get_data.datasets[i].label,
                    tension: _get_data.lineTension,
                    backgroundColor: _get_data.datasets[i].background,
                    borderWidth: 2,
                    borderDash: _get_data.datasets[i].dash,
                    borderColor: _get_data.datasets[i].color,
                    pointBorderColor: 'transparent',
                    pointBackgroundColor: 'transparent',
                    pointHoverBackgroundColor: "#fff",
                    pointHoverBorderColor: _get_data.datasets[i].color,
                    pointBorderWidth: 2,
                    pointHoverRadius: 4,
                    pointHoverBorderWidth: 2,
                    pointRadius: 4,
                    pointHitRadius: 4,
                    data: _get_data.datasets[i].data
                });

            }

            var chart = new Chart(selectCanvas, {
                type: 'line',
                data: {
                    labels: _get_data.labels,
                    datasets: chart_data
                },
                options: {
                    legend: {
                        display: _get_data.legend ? _get_data.legend : false,
                        rtl: NioApp.State.isRTL,
                        labels: {
                            boxWidth: 12,
                            padding: 20,
                            fontColor: '#6783b8'
                        }
                    },
                    maintainAspectRatio: false,
                    tooltips: {
                        enabled: true,
                        rtl: NioApp.State.isRTL,
                        callbacks: {
                            title: function title(tooltipItem, data) {
                                return data['labels'][tooltipItem[0]['index']];
                            },
                            label: function label(tooltipItem, data) {
                                return data.datasets[tooltipItem.datasetIndex]['data'][
                                    tooltipItem['index']
                                ];
                            }
                        },
                        backgroundColor: '#1c2b46',
                        titleFontSize: 13,
                        titleFontColor: '#fff',
                        titleMarginBottom: 6,
                        bodyFontColor: '#fff',
                        bodyFontSize: 12,
                        bodySpacing: 4,
                        yPadding: 10,
                        xPadding: 10,
                        footerMarginTop: 0,
                        displayColors: false
                    },
                    scales: {
                        yAxes: [{
                            display: true,
                            stacked: _get_data.stacked ? _get_data.stacked : false,
                            position: NioApp.State.isRTL ? "right" : "left",
                            ticks: {
                                beginAtZero: true,
                                fontSize: 11,
                                fontColor: '#9eaecf',
                                padding: 10,
                                callback: function callback(value, index, values) {
                                    return value;
                                },
                                min: 0,
                                stepSize: 3000
                            },
                            gridLines: {
                                color: NioApp.hexRGB("#526484", .2),
                                tickMarkLength: 0,
                                zeroLineColor: NioApp.hexRGB("#526484", .2)
                            }
                        }],
                        xAxes: [{
                            display: false,
                            stacked: _get_data.stacked ? _get_data.stacked : false,
                            ticks: {
                                fontSize: 9,
                                fontColor: '#9eaecf',
                                source: 'auto',
                                padding: 10,
                                reverse: NioApp.State.isRTL
                            },
                            gridLines: {
                                color: "transparent",
                                tickMarkLength: 0,
                                zeroLineColor: 'transparent'
                            }
                        }]
                    }
                }
            });

        });

</script>

@endpush
