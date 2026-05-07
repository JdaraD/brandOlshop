<?php

use Livewire\Component;
use App\Models\profileWebsite;

new class extends Component
{
    public $profileWebsite;

    public function loadprofileWebsite()
    {
        $this->profileWebsite = profileWebsite::latest()->first();
    }

    public function mount()
    {
        $this->loadprofileWebsite();
    }
};
?>

<div class="flex bg-blue-900 w-full justify-between items-center shadow-md px-4">
    @if ($profileWebsite)
        <div class="flex gap-2 items-center">
            <img src="{{ asset('storage/' . $profileWebsite->logo) }}" alt="{{ $profileWebsite->name }}" class="h-14 w-14 rounded-full object-cover">
            <p class="capitalize text-base text-white font-bold">{{ $profileWebsite->name }}</p>
        </div>
        
    @endif
    <div class="flex gap-3 items-center">
        <div class="border rounded-md bg-gray-200 flex items-center gap-2 px-2">
            <input type="text" placeholder="Search" class="border-none outline-0">
        </div>
        <div class="flex items-center gap-4">
            <div class="group">
                <a href="{{ route('profile-user') }}" class="text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="white" viewBox="0 0 640 640">
                        <path d="M463 448.2C440.9 409.8 399.4 384 352 384L288 384C240.6 384 199.1 409.8 177 448.2C212.2 487.4 263.2 512 320 512C376.8 512 427.8 487.3 463 448.2zM64 320C64 178.6 178.6 64 320 64C461.4 64 576 178.6 576 320C576 461.4 461.4 576 320 576C178.6 576 64 461.4 64 320zM320 336C359.8 336 392 303.8 392 264C392 224.2 359.8 192 320 192C280.2 192 248 224.2 248 264C248 303.8 280.2 336 320 336z"/>
                    </svg>
                </a>
                <span class="absolute right-12 top-14 -translate-y-1/2 bg-gray-300 text-black text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition duration-200 whitespace-nowrap">
                    Profile
                </span>
            </div>
            <div class="group">
                <a href="" class="">
                    <svg xmlns="http://www.w3.org/2000/svg "width="28" height="28" fill="white" viewBox="0 0 640 640">
                        <path d="M224 160C241.7 160 256 145.7 256 128C256 110.3 241.7 96 224 96L160 96C107 96 64 139 64 192L64 448C64 501 107 544 160 544L224 544C241.7 544 256 529.7 256 512C256 494.3 241.7 480 224 480L160 480C142.3 480 128 465.7 128 448L128 192C128 174.3 142.3 160 160 160L224 160zM566.6 342.6C579.1 330.1 579.1 309.8 566.6 297.3L438.6 169.3C426.1 156.8 405.8 156.8 393.3 169.3C380.8 181.8 380.8 202.1 393.3 214.6L466.7 288L256 288C238.3 288 224 302.3 224 320C224 337.7 238.3 352 256 352L466.7 352L393.3 425.4C380.8 437.9 380.8 458.2 393.3 470.7C405.8 483.2 426.1 483.2 438.6 470.7L566.6 342.7z"/>
                    </svg>
                </a>

                <span class="absolute right-1 top-14 -translate-y-1/2 bg-gray-300 text-black text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition duration-200 whitespace-nowrap">
                    Logout
                </span>
            </div>

        </div>
    </div>
</div>