@extends('adminlte.template')
  
@section('title')
  dashboard
@endsection

@section('css')

@endsection

@section('content')
      <!-- <div class="container-fluid">
        
        <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>Company</p>
              </div>
              <div class="icon">
                <i class="fa fa-home"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53</h3>

                <p>Divisi</p>
              </div>
              <div class="icon">
                <i class="fa fa-map-signs"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>User</p>
              </div>
              <div class="icon">
                <i class="far fa-user-circle nav-icon"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Departement</p>
              </div>
              <div class="icon">
                <i class="fa fa-building"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
        </div>
        <div class="container-fluid">
        
        <div class="row">
          <div class="col-lg-6 col-6">
            
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Chart</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
            </div>
          </div>
          
          <div class="col-lg-3 col-6">
            
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>44</h3>

                <p>Country</p>
              </div>
              <div class="icon">
                <i class="fa fa-flag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
          <div class="col-lg-3 col-6">
            
            <div class="small-box bg-success">
              <div class="inner">
                <h3>65</h3>

                <p>City</p>
              </div>
              <div class="icon">
                <i class="fa fa-city"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
        </div> -->
@endsection
@section('script')
<!-- <script>
  var donutData = {
      labels: [
          'Company',
          'Divisi',
          'User',
          'Departement',
          'Country',
          'City',
      ],
      datasets: [
        {
          data: [700,500,400,600,300,100],
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }
      ]
    }
  var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieData        = donutData;
    var pieOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(pieChartCanvas, {
      type: 'pie',
      data: pieData,
      options: pieOptions
    })
</script> -->
@endsection