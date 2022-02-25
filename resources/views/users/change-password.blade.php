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

                    <form method="POST" action="{{ route('updatepassword') }}">
                    @csrf

                        <div class="mt-4">
                            <x-label for="current_password" :value="__('Current Password')" />

                            <x-input id="current_password" class="block mt-1 w-full"
                                     type="password"
                                     name="current_password"
                                     :value="old('current_password')"
                                     autocomplete="current_password" />
                        </div>

                        <div class="mt-4">
                            <x-label for="new_password" :value="__('New Password')" />

                            <x-input id="new_password" class="block mt-1 w-full"
                                     type="password"
                                     name="new_password"
                                     :value="old('new_password')"
                                     autocomplete="new_password" />
                        </div>

                        <div class="mt-4">
                            <x-label for="new_confirm_password" :value="__('Confirm Password')" />

                            <x-input id="new_confirm_password" class="block mt-1 w-full"
                                     type="password"
                                     name="new_confirm_password"
                                     :value="old('new_confirm_password')"
                                     autocomplete="new_confirm_password" />
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
