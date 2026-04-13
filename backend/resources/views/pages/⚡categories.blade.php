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

            <div class="flex justify-between w-full h-14 rounded-md">
                
                {{-- buttons --}}
                <div class="flex items-center justify-end gap-2 w-full h-full rounded-md">
                    <div id="confirm-delete" class="hidden confrimBtn flex items-center justify-center w-auto px-2 h-8 bg-red-500 hover:bg-red-800 rounded-md cursor-pointer text-white">
                        Hapus
                    </div>
                    <div id="add-overlay" class="flex items-center justify-center w-6 h-8 bg-green-500 hover:bg-green-800 rounded-md cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" fill="white" y="0px" width="18" height="18" viewBox="0 0 30 30">
                            <path d="M15,3C8.373,3,3,8.373,3,15c0,6.627,5.373,12,12,12s12-5.373,12-12C27,8.373,21.627,3,15,3z M21,16h-5v5 c0,0.553-0.448,1-1,1s-1-0.447-1-1v-5H9c-0.552,0-1-0.447-1-1s0.448-1,1-1h5V9c0-0.553,0.448-1,1-1s1,0.447,1,1v5h5 c0.552,0,1,0.447,1,1S21.552,16,21,16z"></path>
                        </svg>
                    </div>
                    <div id="deleteBtn" onclick="toggleDeleteMode()" class="flex items-center justify-center w-6 h-8 bg-red-500 hover:bg-red-800 rounded-md cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" fill="white" y="0px" width="18" height="18" viewBox="0 0 30 30">
                            <path d="M15,3C8.373,3,3,8.373,3,15c0,6.627,5.373,12,12,12s12-5.373,12-12C27,8.373,21.627,3,15,3z M9,14h12c0.552,0,1,0.447,1,1s-0.448,1-1,1H9c-0.552,0-1-0.447-1-1S8.448,14,9,14z"></path>
                        </svg>
                    </div>
                </div>
                {{-- buttons --}}

                {{-- overlay add product --}}
                <div id="overlayAdd" class="hidden fixed inset-0 bg-black/50 backdrop-blur-sm z-50">
                    <button id="close-overlayAdd" class="absolute w-8 h-8 lg:top-40 lg:right-98 md:top-40 md:right-98 top-6 right-6 text-black hover:text-gray-300 cursor-pointer">
                        @svg('jam-close-circle-f')
                    </button>
                    <div class="flex items-center justify-center w-full min-h-screen p-4">
                        <div class="bg-white rounded-md p-6 shadow-md w-full max-w-3xl">
                            <h2 class="text-xl font-semibold mb-4 text-center md:text-left">
                                Add Product
                            </h2>

                            <form class="flex flex-col gap-4" method="POST" enctype="multipart/form-data">
                                
                                <!-- container utama -->
                                <div class="flex flex-col md:flex-row gap-4">

                                    <!-- kiri -->
                                    <div class="flex flex-col gap-4 w-full md:w-1/2">
                                        <select name="category" class="border border-gray-300 rounded-md p-2 outline-none">
                                            <option disabled selected>Select Category</option>
                                            <option value="1">Category 1</option>
                                        </select>

                                        <input type="text" name="product_name" placeholder="Product Name" class="border border-gray-300 rounded-md p-2 outline-none">

                                        <input type="text" name="price" placeholder="Price" class="border border-gray-300 rounded-md p-2 outline-none">

                                        <textarea name="description" rows="4" placeholder="Description" class="border border-gray-300 rounded-md p-2 outline-none"></textarea>
                                    </div>

                                    <!-- kanan -->
                                    <div class="flex flex-col gap-2 w-full md:w-1/2">
                                        <label for="file-upload" class="text-sm text-gray-600">
                                            Upload Image
                                        </label>

                                        <label for="file-upload"
                                            class="flex justify-center items-center border border-dashed border-gray-400 rounded-md h-40 md:h-full w-full cursor-pointer bg-gray-100 hover:bg-gray-200 text-gray-500">
                                            Upload
                                        </label>

                                        <input id="file-upload" type="file" name="image" class="hidden">
                                    </div>

                                </div>

                                <!-- button -->
                                <button type="submit"
                                    class="bg-green-500 hover:bg-green-800 text-white rounded-md px-4 py-2 mt-2 w-full md:w-auto">
                                    Add Product
                                </button>

                            </form>
                        </div>
                    </div>

                </div>
                {{-- overlay add product --}}

                {{-- overlay delete --}}
                <div id="overlayDelete" class="hidden fixed inset-0 bg-black/50 backdrop-blur-sm z-50">
                    <div class="flex justify-center items-center w-full h-full">
                        <div class="bg-white rounded-md p-6 shadow-md w-full max-w-sm text-center">
                            <h2 class="text-xl font-semibold mb-4">Confirm Deletion</h2>
                            <p class="mb-6">Are you sure you want to delete the selected products?</p>
                            <div class="flex justify-center gap-4">
                                <button id="confirm-delete" class="bg-red-500 hover:bg-red-800 text-white rounded-md px-4 py-2">
                                    Yes, Delete
                                </button>
                                <button id="cancel-delete" class="bg-gray-300 hover:bg-gray-400 text-gray-800 rounded-md px-4 py-2">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- overlay delete --}}

            </div>

            {{-- products --}}
            <div class="flex justify-center items-start w-full h-full p-2 overflow-y-auto no-scrollbar">
    
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 w-full">
                    
                    <div id="overlayProductsDetails" class="relative flex flex-col bg-linear-to-b from-blue-100 to-blue-200 shadow-md rounded-md cursor-pointer hover:scale-95 transition duration-300 overflow-hidden">

                        <input type="checkbox" class="select-box hidden absolute top-2 left-2 w-5 h-5 z-40">

                        <!-- Image -->
                        <div class="h-40 flex items-center justify-center p-2">
                            <img src="{{ asset('img/1.png') }}" class="max-h-full max-w-full object-contain">
                        </div>

                        <!-- Content -->
                        <div class="flex flex-col bg-gray-100 text-center p-2">
                            <p class="text-base font-semibold">Sepatu</p>
                        </div>

                    </div>

                    <div id="overlayProductsDetails" class="relative flex flex-col bg-linear-to-b from-blue-100 to-blue-200 shadow-md rounded-md cursor-pointer hover:scale-95 transition duration-300 overflow-hidden">

                        <input type="checkbox" class="select-box hidden absolute top-2 left-2 w-5 h-5 z-40">

                        <!-- Image -->
                        <div class="h-40 flex items-center justify-center p-2">
                            <img src="{{ asset('img/celana.png') }}" class="max-h-full max-w-full object-contain">
                        </div>

                        <!-- Content -->
                        <div class="flex flex-col bg-gray-100 text-center p-2">
                            <p class="text-base font-semibold">Celana</p>
                        </div>

                    </div>

                    <div id="overlayProductsDetails" class="relative flex flex-col bg-linear-to-b from-blue-100 to-blue-200 shadow-md rounded-md cursor-pointer hover:scale-95 transition duration-300 overflow-hidden">

                        <input type="checkbox" class="select-box hidden absolute top-2 left-2 w-5 h-5 z-40">

                        <!-- Image -->
                        <div class="h-40 flex items-center justify-center p-2">
                            <img src="{{ asset('img/kaos.png') }}" class="max-h-full max-w-full object-contain">
                        </div>

                        <!-- Content -->
                        <div class="flex flex-col bg-gray-100 text-center p-2">
                            <p class="text-base font-semibold">Kaos</p>
                        </div>

                    </div>

                    <div id="overlayProductsDetails" class="relative flex flex-col bg-linear-to-b from-blue-100 to-blue-200 shadow-md rounded-md cursor-pointer hover:scale-95 transition duration-300 overflow-hidden">

                        <input type="checkbox" class="select-box hidden absolute top-2 left-2 w-5 h-5 z-40">

                        <!-- Image -->
                        <div class="h-40 flex items-center justify-center p-2">
                            <img src="{{ asset('img/topi.png') }}" class="max-h-full max-w-full object-contain">
                        </div>

                        <!-- Content -->
                        <div class="flex flex-col bg-gray-100 text-center p-2">
                            <p class="text-base font-semibold">Aksesoris</p>
                        </div>

                    </div>

                </div>

            </div>
            {{-- products --}}

        </div>
    </div>
