@extends('layouts.app')

@section('added_css')

    
<link rel="stylesheet" href="{{asset('datatable/datatables.css')}}">   



    
@endsection

@section('content')


{{-- first box for buttons filters --}}
<div class="box box-solid box-primary">
                <div class="box-header with-border">
                    <i class="fa fa-wrench" style="font-size: 18px"></i>
                    <h5 class="box-title">Projets : Filtre/Recherche</h5>
                    <ul class="box-controls pull-right">
                    <li><a class="box-btn-slide" href="#"></a></li>                  
                    </ul>
                </div>
                <!-- /.box-header -->
                <div class="box-body pb-0">
                    <div class="row">                        
                                    @if(count($projects) > 0)

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Commune</label>
                                            <select name="commune" id="commune" class="form-control select2" style="width: 100%;">
                                                <option value="all" selected="selected">Indifferent</option>

                                                @foreach( $communes as $commune)
                                                    <option value="{{$commune }}">{{$commune }}</option>
                                                @endforeach  
                                             </select>
                                        </div> 
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Douars</label>
                                            <select name="douar" id="douar" class="form-control select2" style="width: 100%;">
                                                <option value="all" selected="selected">Indifferent</option>

                                                @foreach( $douars as $douar)
                                                    @if($douar !=  "")
                                                                                                          
                                                        <option value="{{$douar }}">{{$douar }}</option>
                                                    @endif
                                                @endforeach  
                                             </select>
                                        </div> 
                                    </div>


                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Programme</label>
                                            <select name="programme" id="programme" class="form-control select2" style="width: 100%;">
                                                <option value="all" selected="selected">Indifferent</option>
                                                <option value="DPA">DPA</option>
                                                <option value="DPETL">DPETL</option>
                                                <option value="CP">CP</option>
                                                <option value="Gouverneur">Gouverneur</option>
                                                <option value="Eaux et forêt">Eaux et forêt</option>
                                                <option value="Région">Région</option>
                                                <option value="INDH">INDH</option>
                                                <option value="Communes">Communes</option>
                                                <option value="Convention CP_METL">Convention CP_METL</option>
                                                <option value="PDTSR-Gouverneur">PDTSR-Gouverneur</option>
                                                <option value="PDTSR-Région">PDTSR-Région</option>
                                                <option value="PDTSR-DPETL">PDTSR-DPETL</option>
                                                <option value="PDTSR-DPA">PDTSR-DPA</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                        <label>Sous Programme</label>
                                        <select name="sous_programme" id="sous_programme" class="form-control select2" style="width: 100%;">
                                            <option value="all" selected="selected">Indifferent</option>
                                            <option value="FDR">FDR</option>
                                            <option value="Parcours">Parcours</option>                                            
                                        </select>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                            <div class="form-group">
                                <label>Etat d'avancement</label>
                                <select name="etat_avancement" id="etat_avancement" class="form-control select2" style="width: 100%;">
                                    <option value="all" selected="selected">Indifferent</option>
                                    <option value="Réalisé">Réalisé</option>
                                    <option value="En cours de réalisation">En cours de réalisation</option>
                                    <option value="Programmé">Programmé</option>
                                    <option value="En état d'arrêt">En état d'arrêt</option>
                                    <option value="En souffrance">En souffrance</option>
                                
                                </select>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Type d'intervention</label>
                                <select name="type_intervantion" id="type_intervantion" class="form-control select2" style="width: 100%;">
                                    <option value="all" selected="selected">Indifferent</option>
                                    <option value="Ouverture">Ouverture</option>
                                    <option value="Etude">Etude</option>
                                    <option value="Terrassement + Ouvrages">Terrassement + Ouvrages</option>
                                    <option value="Revêtement">Revêtement</option>
                                    <option value="Dallage">Dallage</option>
                                    <option value="Pavé">Pavé</option>
                                    <option value="Recalibrage">Recalibrage</option>
                                    <option value="Elargissement">Elargissement</option>
                                    <option value="Renforcement piste">Renforcement piste</option>
                                    <option value="ouvrages d'art">ouvrages d'art</option>
                                    <option value="Entretien">Entretien</option>
                                </select>
                            </div>
                        </div>

                                    @else
                                    <h2>Pas de projet Actuelement</h2>
                                    @endif
                                            
                    </div>
                </div>
</div>

{{--end  first box for buttons filters --}}

{{-- second box for datatables --}}
<div class="row">
                    <div class="col-12">
                        <div class="box box box-solid box-primary" >
                            <div class="box-header with-border">
                                <i class="fa fa-wrench" style="font-size: 18px"></i>
                                <h5 class="box-title">Resultats</h5>
                            <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#modal-left" style="font-size : 12px;padding : 6px"><img src="{{asset('svg/excel.svg')}}" width=17px height=17px style="margin-right : 7px"/><b style="color : white">EXPORTER</b></button>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                               
                            <!-- table repsosive div -->
                                <div class="table-responsive">
                                    <!--table datatable-->
                                    <table id="datatable_projets" class="table table-bordered table-striped no-footer" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Liaison routière</th>
                                                <th>Longueur(km)</th>
                                                <th>Type d'intervention</th>
                                                <th>Programme</th>
                                                <th>Sous Programme</th>                                                
                                                <th>Etat d'avancement</th>
                                                <th>Année</th>
                                            </tr>
                                        </thead>
                                     
                                    </table>
                                    <!-- /. table datatable-->
                                </div>
                                <!-- /. table responsive div-->
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
{{-- second box for datatables --}}

@endsection


@section('added_script')

     <script src="{{asset('datatable/datatables.js')}}"></script>
            
     <script>
			$('#datatable_projets').DataTable( {
				"processing": true,
				"serverSide": true,
				"ajax": {
					"url":"<?= route('dataProcessing') ?>",
					"dataType":"json",
					"type":"POST",
					"data":{"_token":"<?= csrf_token() ?>"}
				},
				"columns":[
					{"data":"liaison"},
					{"data":"longueur"},
					{"data":"type_d_intervention"},
					{"data":"programme"},
					{"data":"sous_programme"},
					{"data":"etat_d_avancement"},
					{"data":"annee_de_l_operation"}
				
				]
			} );
		</script>

    
    
@endsection