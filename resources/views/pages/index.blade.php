@extends('layouts.app')

@section('content')

{{-- <x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Dashboard') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 bg-white border-b border-gray-200">
                  You're logged in!
              </div>
          </div>
      </div>
  </div>
</x-app-layout> --}}


        <div class="container custom-color rounded">
           <h3>Job Openings</h3>
            <table class="table table-striped">
                <thead>
                  <tr style="">
                    <th scope="col">Sno</th>
                    <th scope="col">Role</th>
                    <th scope="col">Status</th>
                   
                  </tr>
                </thead>
                <tbody>
                  @foreach ($jobs as $job)
                    <tr>
                      <td>{{ $job->id }}</td>
                      <td>{{ $job->Job_Title }}</td>
                      <td>x</td>
                    </tr>
                  @endforeach


                </tbody>

               
              </table>

             
        </div>
      
@endsection

