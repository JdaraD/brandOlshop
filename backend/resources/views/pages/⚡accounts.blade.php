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
                <div class="flex items-center gap-4 w-auto h-full rounded-md">
                
                    <div class="flex gap-2 border items-center justify-center border-gray-300 w-60 h-8 rounded-md p-2">
                        <input type="text" placeholder="Search..." class="outline-none">
                        <button class="flex h-full w-full items-center justify-center cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0 0 72 72">
                                <path d="M 31 11 C 19.973 11 11 19.973 11 31 C 11 42.027 19.973 51 31 51 C 34.974166 51 38.672385 49.821569 41.789062 47.814453 L 54.726562 60.751953 C 56.390563 62.415953 59.088953 62.415953 60.751953 60.751953 C 62.415953 59.087953 62.415953 56.390563 60.751953 54.726562 L 47.814453 41.789062 C 49.821569 38.672385 51 34.974166 51 31 C 51 19.973 42.027 11 31 11 z M 31 19 C 37.616 19 43 24.384 43 31 C 43 37.616 37.616 43 31 43 C 24.384 43 19 37.616 19 31 C 19 24.384 24.384 19 31 19 z"></path>
                            </svg>
                        </button>
                    </div>

                    <button id="btnCalender" class="flex h-full w-full items-center justify-center px-2 py-1 border border-gray-300 hover:bg-gray-300 rounded-md cursor-pointer">
                        <i class="fa-solid fa-calendar text-[#183153]"></i>
                    </button>

                    {{-- overlay calender --}}
                    <div id="overlay-calender" class="hidden absolute top-32 left-130 bg-white p-4 rounded-md shadow-lg z-20 transition duration-200">
                        <input type="date" class="border border-gray-300 rounded-md p-2">
                    </div>
                    {{-- overlay calender --}}
                </div>

                {{-- download transactions --}}
                <div id="add-overlay" class="flex items-center justify-center p-2 bg-green-500 hover:bg-green-800 rounded-md cursor-pointer">
                    <p class="text-xs capitalize text-white font-medium">Add Account</p>
                </div>
                {{-- download transactions --}}

            </div>
            
            {{-- table transactions --}}
            <div class="w-full h-full overflow-x-auto no-scrollbar">
                <table class="min-w-full bg-white rounded-xl no-scrollbar shadow-md">
                    
                    <!-- HEADER -->
                    <thead class="bg-gray-100 text-gray-700 uppercase overflow-hidden text-xs sticky top-0 z-10">
                    <tr>
                        <th class="px-4 py-3 text-left">No</th>
                        <th class="px-4 py-3 text-left">ID Accounts</th>
                        <th class="px-4 py-3 text-left">Nama</th>
                        <th class="px-4 py-3 text-left">Email</th>
                        <th class="px-4 py-3 text-left">Type</th>
                        <th class="px-4 py-3 text-left">Status</th>
                        <th class="px-4 py-3 text-left">Actions</th>
                    </tr>
                    </thead>

                    <!-- BODY -->
                    <tbody class="text-gray-600 text-sm">
                    @for ($i = 1; $i < 20; $i++) 
                    <tr class="border-b hover:bg-gray-50 transition">
                        <td class="px-4 py-3 text-center">{{$i}}</td>
                        <td class="px-4 py-3 font-medium text-gray-900">TXN001</td>
                        <td class="px-4 py-3">John Doe</td>
                        <td class="px-4 py-3">john.doe@example.com</td>
                        <td class="px-4 py-3">Admin</td>
                        <td class="px-4 py-3">
                            <div x-data="{ on: true }" class="flex items-center gap-4">
                                
                                <!-- Toggle -->
                                <button 
                                    @click="on = !on"
                                    :class="on ? 'bg-green-500' : 'bg-gray-300'"
                                    class="relative w-12 h-6 rounded-full transition-all duration-300 ease-in-out"
                                >
                                    <!-- Circle -->
                                    <span 
                                        :class="on ? 'translate-x-6' : 'translate-x-0'"
                                        class="absolute top-1 left-1 w-4 h-4 bg-white rounded-full transition-all duration-300 shadow-md"
                                    ></span>
                                </button>

                            </div>
                        </td>
                        <td class="px-3 py-2">
                            <button id="btnView" class="px-2 py-1 text-xs font-medium text-white bg-blue-600 rounded-md hover:bg-blue-700 transition cursor-pointer">
                                View
                            </button>
                            <button id="btnDelete" class="px-2 py-1 text-xs font-medium text-white bg-red-600 rounded-md hover:bg-red-700 transition cursor-pointer">
                                delete
                            </button>
                        </td>
                    </tr>
                    @endfor

                    <!-- contoh row tambahan -->
                    <tr class="border-b hover:bg-gray-50 transition bg-gray-50/50">
                        <td class="px-4 py-3 text-center">20</td>
                        <td class="px-4 py-3 font-medium text-gray-900">TXN002</td>
                        <td class="px-4 py-3">John Doe</td>
                        <td class="px-4 py-3">john.doe@example.com</td>
                        <td class="px-4 py-3">Super Admin</td>
                        <td class="px-4 py-3">
                            <div x-data="{ on: true }" class="flex items-center gap-4">
                                
                                <!-- Toggle -->
                                <button 
                                    @click="on = !on"
                                    :class="on ? 'bg-green-500' : 'bg-gray-300'"
                                    class="relative w-12 h-6 rounded-full transition-all duration-300 ease-in-out"
                                >
                                    <!-- Circle -->
                                    <span 
                                        :class="on ? 'translate-x-6' : 'translate-x-0'"
                                        class="absolute top-1 left-1 w-4 h-4 bg-white rounded-full transition-all duration-300 shadow-md"
                                    ></span>
                                </button>

                            </div>
                        </td>
                        <td class="px-3 py-2">
                            <button class="px-2 py-1 text-xs font-medium text-white bg-blue-600 rounded-md hover:bg-blue-700 transition cursor-pointer">
                                View
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

<script>
    // script untuk toggle overlay calender
    const btnCalender = document.getElementById('btnCalender');
    const overlayCalender = document.getElementById('overlay-calender');

    // open overlay calender when click btn calender
    btnCalender.addEventListener('click', (e) => {
        e.stopPropagation();
        if (overlayCalender.style.display === 'flex') {
            overlayCalender.style.display = 'none';
            btnCalender.classList.remove('bg-gray-300');
        } else {
            overlayCalender.style.display = 'flex';
            btnCalender.classList.add('bg-gray-300');
        }
    })

    overlayCalender.addEventListener('click', (e) => {
        e.stopPropagation();
    })

    // close overlay calender when click outside
    document.addEventListener('click', () => {
        overlayCalender.style.display = 'none';
        btnCalender.classList.remove('bg-gray-300');
    })
    // script untuk toggle overlay calender

</script>