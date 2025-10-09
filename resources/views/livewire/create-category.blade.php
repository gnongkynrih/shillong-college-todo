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
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2.5 px-4 rounded-lg transition duration-200 ease-in-out transform hover:scale-[1.02] focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 flex items-center justify-center gap-5"
                        >
                            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M11 16h2m6.707-9.293-2.414-2.414A1 1 0 0 0 16.586 4H5a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V7.414a1 1 0 0 0-.293-.707ZM16 20v-6a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v6h8ZM9 4h6v3a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V4Z"/>
                            </svg>
                            <span>
                                {{$isEdit ==true ? 'Update Category' : 'Create Category'}}
                            </span>
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
                    

                <div class="p-2 relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class=" w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-amber-500 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Sl
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Category
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Status
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($categories as $category)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-pink-100 dark:hover:bg-gray-600">
                                
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $loop->iteration }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $category->name }}
                                </td>
                                <td class="px-6 py-4">
                                    <label class="inline-flex items-center cursor-pointer">
                                        <input 
                                            type="checkbox" 
                                            class="sr-only peer" 
                                            @checked($category->is_active)
                                            wire:click="toggleStatus({{ $category->id }})"
                                        >
                                        <div class="relative w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-green-300 dark:peer-focus:ring-green-800 dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-green-600"></div>
                                        <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            {{ $category->is_active == true ? 'Active' : 'Inactive' }}
                                        </span>
                                    </label>
                                </td>
                                <td class="px-6 py-4">
                                    <button wire:click="editCategory({{ $category->id }})" class=" text-white px-2 py-1 rounded">
                                        <svg class="w-6 h-6 text-purple-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                                        </svg>
                                    </button>
                                </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center py-4">No categories found.</td>
                                </tr>
                            @endforelse
                            </tr>
                        </tbody>
                    </table>
                    {{-- shows the paginations --}}
                    {{ $categories->links() }}
                </div>

                </div>
            </div>
        </div>
    </div>
</div>
