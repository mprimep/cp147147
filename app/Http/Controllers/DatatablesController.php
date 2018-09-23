<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;

class DatatablesController extends Controller
{
   
        public function getProjects(Request $request){
           
		//print_r($request->all());
		$columns = array(
			0 => 'liaison',
			1 => 'longueur',
			2 => 'type_d_intervention',
			3 => 'programme',
			4 => 'sous_programme',
			5 => 'etat_d_avancement',
			6 => 'annee_de_l_operation'			
		);
		
                $totalData = Project::count();
                $limit = $request->input('length');
                $start = $request->input('start');
                $order = $columns[$request->input('order.0.column')];
                $dir = $request->input('order.0.dir');
                
                if(empty($request->input('search.value'))){
                    $projects = Project::offset($start)
                            ->limit($limit)
                            ->orderBy($order,$dir)
                            ->get();
                    $totalFiltered = Project::count();
                }else{
                    $search = $request->input('search.value');
                    $projects = Project::where('commune', 'like', "%{$search}%")
                                    ->orWhere('liaison','like',"%{$search}%")
                                    ->orWhere('programme','like',"%{$search}%")
                                    ->offset($start)
                                    ->limit($limit)
                                    ->orderBy($order, $dir)
                                    ->get();
                    $totalFiltered = Project::where('commune', 'like', "%{$search}%")
                                    ->orWhere('liaison','like',"%{$search}%")
                                    ->count();
                }		
					
		
		        $data = array();
		
                if($projects){
                    foreach($projects as $r){
                        $nestedData['liaison'] = $r->liaison;
                        $nestedData['longueur'] = $r->longueur;
                        $nestedData['type_d_intervention'] = $r->type_d_intervention;
                        $nestedData['programme'] = $r->programme;
                        $nestedData['sous_programme'] = $r->sous_programme;
                        $nestedData['etat_d_avancement'] = $r->etat_d_avancement;
                        $nestedData['annee_de_l_operation'] = $r->annee_de_l_operation;                      
                       
                        $data[] = $nestedData;
                    }
                }
                
                $json_data = array(
                    "draw"			=> intval($request->input('draw')),
                    "recordsTotal"	=> intval($totalData),
                    "recordsFiltered" => intval($totalFiltered),
                    "data"			=> $data
                );
                
                echo json_encode($json_data);
            }

            
}
