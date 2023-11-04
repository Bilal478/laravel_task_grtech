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
                                First Name
                                </div>
                                <div class="cell">
                                Last Email
                                </div>
                                <div class="cell">
                                Email
                                </div>
                                <div class="cell">
                                Phone
                                </div>
                                <div class="cell">
                                    Action
                                </div>
                            </div>
                            @foreach($empolyees as $empolyee)
                            <div class="row">
                                <div class="cell" data-title="Full Name">
                                    {{$empolyee->first_name}}
                                </div>
                                <div class="cell" data-title="Age">
                                {{$empolyee->last_name}}
                                </div>
                                <div class="cell" data-title="Job Title">
                                    {{$empolyee->email}}
                                </div>
                                <div class="cell" data-title="Location">
                                {{$empolyee->phone}}
                                </div>
                                <div class="cell" style="width: 302px;" data-title="Location">
                                    <a class="edit-employee" href="{{route('empolyee.edit',['id' => $empolyee['id']])}}">Edit</a>
                                    <a class="delete-employee" href="{{route('empolyee.delete',['id' => $empolyee['id']])}}">Delete</a>
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
