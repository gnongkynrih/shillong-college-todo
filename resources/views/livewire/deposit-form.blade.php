<div>
    <h1>Deposit Form</h1>
    
    <form 
        class="max-w-sm mx-auto bg-amber-400 p-6 rounded-lg"
        wire:submit="saveDeposit">
        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="deposit_date">Deposit Date</label>
            <input 
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                type="date" 
                id="deposit_date" 
                wire:model="deposit_date"
            >
            @error('deposit_date') 
                <span>{{ $message }}</span> 
            @enderror
        </div>
        
        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="amount">Amount</label>
            <input 
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                type="number" 
                id="amount" 
                wire:model="amount"
                placeholder="Enter amount"
            >
            @error('amount') 
                <span>{{ $message }}</span> 
            @enderror
        </div>
        
        <div class="mt-5 text-center">
            <button type="submit" class="text-white bg-yellow-700 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:focus:ring-yellow-900">Save</button>
        </div>
    </form>
</div>