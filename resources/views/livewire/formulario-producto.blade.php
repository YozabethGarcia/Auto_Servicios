<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
         
        <div class="py-6 w-100">
            <div class="w-50 py-4  sm:px-6 lg:px-8" style="float: left">
                
                <h2>INGRESAR UN PRODUCTO</h2>
            
                    <div class="mt-5">
                        <label  class="inline-block w-32 font-bold">Codigo de barra:</label>
                        <input wire:model="codigo" class="appearance-none block  bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        type="number" placeholder="12345..">
                        <br>
                        @error('codigo') <span class="error text-red-600">el codigo de barra del producto es obligatorio</span> @enderror
                    </div>
    
                    <div class="mt-5">
                        <label  class="inline-block w-32 font-bold">Descripcion</label>
                        <textarea name="descripcion"
                        class="appearance-none block  bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            wire:model="descripcion" cols="60" rows="3"  placeholder="Describa las cualidades del producto" ></textarea> 
                            @error('descripcion') <span class="error text-red-600">la descripcion del producto es obligatoria</span> @enderror
                    
                    </div>
                    
                    <div class="mt-5">
                        <label  class="inline-block w-32 font-bold">Existencias:</label>
                        <input wire:model="valor" class="appearance-none block  bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        type="number" placeholder="50.0">
                        <br>
                        @error('valor') <span class="error text-red-600">el valor del producto es obligatorio</span> @enderror
                    </div>

                    <div class="mt-5">
                        <label  class="inline-block w-32 font-bold">Minimo:</label>
                        <input wire:model="valormin" class="appearance-none block  bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        type="number" placeholder="0.0">
                        <br>
                        @error('valormin') <span class="error text-red-600">el valor minimo del producto es obligatorio</span> @enderror
                    </div>

                    <div class="mt-5">
                        <label  class="inline-block w-32 font-bold">Máximo:</label>
                        <input wire:model="valormax" class="appearance-none block  bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        type="number" placeholder="0.0">
                        <br>
                        @error('valormax') <span class="error text-red-600">el valor del producto es obligatorio</span> @enderror
                    </div>
        
                    <br>
    
                    <button wire:click="guardar"  type="button"
                    class="bg-white text-red-800 font-semibold py-2 px-4 border border-red-400 rounded shadow">
                        Ingresar
                    </button>  
                              
                
            </div>
             
            <div class="p-5" style="float: left; width: 600px"  >
                
                <br>
                    <div class="m-5">
                        <label  class="inline-block w-32 font-bold">Precio:</label>
                        <input wire:model="precio" class="appearance-none block  bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        type="number" placeholder="0.0">
                        <br>
                        @error('precio') <span class="error text-red-600">el precio del producto es obligatorio</span> @enderror
                    </div>

                    <div class="m-5">
                        <label  class="inline-block w-32 font-bold">Ubicación:</label>
                        <input wire:model="ubicacion" class="appearance-none block  bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        type="text" placeholder="">
                        <br>
                        @error('ubicacion') <span class="error text-red-600">la ubicación del producto es obligatorio</span> @enderror
                    </div>

                    <div class="mb-8 mt-5">
                        <label class="inline-block w-32 font-bold">Tipo de producto:</label>
                        <select name="tproducto" wire:model="tproducto" 
                            class="p-2 px-4 py-2 pr-8 leading-tight bg-white border border-gray-400 rounded shadow appearance-none hover:border-gray-500 focus:outline-none focus:shadow-outline">
                            <option value='-1'>Seleccione el tipo</option>
                            @foreach($tipoproducto as $tipo)
                            <option value={{ $tipo->id }}> {{ $tipo->tipo }}</option>
                            @endforeach
                        </select>
                        @error('tproducto') <br><span class="error text-red-600">el tipo de producto es obligatorio</span> @enderror
                    </div>

                    <div class="m-4 w-100">
                        <label class="inline-block w-32 font-bold">Subir imagenes</label> <br>
                        <input type="file" wire:model="foto" class="mt-5 py-8 p-2 px-4 pr-8 leading-tight bg-white border border-gray-400 rounded shadow appearance-none hover:border-gray-500 focus:outline-none focus:shadow-outline">
                        <br>
                    @error('foto') <span class="error text-red-600">es necesaria la imagen </span> @enderror
                    </div>
            </div>
        </div>  
</div>
