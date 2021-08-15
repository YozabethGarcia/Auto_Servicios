@extends('layouts.plantilla')

@section('content')
    <div class="h-full ml-14 mt-14 mb-10 md:ml-64">
        
        <div>
            <form action="{{route('empleados.update', $empleado)}}" method="POST"> 
                
            @csrf

            @method('put')

                <div class="py-6 w-100">
                    <div class="w-50 py-4  sm:px-6 lg:px-8" style="float: left">
                        
                        <h2>EDITAR EMPLEADO</h2><br>
                    
                        <div class="mt-1">
                            <label  class="inline-block text-gray-400 w-32 font-bold">Primer Nombre:</label>
                            <input name="pnombre" class="appearance-none block  bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            type="text" value="{{$empleado->pnombre}}">
                            <br>
                            @error('pnombre') <span class="error text-red-600">{{$message}}</span> @enderror
                        </div>
                        <div class="mt-1">
                            <label  class="inline-block text-gray-400 w-32 font-bold">Segundo Nombre:</label>
                            <input name="snombre" class="appearance-none block  bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            type="text" value="{{$empleado->snombre}}">
                            <br>                            
                        </div>
                        <div class="mt-1">
                            <label  class="inline-block text-gray-400 w-32 font-bold">Primer Apellido:</label>
                            <input name="papellido" class="appearance-none block  bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            type="text" value="{{$empleado->papellido}}">
                            <br>
                            @error('papellido') <span class="error text-red-600">{{$message}}</span> @enderror
                        </div>
                        <div class="mt-1">
                            <label  class="inline-block text-gray-400 w-32 font-bold">Segundo Apellido:</label>
                            <input name="sapellido" class="appearance-none block  bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            type="text" value="{{$empleado->sapellido}}">
                            <br>                            
                        </div>
                        <br>
                        <div class="mt-1">
                            <label  class="inline-block text-gray-400 w-32 font-bold">Identidad:</label>
                            <input name="identidad" class="appearance-none block  bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            type="text" value="{{$empleado->identidad}}">
                            <br>
                            @error('identidad') <span class="error text-red-600">{{$message}}</span> @enderror
                        </div>
                        <div class="mt-1">
                            <label  class="inline-block text-gray-400 w-32 font-bold">Telefono:</label>
                            <input name="telefono" class="appearance-none block  bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            type="text" value="{{$empleado->telefono}}">
                            <br>
                            @error('telefono') <span class="error text-red-600">{{$message}}</span> @enderror
                        </div>
                        <div class="mt-1">
                            <label  class="inline-block text-gray-400 w-32 font-bold">Email:</label>
                            <input name="email" class="appearance-none block  bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            type="email" value="{{$empleado->email}}">
                            <br>
                        <div class="mt-1">
                            <label  class="inline-block text-gray-400 w-32 font-bold">Dirección:</label>
                            <textarea name="direccion"
                            class="appearance-none block  bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            cols="50" rows="3">{{$empleado->direccion}}</textarea> 
                            @error('direccion') <span class="error text-red-600">{{$message}}</span> @enderror
                        </div>                    
                        </div><br>              
                        <div class="mb-8 mt-1">
                            <label class="inline-block text-gray-400 w-32 font-bold">Cargo:</label>
                            <select name="cargos" 
                                class="p-2 px-4 py-2 pr-8 leading-tight bg-white border border-gray-400 rounded shadow appearance-none hover:border-gray-500 focus:outline-none focus:shadow-outline">
                                <option value='-1'>Seleccione el cargo</option>
                                @foreach($cargos as $cargo)
                                <option value={{ $cargo->id }} <?php if($cargo->id == $empleado->cargo_id) echo 'selected' ?>> {{ $cargo->cargo }}</option>
                                @endforeach
                            </select>
                            @error('cargos') <br><span class="error text-red-600">{{$message}}</span> @enderror
                        </div>
                        <button  type="submit"
                        class="bg-white text-blue-800 font-semibold my-2 py-2 px-4 border border-blue-400 rounded shadow">
                            Guardar
                        </button>  
                        <a href="{{route('empleados.index')}}">Cancelar</a>
                    </div>
                    <div class="p-5" style="float: left; width: 600px"><br>
                        
                    </div>
                </div>
            </form> 
        </div>
    </div>
@endsection