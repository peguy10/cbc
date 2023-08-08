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
                             <h2>GESTION DES SECTIONS</h2>
                          </div>
                       </div>
                    </div>
                    <div class="row column1">
                       <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2></h2>
                                 </div>
                                 <div class="row float-right">
                                    <button class="btn btn-warning text-white mr-2"  data-toggle="modal" data-target="#modelId">+ NOUVELLE SECTION</button>
                                    <button class="btn bg-dark text-white"  data-toggle="modal" data-target="#periode">+ NOUVELLE PERIODE</button>
                                 </div>
                              </div>
                              <div class="full price_table padding_infor_info">
                                 <div class="row">
                                    <div class="col-md-4">
                                       <div class="table-responsive-sm">
                                           <table class="table table-striped projects">
                                               <caption align="top">LISTE DES SECTIONS</caption>
                                              <thead class="thead-light bg-secondary">
                                                 <tr>
                                                    <th style="width: 2%">Periode</th>
                                                    <th style="width: 30%">Libelle</th>
                                                    <th>Actions</th>
                                                 </tr>
                                              </thead>
                                              <tbody>
                                                @foreach ($sections as $section)
                                                <tr>
                                                    <td>
                                                        <a href="">{{ $section->Periode->periode }}</a>
                                                    </td>
                                                    <td>
                                                        <a>{{ $section->nom }}</a>
                                                     </td>
                                                     <td>
                                                       <a href="" data-toggle="modal" data-target="#detail{{$section->id}}" class="text-warning h3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                   </td>
                                                 </tr>
                                                 <!-- Modal -->
                                                 <div class="modal fade" id="detail{{$section->id}}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                                   <div class="modal-dialog" role="document">
                                                      <div class="modal-content">
                                                         <div class="modal-header">
                                                            <h5 class="modal-title">INFORMATION SUR <span class="text-warning">{{$section->nom}}</span> </h5>
                                                               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span>
                                                               </button>
                                                         </div>
                                                         <div class="modal-body">
                                                            
                                                         </div>
                                                         <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-warning">Save</button>
                                                         </div>
                                                      </div>
                                                   </div>
                                                 </div>
                                                @endforeach

                                              </tbody>
                                           </table>
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                       <div class="table-responsive-sm">
                                           <table class="table table-striped projects">
                                               <caption align="top">LISTE DES ADHERENTS DE CETTE SECTION</caption>
                                              <thead class="thead-light bg-secondary">
                                                 <tr>
                                                    <th>periode</th>
                                                    <th>date de debut</th>
                                                    <th>date de fin</th>
                                                    <th>droit Entree</th>
                                                    <th>Cotisations</th>
                                                 </tr>
                                              </thead>
                                              <tbody>
                                                @foreach ($periodes as $periode)
                                                 <tr>
                                                    <td>{{ $periode->periode }}</td>
                                                    <td>{{ $periode->date_debut }}</td>
                                                    <td>{{ $periode->date_fin }}</td>
                                                    <th>{{ $periode->droit }} XAF</th>
                                                    <th>{{ $periode->cotisation_annuelle }} XAF</th>
                                                    {{-- <td>
                                                        <div class="dropdown">
                                                            <a href="" class="text-warning h3 dropdown-toggle" id="triggerId" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                                                            <div class="dropdown-menu" aria-labelledby="triggerId">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item disabled" href="#">Disabled action</a>
                                                                <h6 class="dropdown-header">Section header</h6>
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">After divider action</a>
                                                            </div>
                                                        </div>
                                                    </td> --}}
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

     <!-- Modal section -->
   <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nouvelle Section</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('section.store') }}">
                    @csrf
                    <div class="form-group row">
                      <label for="inputtext3" class="col-sm-2 col-form-label">nom</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputtext3" name="nom">
                      </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputtext3" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                          <textarea type="text" class="form-control" id="inputtext3" name="description"></textarea>
                        </div>
                      </div>
                    <div class="form-group row">
                      <label for="inputtext3" class="col-sm-2 col-form-label">Periode</label>
                      <div class="col-sm-10">
                          <select name="period_id" id="" class="form-control">
                            @foreach ($periodes as $periode)
                                <option value="{{$periode->id}}">{{$periode->periode}}</option>
                            @endforeach
                          </select>

                      </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">fermer</button>
                <button type="submit" class="btn btn-warning">Enregistrer</button>
            </div>
            </form>
        </div>
    </div>
   </div>

   <!-- Modal periode-->
   <div class="modal fade" id="periode" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nouvelle Periode</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('periodes.store') }}">
                    @csrf
                    <div class="form-group row">
                      <label for="inputtext3" class="col-sm-2 col-form-label">periode</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputtext3" name="periode">
                      </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputtext3" class="col-sm-2 col-form-label">date de debut</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" id="inputtext3" name="date_debut">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputtext3" class="col-sm-2 col-form-label">date de fin</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" id="inputtext3" name="date_fin">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputtext3" class="col-sm-2 col-form-label">Droit d'entrer</label>
                        <div class="col-sm-10">
                          <input type="number" class="form-control" id="inputtext3" name="droit">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputtext3" class="col-sm-2 col-form-label">Cotisation Annuelle</label>
                        <div class="col-sm-10">
                          <input type="number" class="form-control" id="inputtext3" name="cotisation_annuelle">
                        </div>
                      </div>
                    <div class="form-group row">
                        <label for="inputtext3" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                          <textarea type="text" class="form-control" id="inputtext3" name="description"></textarea>
                        </div>
                      </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">fermer</button>
                <button type="submit" class="btn btn-warning">Enregistrer</button>
            </div>
         </form>
        </div>
    </div>
   </div>
   </body>
</html>
