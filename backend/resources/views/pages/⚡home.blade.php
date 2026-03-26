<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="flex pt-14 justify-center items-center w-full h-screen">
    <div class="flex bg-gray-100 h-[98%] w-[97%]">

        <div class="flex flex-col w-full h-full gap-3">

            <div class="flex gap-3 w-full h-auto">
                @for ($i = 1; $i <= 4; $i++)
                    <div class="flex gap-2 bg-white shadow-md w-full h-36 rounded-md justify-center items-center">
                        <div class="flex justify-center items-center h-15 w-[20%] shadow-md bg-amber-400 rounded-md">
                            <div class="h-10 w-10">
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

            <div class="flex gap-3 w-full h-full">
                <div class="flex gap-3 flex-col w-full h-full rounded-md justify-center items-center">
                    <div class="flex flex-4 bg-white shadow-md w-full h-full rounded-md justify-center items-center">
                        <p>1</p>
                    </div>
                    <div class="flex flex-1 bg-white shadow-md w-full h-full rounded-md justify-center items-center">
                        <p>2</p>
                    </div>
                </div>

                @for ($i = 2; $i <= 3; $i++)
                    <div class="flex bg-white shadow-md w-full h-full rounded-md justify-center items-center">
                        <p>{{ $i }}</p>
                    </div>
                @endfor
            </div>

            <div class="flex bg-gray-300 w-full h-full">
                <div class="flex flex-4 bg-blue-900 w-full h-full rounded-md justify-center items-center">
                    <p>1</p>
                </div>
            </div>

        </div>

    </div>
</div>