</div>

<script>
    // overlay add product

    const overlay = document.getElementById('overlayAdd');
    const closeOverlay = document.getElementById('close-overlayAdd');

    // Show the overlay when the "Add Product" button is clicked
    document.getElementById('add-overlay').addEventListener('click', () => {
        overlay.style.display = 'flex';
    });

    // Hide the overlay when the close button is clicked
    closeOverlay.addEventListener('click', () => {
        overlay.style.display = 'none';
    });
    // overlay add product

    // delete product
    let deleteMode = false;

    document.getElementById('deleteBtn').addEventListener('click', () => {
        deleteMode = !deleteMode;


        document.querySelectorAll('.confrimBtn').forEach(dl => {
            dl.classList.toggle('hidden');
        });

        document.querySelectorAll('.select-box').forEach(dl => {
            dl.classList.toggle('hidden');
        });
    });
    // delete product

    // overlay delete
    const overlayDelete = document.getElementById('overlayDelete');
    const cancelDelete = document.getElementById('cancel-delete');

    // show the overlay when the "Confirm Delete" button is clicked
    document.getElementById('confirm-delete').addEventListener('click', () => {
        overlayDelete.style.display = 'flex';
    });

    // hide the overlay when the "Cancel" button is clicked
    cancelDelete.addEventListener('click', () => {
        overlayDelete.style.display = 'none';
    });
    // overlay delete
</script>