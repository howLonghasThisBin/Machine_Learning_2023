<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="post" action="{{ url('/dashboard') }}" class="signup-form" enctype="multipart/form-data">
                        @csrf

                        <h1 class="my-2 text-2xl font-light text-blue-900/80">Input Data</h1>
                        <p class="mt-3 mb-6 text-sm text-blue-900/80">
                        </p>

                        <div class="p-2">
                            <x-input class="w-full p-2" name="cycle" required="true" placeholder="Product Name"
                                error_message="" />
                        </div>

                        <div class="p-2">
                            <x-input class="w-full p-2" name="X1_transaction_date" required="true"
                                placeholder="Transaction Date" error_message="" />
                        </div>

                        <div class="p-2">
                            <x-input class="w-full p-2" name="X2_house_age" required="true" placeholder="House Age"
                                error_message="" />
                        </div>

                        <div class="p-2">
                            <x-input class="w-full p-2" name="X3_distance_to_the_nearest_MRT_station" required="true"
                                placeholder="Distance to the Nearest MRT Station" error_message="" />
                        </div>

                        <div class="p-2">
                            <x-input class="w-full p-2" name="X4_number_of_convenience_stores" required="true"
                                placeholder="Number of Convenience Stores" error_message="" />
                        </div>

                        <div class="p-2">
                            <x-input class="w-full p-2" name="X5_latitude" required="true" placeholder="Latitude"
                                error_message="" />
                        </div>

                        <div class="p-2">
                            <x-input class="w-full p-2" name="X6_longitude" required="true" placeholder="Longitude"
                                error_message="" />
                        </div>

                        <div class="p-2">
                            <x-input class="w-full p-2" name="Y_house_price_of_unit_area" required="true"
                                placeholder="House Price of Unit" error_message="" />
                        </div>

                        <div class="text-center">

                            <x-bladewind::button type="button" name="btn-save" has_spinner="true" type="primary"
                                can_submit="true" class="block mx-auto" radius="small">
                                Classify
                            </x-bladewind::button>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
