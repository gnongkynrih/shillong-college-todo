<div class="min-h-[80vh] flex items-center justify-center px-4 py-12">
  <div class="w-full max-w-md">
    <div class="bg-white/90 backdrop-blur rounded-2xl shadow-lg border border-slate-200 overflow-hidden">
      <div class="px-8 pt-8 pb-4 text-center bg-gradient-to-br from-sky-500 to-blue-600">
        <h1 class="text-white text-2xl font-bold tracking-tight">Welcome back</h1>
        <p class="text-sky-100 text-sm mt-1">Sign in to continue</p>
      </div>

      <form wire:submit.prevent="login" class="px-8 pt-6 pb-8">
        {{-- Success is as dangerous as failure. --}}

        <div class="mb-5">
          <label for="email" class="block text-sm font-medium text-slate-700 mb-2">Email</label>
          <input id="email" type="email" wire:model.defer="email" autocomplete="email" required
                 class="block w-full rounded-lg border-slate-300 focus:border-sky-500 focus:ring-sky-500 text-slate-900 placeholder-slate-400" placeholder="you@example.com" />
          @error('email')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
          @enderror
        </div>

        <div class="mb-5">
          <div class="flex items-center justify-between mb-2">
            <label for="password" class="block text-sm font-medium text-slate-700">Password</label>
            <a href="#" class="text-sm text-sky-600 hover:text-sky-700">Forgot password?</a>
          </div>
          <input id="password" type="password" wire:model.defer="password" autocomplete="current-password" required
                 class="block w-full rounded-lg border-slate-300 focus:border-sky-500 focus:ring-sky-500 text-slate-900 placeholder-slate-400" placeholder="••••••••" />
          @error('password')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
          @enderror
        </div>

        <div class="flex items-center justify-between mb-6">
          <label class="inline-flex items-center gap-2 select-none">
            <input type="checkbox" wire:model.defer="remember" class="rounded border-slate-300 text-sky-600 focus:ring-sky-500" />
            <span class="text-sm text-slate-700">Remember me</span>
          </label>
        </div>

        <button type="submit"
                class="w-full inline-flex items-center justify-center gap-2 rounded-lg bg-sky-600 hover:bg-sky-700 text-white font-semibold py-2.5 shadow-sm transition">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 opacity-90">
            <path fill-rule="evenodd" d="M4.5 6.75A2.25 2.25 0 016.75 4.5h10.5a2.25 2.25 0 012.25 2.25v10.5a2.25 2.25 0 01-2.25 2.25H6.75a2.25 2.25 0 01-2.25-2.25V6.75zm7.03 2.47a.75.75 0 011.06 0l2.75 2.75a.75.75 0 11-1.06 1.06l-1.47-1.47v4.19a.75.75 0 01-1.5 0v-4.19l-1.47 1.47a.75.75 0 01-1.06-1.06l2.75-2.75z" clip-rule="evenodd" />
          </svg>
          Sign in
        </button>

        <p class="mt-6 text-center text-sm text-slate-600">
          Don’t have an account?
          <a href="#" class="font-medium text-sky-600 hover:text-sky-700">Create one</a>
        </p>
      </form>
    </div>
  </div>
</div>
