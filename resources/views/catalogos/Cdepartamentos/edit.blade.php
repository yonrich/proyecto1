@extends('layouts.public')

@section('content')
 
<div class="container">
    <div class="row">
        <div class="col-md-12">            
            <div class="row">
            <div class="col-md-12">
            {!! Form::model($depas, ['route' => ['modificardepa',$depas->id]]) !!}
              <h3>Actualizar Departamento</h3> 
              <hr> 
                  <div class="row well"> 
                      <div class="col-sm-4 col-md-4"> 
                          <div class="input-group"> 
                              {!! Form::Label('Código', 'Código:') !!}
                              {!! Form::text('codigo',null,['placeholder'=>'codigo','class'=>'form-control','required'=>'required']) !!}
                          </div>
                      </div>
                      <div class="col-sm-4 col-md-4">
                          <div class="input-group">
                              {!! Form::Label('Descripción ', 'Descripción:') !!}
                              {!! Form::text('descripcion',null,['placeholder'=>'descripcion','class'=>'form-control','required'=>'required']) !!}
                          </div>
                      </div> 
                   </div> 

                <div class="row well">
                    {!! Form::hidden('id',$depas->id) !!}
                    <a class="btn btn-warning" href="{{ route('Departamentos.index') }}"> Regresar</a>
                    {!! Form::submit('Confirmar Departamento',['class'=>'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>    
               
            </div>
        </div>
    </div>
</div> 
</div>

@endsection