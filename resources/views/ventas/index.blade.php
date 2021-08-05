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
                <th class="px-4 py-3">fecha</th>
                <th class="px-4 py-3">factura</th>
                <th class="px-4 py-3">cai</th>
                <th class="px-4 py-3">cliente</th>
                <th class="px-4 py-3">subtotal</th>
                <th class="px-4 py-3">descuento</th>
                <th class="px-4 py-3">isv</th>
                <th class="px-4 py-3">total</th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">                           
            </tbody>
          </table>
        </div>
        <div class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
          <span class="flex items-center col-span-3"> Resultados </span>
          <span class="col-span-2"></span>
    <!-- ./Client Table -->
  </div>
@endsection