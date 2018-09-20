@extends('layouts.app')

@section('filter_buttons')
<div class="row">
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
                    {{$title}}
                </div>
    </div>
</div>
@endsection