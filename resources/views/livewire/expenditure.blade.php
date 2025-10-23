<div>
    <h1 class="text-2xl font-semibold tracking-tight text-gray-900">Expenditure</h1>
    <form wire:submit.prevent="saveExpenditure" class="max-w-xl mx-auto p-6 bg-purple-500 shadow-sm ring-1 ring-gray-200 rounded-lg space-y-4">
        <div>
            
            <label for="category_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
            <select wire:model="category_id" id="category_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected>Choose category</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
            </select>
            @error('category_id')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <input
                type="date"
                wire:model="expense_date"
                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm px-3 py-2"
            >
            @error('expense_date')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
            </div>

        <div>
            <input
                type="text"
                wire:model="description"
                placeholder="Description"
                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm px-3 py-2"
            >
        </div>

        <div>
            <input
                type="number"
                wire:model="amount"
                placeholder="Amount"
                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm px-3 py-2"
            >
            @error('amount')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="pt-2">
            <button
                type="submit"
                class="inline-flex items-center justify-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
            >
                Submit
            </button>
        </div>
    </form>
</div>
