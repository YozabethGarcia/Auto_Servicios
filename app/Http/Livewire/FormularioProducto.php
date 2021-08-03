<?php

namespace App\Http\Livewire;

use App\Models\producto;
use App\Models\tipo_producto;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormularioProducto extends Component
{
    use WithFileUploads;

    public $codigo;
    public $descripcion;
    public $valor;
    public $valormin;
    public $valormax;
    public $precio;
    public $ubicacion;
    public $tproducto;
    public $foto;

    public function resetImputFiels()
    {
        $this->foto = '';
        $this->codigo = '';
        $this->descripcion = ''; 
        $this->valor = '';
        $this->valormin = '';
        $this->valormax = '';
        $this->precio = '';
        $this->ubicacion = '';
        $this->tproducto = -1;
        
        
    }

    public function guardar(){
        
        $this->validate([
            'foto' => 'required|image',
            'codigo' => 'required',
            'descripcion' => 'required',
            'valor' => 'required',
            'valormin' => 'required',
            'valormax' => 'required',
            'precio' => 'required',
            'ubicacion' => 'required',
            'tproducto' => 'required'
        ]);
        

        $iproducto = new producto;
        $iproducto->barcode=$this->codigo;
        $iproducto->descripcion=$this->descripcion;
        $iproducto->stock=$this->valor;
        $iproducto->min_stock=$this->valormin;
        $iproducto->max_stock=$this->valormax;
        $iproducto->precio=$this->precio;
        $iproducto->ubicacion=$this->ubicacion;
        $iproducto->tipo_producto_id=$this->tproducto;
        $iproducto->foto=$this->foto;
        $iproducto->save();



        session()->flash('info','producto ingresado');
        $this->resetImputFiels();

        return redirect()->to('dashboard');

        
        
    }

    public function render()
    {
        $tipoproducto = tipo_producto::all();
        return view('livewire.formulario-producto', compact('tipoproducto'));
    }
}
