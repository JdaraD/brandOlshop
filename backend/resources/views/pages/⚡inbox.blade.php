<?php

use Livewire\Component;
use App\Models\inbox;

new class extends Component
{
    public $inboxes;
    public $showDetailInbox = false;
    public $selectedInbox;

    public function loadInboxes()
    {
        $this->inboxes = inbox::all();
    }

    public function mount()
    {
        $this->loadInboxes();
    }

    // open overlay detail inbox
    public function openDetailInbox($id)
    {
        $this->selectedInbox = inbox::find($id);
        $this->showDetailInbox = true;
    }

    public function closeDetailInbox()
    {
        $this->showDetailInbox = false;
    }
};
?>

<div class="flex pt-14 justify-center items-center w-full h-screen rounded-md">
    <div class="flex w-[99%] h-[99%] p-4 gap-3">
        <div class="flex flex-col shrink-0 gap-4 bg-white w-full h-full p-4 rounded-md">
            <div class="flex justify-between">
                <div class="flex items-center gap-4 w-auto h-full rounded-md">
                
                    {{-- search box --}}
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
                    {{-- search box --}}

                    {{-- overlay calender --}}
                    <div id="overlay-calender" class="hidden absolute top-32 left-130 bg-white p-4 rounded-md shadow-lg z-20 transition duration-200">
                        <input type="date" class="border border-gray-300 rounded-md p-2">
                    </div>
                    {{-- overlay calender --}}
                </div>

                {{-- download transactions --}}
                {{-- <div id="add-overlay" class="flex items-center justify-center w-6 h-8 bg-green-500 hover:bg-green-800 rounded-md cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" fill="white" size="20" width="18" height="18">
                        <path d="M352 96C352 78.3 337.7 64 320 64C302.3 64 288 78.3 288 96L288 306.7L246.6 265.3C234.1 252.8 213.8 252.8 201.3 265.3C188.8 277.8 188.8 298.1 201.3 310.6L297.3 406.6C309.8 419.1 330.1 419.1 342.6 406.6L438.6 310.6C451.1 298.1 451.1 277.8 438.6 265.3C426.1 252.8 405.8 252.8 393.3 265.3L352 306.7L352 96zM160 384C124.7 384 96 412.7 96 448L96 480C96 515.3 124.7 544 160 544L480 544C515.3 544 544 515.3 544 480L544 448C544 412.7 515.3 384 480 384L433.1 384L376.5 440.6C345.3 471.8 294.6 471.8 263.4 440.6L206.9 384L160 384zM464 440C477.3 440 488 450.7 488 464C488 477.3 477.3 488 464 488C450.7 488 440 477.3 440 464C440 450.7 450.7 440 464 440z"/>
                    </svg>
                </div> --}}
                {{-- download transactions --}}

            </div>

            <div class="w-full h-full overflow-x-auto no-scrollbar">
                {{-- <div class="flex flex-col gap-2">
                    <div class="flex gap-2 items-center">
                        <div class="w-3 h-3 rounded-full bg-green-500"></div>
                        <span class="text-sm text-gray-500">Online</span>
                    </div>
                    <div class="flex gap-2 items-center">
                        <div class="w-3 h-3 rounded-full bg-gray-300"></div>
                        <span class="text-sm text-gray-500">Offline</span>
                    </div>
                </div> --}}
                <div class="grid grid-cols-2 gap-2" wire:poll.5s="loadInboxes">
                    @foreach ($inboxes as $index => $inbox)
                        <div wire:key="inbox-{{ $inbox->id }}" class="flex flex-col w-full h-30 bg-white border border-gray-300 rounded-md shadow-md hover:shadow-xl transition duration-200">
                            <div class="flex flex-col gap-1 p-4">
                                <h3 class="text-base font-bold text-black">Inbox {{ $index + 1 }}</h3>
                                <p class="text-sm text-black">Details of inbox message {{ $index + 1 }}</p>
                            </div>
                            <div class="flex w-full justify-end px-2 gap-2">
                                <button wire:click="openDetailInbox({{ $inbox->id }})" class="flex items-center justify-center w-8 h-6 bg-green-500 hover:bg-green-600 rounded-md cursor-pointer">
                                    <i class="fa-solid fa-eye text-xs text-white"></i>
                                </button>
                                <button id="openDeleteInbox" class="flex items-center justify-center w-8 h-6 bg-red-500 hover:bg-red-600 rounded-md cursor-pointer">
                                    <i class="fa-solid fa-trash text-xs text-white"></i>
                                </button>
                            </div>
                        </div>
                    @endforeach

                    {{-- overlay detail inbox --}}
                    @if ($showDetailInbox)
                    <div class="{{ $showDetailInbox ? '' : 'hidden' }} fixed inset-0 bg-black/50 backdrop-blur-md z-20">
                        <div class="flex flex-col justify-center items-center w-full h-full">
                            <div class="flex flex-col gap-4 bg-white p-4 min-w-100 rounded-md transition duration-200">
                                <div class="flex flex-col gap-2">
                                    <div class="flex justify-between items-center">
                                        <h3 class="text-lg font-bold text-black">Detail Inbox</h3>
                                        <p>{{ \Carbon\Carbon::parse($selectedInbox->tanggal)->format('d M Y') }}</p>
                                    </div>
                                    <div class="flex flex-col gap-1">
                                        <p class="text-sm font-bold">Name: {{ $selectedInbox->name }}</p>
                                        <p class="text-sm font-bold">Email: {{ $selectedInbox->email }}</p>
                                        <p class="text-sm text-black">{{ $selectedInbox->message }}</p>
                                    </div>
                                </div>
                                <div class="flex gap-2 justify-end">
                                    <button wire:click="closeDetailInbox" class="px-2 py-1 text-md font-medium text-white bg-red-500 rounded-md hover:bg-red-800 transition cursor-pointer">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    {{-- overlay detail inbox --}}

                    {{-- overlay delete inbox --}}
                    <div id="overlay-delete-inbox" class="hidden fixed inset-0 bg-black/50 backdrop-blur-md z-20">
                        <div class="flex flex-col justify-center items-center w-full h-full">
                            <div class="flex flex-col gap-4 bg-white p-4 rounded-md transition duration-200">
                                <div class="flex flex-col gap-2">
                                    <h3 class="text-lg font-bold text-black">Delete Inbox</h3>
                                    <p class="text-sm text-black">Are you sure you want to delete this inbox message?</p>
                                </div>
                                <div class="flex gap-2 justify-end">
                                    <button id="confirm-delete" class="bg-green-500 hover:bg-green-800 text-white rounded-md px-2 py-1 transition cursor-pointer">
                                        Yes, Delete
                                    </button>
                                    <button id="closeBtnDelete" class="px-2 py-1 text-md font-medium text-white bg-red-500 rounded-md hover:bg-red-800 transition cursor-pointer">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- overlay delete inbox --}}
                </div>
            </div>
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

    // script untuk toggle overlay detail inbox
    // const openViweInbox = document.getElementById('openViweInbox');
    // const overlayDetailInbox = document.getElementById('overlay-detail-inbox');
    // const closeBtnView = document.getElementById('closeBtnView');

    // // open overlay detail inbox when click btn view
    // openViweInbox.addEventListener('click', () => {
    //     overlayDetailInbox.style.display = 'flex';
    // })

    // // close overlay detail inbox when click btn close
    // closeBtnView.addEventListener('click', () => {
    //     overlayDetailInbox.style.display = 'none';
    // })
    // // script untuk toggle overlay detail inbox

    // // script untuk toggle overlay delete inbox
    // const openDeleteInbox = document.getElementById('openDeleteInbox');
    // const overlayDeleteInbox = document.getElementById('overlay-delete-inbox');
    // const closeBtnDelete = document.getElementById('closeBtnDelete');

    // // open overlay delete inbox when click btn delete
    // openDeleteInbox.addEventListener('click', () => {
    //     overlayDeleteInbox.style.display = 'flex';
    // })

    // // close overlay delete inbox when click btn close
    // closeBtnDelete.addEventListener('click', () => {
    //     overlayDeleteInbox.style.display = 'none';
    // })
    // script untuk toggle overlay delete inbox


</script>