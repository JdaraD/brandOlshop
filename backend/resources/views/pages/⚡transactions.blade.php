<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="flex pt-14 justify-center items-center w-full h-screen rounded-md">
    <div class="flex w-[99%] h-[99%] p-4 gap-3">
        <div class="flex flex-col shrink-0 gap-4 bg-white w-full h-full p-4 rounded-md">
            <div class="flex justify-between">
                <div class="flex gap-2 border items-center justify-center border-gray-300 w-60 h-8 rounded-md p-2">
                    <input type="text" placeholder="Search..." class="outline-none">
                    <button class="flex h-full w-full items-center justify-center cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0 0 72 72">
                            <path d="M 31 11 C 19.973 11 11 19.973 11 31 C 11 42.027 19.973 51 31 51 C 34.974166 51 38.672385 49.821569 41.789062 47.814453 L 54.726562 60.751953 C 56.390563 62.415953 59.088953 62.415953 60.751953 60.751953 C 62.415953 59.087953 62.415953 56.390563 60.751953 54.726562 L 47.814453 41.789062 C 49.821569 38.672385 51 34.974166 51 31 C 51 19.973 42.027 11 31 11 z M 31 19 C 37.616 19 43 24.384 43 31 C 43 37.616 37.616 43 31 43 C 24.384 43 19 37.616 19 31 C 19 24.384 24.384 19 31 19 z"></path>
                        </svg>
                    </button>
                </div>

                {{-- download transactions --}}
                <div id="add-overlay" class="flex items-center justify-center w-6 h-8 bg-green-500 hover:bg-green-800 rounded-md cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" fill="white" size="20" width="18" height="18">
                        <path d="M352 96C352 78.3 337.7 64 320 64C302.3 64 288 78.3 288 96L288 306.7L246.6 265.3C234.1 252.8 213.8 252.8 201.3 265.3C188.8 277.8 188.8 298.1 201.3 310.6L297.3 406.6C309.8 419.1 330.1 419.1 342.6 406.6L438.6 310.6C451.1 298.1 451.1 277.8 438.6 265.3C426.1 252.8 405.8 252.8 393.3 265.3L352 306.7L352 96zM160 384C124.7 384 96 412.7 96 448L96 480C96 515.3 124.7 544 160 544L480 544C515.3 544 544 515.3 544 480L544 448C544 412.7 515.3 384 480 384L433.1 384L376.5 440.6C345.3 471.8 294.6 471.8 263.4 440.6L206.9 384L160 384zM464 440C477.3 440 488 450.7 488 464C488 477.3 477.3 488 464 488C450.7 488 440 477.3 440 464C440 450.7 450.7 440 464 440z"/>
                    </svg>
                    <i class="fa-solid fa-download"></i>
                </div>
                {{-- download transactions --}}

            </div>
            
            {{-- table transactions --}}
            <div class="w-full overflow-x-auto">
                <table class="min-w-full bg-white rounded-xl overflow-hidden shadow-md">
                    
                    <!-- HEADER -->
                    <thead class="bg-gray-100 text-gray-700 uppercase text-xs tracking-wider">
                    <tr>
                        <th class="px-4 py-3 text-left">No</th>
                        <th class="px-4 py-3 text-left">Transaction ID</th>
                        <th class="px-4 py-3 text-left">Nama Produk</th>
                        <th class="px-4 py-3 text-left">Quantity</th>
                        <th class="px-4 py-3 text-left">Tanggal</th>
                        <th class="px-4 py-3 text-left">Harga</th>
                        <th class="px-4 py-3 text-left">Status</th>
                        <th class="px-4 py-3 text-left">Actions</th>
                    </tr>
                    </thead>

                    <!-- BODY -->
                    <tbody class="text-gray-600 text-sm">
                    <tr class="border-b hover:bg-gray-50 transition">
                        <td class="px-4 py-3 text-center">1</td>
                        <td class="px-4 py-3 font-medium text-gray-900">TXN001</td>
                        <td class="px-4 py-3">Produk A</td>
                        <td class="px-4 py-3">2</td>
                        <td class="px-4 py-3">2023-10-01</td>
                        <td class="px-4 py-3">$100.00</td>
                        <td class="px-4 py-3">
                        <span class="px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-600">
                            Pending
                        </span>
                        </td>
                        <td class="px-3 py-2">
                            <button class="px-2 py-1 text-xs font-medium text-white bg-blue-600 rounded-md hover:bg-blue-700 transition cursor-pointer">
                                View
                            </button>
                            <button class="px-2 py-1 text-xs font-medium text-white bg-green-600 rounded-md hover:bg-green-700 transition cursor-pointer">
                                Update
                            </button>
                            <button class="px-2 py-1 text-xs font-medium text-white bg-red-600 rounded-md hover:bg-red-700 transition cursor-pointer">
                                delete
                            </button>
                        </td>
                    </tr>

                    <!-- contoh row tambahan -->
                    <tr class="border-b hover:bg-gray-50 transition bg-gray-50/50">
                        <td class="px-4 py-3 text-center">2</td>
                        <td class="px-4 py-3 font-medium text-gray-900">TXN002</td>
                        <td class="px-4 py-3">Produk B</td>
                        <td class="px-4 py-3">1</td>
                        <td class="px-4 py-3">2023-10-02</td>
                        <td class="px-4 py-3">$50.00</td>
                        <td class="px-4 py-3">
                        <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-600">
                            Success
                        </span>
                        </td>
                        <td class="px-3 py-2">
                            <button class="px-2 py-1 text-xs font-medium text-white bg-blue-600 rounded-md hover:bg-blue-700 transition cursor-pointer">
                                View
                            </button>
                            <button class="px-2 py-1 text-xs font-medium text-white bg-green-600 rounded-md hover:bg-green-700 transition cursor-pointer">
                                Update
                            </button>
                            <button class="px-2 py-1 text-xs font-medium text-white bg-red-600 rounded-md hover:bg-red-700 transition cursor-pointer">
                                delete
                            </button>
                        </td>
                    </tr>
                    </tbody>

                </table>
            </div>
            {{-- table transactions --}}
        </div>
    </div>
</div>