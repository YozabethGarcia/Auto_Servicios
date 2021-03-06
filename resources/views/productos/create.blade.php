@extends('layouts.plantilla')

@section('content')
    <div class="h-full ml-14 mt-14 mb-10 md:ml-64">
        <div>
            <form action="{{route('productos.store')}}" method="POST">  

                @csrf
                  
                <div class="py-6 w-100">
                    <div class="w-50 py-4  sm:px-6 lg:px-8" style="float: left">
                        
                        <h2>INGRESA UN PRODUCTO</h2><br>
                    
                        <div class="mt-1">
                            <label  class="inline-block text-gray-400 w-32 font-bold">Codigo de barra:</label>
                            <input name="codigo" class="appearance-none block  bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            type="number" placeholder="12345.." value="{{old('codigo')}}">
                            <br>
                            @error('codigo') <span class="error text-red-600">{{$message}}</span> @enderror
                        </div>
                        <div class="mt-1">
                            <label  class="inline-block text-gray-400 w-32 font-bold">Descripcion:</label>
                            <textarea name="descripcion"
                            class="appearance-none block  bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            cols="50" rows="3"  placeholder="Describa las cualidades del producto" >{{old('descripcion')}}</textarea> 
                            @error('descripcion') <span class="error text-red-600">{{$message}}</span> @enderror
                        </div>
                        <br>
                        <div class="mt-1">
                            <label  class="inline-block text-gray-400 w-32 font-bold">Stock:</label>
                            <input name="valor" class="appearance-none block  bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            type="number" placeholder="00" value="{{old('valor')}}">
                            <br>
                            @error('valor') <span class="error text-red-600">{{$message}}</span> @enderror
                        </div>
                        <div class="mt-1">
                            <label  class="inline-block text-gray-400 w-32 font-bold">Stock Minimo:</label>
                            <input name="valormin" class="appearance-none block  bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            type="number" placeholder="00" value="{{old('valormin')}}">
                            <br>
                            @error('valormin') <span class="error text-red-600">{{$message}}</span> @enderror
                        </div>
                        <div class="mt-1">
                            <label  class="inline-block text-gray-400 w-32 font-bold">Stock M??ximo:</label>
                            <input name="valormax" class="appearance-none block  bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            type="number" placeholder="00" value="{{old('valormax')}}">
                            <br>
                            @error('valormax') <span class="error text-red-600">{{$message}}</span> @enderror
                        </div><br>
                        <div class="mt-1">
                            <label  class="inline-block text-gray-400 w-32 font-bold">Precio:</label>
                            <input name="precio" class="appearance-none block  bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            type="number" placeholder="0.0" value="{{old('precio')}}">
                            <br>
                            @error('precio') <span class="error text-red-600">{{$message}}</span> @enderror
                        </div>
                        <div class="mt-1">
                            <label  class="inline-block text-gray-400 w-32 font-bold">Ubicaci??n:</label>
                            <input name="ubicacion" class="appearance-none block  bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            type="text" placeholder="" value="{{old('ubicacion')}}">
                            <br>
                            @error('ubicacion') <span class="error text-red-600">{{$message}}</span> @enderror
                        </div>
                        <div class="mb-8 mt-1">
                            <label class="inline-block text-gray-400 w-32 font-bold">Tipo de producto:</label>
                            <select name="tproducto" 
                                class="p-2 px-4 py-2 pr-8 leading-tight bg-white border border-gray-400 rounded shadow appearance-none hover:border-gray-500 focus:outline-none focus:shadow-outline">
                                <option value=''>Seleccione el tipo</option>
                                @foreach($tipoproducto as $tipo)
                                <option value={{ $tipo->id }} <?php if($tipo->id == old('tproducto')) echo 'selected' ?>> {{ $tipo->tipo }}</option>
                                @endforeach
                            </select>
                            @error('tproducto') <br><span class="error text-red-600">{{$message}}</span> @enderror
                        </div>
                        <div class="mt-1 w-100">
                            <label class="inline-block text-gray-400 w-32 font-bold">Imagen:</label> <br>
                            <input type="file" name="foto" class="mt-5 py-8 p-2 px-4 pr-8 leading-tight bg-white border border-gray-400 rounded shadow appearance-none hover:border-gray-500 focus:outline-none focus:shadow-outline" value="{{old('foto')}}">
                            <br>
                        @error('foto') <span class="error text-red-600">{{$message}}</span> @enderror
                        </div>
                        <button  type="submit"
                        class="bg-white text-blue-800 font-semibold my-2 py-2 px-4 border border-blue-400 rounded shadow">
                            Ingresar
                        </button>  
                        <a href="{{route('productos.index')}}">Cancelar</a>
                    </div>
                    <div class="p-5" style="float: left; width: 600px"><br>
                        
                    </div>
                </div>
            </form> 
        </div>
    </div>
@endsection