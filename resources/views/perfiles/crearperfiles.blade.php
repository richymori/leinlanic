
        <form action="{{url('/perfiles')}}" method="POST" role="form">
        @csrf()
    <legend>PERFILES</legend>
    <div>
    </div>

    <div class="form-group">
        
        @component('componentes.text', ['name' => 'nombres', 'label' => 'NOMBRES', 'placeholder' =>'Ingrese el Nombre'])
        @endcomponent
        <div>
       
        @component('componentes.text', ['name' => 'apellidos', 'label' => 'APELLIDOS', 'placeholder' =>'Ingrese el apellido'])
        @endcomponent
        
        @component('componentes.select', ['name'=>'sexo_id', 'data' =>$sexos, 'tag'=> 'sexo', 'label'=>'SEXO' ])
        @endcomponent
           
        <div>
        
        @component('componentes.select', ['name'=>'recinto_id', 'data' =>$recintos, 'tag'=> 'recinto', 'label'=>'RECINTOS' ])
        @endcomponent
         
            <div>
            
        
        @component('componentes.select', ['name'=>'carrera_id', 'data' =>$carreras, 'tag'=> 'carrera', 'label'=>'CARRERAS' ])
        @endcomponent
          
            <div>
        
        @component('componentes.select', ['name'=>'area_id', 'data' =>$areas, 'tag'=> 'area', 'label'=>'AREAS' ])
        @endcomponent
          
        <div>
        
        @component('componentes.select', ['name'=>'modalidad_id', 'data' =>$modalidades, 'tag'=> 'modalidad', 'label'=>'MODALIDAD' ])
        @endcomponent
        <div>
        
        @component('componentes.select', ['name'=>'etnia_id', 'data' =>$etnias, 'tag'=> 'etnia', 'label'=>'ETNIAS' ])
        @endcomponent
        <div>
        
        @component('componentes.select', ['name'=>'domicilio_id', 'data' =>$domicilio, 'tag'=> 'domicilio', 'label'=>'DOMICILIOS' ])
        @endcomponent
        <div>
        
        @component('componentes.select', ['name'=>'nacionalidad_id', 'data' =>$nacionalidades, 'tag'=> 'nacionalidad', 'label'=>'NACIONALIDAD' ])
        @endcomponent

    <button type="guardar chatel" class="btn btn-primary">GUARDAR</button>
</form>
