<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="flex pt-14 justify-center items-center w-full h-screen rounded-md">
    <div class="flex w-[99%] h-[99%] p-4 gap-3">
        <div class="flex flex-col shrink-0 gap-2 bg-white w-full h-full p-4 rounded-md">
            <div class="flex flex-col w-full h-full gap-4 overflow-x-auto no-scrollbar">

                <div class="flex flex-col w-full h-auto gap-4">
                    <div>
                        <p class="text-lg font-bold">Profile Website</p>
                        <p class="text-sm opacity-80">Manage your profile website</p>
                    </div>
                    <div class="flex flex-col gap-4 w-full h-auto p-2 bg-gray-100 rounded-md">
                        <div class="flex flex-row gap-4 w-full h-auto">
                            <div class="flex flex-col gap-2 w-[50%]">
                                <label for="logo-brand">Logo Brand :</label>
                                <input type="file" id="logo-brand" class="border border-gray-300 bg-white rounded-md p-1">
                                <label for="name-brand">Name Brand :</label>
                                <input type="text" id="name-brand" class="border border-gray-300 bg-white rounded-md p-1">
                                <label for="gmail-brand">Gmail Brand :</label>
                                <input type="email" id="gmail-brand" class="border border-gray-300 bg-white rounded-md p-1" placeholder="Enter your gmail brand (gmail@example.com)">
                                <p>Sosial Media Brand :</p>
                                    <div class="flex flex-wrap gap-2">
                                        <div class="flex flex-col gap-2">
                                            <label for="facebook">facebook</label>
                                            <input type="text" id="facebook" class="border border-gray-300 bg-white rounded-md p-1" placeholder="Enter your link facebook brand">
                                        </div>
                                        <div class="flex flex-col gap-2">
                                            <label for="instagram">Instagram</label>
                                            <input type="text" id="instagram" class="border border-gray-300 bg-white rounded-md p-1" placeholder="Enter your link instagram brand">
                                        </div>
                                        <div class="flex flex-col gap-2">
                                            <label for="shoppe">Shoppe</label>
                                            <input type="text" id="shoppe" class="border border-gray-300 bg-white rounded-md p-1" placeholder="Enter your link shoppe brand">
                                        </div>
                                        <div class="flex flex-col gap-2">
                                            <label for="tiktok">TikTok</label>
                                            <input type="text" id="tiktok" class="border border-gray-300 bg-white rounded-md p-1" placeholder="Enter your link tiktok brand">
                                        </div>
                                        <div class="flex flex-col gap-2">
                                            <label for="tokopedia">Tokopedia</label>
                                            <input type="text" id="tokopedia" class="border border-gray-300 bg-white rounded-md p-1" placeholder="Enter your link tokopedia brand">
                                        </div>
                                    </div>
                            </div>
                            <div class="flex flex-col gap-2 w-[50%]">
                                <label for="name-brand">Profile Brand :</label>
                                <textarea name="profile-brand" id="profile-brand" cols="30" rows="4" class="border border-gray-300 bg-white rounded-md p-1"></textarea>
                                <label for="address-brand">Address Brand :</label>
                                <textarea name="address-brand" id="address-brand" cols="30" rows="4" class="border border-gray-300 bg-white rounded-md p-1"></textarea>
                                <label for=""></label>
                            </div>
                        </div>
    
                        <div class="flex flex-row gap-2 w-full h-auto justify-end">
                            <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 cursor-pointer">Save</button>
                            <button class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 cursor-pointer">Cancel</button>
                        </div>
                    </div>
                </div>
    
                <div class="flex flex-col gap-2 w-full h-auto">
                    <div>
                        <p class="text-lg font-bold">Colors</p>
                        <p class="text-sm opacity-80">Manage your colors website</p>
                    </div>
                    <div class="flex flex-col gap-2 w-full h-auto p-2 bg-gray-100 rounded-md">
                        <div class="flex flex-row gap-2 w-full h-auto">
                            <div class="flex flex-col gap-2 w-[50%]">
                                <p class="text-sm font-bold">Website Colors</p>
                                <div class="flex flex-row gap-2">
                                    <div class="flex flex-col justify-center gap-2 items-center">
                                        <label for="header" class="text-sm">Header</label>
                                        <input type="color" id="header" class="flex w-10 h-10 border border-black rounded-full overflow-hidden cursor-pointer p-0" Value="#ffffff">
        
                                    </div>
                                    <div class="flex flex-col justify-center gap-2 items-center">
                                        <label for="content1" class="text-sm">Content1</label>
                                        <input type="color" id="content1" class="flex w-10 h-10 border border-black rounded-full overflow-hidden cursor-pointer p-0" Value="#ffffff">
                                    </div>
                                    <div class="flex flex-col justify-center gap-2 items-center">
                                        <label for="content2" class="text-sm">Content2</label>
                                        <input type="color" id="content2" class="flex w-10 h-10 border border-black rounded-full overflow-hidden cursor-pointer p-0" Value="#ffffff">
                                    </div>
                                    <div class="flex flex-col justify-center gap-2 items-center">
                                        <label for="footer" class="text-sm">Footer</label>
                                        <input type="color" id="footer" class="flex w-10 h-10 border border-black rounded-full overflow-hidden cursor-pointer p-0" Value="#ffffff">
                                    </div>
                                </div>
                            </div>
        
                            <div class="flex flex-col gap-2 w-[50%]">
                                <p class="text-sm font-bold">Admin Colors</p>
                                <div class="flex flex-row gap-2">
                                    <div class="flex flex-col justify-center gap-2 items-center">
                                        <label for="header" class="text-sm">Header</label>
                                        <input type="color" id="header" class="flex w-10 h-10 border border-black rounded-full overflow-hidden cursor-pointer p-0" Value="#ffffff">
        
                                    </div>
                                     <div class="flex flex-col justify-center gap-2 items-center">
                                        <label for="content" class="text-sm">Content</label>
                                        <input type="color" id="content" class="flex w-10 h-10 border border-black rounded-full overflow-hidden cursor-pointer p-0" Value="#ffffff">
                                    </div>
                                    <div class="flex flex-col justify-center gap-2 items-center">
                                        <label for="footer" class="text-sm">Footer</label>
                                        <input type="color" id="footer" class="flex w-10 h-10 border border-black rounded-full overflow-hidden cursor-pointer p-0" Value="#ffffff">
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="flex flex-row w-full gap-2 h-auto justify-end">
                            <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 cursor-pointer">Save</button>
                            <button class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 cursor-pointer">Cancel</button>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>
    </div>
</div>