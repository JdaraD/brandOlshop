<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="flex pt-14 justify-center items-center w-full h-screen rounded-md">
    <div class="flex flex-col w-[99%] h-[99%] gap-3 overflow-y-auto no-scrollbar rounded-md p-4">
        <div class="flex flex-col shrink-0 gap-4 bg-white w-full h-full p-4 rounded-md">
            <div class="flex flex-col gap-2">
                <h1 class="text-2xl font-bold">Profile User</h1>
                <p class="text-sm text-gray-500">Manage your profile information and settings.</p>
            </div>
            <div class="flex flex-col gap-2 w-full h-auto">
                <label for="profile_picture" class="text-sm font-medium text-gray-700">Profile Picture</label>
                <img src="https://ui-avatars.com/api/?name=John+Doe&background=random" alt="Profile Picture" class="w-24 h-24 rounded-full object-cover">
            </div>

            <form action="" method="POST" enctype="multipart/form-data" class="flex flex-col gap-4 w-full h-auto p-2 bg-gray-100 rounded-md">
                @csrf
                <div class="flex flex-row gap-4 w-full h-auto">
                    <div class="flex flex-col gap-2 w-[50%]">
                        <label for="name">Nama</label>
                        <input type="text" name="name" id="name" class="border border-gray-300 bg-white rounded-md p-1">
                        <label for="email">Gmail :</label>
                        <input type="email" name="email" id="email" class="border border-gray-300 bg-white rounded-md p-1" placeholder="Enter your gmail (gmail@example.com)">
                        <label for="phone">Number Phone :</label>
                        <input type="text" name="phone" id="phone" class="border border-gray-300 bg-white rounded-md p-1" placeholder="Enter your phone number">
                    </div>
                    <div class="flex flex-col gap-2 w-[50%]">
                        <label for="address">Profile Brand :</label>
                        <textarea name="address" id="address" cols="30" rows="4" class="border border-gray-300 bg-white rounded-md p-1"></textarea>
                    </div>
                </div>
                <div class="flex flex-row gap-2 w-full h-auto justify-end">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 cursor-pointer">Update Profile</button>
                </div>

            </form>
                <div class="flex flex-row gap-2 w-full h-auto items-center justify-end">
                    <p class="text-sm text-gray-500">Want to change your password?</p>
                    <button id="open-overlayRestartPass" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 cursor-pointer">Restart Password</button>
                </div>

            {{-- overlay restart password --}}
            <div id="overlayRestartPass" class="hidden fixed inset-0 bg-black/50 backdrop-blur-sm z-50">
                
                <div class="flex items-center justify-center w-full min-h-screen p-4">
                    <div class="bg-white rounded-md p-6 shadow-md w-full max-w-3xl">
                        <h2 class="text-2xl font-bold mb-4">Restart Password</h2>
                        <form action="" method="POST" enctype="multipart/form-data" class="flex flex-col gap-4">
                            @csrf
                            <div class="flex flex-col gap-2">
                                <label for="current_password">Current Password</label>
                                <input type="password" name="current_password" id="current_password" class="border border-gray-300 bg-white rounded-md p-1">
                            </div>
                            <div class="flex flex-col gap-2">
                                <label for="new_password">New Password</label>
                                <input type="password" name="new_password" id="new_password" class="border border-gray-300 bg-white rounded-md p-1">
                            </div>
                            <div class="flex flex-col gap-2">
                                <label for="confirm_password">Confirm New Password</label>
                                <input type="password" name="confirm_password" id="confirm_password" class="border border-gray-300 bg-white rounded-md p-1">
                            </div>
                            <div class="flex flex-row gap-2 w-full h-auto justify-end">
                                <button id="cancel-overlayRestartPass" type="button" class="bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600 cursor-pointer">Cancel</button>
                                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 cursor-pointer">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- overlay restart password --}}
        </div>
    </div>
</div>

<script>
    // restart password overlay
    const openOverlayRestartPass = document.getElementById('open-overlayRestartPass');
    const overlayRestartPass = document.getElementById('overlayRestartPass');
    const cancelOverlayRestartPass = document.getElementById('cancel-overlayRestartPass');

    // open overlay restart password
    openOverlayRestartPass.addEventListener('click', () => {
        overlayRestartPass.classList.remove('hidden');
    });

    // close overlay restart password
    cancelOverlayRestartPass.addEventListener('click', () => {
        overlayRestartPass.classList.add('hidden');
    });


</script>