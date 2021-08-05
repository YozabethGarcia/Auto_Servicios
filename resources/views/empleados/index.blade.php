@extends('layouts.plantilla')

@section('content')
<div class="h-full ml-14 mt-14 mb-10 md:ml-64">

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
              </tr>
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">              
                @foreach($empleados as $empleado)
                    <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3">{{$empleado->pnombre}}</td>
                        <td class="px-4 py-3 text-sm">{{$empleado->identidad}}</td>
                        <td class="px-4 py-3 text-xs">{{$empleado->telefono}}</td>
                        <td class="px-4 py-3 text-sm">{{$empleado->email}}</td>
                        <td class="px-4 py-3 text-sm">{{$empleado->direccion}}</td>
                        <td class="px-4 py-3 text-sm">{{$empleado->estado}}</td>
                        <td class="px-4 py-3 text-xs">{{$empleado->cargo->cargo}}</td>                        
                    </tr>
                @endforeach              
            </tbody>
          </table>
        </div>
        <div class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
          <span class="flex items-center col-span-3"> Resultados </span>
          <span class="col-span-2">Agregar Empleado</span>
          <span class="col-span-2">Eliminar Empleado</span>
    <!-- ./Client Table -->
  </div>
@endsection