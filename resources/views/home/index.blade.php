@extends('layout')
@section('page_title')
    <title>{{config('app.name')}} - Home</title> 
@stop
@section('page_level_css')
  <link href="{{url('/')}}/assets/plugins/nvd3/nv.d3.min.css" rel="stylesheet" type="text/css" media="screen" />
 <link href="{{url('/')}}/assets/plugins/jquery-datatable/media/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{url('/')}}/assets/plugins/jquery-datatable/extensions/FixedColumns/css/dataTables.fixedColumns.min.css" rel="stylesheet" type="text/css" />
    <link href="{{url('/')}}/assets/plugins/datatables-responsive/css/datatables.responsive.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{url('/')}}/css/pages-icons.css" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="{{url('/')}}/css/pages.css" rel="stylesheet" type="text/css" />
@stop
@section('page_content')
<div class="content sm-gutter">
 <div class="container-fluid padding-25 sm-padding-10">
            <!-- START ROW -->
            <div class="row"> 
      <div class="col-md-12 col-xlg-4">
        <div class="row">
            @foreach($subcategories as $subcategory)
                <div class="col-md-4 m-b-10">
            <!-- START WIDGET D3 widget_graphTileFlat-->
            <div class="widget-8 panel no-border bg-complete no-margin widget-loader-bar">
              <div class="container-xs-height full-height">
                <div class="row-xs-height">
                  <div class="col-xs-height col-top">
                    <div class="panel-heading top-left top-right">
                      <div class="panel-title text-black hint-text">
                        <span class="font-montserrat fs-11 all-caps">{{ucfirst($subcategory->category->name)}}
                                            </span>
                      </div>
                         @if($subcategory->reports->count() > 0)
                     <div class="panel-controls">
                              <ul>
                                <li class="hidden-xlg">
                                  <div class="dropdown">
                                    <a data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                      <i class="pg-map"></i>
                                    </a>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                      <li><a href="{{url('/map/sid/'.$subcategory->id)}}">View on map</a>
                                      </li>
                                    </ul>   
                                  </div>
                                </li>
                              </ul>
                            </div>
                        @endif
                    </div>
                  </div>
                </div>
                <div class="row-xs-height ">
                  <div class="col-xs-height col-top relative">
                    <div class="row">
                      <div class="col-sm-8">
                        <div class="p-l-20">
                          <h3 class="no-margin p-b-5 text-white">{{ucfirst(str_replace('_',' ',$subcategory->name))}}</h3>
                          <p class="small hint-text m-t-5">
                            <img src="{{url('/')}}/img/trans.png" />
                          </p>
                        </div>
                      </div>
                      <div class="col-sm-4 padding-25">
                          <h1 class="pull-right m-r-25 text-white fs-25">{{$subcategory->reports->count()}}</h1>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- END WIDGET -->
          </div>
            @endforeach
        </div>
      </div>             
    </div>   
     
    <div class="row">
                  <div class="col-md-6">
                    <!-- START WIDGET D3 widget_graphWidget-->
                    <div class="widget-12 panel no-border widget-loader-circle no-margin">
                      <div class="panel-body">
                        <div class="row">
                          <div class="col-xlg-8 ">
                            <div class="p-l-10"> 
                              <div class="nvd3-line line-chart text-center" data-x-grid="false">
                                <svg></svg>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div> 
                    <!-- END WIDGET -->
                  </div>
                   <div class="col-md-6">
                    <!-- START WIDGET D3 widget_graphWidget-->
                    <div class="widget-12 panel no-border widget-loader-circle no-margin">
                      <div class="panel-body">
                        <div class="row">
                          <div class="col-xlg-8 ">
                            <div class="p-l-10"> 
                              <div class="nvd3-pie line-chart text-center" data-x-grid="false">
                                <svg style='height:350px;width:400px'></svg>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div> 
                    <!-- END WIDGET -->
                  </div>
                </div>
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-transparent">
             <div class="panel-heading">
                <div class="panel-title">Report Table</div>
                <div class="pull-right">
                  <div class="col-xs-12">
                    <input type="text" id="search-table" class="form-control pull-right" placeholder="Search">
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
                        <div class="panel-body">
                <div class="table-responsive ">
                  <table class="table table-hover demo-table-search table-responsive-block" id="tableWithSearch">
                    <thead>
                      <tr>
                        <!-- NOTE * : Inline Style Width For Table Cell is Required as it may differ from user to user
											Comman Practice Followed
											-->
                       
                        <th style="width:10%">Category</th>
                        <th style="width:10%">Subcategory</th>
                        <th style="width:15%">Coordinates</th>
                        <th style="width:20%">Comment</th>
                        <th style="width:15%">Phone Number</th>
                        <th style="width:15%">Date</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($subcategories as $subcategory)
                          @foreach($subcategory->reports as $report)
                         <tr>
                        <td class="v-align-middle ">
                          <p>{{ucfirst($subcategory->category->name)}}</p>
                        </td>
                        <td class="v-align-middle">
                          <p>{{ucfirst(str_replace('_',' ',$subcategory->name))}}</p>
                        </td>
                        <td class="v-align-middle" >
                          <p class="coords">{{$report->coordinates}}</p>
                        </td>
                        <td class="v-align-middle">
                          <p>{{$report->comment}}</p>
                        </td>
                        <td class="v-align-middle">
                              <p>{{$report->name}}</p>
                        </td>
                         <td class="v-align-middle"> 
                          <p>{{ date('F d, Y', $report->report_timestamp) }}</p>
                        </td>
                      </tr>
                          @endforeach
                        @endforeach
                        
                    </tbody>
                  </table>
                </div>
              </div>
          </div>
        </div>
     </div>
</div>  
</div>
@stop
@section('page_level_js')
    <script src="{{url('/')}}/assets/plugins/nvd3/lib/d3.v3.js" type="text/javascript"></script>
    <script src="{{url('/')}}/assets/plugins/nvd3/nv.d3.min.js" type="text/javascript"></script>
    <script src="{{url('/')}}/assets/plugins/nvd3/src/utils.js" type="text/javascript"></script>
    <script src="{{url('/')}}/assets/plugins/nvd3/src/tooltip.js" type="text/javascript"></script>
    <script src="{{url('/')}}/assets/plugins/nvd3/src/interactiveLayer.js" type="text/javascript"></script>
    <script src="{{url('/')}}/assets/plugins/nvd3/src/models/axis.js" type="text/javascript"></script>
    <script src="{{url('/')}}/assets/plugins/nvd3/src/models/line.js" type="text/javascript"></script>
    <script src="{{url('/')}}/assets/plugins/nvd3/src/models/lineWithFocusChart.js" type="text/javascript"></script>
 <script src="{{url('/')}}/assets/plugins/jquery-datatable/media/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="{{url('/')}}/assets/plugins/jquery-datatable/extensions/TableTools/js/dataTables.tableTools.min.js" type="text/javascript"></script>
    <script src="{{url('/')}}/assets/plugins/jquery-datatable/media/js/dataTables.bootstrap.js" type="text/javascript"></script>
    <script src="{{url('/')}}/assets/plugins/jquery-datatable/extensions/Bootstrap/jquery-datatable-bootstrap.js" type="text/javascript"></script>
    <script type="text/javascript" src="{{url('/')}}/assets/plugins/datatables-responsive/js/datatables.responsive.js"></script>
    <script type="text/javascript" src="{{url('/')}}/assets/plugins/datatables-responsive/js/lodash.min.js"></script>
 <script type="text/javascript" src="//maps.google.com/maps/api/js?key={{config('app.google_map_api_key')}}"></script>
<script src="{{url('/')}}/assets/js/datatables.js" type="text/javascript"></script>
<script>
 d3.json('http://revox.io/json/charts.json', function(data) {
    nv.addGraph(function() {
                    var chart = nv.models.lineChart()
                        .x(function(d) {
                            return d[0]
                        })
                        .y(function(d) {
                            return d[1]
                        })
                        .color([
                            $.Pages.getColor('success'),
                            $.Pages.getColor('danger'),
                            $.Pages.getColor('primary'),
                            $.Pages.getColor('complete'),

                        ])
                        .showLegend(false)
                        .margin({
                            left: 30,
                            bottom: 35
                        })
                        .useInteractiveGuideline(true);

                    chart.xAxis
                        .tickFormat(function(d) {
                            return d3.time.format('%a')(new Date(d))
                        });

                    chart.yAxis.tickFormat(d3.format('d'));

                    d3.select('.nvd3-line svg')
                        .datum(data.nvd3.line)
                        .transition().duration(500)
                        .call(chart);

                    nv.utils.windowResize(chart.update);

                    $('.nvd3-line').data('chart', chart);

                    return chart;
                });
});
    
    
    //Donut chart example
nv.addGraph(function() {
  var chart = nv.models.pieChart()
      .x(function(d) { return d.label })
      .y(function(d) { return d.value })
      .showLabels(true)     //Display pie labels
      .labelThreshold(.05)  //Configure the minimum slice size for labels to show up
      .labelType("percent") //Configure what type of data to show in the label. Can be "key", "value" or "percent"
      .donut(true)          //Turn on Donut mode. Makes pie chart look tasty!
      .donutRatio(0.35)     //Configure how big you want the donut hole size to be.
  .showLegend(true) 
      ;

    d3.select(".nvd3-pie svg")
        .datum(exampleData())
        .transition().duration(350)
        .call(chart);

  return chart;
});

//Pie chart example data. Note how there is only a single array of key-value pairs.
function exampleData() {
  return  [
      @foreach($subcategories as $subcategory)
        { 
            "label": "{{$subcategory->name}}",
            "value" : {{$subcategory->reports->count()}}
        }, 
      @endforeach
    ];
}
    
    
     var geocoder = new google.maps.Geocoder();
     $(document).ready(function(){         
    $("#tableWithSearch .coords").each(function() { 
        var element = $(this);
        var coords = element.text();
       getAddressAndUpdateElement(element,coords);    
       });
     });
    
    
    function getAddressAndUpdateElement(element,coordinates) {
         var latlng = new google.maps.LatLng(coordinates.split(",")[0], coordinates.split(",")[1]);
         geocoder.geocode({'latLng': latlng}, function (results, status) {
            if (status === google.maps.GeocoderStatus.OK) {
                if (results[1]) {
              element.append("<br>"+results[1].formatted_address) 
              console.log(results[1]);
              } 
           }  
      });
    }
    
    
</script>
@stop