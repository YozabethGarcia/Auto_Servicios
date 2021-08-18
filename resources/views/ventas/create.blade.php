@extends('layouts.plantilla')

@section('content')
    <div class="h-full ml-14 mt-14 mb-10 md:ml-64">
        
        <div>
            <form action="{{route('ventas.store', $cai)}}" method="POST"> 
                
            @csrf

                <div class="py-6 w-100">
                    <div class="w-50 py-4  sm:px-6 lg:px-8" style="float: left">
                        
                        <h2>REGISTRAR VENTA</h2><br>
                    
                        <div class="mt-1">
                            <label  class="inline-block text-gray-400 w-32 font-bold">Fecha:</label>
                            <input name="fecha" class="appearance-none block  bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            type="date" value="{{old('fecha')}}">
                            <br>
                            @error('fecha') <span class="error text-red-600">{{$message}}</span> @enderror
                        </div>
                        
                        <div class="mt-1">
                            <label  class="inline-block text-gray-400 w-32 font-bold"># FACTURA:</label>
                            <input name="factura" class="appearance-none block  bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            type="text" value="{{$factura}}">                            
                            <br>                            
                            @error('factura') <span class="error text-red-600">{{$message}}</span> @enderror
                        <div class="mt-1">
                            <label  class="inline-block text-gray-400 w-32 font-bold">Cliente:</label>
                            <input name="cliente" class="appearance-none block  bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            type="text" value="{{old('cliente')}}">
                            <br>                            
                            @error('cliente') <span class="error text-red-600">{{$message}}</span> @enderror                        <div class="mt-1">
                            <label  class="inline-block text-gray-400 w-32 font-bold">RTN:</label>
                            <input name="rtn" class="appearance-none block  bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            type="text" value="{{old('rtn')}}">
                            <br>                            
                            @error('rtn') <span class="error text-red-600">{{$message}}</span> @enderror
                        <div class="mt-1">
                            <label  class="inline-block text-gray-400 w-32 font-bold">Subtotal:</label>
                            <input name="subtotal" class="appearance-none block  bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            type="number" value="{{old('subtotal')}}">
                            <br>                            
                            @error('subtotal') <span class="error text-red-600">{{$message}}</span> @enderror
                        </div>
                        <div class="mt-1">
                            <label  class="inline-block text-gray-400 w-32 font-bold">Descuento:</label>
                            <input name="descuento" class="appearance-none block  bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            type="number" value="{{old('descuento')}}">
                            <br>                            
                            @error('descuento') <span class="error text-red-600">{{$message}}</span> @enderror
                        </div>                        <div class="mt-1">
                            <label  class="inline-block text-gray-400 w-32 font-bold">isv:</label>
                            <input name="isv" class="appearance-none block  bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            type="number" value="{{old('isv')}}">
                            <br>                            
                            @error('isv') <span class="error text-red-600">{{$message}}</span> @enderror
                        </div>                        <div class="mt-1">
                            <label  class="inline-block text-gray-400 w-32 font-bold">Total:</label>
                            <input name="total" class="appearance-none block  bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            type="number" value="{{old('total')}}">
                            <br>                            
                            @error('total') <span class="error text-red-600">{{$message}}</span> @enderror
                        </div>
                        <button  type="submit"
                        class="bg-white text-blue-800 font-semibold my-2 py-2 px-4 border border-blue-400 rounded shadow">
                            Ingresar
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