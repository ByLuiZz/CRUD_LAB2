<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Estudiante;

class CrudEstudiante extends Component
{
    public $estudiantes, $id_Estudiante,  $Codigo, $Nombre, $Direccion, $Telefono, $Email;
    
    public $modal = 0 ;



    protected $rules = [
        'codigo' => 'required|min:2',
        'nombre' => 'required|min:2',
        'direccion' => 'required|min:2',
        'telefono' => 'required|min:2|max:8',
        'email' => 'required|email',
    ];


    public function render()
    {
        $this -> Estudiantes = Estudiante::all();
        return view('livewire.crud');
    }

    public function crear(){
        $this -> LimpiarCampos();
        $this -> AbrirModal();
    }

    public function LimpiarCampos(){

        $this -> Codigo = "";
        $this -> Nombre = "";
        $this -> Direccion = "";
        $this -> Telefono = "";
        $this -> Email = "";
        $this -> id = "";
        

    }
    public function abrirModal(){
        $this -> modal = true;
    }

    public function cerrarModal(){
        $this -> modal = false;
    }
    
    public function edit($id){
        $estudiante = estudiante::findOrFail($id);
        $this -> id_Estudiante = $id;
        $this -> Codigo = $estudiante -> Codigo;
        $this -> Nombre = $estudiante -> Nombre;
        $this -> Direccion = $estudiante -> Direccion;
        $this -> Telefono = $estudiante -> Telefono;
        $this -> Email = $estudiante -> Email;
        $this->abrirModal();
    }
    public function eliminar($id){
        estudiante::find($id)->delete();
    }

    public function Guardar(){

        
       $validatedData = $this->validate();
 
        //estudiante::create($validatedData);
        estudiante::updateOrCreate(['id'=> $this -> id_estudiante],
        [
            'Codigo' => $this-> Codigo,
            'Nombre' => $this -> Nombre,
            'Direccion' => $this -> Direccion,
            'Telefono' => $this -> Telefono,
            'Email' => $this -> Email
        ]);
        $this->CerrarModal();
        $this->LimpiarCampos();

    }
}
