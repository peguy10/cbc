<!DOCTYPE html>
<html lang="en">
   <head>
    @include('layouts.head')
   </head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            @include('layouts.nav')

            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               @include('layouts.slider')
               <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Dashboard</h2>
                           </div>
                        </div>
                     </div>
                     <div class="row column1">
                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div>
                                    <i class="fa fa-users text-warning"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <p class="total_no">{{$users_count}}</p>
                                    <p class="head_couter">adherants</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div>
                                    <i class="fa fa-clock-o text-warning"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <p class="total_no">{{$periode_count}}</p>
                                    <p class="head_couter">Periode</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div>
                                    <i class="fa fa-calendar text-warning"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <p class="total_no">.</p>
                                    <p class="head_couter">prestation</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div>
                                    <i class="fa fa-comments-o text-warning"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <p class="total_no">54</p>
                                    <p class="head_couter">Comments</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row column1 social_media_section">

                     </div>
                     <!-- graph -->
                     <div class="row column2 graph margin_bottom_30">
                        <div class="col-md-l2 col-lg-12">

                        </div>
                     </div>
                     <!-- end graph -->
                     <div class="row column3">

                     </div>
                     <div class="row column4 graph">

                     </div>
                  </div>
                  <!-- footer -->
                  <div class="container-fluid">
                     <div class="footer">
                        <p>Copyright © 2023 Designed by inov Cameroun. All rights reserved.<br><br>
                           CBC bank</a>
                        </p>
                     </div>
                  </div>
               </div>
               <!-- end dashboard inner -->
            </div>
         </div>
      </div>
      <!-- jQuery -->
     @include('layouts.js')
   </body>
</html>
