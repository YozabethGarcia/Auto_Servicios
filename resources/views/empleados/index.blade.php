@extends('layouts.plantilla')

@section('content')
<div class="h-full ml-14 mt-14 mb-10 md:ml-64">
      <!-- Statistics Cards -->
      <div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-1 p-4 gap-1">
      <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
        <!--<div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
          <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
        </div>-->
        <div class="text-right">
        <a href="{{route('empleados.create')}}" type="submit" class="flex items-center col-span-3"> Registrar Empleado</a>
        </div>
      </div>
    </div>
    <!-- ./Statistics Cards -->

    <!-- Client Table -->
    <div class="mt-0 mx-0">
      <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
          <table class="w-full">
            <thead>
              <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                <th class="px-4 py-3">Nombre</th>
                <th class="px-4 py-3">Identidad</th>
                <th class="px-4 py-3">Telefono</th>
                <th class="px-4 py-3">Email</th>
                <th class="px-4 py-3">Dirección</th>
                <th class="px-4 py-3">Estado</th>
                <th class="px-4 py-3">Cargo</th>
                <th class="px-4 py-3">Acciones</th>                
              </tr>
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">              
                @foreach($empleados as $empleado)
                    <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3">{{$empleado->pnombre}} {{$empleado->snombre}} {{$empleado->papellido}} {{$empleado->sapellido}}</td>
                        <td class="px-4 py-3 text-sm">{{$empleado->identidad}}</td>
                        <td class="px-4 py-3 text-xs">{{$empleado->telefono}}</td>
                        <td class="px-4 py-3 text-sm">{{$empleado->email}}</td>
                        <td class="px-4 py-3 text-sm">{{$empleado->direccion}}</td>
                        <td class="px-4 py-3 text-sm">{{$empleado->estado}}</td>
                        <td class="px-4 py-3 text-xs">{{$empleado->cargo->cargo}}</td>                        
                        <td class="px-4 py-3 text-xs"><a href="{{route('empleados.edit', $empleado)}}">Editar</a></td>                        
                    </tr>
                @endforeach              
            </tbody>
          </table>          
        </div>
        <div class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
            {{$empleados->links()}}
        </div>
    </div>
  </div>
</div>
@endsection