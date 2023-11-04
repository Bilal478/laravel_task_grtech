<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <div class="container-table100">
                    <div class="wrap-table100">
                        <div class="table">
                            <div class="row header">
                                <div class="cell">
                                Name
                                </div>
                                <div class="cell">
                                Email
                                </div>
                                <div class="cell">
                                Logo
                                </div>
                                <div class="cell">
                                Website
                                </div>
                                <div class="cell">
                                    Action
                                </div>
                            </div>
                            @foreach($companies as $company)
                            <div class="row">
                                <div class="cell" data-title="Full Name">
                                    {{$company->name}}
                                </div>
                                <div class="cell" data-title="Age">
                                {{$company->email}}
                                </div>
                                <div class="cell" data-title="Job Title">
                                <img style="height: 50px;width: 50px;" src="{{ url('storage/'.$company->logo) }}" alt="Girl in a jacket" width="500" height="600">
                                </div>
                                <div class="cell" data-title="Location">
                                {{$company->website}}
                                </div>
                                <div class="cell" style="width: 302px;" data-title="Location">
                                <a class="view-employee" href="{{route('empolyee',['id' => $company['id']])}}">view employee</a>
                                <a class="edit-employee" href="{{route('company.edit',['id' => $company['id']])}}">Edit</a>
                                <a class="delete-employee" href="{{route('company.delete',['id' => $company['id']])}}">Delete</a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
