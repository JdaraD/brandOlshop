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

                </div>

                {{-- download account --}}
                <div id="add-overlay" class="flex items-center justify-center p-2 bg-green-500 hover:bg-green-800 rounded-md cursor-pointer">
                    <p class="text-xs capitalize text-white font-medium">Add Account</p>
                </div>
                {{-- download account --}}

            </div>
            
            {{-- table account --}}
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
                    @for ($i = 1; $i <= 4; $i++) 
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
                        <td class="px-4 py-3 text-center">5</td>
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
            {{-- table account --}}

            {{-- overlay add account --}}
            <div id="overlayAddAccount" class="hidden fixed inset-0 bg-black/50 backdrop-blur-sm z-50">
                <div class="flex items-center justify-center w-full min-h-screen p-4">
                    <div class="bg-white rounded-md p-6 shadow-md w-full max-w-3xl">
                        <form action="{{ route('registerasi.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <h2 class="flex w-full justify-center items-center text-2xl font-bold mb-4">Add Account</h2>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="text-sm">Nama</label>
                                    <input type="text" name="name"
                                        class="w-full mt-1 px-4 py-2 rounded-lg bg-gray-100 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-400 placeholder-gray-500"
                                        placeholder="Nama lengkap">
                                </div>
                                <div>
                                    <label class="text-sm">Email</label>
                                    <input type="email" name="email"
                                        class="w-full mt-1 px-4 py-2 rounded-lg bg-gray-100 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-400 placeholder-gray-500"
                                        placeholder="Email">
                                </div>
                                <div>
                                    <label class="text-sm">Phone</label>
                                    <input type="number" name="phone" 
                                        class="w-full mt-1 px-4 py-2 rounded-lg bg-gray-100 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-400 placeholder-gray-500"
                                        placeholder="Nomor telepon">
                                </div>
                                <div>
                                    <label class="text-sm">Address</label>
                                    <input type="text" name="address"
                                        class="w-full mt-1 px-4 py-2 rounded-lg bg-gray-100 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-400 placeholder-gray-500"
                                        placeholder="Alamat">
                                </div>
                                <div>
                                    <label for="password" class="text-sm">Password</label>
                                    <input type="password" name="password" class="w-full mt-1 px-4 py-2 rounded-lg bg-gray-100 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-400 placeholder-gray-500"
                                        placeholder="Password">
                                </div>
                                <div>
                                    <label for="password_confirmation" class="text-sm">Confirm Password</label>
                                    <input type="password" name="password_confirmation" class="w-full mt-1 px-4 py-2 rounded-lg bg-gray-100 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-400 placeholder-gray-500"
                                        placeholder="Confirm Password">
                                </div>
                                {{-- btn --}}
                                <div class="col-span-1 md:col-span-2 flex justify-end gap-4 mt-4">
                                    <button type="button" id="close-overlayAdd" class="px-4 py-2 bg-gray-300 hover:bg-gray-400 text-gray-800 rounded-md transition">
                                        Cancel
                                    </button>
                                    <button type="submit" class="px-4 py-2 bg-green-500 hover:bg-green-600 text-white rounded-md transition">
                                        Add Account
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            {{-- overlay add account --}}
        </div>
    </div>
</div>

<script>
// overlay add account
const btnAdd = document.getElementById('add-overlay');
const addOverlay = document.getElementById('overlayAddAccount');
const closeAddOverlay = document.getElementById('close-overlayAdd');

// tampilkan overlay saat tombol "Add Account" diklik
btnAdd.addEventListener('click', () => {
    addOverlay.classList.remove('hidden');
    addOverlay.classList.add('flex');
})

// sembunyikan overlay saat tombol "Cancel" diklik
closeAddOverlay.addEventListener('click', () => {
    addOverlay.classList.remove('flex');
    addOverlay.classList.add('hidden');
})
// overlay add account

</script>