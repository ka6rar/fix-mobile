@extends('layouts.app')

@section('content')
    <br>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-9 xl-100 chart_data_left box-col-12">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="row m-0 chart-main">
                            <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">
                                <div class="media align-items-center">
                                    <div class="hospital-small-chart">
                                        <div class="small-bar">
                                            <div class="small-chart flot-chart-container">
                                                <div class="chartist-tooltip"></div>
                                                <i data-feather="smartphone"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="right-chart-content">
                                            <h6>كل الاجهزة</h6>
                                            <span>{{ App\Models\Moble::get()->count() }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">
                                <div class="media align-items-center">
                                    <div class="hospital-small-chart">
                                        <div class="small-bar">
                                            <div class="small-chart1 flot-chart-container">
                                                <div class="chartist-tooltip"></div><svg
                                                    xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%"
                                                    height="100%" class="ct-chart-bar" style="width: 100%; height: 100%;">
                                                    <g class="ct-grids"></g>
                                                    <g>
                                                        <g class="ct-series ct-series-a">
                                                            <line x1="13.571428571428571" x2="13.571428571428571"
                                                                y1="69" y2="58.2" class="ct-bar" ct:value="400"
                                                                style="stroke-width: 3px"></line>
                                                            <line x1="20.714285714285715" x2="20.714285714285715"
                                                                y1="69" y2="52.8" class="ct-bar" ct:value="600"
                                                                style="stroke-width: 3px"></line>
                                                            <line x1="27.857142857142858" x2="27.857142857142858"
                                                                y1="69" y2="44.7" class="ct-bar" ct:value="900"
                                                                style="stroke-width: 3px"></line>
                                                            <line x1="35" x2="35" y1="69"
                                                                y2="47.4" class="ct-bar" ct:value="800"
                                                                style="stroke-width: 3px"></line>
                                                            <line x1="42.14285714285714" x2="42.14285714285714"
                                                                y1="69" y2="42" class="ct-bar" ct:value="1000"
                                                                style="stroke-width: 3px"></line>
                                                            <line x1="49.285714285714285" x2="49.285714285714285"
                                                                y1="69" y2="36.6" class="ct-bar" ct:value="1200"
                                                                style="stroke-width: 3px"></line>
                                                            <line x1="56.42857142857143" x2="56.42857142857143"
                                                                y1="69" y2="55.5" class="ct-bar" ct:value="500"
                                                                style="stroke-width: 3px"></line>
                                                        </g>
                                                        <g class="ct-series ct-series-b">
                                                            <line x1="13.571428571428571" x2="13.571428571428571"
                                                                y1="58.2" y2="31.200000000000003" class="ct-bar"
                                                                ct:value="1000" style="stroke-width: 3px"></line>
                                                            <line x1="20.714285714285715" x2="20.714285714285715"
                                                                y1="52.8" y2="31.199999999999996" class="ct-bar"
                                                                ct:value="800" style="stroke-width: 3px"></line>
                                                            <line x1="27.857142857142858" x2="27.857142857142858"
                                                                y1="44.7" y2="31.200000000000003" class="ct-bar"
                                                                ct:value="500" style="stroke-width: 3px"></line>
                                                            <line x1="35" x2="35" y1="47.4"
                                                                y2="31.199999999999996" class="ct-bar" ct:value="600"
                                                                style="stroke-width: 3px"></line>
                                                            <line x1="42.14285714285714" x2="42.14285714285714"
                                                                y1="42" y2="31.200000000000003" class="ct-bar"
                                                                ct:value="400" style="stroke-width: 3px"></line>
                                                            <line x1="49.285714285714285" x2="49.285714285714285"
                                                                y1="36.6" y2="31.200000000000003" class="ct-bar"
                                                                ct:value="200" style="stroke-width: 3px"></line>
                                                            <line x1="56.42857142857143" x2="56.42857142857143"
                                                                y1="55.5" y2="31.200000000000003" class="ct-bar"
                                                                ct:value="900" style="stroke-width: 3px"></line>
                                                        </g>
                                                    </g>
                                                    <g class="ct-labels"></g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="right-chart-content">
                                            <h4>1005</h4>
                                            <span>Sales</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">
                                <div class="media align-items-center">
                                    <div class="hospital-small-chart">
                                        <div class="small-bar">
                                            <div class="small-chart2 flot-chart-container">
                                                <div class="chartist-tooltip"></div><svg
                                                    xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%"
                                                    height="100%" class="ct-chart-bar"
                                                    style="width: 100%; height: 100%;">
                                                    <g class="ct-grids"></g>
                                                    <g>
                                                        <g class="ct-series ct-series-a">
                                                            <line x1="13.571428571428571" x2="13.571428571428571"
                                                                y1="69" y2="39.3" class="ct-bar"
                                                                ct:value="1100" style="stroke-width: 3px"></line>
                                                            <line x1="20.714285714285715" x2="20.714285714285715"
                                                                y1="69" y2="44.7" class="ct-bar"
                                                                ct:value="900" style="stroke-width: 3px"></line>
                                                            <line x1="27.857142857142858" x2="27.857142857142858"
                                                                y1="69" y2="52.8" class="ct-bar"
                                                                ct:value="600" style="stroke-width: 3px"></line>
                                                            <line x1="35" x2="35" y1="69"
                                                                y2="42" class="ct-bar" ct:value="1000"
                                                                style="stroke-width: 3px"></line>
                                                            <line x1="42.14285714285714" x2="42.14285714285714"
                                                                y1="69" y2="50.1" class="ct-bar"
                                                                ct:value="700" style="stroke-width: 3px"></line>
                                                            <line x1="49.285714285714285" x2="49.285714285714285"
                                                                y1="69" y2="36.6" class="ct-bar"
                                                                ct:value="1200" style="stroke-width: 3px"></line>
                                                            <line x1="56.42857142857143" x2="56.42857142857143"
                                                                y1="69" y2="60.9" class="ct-bar"
                                                                ct:value="300" style="stroke-width: 3px"></line>
                                                        </g>
                                                        <g class="ct-series ct-series-b">
                                                            <line x1="13.571428571428571" x2="13.571428571428571"
                                                                y1="39.3" y2="31.199999999999996" class="ct-bar"
                                                                ct:value="300" style="stroke-width: 3px"></line>
                                                            <line x1="20.714285714285715" x2="20.714285714285715"
                                                                y1="44.7" y2="31.200000000000003" class="ct-bar"
                                                                ct:value="500" style="stroke-width: 3px"></line>
                                                            <line x1="27.857142857142858" x2="27.857142857142858"
                                                                y1="52.8" y2="31.199999999999996" class="ct-bar"
                                                                ct:value="800" style="stroke-width: 3px"></line>
                                                            <line x1="35" x2="35" y1="42"
                                                                y2="31.200000000000003" class="ct-bar" ct:value="400"
                                                                style="stroke-width: 3px"></line>
                                                            <line x1="42.14285714285714" x2="42.14285714285714"
                                                                y1="50.1" y2="31.200000000000003" class="ct-bar"
                                                                ct:value="700" style="stroke-width: 3px"></line>
                                                            <line x1="49.285714285714285" x2="49.285714285714285"
                                                                y1="36.6" y2="31.200000000000003" class="ct-bar"
                                                                ct:value="200" style="stroke-width: 3px"></line>
                                                            <line x1="56.42857142857143" x2="56.42857142857143"
                                                                y1="60.9" y2="31.199999999999996" class="ct-bar"
                                                                ct:value="1100" style="stroke-width: 3px"></line>
                                                        </g>
                                                    </g>
                                                    <g class="ct-labels"></g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="right-chart-content">
                                            <h4>100</h4>
                                            <span>Sales return</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">
                                <div class="media border-none align-items-center">
                                    <div class="hospital-small-chart">
                                        <div class="small-bar">
                                            <div class="small-chart3 flot-chart-container">
                                                <div class="chartist-tooltip"></div><svg
                                                    xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%"
                                                    height="100%" class="ct-chart-bar"
                                                    style="width: 100%; height: 100%;">
                                                    <g class="ct-grids"></g>
                                                    <g>
                                                        <g class="ct-series ct-series-a">
                                                            <line x1="13.571428571428571" x2="13.571428571428571"
                                                                y1="69" y2="58.2" class="ct-bar"
                                                                ct:value="400" style="stroke-width: 3px"></line>
                                                            <line x1="20.714285714285715" x2="20.714285714285715"
                                                                y1="69" y2="52.8" class="ct-bar"
                                                                ct:value="600" style="stroke-width: 3px"></line>
                                                            <line x1="27.857142857142858" x2="27.857142857142858"
                                                                y1="69" y2="47.4" class="ct-bar"
                                                                ct:value="800" style="stroke-width: 3px"></line>
                                                            <line x1="35" x2="35" y1="69"
                                                                y2="42" class="ct-bar" ct:value="1000"
                                                                style="stroke-width: 3px"></line>
                                                            <line x1="42.14285714285714" x2="42.14285714285714"
                                                                y1="69" y2="50.1" class="ct-bar"
                                                                ct:value="700" style="stroke-width: 3px"></line>
                                                            <line x1="49.285714285714285" x2="49.285714285714285"
                                                                y1="69" y2="39.3" class="ct-bar"
                                                                ct:value="1100" style="stroke-width: 3px"></line>
                                                            <line x1="56.42857142857143" x2="56.42857142857143"
                                                                y1="69" y2="60.9" class="ct-bar"
                                                                ct:value="300" style="stroke-width: 3px"></line>
                                                        </g>
                                                        <g class="ct-series ct-series-b">
                                                            <line x1="13.571428571428571" x2="13.571428571428571"
                                                                y1="58.2" y2="31.200000000000003" class="ct-bar"
                                                                ct:value="1000" style="stroke-width: 3px"></line>
                                                            <line x1="20.714285714285715" x2="20.714285714285715"
                                                                y1="52.8" y2="39.3" class="ct-bar"
                                                                ct:value="500" style="stroke-width: 3px"></line>
                                                            <line x1="27.857142857142858" x2="27.857142857142858"
                                                                y1="47.4" y2="31.199999999999996" class="ct-bar"
                                                                ct:value="600" style="stroke-width: 3px"></line>
                                                            <line x1="35" x2="35" y1="42"
                                                                y2="33.9" class="ct-bar" ct:value="300"
                                                                style="stroke-width: 3px"></line>
                                                            <line x1="42.14285714285714" x2="42.14285714285714"
                                                                y1="50.1" y2="31.200000000000003" class="ct-bar"
                                                                ct:value="700" style="stroke-width: 3px"></line>
                                                            <line x1="49.285714285714285" x2="49.285714285714285"
                                                                y1="39.3" y2="33.9" class="ct-bar"
                                                                ct:value="200" style="stroke-width: 3px"></line>
                                                            <line x1="56.42857142857143" x2="56.42857142857143"
                                                                y1="60.9" y2="31.199999999999996" class="ct-bar"
                                                                ct:value="1100" style="stroke-width: 3px"></line>
                                                        </g>
                                                    </g>
                                                    <g class="ct-labels"></g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="right-chart-content">
                                            <h4>101</h4>
                                            <span>Purchase ret</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
