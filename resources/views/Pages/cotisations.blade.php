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
                             <h2>GESTION DES COTISATIONS</h2>
                          </div>
                       </div>
                    </div>
                    <div class="row column1">
                        <!-- table section -->
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Liste des cotisation</h2>
                                 </div>
                                 <div class="row pl-5">
                                   <label for="">selectionner la periode</label>
                                    <form method="POST" action="{{route('cotisationP')}}">
                                    @csrf
                                       <select name="period_id" id="" class="form-control-sm ml-2">
                                           <option value=""></option>
                                           @foreach ($periodes as $periode)
                                              <option value="{{$periode->id}}">{{$periode->periode}}</option>
                                           @endforeach
                                       </select>
                                   <button class="btn btn-warning text-white ml-5" type="submit">Afficher Cotisation</button>
                                       
                                    </form>

                                 </div>
                                 @if(session()->has('message')) 
                                    <div class="row">
                                       <div class="col-lg-6">date de debut : </div>
                                       <div class="col-lg-6">01/02/2023</div>
                                       <div class="col-lg-6">date de fin</div>
                                       <div class="col-lg-6">01/03/2023</div>
                                       </div>
                                       <div class="alert alert-success">
                                          {{ session()->get('message') }}
                                       </div>
                                    </div>
                                 @endif
                              <div class="table_section padding_infor_info">
                                 <div class="table-responsive-sm">
                                    <table class="table">
                                       <thead>
                                          <tr>
                                             <th>#</th>
                                             <th>Nom & Prenom</th>
                                             <th>A régler</th>
                                             <th>Réglé</th>
                                             <th>Reste</th>
                                             <th>Droit d'entrée</th>
                                             <th>Cotisation Annuelle</th>
                                             <th>Date Paiement</th>
                                             <th>Action</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          @foreach ($cotisations as $cotisation)
                                             <tr>
                                                <td>{{ $cotisation->id }}</td>
                                                <td>{{ $cotisation->user->name }}</td>
                                                <td>{{ $cotisation->periode->cotisation_annuelle }}</td>
                                                <td>{{ $cotisation->regler }}</td>
                                                <td>{{ $cotisation->reste }}</td>
                                                <td>{{ $cotisation->periode->droit }}</td>
                                                <td>{{ $cotisation->periode->cotisation_annuelle }}</td>
                                                <td>{{ $cotisation->created_at->format('d M Y') }}</td>
                                                <td>
                                                  <a class="text-warning h3"  data-toggle="modal" data-target="#edit{{$cotisation->id}}" href="#"><i class="fa fa-edit" aria-hidden="true"></i></a> 
                                                </td>
                                             </tr>
                                             <div class="modal fade" id="edit{{$cotisation->id}}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                   <div class="modal-content">
                                                      <div class="modal-header">
                                                         <h5 class="modal-title">Modifier Paiement</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                               <span aria-hidden="true">&times;</span>
                                                            </button>
                                                      </div>
                                                      <div class="modal-body">
                                                         <form class="row g-3 needs-validation" novalidate method="POST" action="{{route('cotisation.update',$cotisation->id)}}">
                                                            @csrf
                                                            @method('put')
                                                            <div class="col-md-12">
                                                               <label for="validationCustom04" class="form-label">l'adherant  :  <span class="text-warning ml-2">{{$cotisation->user->name}}</span> </label>
                                                               <input type="hidden" class="form-control" id="validationCustom04" name="user_id" value="{{$cotisation->user->id}}">
                                                               <div class="invalid-feedback">
                                                                  Please select a valid adherent.
                                                               </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                               <label for="validationCustom04" class="form-label">Periode  :  <span class="text-warning ml-2">{{$cotisation->periode->periode}}</span> </label>
                                                               <input type="hidden" class="form-control" id="validationCustom04" name="periode_id" value="{{$cotisation->periode->id}}">
                                                               <div class="invalid-feedback">
                                                                  Please select a valid adherent.
                                                               </div>
                                                            </div>
                                                            <div class="row col-md-12">
                                                            
                                                               <div class="col-md-4">
                                                                  <label for="validationCustom01" class="form-label">Deja régler</label>
                                                                  <input type="number" class="form-control" id="validationCustom01" value="{{$cotisation->regler}}" readonly>
                                                                  <div class="valid-feedback">
                                                                     Looks good!
                                                                  </div>
                                                               </div> 
                                                               <div class="col-md-8">
                                                               
                                                                  <label for="validationCustom01" class="form-label">nouveau reglement</label>
                                                                  <input type="number" class="form-control" id="validationCustom01" value="" required name="regler">
                                                                  <div class="valid-feedback">
                                                                     Looks good!
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                               <label for="validationCustom01" class="form-label">Observation</label>
                                                               <textarea class="form-control" id="validationCustom01" name="observation" required></textarea>
                                                               <div class="valid-feedback">
                                                                  Looks good!
                                                               </div>
                                                            </div>
                                                            <div class="modal-footer float-right">
                                                               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                               <button type="submit" class="btn btn-warning">Save</button>
                                                            </div>
                                                         </form>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
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
                           <div class=" full button_sction padding_infor_info button_style1 padding-bottom_0">
                               <!-- button main -->
                               <div class="button_block"><button type="button" class="btn cur-p btn-primary"> + Nouveau</button></div>
                               <div class="button_block"><button type="button" class="btn cur-p btn-warning" data-toggle="modal" data-target="#modelId"><i class="fa fa-money" aria-hidden="true"></i> Paiement</button></div>
                               <div class="button_block"><button type="button" class="btn cur-p btn-secondary"><i class="fa fa-plus-circle" aria-hidden="true"></i> Nouvelle periode</button></div>
                               <div class="button_block"><button type="button" class="btn cur-p btn-dark"><i class="fa fa-check-circle" aria-hidden="true"></i> selctionner Association</button></div>
                               <!-- button border -->
                           </div>
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



     {{-- modal paiement --}}
      <!-- Button trigger modal -->
      <!-- Modal -->
      <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title">Paiement</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                     </button>
               </div>
                  <div class="modal-body">
                     <form class="row g-3 needs-validation" novalidate method="POST" action="{{route('cotisation.store')}}">
                      @csrf;
                        <div class="col-md-4">
                           <label for="validationCustom04" class="form-label">l'adherant</label>
                           <select class="form-control" id="validationCustom04" name="user_id" required>
                              <option selected disabled value="">Choisir...</option>
                              @foreach ($users as $user)
                                 <option value="{{$user->id}}">{{$user->name}}</option>
                              @endforeach
                           </select>
                           <div class="invalid-feedback">
                              Please select a valid adherent.
                           </div>
                        </div>
                        <div class="col-md-3">
                           <label for="validationCustom01" class="form-label">regler</label>
                           <input type="number" class="form-control" id="validationCustom01" value="" required name="regler">
                           <div class="valid-feedback">
                              Looks good!
                           </div>
                        </div>
                        <div class="col-md-4">
                           <label for="validationCustom04" class="form-label">Periode</label>
                           <select class="form-control" id="validationCustom04" name="periode_id" required>
                              <option selected disabled value="">Choisir...</option>
                              @foreach ($periodes as $periode)
                                 <option value="{{$periode->id}}">{{$periode->periode}}</option>
                              @endforeach
                           </select>
                           <div class="invalid-feedback">
                              Please select a valid adherent.
                           </div>
                        </div>
                        <div class="col-md-12">
                           <label for="validationCustom01" class="form-label">Observation</label>
                           <textarea class="form-control" id="validationCustom01" name="observation" required></textarea>
                           <div class="valid-feedback">
                              Looks good!
                           </div>
                        </div>
                        <div class="modal-footer float-right">
                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                           <button type="submit" class="btn btn-warning">Save</button>
                        </div>
                     </form>
                  </div>
            </div>
         </div>
      </div>
   </body>
</html>
