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
                    <div class="flex bg-yellow-300 w-full h-44 rounded-md justify-center items-center">
                        <p>{{ $i }}</p>
                    </div>
                @endfor
            </div>

            <div class="flex gap-3 bg-gray-300 w-full h-full">
                <div class="flex gap-3 flex-col w-full h-full rounded-md justify-center items-center">
                    <div class="flex flex-4 bg-amber-900 w-full h-full rounded-md justify-center items-center">
                        <p>1</p>
                    </div>
                    <div class="flex flex-1 bg-blue-500 w-full h-full rounded-md justify-center items-center">
                        <p>2</p>
                    </div>
                </div>

                @for ($i = 2; $i <= 3; $i++)
                    <div class="flex bg-yellow-300 w-full h-full rounded-md justify-center items-center">
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