<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>


        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{ asset('fontend/css/styles.css') }}" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">

        @guest

        @else
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">E-commarce</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
             {{--         <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>  --}}
                </div>
            </form>

           <div class="text-white">

            {{ Auth::user()->name }}
           </div>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                     <li><a class="dropdown-item" href="#!">Settings</a></li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                                   Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

                            <li><a class="dropdown-item" href="{{ route('change_password') }}"> {{ __('Change Password') }} </a></li>


                    </ul>
                </li>
            </ul>
        </nav>

        <div id="layoutSidenav">

            <div id="layoutSidenav_nav">

                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                 {{--             <div class="sb-sidenav-menu-heading">Core</div>  --}}
                            <a class="nav-link" href="{{ route('home') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Home
                            </a>


                            <a class="nav-link" href="{{ route('category_formShow') }}">
                                <div class="sb-nav-link-icon">
                                    <i class="fas fa-address-book fa"></i>
                                 </div>
                                 Categrory
                            </a>


                            <a class="nav-link collapsed" href="{{ route('Brand_FromShow') }}" >

                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Barand Name
                            </a>


                            <a class="nav-link collapsed" href="{{ route('show_product_Name_form') }}" >
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                product  Name
                            </a>


                            <a class="nav-link collapsed" href="{{ route('prduct_purchaseFrom') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Purhase product
                            </a>


                            <a class="nav-link collapsed" href="{{ route('stockFrom_show') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Stock product
                            </a>

                            <a class="nav-link collapsed" href="{{ route('SellTable_From_Show') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Sell product
                            </a>

                            <a class="nav-link collapsed" href="{{ route('profit_show_From') }}">

                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Profit
                            </a>

                            <a class="nav-link collapsed" href="{{ route('Approv_ShowFrom') }}">

                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Approv Order
                            </a>

                            <a class="nav-link collapsed" href="{{ route('paymentmathod_Add_Form') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Payment Mathod Add
                            </a>



                            <a class="nav-link collapsed" href="{{ route('Cancle_orderForm') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Cancle order
                            </a>


                            <a class="nav-link collapsed" href="{{ route('vourcher_AddForm') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Vouchar Code Add
                            </a>



                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>

                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                @endguest
        @yield('admin_content')
        </div>
     {{--     <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body">Primary Card</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-warning text-white mb-4">
                            <div class="card-body">Warning Card</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-success text-white mb-4">
                            <div class="card-body">Success Card</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-danger text-white mb-4">
                            <div class="card-body">Danger Card</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
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
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </tfoot>
                            <tbody>


                                <tr>
                                    <td>Sonya Frost</td>
                                    <td>Software Engineer</td>
                                    <td>Edinburgh</td>
                                    <td>23</td>
                                    <td>2008/12/13</td>
                                    <td>$103,600</td>
                                </tr>
                                <tr>
                                    <td>Jena Gaines</td>
                                    <td>Office Manager</td>
                                    <td>London</td>
                                    <td>30</td>
                                    <td>2008/12/19</td>
                                    <td>$90,560</td>
                                </tr>
                                <tr>
                                    <td>Quinn Flynn</td>
                                    <td>Support Lead</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td>2013/03/03</td>
                                    <td>$342,000</td>
                                </tr>
                                <tr>
                                    <td>Charde Marshall</td>
                                    <td>Regional Director</td>
                                    <td>San Francisco</td>
                                    <td>36</td>
                                    <td>2008/10/16</td>
                                    <td>$470,600</td>
                                </tr>
                                <tr>
                                    <td>Haley Kennedy</td>
                                    <td>Senior Marketing Designer</td>
                                    <td>London</td>
                                    <td>43</td>
                                    <td>2012/12/18</td>
                                    <td>$313,500</td>
                                </tr>
                                <tr>
                                    <td>Tatyana Fitzpatrick</td>
                                    <td>Regional Director</td>
                                    <td>London</td>
                                    <td>19</td>
                                    <td>2010/03/17</td>
                                    <td>$385,750</td>
                                </tr>

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

    </div>  --}}

    <script>
        $(document).ready(function(){

            countSell();
        function countSell(){
            var date=$('#current_date').val();

            $.ajax({
                url:"{{ route('Count_sellItem') }}",
                type:"GET",
                dataType:"json",
                data:{
                    date:date
                  },
                   success:function(respones){
                    var  data="";
        //   data="<div class='card-body' style='font-size:18px;'>"+respones+"</div>";
           $('#count_sell').html(respones);
                   }
               });
        }

        count_purchase();
        function count_purchase(){
            var date=$('#current_date').val();

            $.ajax({
                url:"{{ route('Count_puchase_Item') }}",
                type:"GET",
                dataType:"json",
                data:{
                    date:date
                  },
                   success:function(respones){
                    var  data="";
           $('#count_purchase').html(respones);
                   }
               });
        }

        count_Approve();
        //count_Approve
        function count_Approve(){
            var date=$('#current_date').val();

            $.ajax({
                url:"{{ route('Count_Approve_Item') }}",
                type:"GET",
                dataType:"json",
                data:{
                    date:date
                  },
                   success:function(respones){
                    var  data="";
             $('#count_Approve').html(respones);
                   }
               });
        }

ShowAllOrder();
function ShowAllOrder(){
    var date=$('#current_date').val();
   $.ajax({
      url:"{{ route('SellTable_All_OrderShow_count') }}",
      type:"GET",
       dataType:"json",
       data:{
        date:date
      },
       success:function(respones){
         var data="";
        var total_price=0;
        var psell=0;

       $.each(respones,function(key,value){
            data= data + "<tr>"
            data= data + "<th>"+value.serial_id+"</th>"
            data= data + "<th>"+value.CategoryName+"</th>"
            data= data + "<th>"+value.Brand_name+"</th>"
            data= data + "<th>"+value.productName+"</th>"
            data= data + "<th>"+value.product_price+"</th>"
            data= data + "<th>"+value.sell_quntity+"</th>"
            data= data + "<th>"+value.sell_discount+"</th>"
            data= data + "<th>"+value.Delivary_free+"</th>"
            data= data + "<th>"+value.Payment_mathod+"</th>"
            data= data + "<th>"+value.transaction_id+"</th>"
            data= data + "<th>"+value.Order_status+"</th>"
            data= data + "<th>"+value.userBkash_phone+"</th>"
            data= data + "<th>"+value.OrderDate+"</th>"
            data= data + "<th><img src="+value.Image+" width='200px' height='150px'></th>"
            data= data + "<th>"
         data= data + "</tr>";

         });
         $('tbody').html(data);

       }
   });

 }

});
    </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('fontend/js/scripts.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('fontend/demo/chart-area-demo.js')}}"></script>
        <script src="{{ asset('fontend/demo/chart-bar-demo.js')}}
        "></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{ asset('fontend/js/datatables-simple-demo.js') }}"></script>
    </body>
</html>

