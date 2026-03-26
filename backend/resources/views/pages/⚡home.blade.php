<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="flex pt-14 justify-center items-center w-full h-screen rounded-md">
    <div class="flex flex-col w-[99%] h-[99%] gap-3 overflow-y-auto no-scrollbar rounded-md p-4">

                <div class="flex gap-3 shrink-0 w-full h-auto">
                    @for ($i = 1; $i <= 4; $i++)
                        <div class="flex gap-2 bg-white shadow-md w-full h-36 rounded-md justify-center items-center">
                            <div class="flex justify-center items-center h-14 w-[18%] shadow-md bg-amber-400 rounded-md">
                                <div class="h-8 w-8">
                                    <x-zondicon-view-show />
                                </div>
                            </div>
                            <div class="flex flex-col justify-center gap h-15 w-[70%] rounded-md">
                                <p class="text-base font-bold">Views</p>
                                <p class="text-sm opacity-60">2000 Views</p>
                            </div>
                        </div>
                    @endfor
                </div>
        
                <div class="flex gap-3 shrink-0 w-full h-72">
                    <div class="flex gap-3 flex-col w-full h-full rounded-md justify-center items-center">
                        <div class="flex flex-4 bg-white shadow-md w-full h-full rounded-md justify-center items-center">
                            <p>1</p>
                        </div>
                        <div class="flex flex-1 bg-white shadow-md w-full h-full rounded-md justify-center items-center">
                            <p>2</p>
                        </div>
                    </div>
        
                    @for ($i = 2; $i <= 3; $i++)
                        <div class="flex flex-col bg-white shadow-md w-full h-full rounded-md justify-center items-center">
                            <div class="flex items-center w-full h-[20%] pl-4 border-b border-gray-200">
                                <p class="text-sm font-bold">Sales</p>
                            </div>
                            <div class="flex justify-center items-center w-full h-[80%]">
                                <p>{{ $i }}</p>
                            </div>
                        </div>
                    @endfor
                </div>
        
                <div class="flex w-full h-250 shrink-0">
                    <div class="flex flex-4 bg-white shadow-md w-full h-full rounded-md justify-center items-center">
                        <p>1</p>
                    </div>
                </div>

    </div>
</div>