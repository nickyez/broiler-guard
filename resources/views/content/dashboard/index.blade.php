@extends('layout.admin')

@section('title', 'Dashboard | Broiler Guard')

@section('content')
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col-lg-3">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center gap-6 mb-4 pb-3">
                            <span class="round-48 d-flex align-items-center justify-content-center rounded bg-danger-subtle">
                                <iconify-icon icon="solar:temperature-outline" class="fs-6 text-danger"> </iconify-icon>
                            </span>
                            <h6 class="mb-0 fs-4">Temperature</h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-end mb-6">
                            <h6 class="mb-0 fw-medium">{{ $dataSensor->first()->temperature ?? 0 }} °C</h6>
                        </div>
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100" style="height: 7px;">
                            <div class="progress-bar bg-danger"
                                style="width: {{ $dataSensor->first()->temperature ?? 0 }}%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center gap-6 mb-4 pb-3">
                            <span
                                class="round-48 d-flex align-items-center justify-content-center rounded bg-secondary-subtle">
                                <iconify-icon icon="solar:snowflake-outline" class="fs-6 text-secondary"> </iconify-icon>
                            </span>
                            <h6 class="mb-0 fs-4">Humidity</h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-end mb-6">
                            <h6 class="mb-0 fw-medium">{{ $dataSensor->first()->humidity ?? 0 }}%</h6>
                        </div>
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100" style="height: 7px;">
                            <div class="progress-bar bg-secondary"
                                style="width: {{ $dataSensor->first()->humidity ?? 0 }}%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center gap-6 mb-4 pb-3">
                            <span
                                class="round-48 d-flex align-items-center justify-content-center rounded bg-warning-subtle">
                                <iconify-icon icon="solar:lightbulb-outline" class="fs-6 text-warning"> </iconify-icon>
                            </span>
                            <h6 class="mb-0 fs-4">Light Intensity</h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-end mb-6">
                            <h6 class="mb-0 fw-medium">{{ $dataSensor->first()->light_intensity ?? 0 }} lux</h6>
                        </div>
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100" style="height: 7px;">
                            <div class="progress-bar bg-warning" style="width: 83%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="d-flex flex-column">
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="d-flex align-items-center gap-6">
                                <span
                                    class="round-48 d-flex align-items-center justify-content-center rounded bg-primary-subtle">
                                    <span class="fs-6 text-primary">ON</span>
                                </span>
                                <h6 class="mb-0 fs-4">Heater Status</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="d-flex align-items-center gap-6">
                                <span
                                    class="round-48 d-flex align-items-center justify-content-center rounded bg-danger-subtle">
                                    <span class="fs-6 text-danger">OFF</span>
                                </span>
                                <h6 class="mb-0 fs-4">Lamp Status</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 d-flex align-items-strech">
                <div class="card w-100">
                    <div class="card-body">
                        <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                            <div class="mb-3 mb-sm-0">
                                <h5 class="card-title fw-semibold">Sensor Statistik</h5>
                            </div>
                            <div>
                                <select class="form-select">
                                    <option value="1">March 2024</option>
                                    <option value="2">April 2024</option>
                                    <option value="3">May 2024</option>
                                    <option value="4">June 2024</option>
                                </select>
                            </div>
                        </div>
                        <div id="revenue-forecast"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body p-4">
                        <div class="mb-4">
                            <h5 class="card-title fw-semibold">Heater Activity Log</h5>
                        </div>
                        <ul class="timeline-widget mb-0 position-relative mb-n5">
                            <li class="timeline-item d-flex position-relative overflow-hidden">
                                <div class="timeline-time mt-n1 text-muted flex-shrink-0 text-end">09:46
                                </div>
                                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                                    <span class="timeline-badge bg-primary flex-shrink-0 mt-2"></span>
                                    <span class="timeline-badge-border d-block flex-shrink-0"></span>
                                </div>
                                <div class="timeline-desc fs-3 text-dark mt-n1">Payment received from John
                                    Doe of $385.90</div>
                            </li>
                            <li class="timeline-item d-flex position-relative overflow-hidden">
                                <div class="timeline-time mt-n6 text-muted flex-shrink-0 text-end">09:46
                                </div>
                                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                                    <span class="timeline-badge bg-warning flex-shrink-0"></span>
                                    <span class="timeline-badge-border d-block flex-shrink-0"></span>
                                </div>
                                <div class="timeline-desc fs-3 text-dark mt-n6 fw-semibold">New sale
                                    recorded <a href="javascript:void(0)"
                                        class="text-primary d-block fw-normal ">#ML-3467</a>
                                </div>
                            </li>
                            <li class="timeline-item d-flex position-relative overflow-hidden">
                                <div class="timeline-time mt-n6 text-muted flex-shrink-0 text-end">09:46
                                </div>
                                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                                    <span class="timeline-badge bg-warning flex-shrink-0"></span>
                                    <span class="timeline-badge-border d-block flex-shrink-0"></span>
                                </div>
                                <div class="timeline-desc fs-3 text-dark mt-n6">Payment was made of $64.95
                                    to Michael</div>
                            </li>
                            <li class="timeline-item d-flex position-relative overflow-hidden">
                                <div class="timeline-time mt-n6 text-muted flex-shrink-0 text-end">09:46
                                </div>
                                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                                    <span class="timeline-badge bg-secondary flex-shrink-0"></span>
                                    <span class="timeline-badge-border d-block flex-shrink-0"></span>
                                </div>
                                <div class="timeline-desc fs-3 text-dark mt-n6 fw-semibold">New sale
                                    recorded <a href="javascript:void(0)"
                                        class="text-primary d-block fw-normal ">#ML-3467</a>
                                </div>
                            </li>
                            <li class="timeline-item d-flex position-relative overflow-hidden">
                                <div class="timeline-time mt-n6 text-muted flex-shrink-0 text-end">09:46
                                </div>
                                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                                    <span class="timeline-badge bg-danger flex-shrink-0"></span>
                                    <span class="timeline-badge-border d-block flex-shrink-0"></span>
                                </div>
                                <div class="timeline-desc fs-3 text-dark mt-n6 fw-semibold">Project meeting
                                </div>
                            </li>
                            <li class="timeline-item d-flex position-relative overflow-hidden">
                                <div class="timeline-time mt-n6 text-muted flex-shrink-0 text-end">09:46
                                </div>
                                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                                    <span class="timeline-badge bg-primary flex-shrink-0"></span>
                                </div>
                                <div class="timeline-desc fs-3 text-dark mt-n6">Payment received from John
                                    Doe of $385.90</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body p-4">
                        <div class="mb-4">
                            <h5 class="card-title fw-semibold">Lamp Activity Log</h5>
                        </div>
                        <ul class="timeline-widget mb-0 position-relative mb-n5">
                            <li class="timeline-item d-flex position-relative overflow-hidden">
                                <div class="timeline-time mt-n1 text-muted flex-shrink-0 text-end">09:46
                                </div>
                                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                                    <span class="timeline-badge bg-primary flex-shrink-0 mt-2"></span>
                                    <span class="timeline-badge-border d-block flex-shrink-0"></span>
                                </div>
                                <div class="timeline-desc fs-3 text-dark mt-n1">Payment received from John
                                    Doe of $385.90</div>
                            </li>
                            <li class="timeline-item d-flex position-relative overflow-hidden">
                                <div class="timeline-time mt-n6 text-muted flex-shrink-0 text-end">09:46
                                </div>
                                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                                    <span class="timeline-badge bg-warning flex-shrink-0"></span>
                                    <span class="timeline-badge-border d-block flex-shrink-0"></span>
                                </div>
                                <div class="timeline-desc fs-3 text-dark mt-n6 fw-semibold">New sale
                                    recorded <a href="javascript:void(0)"
                                        class="text-primary d-block fw-normal ">#ML-3467</a>
                                </div>
                            </li>
                            <li class="timeline-item d-flex position-relative overflow-hidden">
                                <div class="timeline-time mt-n6 text-muted flex-shrink-0 text-end">09:46
                                </div>
                                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                                    <span class="timeline-badge bg-warning flex-shrink-0"></span>
                                    <span class="timeline-badge-border d-block flex-shrink-0"></span>
                                </div>
                                <div class="timeline-desc fs-3 text-dark mt-n6">Payment was made of $64.95
                                    to Michael</div>
                            </li>
                            <li class="timeline-item d-flex position-relative overflow-hidden">
                                <div class="timeline-time mt-n6 text-muted flex-shrink-0 text-end">09:46
                                </div>
                                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                                    <span class="timeline-badge bg-secondary flex-shrink-0"></span>
                                    <span class="timeline-badge-border d-block flex-shrink-0"></span>
                                </div>
                                <div class="timeline-desc fs-3 text-dark mt-n6 fw-semibold">New sale
                                    recorded <a href="javascript:void(0)"
                                        class="text-primary d-block fw-normal ">#ML-3467</a>
                                </div>
                            </li>
                            <li class="timeline-item d-flex position-relative overflow-hidden">
                                <div class="timeline-time mt-n6 text-muted flex-shrink-0 text-end">09:46
                                </div>
                                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                                    <span class="timeline-badge bg-danger flex-shrink-0"></span>
                                    <span class="timeline-badge-border d-block flex-shrink-0"></span>
                                </div>
                                <div class="timeline-desc fs-3 text-dark mt-n6 fw-semibold">Project meeting
                                </div>
                            </li>
                            <li class="timeline-item d-flex position-relative overflow-hidden">
                                <div class="timeline-time mt-n6 text-muted flex-shrink-0 text-end">09:46
                                </div>
                                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                                    <span class="timeline-badge bg-primary flex-shrink-0"></span>
                                </div>
                                <div class="timeline-desc fs-3 text-dark mt-n6">Payment received from John
                                    Doe of $385.90</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-6 px-6 text-center">
            <p class="mb-0 fs-4">Design and Developed by <a href="https://adminmart.com/" target="_blank"
                    class="pe-1 text-primary text-decoration-underline">AdminMart.com</a></p>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script>
        $(function() {


            // -----------------------------------------------------------------------
            // Subscriptions
            // -----------------------------------------------------------------------
            var chart = {
                series: [{
                        name: "2024",
                        data: [
                            @foreach ($dataSensor as $item)
                                {{ $item->temperature . ',' }}
                            @endforeach
                        ],
                    },
                    {
                        name: "2023",
                        data: [-2.8, -1.1, -2.5, -1.5, -2.3, -1.9, -1, -2.1, -1.3],
                    },

                ],
                chart: {
                    toolbar: {
                        show: false,
                    },
                    type: "bar",
                    fontFamily: "inherit",
                    foreColor: "#adb0bb",
                    height: 270,
                    stacked: true,
                    offsetX: -15,
                },
                colors: ["var(--bs-primary)", "var(--bs-danger)"],
                plotOptions: {
                    bar: {
                        horizontal: false,
                        barHeight: "60%",
                        columnWidth: "15%",
                        borderRadius: [6],
                        borderRadiusApplication: "end",
                        borderRadiusWhenStacked: "all",
                    },
                },
                dataLabels: {
                    enabled: false,
                },
                legend: {
                    show: false,
                },
                grid: {
                    show: true,
                    padding: {
                        top: 0,
                        bottom: 0,
                        right: 0,
                    },
                    borderColor: "rgba(0,0,0,0.05)",
                    xaxis: {
                        lines: {
                            show: true,
                        },
                    },
                    yaxis: {
                        lines: {
                            show: true,
                        },
                    },
                },
                yaxis: {
                    min: -5,
                    max: 5,
                },
                xaxis: {
                    axisBorder: {
                        show: false,
                    },
                    axisTicks: {
                        show: false,
                    },
                    categories: [
                        "Jan",
                        "Feb",
                        "Mar",
                        "Apr",
                        "May",
                        "Jun",
                        "July",
                        "Aug",
                        "Sep",
                    ],
                    labels: {
                        style: {
                            fontSize: "13px",
                            colors: "#adb0bb",
                            fontWeight: "400"
                        },
                    },
                },
                yaxis: {
                    tickAmount: 4,
                },
                tooltip: {
                    theme: "dark",
                },
            };

            var chart = new ApexCharts(
                document.querySelector("#revenue-forecast"),
                chart
            );
            chart.render();


            // -----------------------------------------------------------------------
            // Total Income
            // -----------------------------------------------------------------------
            var customers = {
                chart: {
                    id: "sparkline3",
                    type: "line",
                    fontFamily: "inherit",
                    foreColor: "#adb0bb",
                    height: 60,
                    sparkline: {
                        enabled: true,
                    },
                    group: "sparklines",
                },
                series: [{
                    name: "Income",
                    color: "var(--bs-danger)",
                    data: [30, 25, 35, 20, 30, 40],
                }, ],
                stroke: {
                    curve: "smooth",
                    width: 2,
                },
                markers: {
                    size: 0,
                },
                tooltip: {
                    theme: "dark",
                    fixed: {
                        enabled: true,
                        position: "right",
                    },
                    x: {
                        show: false,
                    },
                },
            };
            new ApexCharts(document.querySelector("#total-income"), customers).render();

        })
    </script>
@endpush
