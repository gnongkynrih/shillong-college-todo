<div class="max-w-6xl mt-10 mx-auto px-4">
    <div class="flex flex-col md:flex-row gap-6">
        <!-- Left Column: Create Category Form -->
        <div class="flex-1">
            <div class="bg-purple-400 rounded-md shadow-lg p-6">
                <h2 class="text-md md:text-2xl font-semibold text-white mb-6">Create New Category</h2>
                
                <form wire:submit="saveCategory" class="space-y-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                            Category Name
                        </label>
                        <input 
                            type="text" 
                            id="name" 
                            wire:model="name"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition duration-200"
                            placeholder="Enter category name"
                        >
                        @error('name') 
                            <span class="text-white text-sm mt-1 block">{{ $message }}</span> 
                        @enderror
                    </div>
                    
                    <div>
                        <button 
                            type="submit" 
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2.5 px-4 rounded-lg transition duration-200 ease-in-out transform hover:scale-[1.02] focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
                        >
                            Create Category
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Right Column: Existing Categories -->
        <div class="flex-1">
            <div class="bg-white rounded-md shadow-lg p-6">
                <h2 class="text-2xl font-semibold text-gray-800 mb-6">Existing Categories</h2>
                <div class="space-y-3">
                    @forelse($categories as $category)
                        <div class="p-3 bg-gray-50 rounded-lg border border-gray-200 hover:bg-gray-100 transition">
                            <p class="text-gray-800 font-medium">{{ $category->name }}</p>
                        </div>
                    @empty
                        <p class="text-gray-500 text-center py-4">No categories yet. Create one to get started!</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
