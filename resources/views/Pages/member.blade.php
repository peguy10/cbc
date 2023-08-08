
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
                             <h2>Membre du bureau</h2>
                          </div>
                       </div>
                    </div>
                    <div class="row column1">
                       <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Selectionner l'association </h2>
                                 </div>
                              </div>
                              <div class="full price_table padding_infor_info">
                                 <div class="row">
                                    <div class="col-lg-12">
                                       <div class="table-responsive-sm">
                                          <table class="table table-striped projects">
                                             <thead class="thead-dark bg-secondary">
                                                <tr>
                                                   <th style="width: 2%">No</th>
                                                   <th style="width: 30%">Association info</th>
                                                   <th>Nom</th>
                                                   <th>Members</th>
                                                   <th>Adresse</th>
                                                   <th>Status</th>
                                                </tr>
                                             </thead>
                                             <tbody>

                                                @foreach ($associations as $association)
                                                  <tr>
                                                   <td>1</td>
                                                   <td><a>{{ $association->but }}</a></td>
                                                   <td><a>{{ $association->name }}</a></td>
                                                   <td>
                                                      <a href=""><span class="badge bg-warning h3">?</span></a>
                                                   </td>
                                                   <td class="project_progress"><small>{{ $association->adresse }}</small>
                                                   </td>
                                                   <td>
                                                      <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#modelId"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                                   </td>
                                                </tr>
                                                @endforeach

                                             </tbody>
                                          </table>
                                       </div>
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
     <!-- Modal -->
   <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Association name</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <thead>
                       <tr>
                          <th>Nom</th>
                          <th>Association </th>
                          <th>Poste</th>
                       </tr>
                    </thead>
                    <tbody>
                       {{-- <tr>
                          <td>John</td>
                          <td>cbc Association</td>
                          <td>directeur</td>
                       </tr> --}}
                    </tbody>
                 </table>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                <button type="button" class="btn btn-warning">OK</button>
            </div>
        </div>
    </div>
   </div>
   </body>
</html>
