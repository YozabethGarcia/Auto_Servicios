@extends('layouts.plantilla')

@section('content')
    <div class="h-full ml-14 mt-14 mb-10 md:ml-64">
        
        <div>
            <form action="{{route('compras.update', $compra)}}" method="POST"> 
                
            @csrf

            @method('put')

                <div class="py-6 w-100">
                    <div class="w-50 py-4  sm:px-6 lg:px-8" style="float: left">
                        
                        <h2>Actualizar Compra</h2><br>
                    
                        <div class="mt-1">
                            <label  class="inline-block text-gray-400 w-32 font-bold">Fecha:</label>
                            <input name="fecha" class="appearance-none block  bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            type="date" value="{{old('fecha', $compra->fecha)}}">
                            <br>
                            @error('date') <span class="error text-red-600">{{$message}}</span> @enderror
                        </div>
                        <div class="mt-1">
                            <label  class="inline-block text-gray-400 w-32 font-bold"># Factura:</label>
                            <input name="factura" class="appearance-none block  bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            type="text" value="{{old('factura', $compra->factura)}}">
                            <br>                            
                            @error('factura') <span class="error text-red-600">{{$message}}</span> @enderror
                        </div>
                 
                        <div class="mb-8 mt-1">
                            <label class="inline-block text-gray-400 w-32 font-bold">Cargo:</label>
                            <select name="proveedor" 
                                class="p-2 px-4 py-2 pr-8 leading-tight bg-white border border-gray-400 rounded shadow appearance-none hover:border-gray-500 focus:outline-none focus:shadow-outline">
                                <option value=''>Seleccione el proveedor</option>
                                @foreach($proveedores as $proveedor)
                                <option value={{ $proveedor->id }} <?php if($proveedor->id == old('proveedor', $compra->proveedor_id)) echo 'selected' ?>> {{ $proveedor->nombre }}</option>
                                @endforeach
                            </select>
                            @error('proveedor') <br><span class="error text-red-600">{{$message}}</span> @enderror
                        </div>
                        <div class="mt-1">
                            <label  class="inline-block text-gray-400 w-32 font-bold">Subtotal:</label>
                            <input name="subtotal" class="appearance-none block  bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            type="number" value="{{old('subtotal', $compra->subtotal)}}">
                            <br>                            
                            @error('subtotal') <span class="error text-red-600">{{$message}}</span> @enderror
                        </div>
                        <div class="mt-1">
                            <label  class="inline-block text-gray-400 w-32 font-bold">Descuento:</label>
                            <input name="descuento" class="appearance-none block  bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            type="number" value="{{old('descuento', $compra->descuento)}}">
                            <br>                            
                            @error('descuento') <span class="error text-red-600">{{$message}}</span> @enderror
                        </div>                        <div class="mt-1">
                            <label  class="inline-block text-gray-400 w-32 font-bold">isv:</label>
                            <input name="isv" class="appearance-none block  bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            type="number" value="{{old('isv', $compra->isv)}}">
                            <br>                            
                            @error('isv') <span class="error text-red-600">{{$message}}</span> @enderror
                        </div>                        <div class="mt-1">
                            <label  class="inline-block text-gray-400 w-32 font-bold">Total:</label>
                            <input name="total" class="appearance-none block  bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            type="number" value="{{old('total', $compra->total)}}">
                            <br>                            
                            @error('total') <span class="error text-red-600">{{$message}}</span> @enderror
                        </div>
                        <button  type="submit"
                        class="bg-white text-blue-800 font-semibold my-2 py-2 px-4 border border-blue-400 rounded shadow">
                            Guardar
                        </button>  
                        <a href="{{route('compras.index')}}">Cancelar</a>
                    </div>
                    <div class="p-5" style="float: left; width: 600px"><br>
                        
                    </div>
                </div>
            </form> 
        </div>
    </div>
@endsection