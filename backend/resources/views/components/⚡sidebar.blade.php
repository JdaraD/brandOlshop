<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="flex flex-col items-center gap-6 pt-18 bg-white shadow-md h-screen w-full">

    <div class="flex flex-col gap w-[90%] h-auto">
        <p class="text-base font-bold">Julian</p>
        <p class="text-sm opacity-80">Admin Store</p>
    </div>

    <div class="flex flex-col items-center gap-6 w-full">
        <div class="flex flex-col gap-2 w-[90%] h-auto rounded-md">
            <div class="flex gap-3 w-full h-auto p-2 hover:bg-blue-800 rounded-md">
                <button>
                    <p class="text-sm">Dashboard</p>
                </button>
            </div>
            <div class="flex gap-3 w-full h-auto p-2 hover:bg-blue-800 rounded-md">
                <button>
                    <p class="text-sm">Transactions</p>
                </button>
            </div>
            <div class="flex gap-3 w-full h-auto p-2 hover:bg-blue-800 rounded-md">
                <button>
                    <p class="text-sm">Inbox</p>
                </button>
            </div>
    
        </div>
    
        <div class="flex flex-col gap w-[90%] h-auto p-2 bg-amber-300 rounded-md">
            <p class="text-sm capitalize font-medium">production</p>
        </div>
        <div class="flex flex-col gap-2 w-[90%] h-auto rounded-md">
            <div class="flex gap-3 w-full h-auto p-2 hover:bg-blue-800 rounded-md">
                <button>
                    <p class="text-sm">Categories</p>
                </button>
            </div>
            <div class="flex gap-3 w-full h-auto p-2 hover:bg-blue-800 rounded-md">
                <button>
                    <p class="text-sm">Products</p>
                </button>
            </div>
            <div class="flex gap-3 w-full h-auto p-2 hover:bg-blue-800 rounded-md">
                <button>
                    <p class="text-sm">Inbox</p>
                </button>
            </div>
    
        </div>

        <div class="flex flex-col gap w-[90%] h-auto p-2 bg-amber-300 rounded-md">
            <p class="text-sm capitalize font-medium">account</p>
        </div>
        <div class="flex flex-col gap-2 w-[90%] h-auto rounded-md">
            {{-- <div class="flex gap-3 w-full h-auto p-2 hover:bg-blue-800 rounded-md">
                <button>
                    <p class="text-sm">Inbox</p>
                </button>
            </div>
            <div class="flex gap-3 w-full h-auto p-2 hover:bg-blue-800 rounded-md">
                <button>
                    <p class="text-sm">Inbox</p>
                </button>
            </div>
            <div class="flex gap-3 w-full h-auto p-2 hover:bg-blue-800 rounded-md">
                <button>
                    <p class="text-sm">Inbox</p>
                </button>
            </div> --}}

            {{-- <div class="w-full max-w-md mx-auto space-y-2">

                <!-- Item 1 -->
                <div>
                    <input type="checkbox" id="acc1" class="peer hidden">

                    <label for="acc1"
                        class="flex justify-between items-center bg-blue-900 text-white p-3 cursor-pointer rounded-md">
                        <span>Menu 1</span>
                        <span class="transition-transform duration-300 peer-checked:rotate-180">▼</span>
                    </label>

                    <div
                        class="max-h-0 overflow-hidden bg-blue-100 rounded-md peer-checked:max-h-40 transition-all duration-300">
                        <p class="p-3">Isi menu 1</p>
                    </div>
                </div>

                <!-- Item 2 -->
                <div>
                    <input type="checkbox" id="acc2" class="peer hidden">

                    <label for="acc2"
                        class="flex justify-between items-center bg-blue-900 text-white p-3 cursor-pointer rounded-md">
                        <span>Menu 2</span>
                        <span class="transition-transform duration-300 peer-checked:rotate-180">▼</span>
                    </label>

                    <div
                        class="max-h-0 overflow-hidden bg-blue-100 rounded-md peer-checked:max-h-40 transition-all duration-300">
                        <p class="p-3">Isi menu 2</p>
                    </div>
                </div>

            </div> --}}
    
        </div>

    </div>

</div>