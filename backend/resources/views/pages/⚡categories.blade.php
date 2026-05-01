<?php

use Livewire\Component;
use App\Models\CategoriesProducts;

new class extends Component
{
    public $categories;
    public $showDetailOverlay = false;
    public $selectedCategory = null;

    // ambil data categories
    public function loadCategories()
    {
        $this->categories = CategoriesProducts::latest()->get();
    }

    // munculkan data ke view
    public function mount()
    {
        $this->loadCategories();
    }

    public function showDetails($id)
    {
        $this->selectedCategory = CategoriesProducts::find($id);
        $this->showDetailOverlay = true;
    }

    public function closeDetails()
    {
        $this->showDetailOverlay = false;
        $this->selectedCategory = null;
    }
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
                                Add Kategori
                            </h2>

                            <form action="{{ route('categories-products.store') }}" class="flex flex-col gap-4" method="POST" enctype="multipart/form-data">
                                @csrf
                                <!-- container utama -->
                                <div class="flex flex-col md:flex-row gap-4">

                                    <!-- kiri -->
                                    <div class="flex flex-col gap-4 w-full md:w-1/2">

                                        <input type="text" name="name" placeholder="Category Name" class="border border-gray-300 rounded-md p-2 outline-none">

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

                                        <input id="file-upload" type="file" name="image" class="hidden" onchange="previewImage(event)">

                                        <img id="preview" class="hidden w-full h-40 object-cover rounded-md" />
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

            {{-- Card products --}}
            <div class="flex justify-center items-start w-full h-full p-2 overflow-y-auto no-scrollbar">
    
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 w-full">
                    
                    @if ($categories->isEmpty())
                        <p class="text-center text-gray-500">No categories found.</p>
                        
                    @else
                        @foreach ($categories as $item)
                            
                        <div wire:click="showDetails({{ $item->id }})" class="relative flex flex-col bg-linear-to-b from-blue-100 to-blue-200 shadow-md rounded-md cursor-pointer hover:scale-95 transition duration-300 overflow-hidden">
                            
                            <input type="checkbox" class="select-box hidden absolute top-2 left-2 w-5 h-5 z-40">
                            
                            <!-- Image -->
                            <div class="h-40 flex items-center justify-center p-2">
                                <img src="{{ asset('storage/' . $item->image) }}" class="max-h-full max-w-full object-contain">
                            </div>
                            
                            <!-- Content -->
                            <div class="flex flex-col bg-gray-100 text-center p-2">
                                <p class="text-base font-semibold">{{ $item->name }}</p>
                            </div>
                            
                        </div>
                        @endforeach
                        
                    @endif


                </div>

            </div>
            {{-- Card products --}}

            {{-- overlay products --}}
            <div class="{{ $showDetailOverlay ? '' : 'hidden' }} fixed inset-0 bg-black/50 backdrop-blur-sm z-50">
                <div class="flex justify-center items-center w-full h-full">
                    <div class="flex flex-col justify-center items-center gap-6 bg-white rounded-md p-6 shadow-md w-full max-w-sm text-center">
                        <p class="capitalize font-bold text-lg">details kategori</p>
                        @if ($selectedCategory)
                            <div class="flex flex-col justify-center items-center gap-4">
                                <div class="flex justify-center items-center w-40 h-40 border border-dashed rounded-md">
                                    <img src="{{ asset('storage/' . $selectedCategory->image) }}" alt="" class="max-h-full max-w-full object-contain">
                                </div>

                                <div class="flex flex-row gap-6 justify-start items-center">
                                    <div class="flex flex-col justify-start items-start gap-1">
                                        <label for="name" class="text-md capitalize">Nama kategori :</label>
                                        <p class="text-md capitalize">{{ $selectedCategory->name }}</p>
                                    </div>
                                    <div class="flex flex-col justify-start items-start gap-1">
                                        <label for="name" class="text-md capitalize">Jumlah Produk :</label>
                                        <p class="text-md capitalize">10</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <button wire:click="closeDetails" class="flex capitalize bg-red-600 hover:bg-red-700 text-white rounded-md px-4 py-2">close</button>
                    </div>
                </div>
            </div>
            {{-- overlay products --}}

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

    // overlay detail product
    // const overlayProduct = document.getElementById('overlayProduct');
    // const overlaycloseProduct = document.getElementById('cancel-detailProduct');

    // // show teh over when the "open overlay products" button is clicked
    // document.getElementById('overlayProductsDetails').addEventListener('click', () => {
    //     overlayProduct.style.display = 'flex';
    // })

    // // hiden teh overlay when the "cancel" button is clicked
    // overlaycloseProduct.addEventListener('click', () => {
    //     overlayProduct.style.display = 'none';
    // })
    // overlay detail product


    // image preview
    function previewImage(event) {
        const file = event.target.files[0];
        const preview = document.getElementById('preview');

        preview.src = URL.createObjectURL(file);
        preview.classList.remove('hidden');
    }
    // image preview

</script>