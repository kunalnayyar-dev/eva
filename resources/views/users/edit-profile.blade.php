<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    @if(session()->has('message'))
                        <div class="mb-4">
                            <div class="font-medium border p-2 text-green-600">
                                Success! {{ session()->get('message') }}
                            </div>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('updateprofile') }}">
                    @csrf

                    <!-- First Name -->
                        <div>
                            <x-label for="first_name" :value="__('First Name')" />

                            <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="Auth::user()->first_name"  autofocus />
                        </div>

                        <!-- Last Name -->
                        <div class="mt-4">
                            <x-label for="last_name" :value="__('Last Name')" />

                            <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="Auth::user()->last_name"  autofocus />
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-label for="email" :value="__('Email')" />

                            <x-input id="email" class="block mt-1 w-full bg-gray-100" type="email" name="email" :value="Auth::user()->email"  readonly disabled/>
                        </div>


                        <!-- Date of Birth -->
                        <div class="mt-4">
                            <x-label for="date_of_birth" :value="__('Date of Birth')" />

                            <x-input id="date_of_birth" class="block mt-1 w-full bg-gray-100" type="text" name="date_of_birth" :value="Auth::user()->date_of_birth" placeholder="Y-m-d" readonly disabled/>
                        </div>

                        <div class="flex items-center justify-end mt-4">

                            <x-button class="ml-4">
                                {{ __('Update') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
