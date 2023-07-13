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
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1"
                                        data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                    <div class="toggle-expand-content" data-content="pageMenu">
                                        <ul class="nk-block-tools g-3">
                                            <li>
                                                <div class="drodown">
                                                    <a href="#"
                                                        class="dropdown-toggle btn btn-white btn-dim btn-outline-light"
                                                        data-bs-toggle="dropdown"><em
                                                            class="d-none d-sm-inline icon ni ni-calender-date"></em><span><span
                                                                class="d-none d-md-inline">Last</span> 30 Days</span><em
                                                            class="dd-indc icon ni ni-chevron-right"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><span>Last 30 Days</span></a></li>
                                                            <li><a href="#"><span>Last 6 Months</span></a></li>
                                                            <li><a href="#"><span>Last 1 Years</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nk-block-tools-opt"><a href="#" class="btn btn-primary"><em
                                                        class="icon ni ni-reports"></em><span>Reports</span></a></li>
                                        </ul>
                                    </div>
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
                                                    <h6 class="title">Today Orders</h6>
                                                </div>
                                            </div>
                                            <div class="data">
                                                <div class="data-group">
                                                    <div class="amount">1,945</div>
                                                    <div class="nk-ecwg6-ck">
                                                        <canvas class="ecommerce-line-chart-s3" id="todayOrders"></canvas>
                                                    </div>
                                                </div>
                                                <div class="info"><span class="change up text-danger"><em
                                                            class="icon ni ni-arrow-long-up"></em>4.63%</span><span> vs.
                                                        last week</span></div>
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
                                                    <h6 class="title">Today Revenue</h6>
                                                </div>
                                            </div>
                                            <div class="data">
                                                <div class="data-group">
                                                    <div class="amount">$2,338</div>
                                                    <div class="nk-ecwg6-ck">
                                                        <canvas class="ecommerce-line-chart-s3" id="todayRevenue"></canvas>
                                                    </div>
                                                </div>
                                                <div class="info"><span class="change down text-danger"><em
                                                            class="icon ni ni-arrow-long-down"></em>2.34%</span><span> vs.
                                                        last week</span></div>
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
                                                    <h6 class="title">Today Customers</h6>
                                                </div>
                                            </div>
                                            <div class="data">
                                                <div class="data-group">
                                                    <div class="amount">847</div>
                                                    <div class="nk-ecwg6-ck">
                                                        <canvas class="ecommerce-line-chart-s3"
                                                            id="todayCustomers"></canvas>
                                                    </div>
                                                </div>
                                                <div class="info"><span class="change up text-danger"><em
                                                            class="icon ni ni-arrow-long-up"></em>4.63%</span><span> vs.
                                                        last week</span></div>
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
                                                    <h6 class="title">Today Visitors</h6>
                                                </div>
                                            </div>
                                            <div class="data">
                                                <div class="data-group">
                                                    <div class="amount">23,485</div>
                                                    <div class="nk-ecwg6-ck">
                                                        <canvas class="ecommerce-line-chart-s3" id="todayVisitors"></canvas>
                                                    </div>
                                                </div>
                                                <div class="info"><span class="change down text-danger"><em
                                                            class="icon ni ni-arrow-long-down"></em>2.34%</span><span> vs.
                                                        last week</span></div>
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
                                                    <h6 class="title">Sales Statistics</h6>
                                                </div>
                                                <div class="card-tools">
                                                    <div class="dropdown">
                                                        <a href="#"
                                                            class="dropdown-toggle link link-light link-sm dropdown-indicator"
                                                            data-bs-toggle="dropdown">Weekly</a>
                                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="#"><span>Daily</span></a></li>
                                                                <li><a href="#"
                                                                        class="active"><span>Weekly</span></a></li>
                                                                <li><a href="#"><span>Monthly</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="nk-ecwg8-legends">
                                                <li>
                                                    <div class="title">
                                                        <span class="dot dot-lg sq" data-bg="#0fac81"></span>
                                                        <span>Total Order</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        <span class="dot dot-lg sq" data-bg="#eb6459"></span>
                                                        <span>Canceled Order</span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="nk-ecwg8-ck">
                                                <canvas class="ecommerce-line-chart-s4" id="salesStatistics"></canvas>
                                            </div>
                                            <div class="chart-label-group ps-5">
                                                <div class="chart-label">01 Jul, 2020</div>
                                                <div class="chart-label">30 Jul, 2020</div>
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
                            <!-- .col -->
                            <div class="col-xxl-12">
                                <div class="card card-full">
                                    <div class="card-inner">
                                        <div class="card-title-group">
                                            <div class="card-title">
                                                <h6 class="title">Recent Orders</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-tb-list mt-n2">
                                        <div class="nk-tb-item nk-tb-head">
                                            <div class="nk-tb-col"><span>Order No.</span></div>
                                            <div class="nk-tb-col tb-col-sm"><span>Customer</span></div>
                                            <div class="nk-tb-col tb-col-md"><span>Date</span></div>
                                            <div class="nk-tb-col"><span>Amount</span></div>
                                            <div class="nk-tb-col"><span class="d-none d-sm-inline">Status</span></div>
                                        </div>
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col">
                                                <span class="tb-lead"><a href="#">#95954</a></span>
                                            </div>
                                            <div class="nk-tb-col tb-col-sm">
                                                <div class="user-card">
                                                    <div class="user-avatar sm bg-purple-dim">
                                                        <span>AB</span>
                                                    </div>
                                                    <div class="user-name">
                                                        <span class="tb-lead">Abu Bin Ishtiyak</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <span class="tb-sub">02/11/2020</span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="tb-sub tb-amount">4,596.75 <span>USD</span></span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="badge badge-dot badge-dot-xs bg-success">Paid</span>
                                            </div>
                                        </div>
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col">
                                                <span class="tb-lead"><a href="#">#95850</a></span>
                                            </div>
                                            <div class="nk-tb-col tb-col-sm">
                                                <div class="user-card">
                                                    <div class="user-avatar sm bg-azure-dim">
                                                        <span>DE</span>
                                                    </div>
                                                    <div class="user-name">
                                                        <span class="tb-lead">Desiree Edwards</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <span class="tb-sub">02/02/2020</span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="tb-sub tb-amount">596.75 <span>USD</span></span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="badge badge-dot badge-dot-xs bg-danger">Canceled</span>
                                            </div>
                                        </div>
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col">
                                                <span class="tb-lead"><a href="#">#95812</a></span>
                                            </div>
                                            <div class="nk-tb-col tb-col-sm">
                                                <div class="user-card">
                                                    <div class="user-avatar sm bg-warning-dim">
                                                        <img src="./images/avatar/b-sm.jpg" alt="">
                                                    </div>
                                                    <div class="user-name">
                                                        <span class="tb-lead">Blanca Schultz</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <span class="tb-sub">02/01/2020</span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="tb-sub tb-amount">199.99 <span>USD</span></span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="badge badge-dot badge-dot-xs bg-success">Paid</span>
                                            </div>
                                        </div>
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col">
                                                <span class="tb-lead"><a href="#">#95256</a></span>
                                            </div>
                                            <div class="nk-tb-col tb-col-sm">
                                                <div class="user-card">
                                                    <div class="user-avatar sm bg-purple-dim">
                                                        <span>NL</span>
                                                    </div>
                                                    <div class="user-name">
                                                        <span class="tb-lead">Naomi Lawrence</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <span class="tb-sub">01/29/2020</span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="tb-sub tb-amount">1099.99 <span>USD</span></span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="badge badge-dot badge-dot-xs bg-success">Paid</span>
                                            </div>
                                        </div>
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col">
                                                <span class="tb-lead"><a href="#">#95135</a></span>
                                            </div>
                                            <div class="nk-tb-col tb-col-sm">
                                                <div class="user-card">
                                                    <div class="user-avatar sm bg-success-dim">
                                                        <span>CH</span>
                                                    </div>
                                                    <div class="user-name">
                                                        <span class="tb-lead">Cassandra Hogan</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <span class="tb-sub">01/29/2020</span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="tb-sub tb-amount">1099.99 <span>USD</span></span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="badge badge-dot badge-dot-xs bg-warning">Due</span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .card -->
                            </div>
                            <!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(function() {

            function ecommerceLineS4(selector, set_data) {
                var $selector = selector ? $(selector) : $('.ecommerce-line-chart-s4');
                $selector.each(function() {
                    var $self = $(this),
                        _self_id = $self.attr('id'),
                        _get_data = typeof set_data === 'undefined' ? eval(_self_id) : set_data;
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
                                            return '$ ' + value;
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
            }
            var totalSales = {
                labels: ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan", "08 Jan",
                    "09 Jan", "10 Jan",
                    "11 Jan", "12 Jan", "13 Jan", "14 Jan", "15 Jan", "16 Jan", "17 Jan", "18 Jan",
                    "19 Jan", "20 Jan",
                    "21 Jan", "22 Jan", "23 Jan", "24 Jan", "25 Jan", "26 Jan", "27 Jan", "28 Jan",
                    "29 Jan", "30 Jan"
                ],
                dataUnit: 'Sales',
                lineTension: .3,
                datasets: [{
                    label: "Sales",
                    color: "#9d72ff",
                    background: NioApp.hexRGB('#9d72ff', .25),
                    data: [130, 105, 125, 115, 110, 95, 131, 110, 115, 120, 111, 97, 113, 107, 122, 100,
                        85, 110,
                        130, 107, 90, 105, 123, 115, 100, 117, 125, 95, 137, 101
                    ]
                }]
            };

        });
    </script>
@endpush
