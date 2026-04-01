<?php

use Livewire\Component;

new class extends Component
{
    
};
?>

<div class="flex pt-14 justify-center items-center w-full h-screen rounded-md">
    <div class="flex w-[99%] h-[99%] p-4 gap-3">
        <div class="flex flex-col shrink-0 gap-2 bg-white w-full h-full p-4 rounded-md">
            <div class="flex justify-between w-full h-14 rounded-md">
                <div class="flex items-center gap-4 w-auto h-full rounded-md">
                    <div class="flex gap-2 border items-center justify-center border-gray-300 w-60 h-8 rounded-md p-2">
                        <input type="text" placeholder="Search..." class="outline-none">
                        <button class="flex h-full w-full items-center justify-center cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0 0 72 72">
                                <path d="M 31 11 C 19.973 11 11 19.973 11 31 C 11 42.027 19.973 51 31 51 C 34.974166 51 38.672385 49.821569 41.789062 47.814453 L 54.726562 60.751953 C 56.390563 62.415953 59.088953 62.415953 60.751953 60.751953 C 62.415953 59.087953 62.415953 56.390563 60.751953 54.726562 L 47.814453 41.789062 C 49.821569 38.672385 51 34.974166 51 31 C 51 19.973 42.027 11 31 11 z M 31 19 C 37.616 19 43 24.384 43 31 C 43 37.616 37.616 43 31 43 C 24.384 43 19 37.616 19 31 C 19 24.384 24.384 19 31 19 z"></path>
                            </svg>
                        </button>
                    </div>
                    <el-dropdown class="inline-block">
                        <button class="inline-flex w-40 h-8 justify-between items-center px-2 gap-x-1 border border-gray-300 rounded-md bg-white/10 text-sm font-semibold text-gray-300 inset-ring-1 inset-ring-white/5 hover:bg-white/20 cursor-pointer">
                            <p class="text-black capitalize text-sm opacity-80">Pilih Kategori</p>
                            <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="-mr-1 size-5 text-gray-400">
                            <path d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" fill-rule="evenodd" />
                            </svg>
                        </button>

                        <el-menu anchor="bottom end" popover class="w-56 origin-top-right rounded-md bg-gray-800 outline-1 -outline-offset-1 outline-white/10 transition transition-discrete z-100 [--anchor-gap:--spacing(2)] data-closed:scale-95 data-closed:transform data-closed:opacity-0 data-enter:duration-100 data-enter:ease-out data-leave:duration-75 data-leave:ease-in">
                            <div class="py-1">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-300 focus:bg-white/5 focus:text-white focus:outline-hidden">Account settings</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-300 focus:bg-white/5 focus:text-white focus:outline-hidden">Support</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-300 focus:bg-white/5 focus:text-white focus:outline-hidden">License</a>
                            <form action="#" method="POST">
                                <button type="submit" class="block w-full px-4 py-2 text-left text-sm text-gray-300 focus:bg-white/5 focus:text-white focus:outline-hidden">Sign out</button>
                            </form>
                            </div>
                        </el-menu>
                    </el-dropdown>
                </div>
                <div class="flex items-center justify-end gap-2 w-full h-full rounded-md">
                    <div class="flex items-center justify-center w-6 h-8 bg-green-500 hover:bg-green-800 rounded-md cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" fill="white" y="0px" width="18" height="18" viewBox="0 0 30 30">
                            <path d="M15,3C8.373,3,3,8.373,3,15c0,6.627,5.373,12,12,12s12-5.373,12-12C27,8.373,21.627,3,15,3z M21,16h-5v5 c0,0.553-0.448,1-1,1s-1-0.447-1-1v-5H9c-0.552,0-1-0.447-1-1s0.448-1,1-1h5V9c0-0.553,0.448-1,1-1s1,0.447,1,1v5h5 c0.552,0,1,0.447,1,1S21.552,16,21,16z"></path>
                        </svg>
                    </div>
                    <div class="flex items-center justify-center w-6 h-8 bg-red-500 hover:bg-red-800 rounded-md cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" fill="white" y="0px" width="18" height="18" viewBox="0 0 30 30">
                            <path d="M15,3C8.373,3,3,8.373,3,15c0,6.627,5.373,12,12,12s12-5.373,12-12C27,8.373,21.627,3,15,3z M9,14h12c0.552,0,1,0.447,1,1s-0.448,1-1,1H9c-0.552,0-1-0.447-1-1S8.448,14,9,14z"></path>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="bg-yellow-500 w-full h-full rounded-md no-scrollbar overflow-y-auto">
                <div></div>
            </div>
        </div>
    </div>
</div>