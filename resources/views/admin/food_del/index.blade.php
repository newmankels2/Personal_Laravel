@extends('layouts.app')

@section('content')
    <div>
        <div class="flex flex-col flex-1 h-full overflow-hidden">
            <!-- Main content -->
            <main class="flex-1 max-h-full p-5 overflow-hidden overflow-y-scroll">
                <!-- Main content header -->
                <div
                    class="flex flex-col items-start justify-start gap-4 pb-6 space-y-4 border-b lg:items-center lg:space-y-0 lg:flex-row">
                    
                    <h1 class="text-2xl font-semibold whitespace-nowrap">
                        <a href="/admin-dashboard"
                            class="page-scroll">
                            Dashboard
                        </a>
                    </h1>
                    <h1 class="text-2xl font-semibold whitespace-nowrap">
                        <a href="{{ route('customer-order.index') }}"
                        class="px-4 py-2 bg-blue-300 rounded-md hover:shadow-lg hover:text-white hover:transition-all">
                            Customer Order
                        </a>
                    </h1>
                    <h1 class="text-2xl font-semibold whitespace-nowrap">
                        <a href="{{ route('food-delivery.index') }}"
                            class="px-4 py-2 bg-blue-300 rounded-md hover:shadow-lg hover:text-white hover:transition-all">
                           Food Delivery
                        </a>
                    </h1>
                    <div class="space-y-6 md:space-x-2 md:space-y-0"></div>
                </div>

                <!-- Start Content -->
                <div class="grid grid-cols-1 gap-5 mt-6 sm:grid-cols-2 lg:grid-cols-4">

                    <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
                        <div class="flex items-start justify-between">
                            <div class="flex flex-col space-y-2">
                                <span class="text-gray-400">Total Food Deliveries</span>
                                <span class="text-lg font-semibold">{{ $foodDeliveries->total() }}</span>
                            </div>
                            <div class="p-4 bg-gray-200 rounded-md">
                                <img class="h-12 w-12"
                                    src="https://www.designfreelogoonline.com/wp-content/uploads/2018/03/000957-Free-restaurant-logo-maker-Luxurious-food-Logo-04.png">
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class="mt-6 text-xl">All Food Deliveries</h3>
                    <a 
                    class="px-4 py-2 bg-blue-500 rounded-md mt-4 inline-block"
                    href="{{ route('food-delivery.create') }}">
                        Create Food Delivery
                    </a>
                </div>

                <div class="flex flex-col mt-6">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                            <div class="overflow-hidden border-b border-gray-200 rounded-md shadow-md">
                                <table class="min-w-full overflow-x-scroll divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col"
                                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                                Customer Name
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                                Delivery Time
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                                Food Status
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                                Delivery Address
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        
                                        @foreach ($foodDeliveries as $foodDelivery)
                                            <tr class="transition-all hover:bg-gray-100 hover:shadow-lg">
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{ $foodDelivery->customerOrder->cust_first_name }}
                                                            {{ $foodDelivery->customerOrder->cust_last_name }}
                                                        </div>
                                                    </div>
                                                </td>

                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm text-gray-900">
                                                        {{ $foodDelivery->actual_delivery_time }}
                                                    </div>
                                                </td>

                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $foodDelivery->food_ready }}
                                                    </div>
                                                </td>

                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $foodDelivery->delivery_address }}
                                                    </div>
                                                </td>

                                                <td class="px-6 py-4 text-sm font-medium text-gray-900">
                                                    <a href="{{ route('food-delivery.edit', $foodDelivery) }}"
                                                        class="text-indigo-600 hover:text-white px-4 py-1 hover:bg-green-400 transition-all rounded-3xl">
                                                        Edit
                                                    </a>
                                                    <form action="{{ route('food-delivery.destroy', $foodDelivery) }}" method="post" class="inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" class="text-red-600">
                                                            Delete
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>

                                </table>
                                {{ $foodDeliveries->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection

