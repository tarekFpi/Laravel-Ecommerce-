
@extends('admin_muster')
@section('admin_content')

@php
$date = date('Y-m-d');
echo "Date:".$date;
@endphp
</h4>


<input type="hidden" id="current_date" value="<?php echo  $date;?>" />
   <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">E-commarce</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body" style="font-size: 24px;" >Sell Order</div>
                            <div class="card-body" style="font-size: 18px;" id="count_sell">1</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                              {{--   <a class="small text-white stretched-link" href="#">View Details</a> --}}

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-warning text-white mb-4">
                            <div class="card-body" style="font-size: 24px;">Purchase Order</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <div class="card-body" style="font-size: 18px;" id="count_purchase">1</div>
                              {{--   <a class="small text-white stretched-link" href="#">View Details</a> --}}

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-success text-white mb-4">
                            <div class="card-body" style="font-size: 24px;">SuccessFull Order</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <div class="card-body" style="font-size: 18px;" id="count_Approve">1</div>

                      {{--           <a class="small text-white stretched-link" href="#">View Details</a> --}}

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-danger text-white mb-4">
                            <div class="card-body" style="font-size: 24px;">Cencle</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">

                                <div id="count_sell">
                                    <div class="card-body" style="font-size: 18px;" id="count_Approve">1</div>
                                </div>
                            {{--     <a class="small text-white stretched-link" href="#">View Details</a> --}}

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-area me-1"></i>
                                Area Chart Example
                            </div>
                            <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-bar me-1"></i>
                                Bar Chart Example
                            </div>
                            <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                        </div>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        DataTable Example
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>

                                <tr>
                                    <th>pid</th>
                                    <th>Category</th>
                                    <th>Brand</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Discount</th>
                                    <th>Fee</th>
                                    <th>Payment</th>
                                    <th>Transction</th>
                                    <th>Status</th>
                                    <th>Bkash</th>
                                    <th>Date</th>
                                    <th>Image</th>
                                  </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2021</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>

    </div>
    @endsection

