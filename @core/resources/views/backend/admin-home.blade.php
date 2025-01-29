@extends('backend.admin-master')
@section('site-title')
    {{__('Dashboard')}}
@endsection
@section('content')
@php
    $statistics = [
        ['title' => __('Total Admin'),'value' => $total_admin, 'icon' => 'lar la-user'],
        ['title' => __('Total Customer'),'value' => $total_user, 'icon' => 'lar la-user'],
        ['title' => __('Total Blog'),'value' => $all_blogs_count, 'icon' => 'lar la-edit'],
        ['title' => __('Total Products'),'value' => $all_products_count, 'icon' => 'las la-box'],
        ['title' => __('Completed Sale'),'value' => $all_completed_sell_count, 'icon' => 'las la-boxes'],
        ['title' => __('Pending Sale'),'value' => $all_pending_sell_count, 'icon' => 'las la-history'],
        ['title' => __('Sold Amount'),'value' => $total_sold_amount, 'icon' => 'las la-coins'],
        ['title' => __('Ongoing Campaign'),'value' => $total_ongoing_campaign, 'icon' => 'las la-gifts'],
    ];
@endphp
    <div class="main-content-inner">
        <div class="row">
            <!-- seo fact area start -->
            <div class="col-lg-12">
                <div class="row mt-3">
                    @php
                        $bg_colors = [
                            'bg-blue',
                            'bg-green',
                            'bg-yellow',
                            'bg-pink',
                            'bg-lime',
                            'bg-brown',
                        ];
                    @endphp
                    @foreach ($statistics as $key => $data)
                    <div class="col-md-3 my-3">
                            <div class="dash-box text-white {{ $bg_colors[$key % count($bg_colors)] }}">
                                <h1 class="dash-icon">
                                    <i class="{{ $data['icon'] }}"></i>
                                </h1>
                                <div class="dash-content">
                                    <h5 class="mb-0 mt-1">{{ $data['value'] }}</h5>
                                    <small class="font-light">{{ __($data['title']) }}</small>
                                </div>
                                <span class="bg-icon"><i class="{{ $data['icon'] }}"></i></span>
                            </div>
                    </div>
                    @endforeach
                </div>
                <div class="row my-5">
                    <div class="col-lg-6 my-4">
                        <div class="chart-wrapper margin-top-40">
                            <h2 class="chart-title">{{__("Earned Per Month In")}} {{date('Y')}}</h2>
                            <canvas id="monthlyEarned"></canvas>
                        </div>
                    </div>
                    <div class="col-lg-6 my-4">
                        <div class="chart-wrapper margin-top-40">
                            <h2 class="chart-title">{{__("Earned Per Day In Last 30 Days")}}</h2>
                           <div>
                               <canvas id="monthlyEarnedPerDay"></canvas>
                           </div>
                        </div>
                    </div>
                    <div class="col-lg-6 my-4">
                        <div class="chart-wrapper margin-top-40">
                            <h2 class="chart-title">{{__("Product Order Per Day In Last 30 Days")}}</h2>
                           <div>
                               <canvas id="monthlyOrderCountPerDay"></canvas>
                           </div>
                        </div>
                    </div>
                    <div class="col-lg-6 my-4">
                        <div class="chart-wrapper margin-top-40">
                            <h2 class="chart-title">{{__("Product Sold Per Day In Last 30 Days")}}</h2>
                           <div>
                               <canvas id="monthlySoldCountPerDay"></canvas>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{asset('assets/backend/js/chart.js')}}"></script>
    <script>
        $.ajax({
            url: '{{route('admin.home.chart.data')}}',
            type: 'POST',
            async: false,
            data: {
                _token : "{{ csrf_token() }}"
            },
            success: function (data) {
                labels = data.labels;
                chartdata = data.data;
                new Chart(
                    document.getElementById('monthlyEarned'),
                    {
                        type: 'bar',
                        data: {
                            labels: data.labels,
                            datasets: [{
                                label: '{{__("Amount Earned")}}',
                                backgroundColor: '#fcb11a',
                                borderColor: '#f5cb62',
                                data: data.data,
                                
                                 backgroundColor: [
                          'rgba(255, 99, 132, 0.2)',
                          'rgba(255, 159, 64, 0.2)',
                          'rgba(255, 205, 86, 0.2)',
                          'rgba(75, 192, 192, 0.2)',
                          'rgba(54, 162, 235, 0.2)',
                          'rgba(153, 102, 255, 0.2)',
                          'rgba(201, 203, 207, 0.2)'
                        ],
                        borderColor: [
                          'rgb(255, 99, 132)',
                          'rgb(255, 159, 64)',
                          'rgb(255, 205, 86)',
                          'rgb(75, 192, 192)',
                          'rgb(54, 162, 235)',
                          'rgb(153, 102, 255)',
                          'rgb(201, 203, 207)'
                        ],
                        borderWidth: 1
                        
                            }]
                        },
                        
                        options: {
                         scales: {
                          x: {
                            grid: {
                               drawOnChartArea:false
                             }
                          },
                           y: {
                            grid: {
                               drawOnChartArea:false
                             }
                          }
                        }
                       }
                    },
                    
                );
            }
        });

        $.ajax({
            url: '{{route('admin.home.chart.data.by.day')}}',
            type: 'POST',
            async: false,
            data: {
                _token : "{{csrf_token()}}"
            },
            success: function (data) {
                labels = data.labels;
                chartdata = data.data;
                new Chart(
                    document.getElementById('monthlyEarnedPerDay'),
                    {
                        type: 'line',
                        data: {
                            labels: data.labels,
                            datasets: [{
                                label: '{{__("Amount Earned")}}',
                                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                borderColor: 'rgba(255, 99, 132,0.2)',
                                data: data.data,
                                fill: true,
                            }]
                        },
                        options: {
                         scales: {
                          x: {
                            grid: {
                               drawOnChartArea:false
                             }
                          },
                           y: {
                            grid: {
                               drawOnChartArea:false
                             }
                          }
                        }
                       }
                    }
                );
            }
        });

        $.ajax({
            url: '{{route('admin.home.chart.sale.count.per.day')}}',
            type: 'POST',
            async: false,
            data: {
                _token : "{{csrf_token()}}"
            },
            success: function (data) {
                labels = data.labels;
                chartdata = data.data;
                new Chart(
                    document.getElementById('monthlySoldCountPerDay'),
                    {
                        type: 'line',
                        data: {
                            labels: data.labels,
                            datasets: [{
                                label: '{{__("Product Sales")}}',
                                backgroundColor: 'rgba(255, 159, 64, 0.2)',
                                borderColor: 'rgba(255, 159, 64, 0.2)',
                                data: data.data,
                                fill: true,
                            }]
                        },
                        options: {
                         scales: {
                          x: {
                            grid: {
                               drawOnChartArea:false
                             }
                          },
                           y: {
                            grid: {
                               drawOnChartArea:false
                             }
                          }
                        }
                       }
                    }
                );
            }
        });

        $.ajax({
            url: '{{route("admin.home.chart.order.count.per.day")}}',
            type: 'POST',
            async: false,
            data: {
                _token : "{{csrf_token()}}"
            },
            success: function (data) {
                labels = data.labels;
                chartdata = data.data;
                new Chart(
                    document.getElementById('monthlyOrderCountPerDay'),
                    {
                        type: 'line',
                        data: {
                            labels: data.labels,
                            datasets: [{
                                label: '{{__("Product Order")}}',
                                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                borderColor: 'rgba(75, 192, 192, 0.2)',
                                data: data.data,
                                fill: true,
                            }]
                        },
                        options: {
                         scales: {
                          x: {
                            grid: {
                               drawOnChartArea:false
                             }
                          },
                           y: {
                            grid: {
                               drawOnChartArea:false
                             }
                          }
                        }
                       }
                    }
                );
            }
        });

    </script>
@endsection
