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
                            <h6 class="mb-0 fw-medium"><span
                                    id="temp-value">{{ $dataSensor->first()->temperature ?? 0 }}</span> °C</h6>
                        </div>
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100" style="height: 7px;">
                            <div class="progress-bar bg-danger" id="temp-bar"
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
                            <h6 class="mb-0 fw-medium"><span
                                    id="humi-value">{{ $dataSensor->first()->humidity ?? 0 }}</span> %</h6>
                        </div>
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100" style="height: 7px;">
                            <div class="progress-bar bg-secondary" id="humi-bar"
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
                            <h6 class="mb-0 fw-medium"> <span
                                    id="light-value">{{ $dataSensor->first()->light_intensity ?? 0 }}</span> lux</h6>
                        </div>
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100" style="height: 7px;">
                            <div class="progress-bar bg-warning" id="light-bar"
                                style="width: {{ $dataSensor->first()->light_intensity ?? 0 }}%"></div>
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
                        </div>
                        <div id="container"></div>
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
            <button onclick="updateSeries()">Update Data</button>
            <p class="mb-0 fs-4">Design and Developed by <a href="https://adminmart.com/" target="_blank"
                    class="pe-1 text-primary text-decoration-underline">AdminMart.com</a></p>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://unpkg.com/mqtt/dist/mqtt.min.js"></script>
    <script>
        let chart; // global

        /**
         * Request data from the server, add it to the graph and set a timeout to
         * request again
         */
        async function requestData(json) {
            const data = JSON.parse(json)
            const value = data.temperature;
            const value1 = data.humidity;
            const value2 = data.light_intensity;
            const timestamp = data.created_at;
            const point = [new Date(timestamp).getTime(), parseFloat(value)];
            const point1 = [new Date(timestamp).getTime(), parseFloat(value1)];
            const point2 = [new Date(timestamp).getTime(), parseFloat(value2)];
            const series = chart.series[0],
                shift = series.data.length > 20; // shift if the series is
            const series1 = chart.series[0],
                shift1 = series.data.length > 20; // shift if the series is
            const series2 = chart.series[0],
                shift2 = series.data.length > 20; // shift if the series is
            // longer than 20

            // add the point
            chart.series[0].addPoint(point, true, shift);
            chart.series[1].addPoint(point1, true, shift1);
            chart.series[2].addPoint(point2, true, shift2);
        }

        window.addEventListener('load', function() {
            setInterval(() => {
                let temperature = (Math.random() * (30 - 15) + 15).toFixed(1);
                let humidity = (Math.random() * (70 - 30) + 30).toFixed(1);
                let lightIntensity = (Math.random() * (100 - 0) + 0).toFixed(1);
                $.post("{{ url('/api/data/A001') }}", {
                    temperature: temperature,
                    humidity: humidity,
                    light_intensity: lightIntensity
                }, function(response) {
                    console.log(response)
                });
            }, 5000);
            chart = new Highcharts.Chart({
                chart: {
                    renderTo: 'container',
                    type: 'areaspline',
                    events: {
                        load: requestData
                    },
                    style: {
                        fontFamily: 'inherit',
                    },
                    animation: {
                        duration: 200
                    },
                    height: 300,
                },
                title: {
                    text: null
                },
                xAxis: {
                    type: 'datetime',
                    tickPixelInterval: 150,
                    maxZoom: 20 * 1000,
                    labels: {
                        style: {
                            color: '#adb0bb'
                        }
                    }
                },
                yAxis: {
                    title: null,
                    labels: {
                        style: {
                            color: '#adb0bb'
                        }
                    }
                },
                series: [{
                    name: 'Temperature',
                    color: 'var(--bs-danger)',
                    fillOpacity: 0.1,
                }, {
                    name: 'Humidity',
                    color: 'var(--bs-secondary)',
                    fillOpacity: 0.1,
                }, {
                    name: 'Light Intensity',
                    color: 'var(--bs-primary)',
                    fillOpacity: 0.1,
                }, ]
            });
        });
    </script>
    <script>
        window.addEventListener('load', function() {
            const url = 'wss://sa201a17.ala.asia-southeast1.emqxsl.com:8084/mqtt'
            const options = {
                clean: true,
                connectTimeout: 4000,
                clientId: 'mqtt-panel-iot',
                username: 'nicky',
                password: 'nicky',
                ca: `-----BEGIN CERTIFICATE-----
            MIIDrzCCApegAwIBAgIQCDvgVpBCRrGhdWrJWZHHSjANBgkqhkiG9w0BAQUFADBh
            MQswCQYDVQQGEwJVUzEVMBMGA1UEChMMRGlnaUNlcnQgSW5jMRkwFwYDVQQLExB3
            d3cuZGlnaWNlcnQuY29tMSAwHgYDVQQDExdEaWdpQ2VydCBHbG9iYWwgUm9vdCBD
            QTAeFw0wNjExMTAwMDAwMDBaFw0zMTExMTAwMDAwMDBaMGExCzAJBgNVBAYTAlVT
            MRUwEwYDVQQKEwxEaWdpQ2VydCBJbmMxGTAXBgNVBAsTEHd3dy5kaWdpY2VydC5j
            b20xIDAeBgNVBAMTF0RpZ2lDZXJ0IEdsb2JhbCBSb290IENBMIIBIjANBgkqhkiG
            9w0BAQEFAAOCAQ8AMIIBCgKCAQEA4jvhEXLeqKTTo1eqUKKPC3eQyaKl7hLOllsB
            CSDMAZOnTjC3U/dDxGkAV53ijSLdhwZAAIEJzs4bg7/fzTtxRuLWZscFs3YnFo97
            nh6Vfe63SKMI2tavegw5BmV/Sl0fvBf4q77uKNd0f3p4mVmFaG5cIzJLv07A6Fpt
            43C/dxC//AH2hdmoRBBYMql1GNXRor5H4idq9Joz+EkIYIvUX7Q6hL+hqkpMfT7P
            T19sdl6gSzeRntwi5m3OFBqOasv+zbMUZBfHWymeMr/y7vrTC0LUq7dBMtoM1O/4
            gdW7jVg/tRvoSSiicNoxBN33shbyTApOB6jtSj1etX+jkMOvJwIDAQABo2MwYTAO
            BgNVHQ8BAf8EBAMCAYYwDwYDVR0TAQH/BAUwAwEB/zAdBgNVHQ4EFgQUA95QNVbR
            TLtm8KPiGxvDl7I90VUwHwYDVR0jBBgwFoAUA95QNVbRTLtm8KPiGxvDl7I90VUw
            DQYJKoZIhvcNAQEFBQADggEBAMucN6pIExIK+t1EnE9SsPTfrgT1eXkIoyQY/Esr
            hMAtudXH/vTBH1jLuG2cenTnmCmrEbXjcKChzUyImZOMkXDiqw8cvpOp/2PV5Adg
            06O/nVsJ8dWO41P0jmP6P6fbtGbfYmbW0W5BjfIttep3Sp+dWOIrWcBAI+0tKIJF
            PnlUkiaY4IBIqDfv8NZ5YBberOgOzW6sRBc4L0na4UU+Krk2U886UAb3LujEV0ls
            YSEY1QSteDwsOoBrp+uvFRTp2InBuThs4pFsiv9kuXclVzDAGySj4dzp30d8tbQk
            CAUw7C29C79Fv1C5qfPrmAESrciIxpg0X40KPMbp1ZWVbd4=
            -----END CERTIFICATE-----`
            }
            const client = mqtt.connect(url, options)
            client.on('connect', function() {
                console.log('Connected')
                client.subscribe('/data', function(err) {
                    console.log('subscribe to /data')
                })
            })

            // Untuk mengambil pesan / message dari topic temperature
            client.on('message', async function(topic, message) {
                if (topic == '/data') {
                    if (typeof message == 'object') {
                        console.log(message.toString())
                        const data = JSON.parse(message);
                        $('#temp-value').html(data.temperature)
                        $('#humi-value').html(data.humidity)
                        $('#light-value').html(data.light_intensity)
                        $('#temp-bar').css('width', `${data.temperature}%`)
                        $('#humi-bar').css('width', `${data.humidity}%`)
                        $('#light-bar').css('width', `${data.light_intensity}%`)
                        await requestData(message)
                    }
                }
            })
        })
    </script>
@endpush
