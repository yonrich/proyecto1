@extends('layouts.public')

@section('content')
 
<div class="container">
    <div class="row">
        <div class="col-md-12">            
            <div class="row">
            <div class="col-md-12">
            {{ Form::open(array('route' => 'Rpuestos.store')) }} 
              <h4>Modulo para Registrar un Puesto</h4> 
              <hr> 
              <div class="row well" style="background-color:rgb(232, 232, 232);"> 
                  <div class="col-sm-4 col-md-4"> 
                      <div class="input-group"> 
                          {!! Form::Label('Código', 'Código del Puesto:') !!}
                          {!! Form::text('codigo',null,['placeholder'=>'codigo','class'=>'form-control','required'=>'required']) !!}
                      </div>
                  </div>
                  <div class="col-sm-8 col-md-8">
                      <div class="input-group">
                          {!! Form::Label('Descripción ', 'Descripción:') !!}
                          {!! Form::text('descripcion',null,['placeholder'=>'descripcion','class'=>'form-control','required'=>'required']) !!}
                      </div>
                  </div> 
               </div> 

                <div class="row well">
                    <a class="btn btn-info" href="{{ route('Rpuestos.index') }}"> Regresar</a>
                    {!! Form::submit('Confirmar Registro',['class'=>'btn btn-success']) !!}
                    {!! Form::close() !!}
                </div>
                
            </div>
        </div>
    </div>
</div> 
</div>

@endsection

