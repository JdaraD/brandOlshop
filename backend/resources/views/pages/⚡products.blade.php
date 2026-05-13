<?php

use Livewire\Component;
use App\Models\CategoriesProducts;
use App\Models\Products;

new class extends Component
{
    public $categories;

    public $products;

    public $selectedProduct = null;

    public $showOverlayProduct = false;

    public function loadCategories()
    {
        $this->categories = CategoriesProducts::all();
    }

    public function loadProducts()
    {
        $this->products = Products::all();
    }

    public function mount()
    {
        $this->loadCategories();
        $this->loadProducts();
    }

    public function openOverlayProducts($id)
    {
        $this->selectedProduct = Products::find($id);
        $this->showOverlayProduct = true;
    }

    public function closeOverlayProducts()
    {
        $this->showOverlayProduct = false;
        $this->selectedProduct = null;
    }
}
?>

<div class="flex pt-14 justify-center items-center w-full h-screen rounded-md">
    <div class="flex w-[99%] h-[99%] p-4 gap-3">
        <div class="flex flex-col shrink-0 gap-2 bg-white w-full h-full p-4 rounded-md">
            <div class="flex justify-between w-full h-14 rounded-md">

                <div class="flex items-center gap-4 w-auto h-full rounded-md">
                    <div class="flex gap-2 border items-center justify-center border-gray-300 w-60 h-8 rounded-md p-2">
                        <input type="text" placeholder="Search..." class="outline-none">
                        <button class="flex h-full w-full items-center justify-center cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0 0 72 72">
                                <path d="M 31 11 C 19.973 11 11 19.973 11 31 C 11 42.027 19.973 51 31 51 C 34.974166 51 38.672385 49.821569 41.789062 47.814453 L 54.726562 60.751953 C 56.390563 62.415953 59.088953 62.415953 60.751953 60.751953 C 62.415953 59.087953 62.415953 56.390563 60.751953 54.726562 L 47.814453 41.789062 C 49.821569 38.672385 51 34.974166 51 31 C 51 19.973 42.027 11 31 11 z M 31 19 C 37.616 19 43 24.384 43 31 C 43 37.616 37.616 43 31 43 C 24.384 43 19 37.616 19 31 C 19 24.384 24.384 19 31 19 z"></path>
                            </svg>
                        </button>
                    </div>
                    <select name="category" class="border border-gray-300 rounded-md px-2 py-1 outline-none">
                        <option disabled selected>Pilih Kategori</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                
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
                    <button id="close-overlayAdd" class="absolute w-8 h-8 lg:top-35 lg:right-98 md:top-35 md:right-98 top-6 right-6 text-black hover:text-gray-300 cursor-pointer">
                        @svg('jam-close-circle-f')
                    </button>
                    <div class="flex items-center justify-center w-full min-h-screen p-4">
                        <div class="bg-white rounded-md p-6 shadow-md w-full max-w-3xl">
                            <h2 class="text-xl font-semibold mb-4 text-center md:text-left">
                                Add Product
                            </h2>

                            <form action="{{ route('products-controller.store') }}" class="flex flex-col gap-4" method="POST" enctype="multipart/form-data">
                                @csrf
                                <!-- container utama -->
                                <div class="flex flex-col md:flex-row gap-4">

                                    <!-- kiri -->
                                    <div class="flex flex-col gap-4 w-full md:w-1/2">
                                        
                                        <select name="id_category" class="border border-gray-300 rounded-md p-2 outline-none">
                                            <option value="" disabled selected>Select Category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>

                                        <input type="text" name="name" placeholder="Product Name" class="border border-gray-300 rounded-md p-2 outline-none">

                                        <input type="number" name="price" placeholder="Price" class="border border-gray-300 rounded-md p-2 outline-none">

                                        <input type="number" name="stock" placeholder="Stock" class="border border-gray-300 rounded-md p-2 outline-none">

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
                    
                    @if ($products->isEmpty())
                        <p class="text-center text-gray-500">No products found.</p>
                    @else
                        @foreach ($products as $item)
                            <div wire:click="openOverlayProducts({{ $item->id }})" class="relative flex flex-col bg-linear-to-b from-blue-100 to-blue-200 shadow-md rounded-md cursor-pointer hover:scale-95 transition duration-300 overflow-hidden">

                                <input type="checkbox" class="select-box hidden absolute top-2 left-2 w-5 h-5 z-40">

                                <!-- Image -->
                                <div class="h-40 flex items-center justify-center p-2">
                                    <img src="{{ asset('storage/' . $item->image) }}" class="max-h-full max-w-full object-contain">
                                </div>

                                <!-- Content -->
                                <div class="flex flex-col bg-gray-100 text-center p-2">
                                    <p class="text-sm font-semibold">{{ $item->name }}</p>
                                    <p class="text-gray-500 text-xs">Rp {{ number_format($item->price, 0, ',', '.') }}</p>
                                </div>

                            </div>  
                        @endforeach
                    @endif

                </div>

            </div>
            {{-- products --}}


            {{-- overlay products --}}
            <div class="{{ $showOverlayProduct ? '' : 'hidden' }} fixed inset-0 bg-black/50 backdrop-blur-sm z-50">
                <div class="flex justify-center items-center w-full h-full p-4">
                    <div class="flex flex-col justify-center bg-white rounded-xl p-6 shadow-md w-full max-w-3xl">
                        {{-- title --}}
                        <p class="capitalize font-bold text-2xl text-center mb-6">details products</p>
                        @if ($selectedProduct)
                            {{-- content --}}
                            <div class="flex justify-center w-full h-full gap-6">
                                {{-- gambar utama --}}
                                <div>
                                    <div class="flex justify-center items-center w-64 h-64 border border-dashed rounded-lg overflow-hidden">
                                        <img src="{{ asset('storage/' . $selectedProduct->image) }}" alt="" class="w-full h-full object-contain">
                                    </div>
                                </div>
                                {{-- detail produk --}}
                                <div class="flex flex-col gap-2">
                                    <div class="flex flex-wrap gap-1">
                                        <label class="font-semibold">
                                            Nama Product :
                                        </label>
                                        <p class="capitalize">
                                            {{ $selectedProduct->name }}
                                        </p>
                                    </div>
                                    <div class="flex flex-wrap gap-1">
                                        <label class="font-semibold">
                                            Stock Product :
                                        </label>
                                        <p>
                                            {{ $selectedProduct->stock }}
                                        </p>
                                    </div>
                                    <div class="flex flex-wrap gap-1">
                                        <label class="font-semibold">
                                            Harga :
                                        </label>
                                        <p>
                                            Rp {{ number_format($selectedProduct->price, 0, ',', '.') }}
                                        </p>
                                    </div>
                                    <div class="flex flex-col gap-1 mt-2">
                                        <label class="font-semibold">
                                            Description :
                                        </label>
                                        <p class="text-gray-600 text-sm">
                                            {{ $selectedProduct->description }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endif
                        {{-- gallery image --}}
                        <div class="flex gap-1 w-full justify-end">
                            <div id="openAddImage" class="flex items-center justify-center px-2 py-1 bg-green-500 hover:bg-green-800 rounded-md cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" fill="white" y="0px" width="18" height="18" viewBox="0 0 30 30">
                                    <path d="M15,3C8.373,3,3,8.373,3,15c0,6.627,5.373,12,12,12s12-5.373,12-12C27,8.373,21.627,3,15,3z M21,16h-5v5 c0,0.553-0.448,1-1,1s-1-0.447-1-1v-5H9c-0.552,0-1-0.447-1-1s0.448-1,1-1h5V9c0-0.553,0.448-1,1-1s1,0.447,1,1v5h5 c0.552,0,1,0.447,1,1S21.552,16,21,16z"></path>
                                </svg>
                            </div>
                            <button class="px-2 py-1 text-xs font-medium text-white bg-red-600 rounded-md hover:bg-red-700 transition cursor-pointer">
                                <i class="fa-solid fa-trash text-xs text-white"></i>
                            </button>
                        </div>
                        
                        <div class="flex felx-col gap-3 overflow-x-auto pb-2 w-full scrollbar-thin mt-2">
                            {{-- contoh looping gambar --}}
                            @for ($i = 0; $i < 20; $i++)
                                <div class="flex justify-center items-center w-20 h-20 border rounded-md overflow-hidden shrink-0 cursor-pointer hover:border-blue-500 transition">
                                    <img src="{{ asset('/img/1.png') }}" alt="" class="w-full h-full object-contain">
                                </div>
                                
                            @endfor
                        </div>

                        {{-- overlay add image --}}
                        <div id="overlayAddImage" class="hidden fixed inset-0 bg-black/50 backdrop-blur-xs z-60">
                            <div class="flex justify-center items-center w-full h-full p-4">
                                <div class="flex flex-col gap-4 justify-center items-center bg-white rounded-xl p-6 shadow-md w-full max-w-2xl">
                                    <h1 class="text-xl font-bold">Tambah Gambar Product</h1>
                                    <form action="{{ route('product-images.store') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        {{-- details --}}
                                        <div class="flex flex-col gap-2 w-64 h-64">

                                            <label for="file-upload" class="flex justify-center items-center border border-dashed border-gray-400 rounded-md h-40 md:h-full w-full cursor-pointer bg-gray-100 hover:bg-gray-200 text-gray-500">
                                                Upload
                                            </label>

                                            <input id="file-upload" type="file" name="image" class="hidden" onchange="previewImage(event)">

                                            <img id="preview" class="hidden w-full h-40 object-cover rounded-md" />
                                        </div>
                                        {{-- details --}}
                                        
                                        {{-- button --}}
                                        <div class="flex justify-center items-center gap-4 mt-8">
                                            <button type="submit" class="bg-green-600 hover:bg-green-700 text-white rounded-md px-6 py-2 capitalize transition">
                                                update
                                            </button>
                                            <button type="button" id="closeAddImage" class="bg-red-600 hover:bg-red-700 text-white rounded-md px-6 py-2 capitalize transition">
                                                close
                                            </button>
                                        </div>
                                        {{-- button --}}
                                    </form>
                                </div>
                            </div>
                        </div>

                        {{-- button --}}
                        <div class="flex justify-center items-center gap-4 mt-8">
                            <button id="update-detailProduct"class="bg-green-600 hover:bg-green-700 text-white rounded-md px-6 py-2 capitalize transition">
                                update
                            </button>
                            <button wire:click="closeOverlayProducts" class="bg-red-600 hover:bg-red-700 text-white rounded-md px-6 py-2 capitalize transition">
                                close
                            </button>
                        </div>
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

    // overlay add image
    const btnOpen =  document.getElementById('openAddImage');
    const viewAdd = document.getElementById('overlayAddImage');
    const btnClose = document.getElementById('closeAddImage');

    btnOpen.addEventListener('click', () => {
        viewAdd.classList.remove('hidden');
    });

    btnClose.addEventListener('click', () => {
        viewAdd.classList.add('hidden');
    });
    // overlay add image

</script>