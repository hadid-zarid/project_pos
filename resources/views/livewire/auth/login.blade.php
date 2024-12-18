<div class="card shadow-lg transition-transform duration-500 hover:scale-105">
    <form class="card-body" wire:submit.prevent="login">
        <h3 class="card-title text-2xl font-bold text-primary text-center">Selamat Datang</h3>
        <p class="text-sm text-gray-500 text-center mb-4">Masuk untuk melanjutkan</p>
        <div class="py-4 space-y-4">
            <label class="input input-bordered flex items-center gap-2 input-animated" :class="{ 'input-error': $errors->first('email') }">
                <x-tabler-at class="size-5 text-primary" />
                <input type="text" class="grow bg-transparent focus:outline-none" placeholder="Username" wire:model="email" />
            </label>
            <label class="input input-bordered flex items-center gap-2 input-animated" :class="{ 'input-error': $errors->first('password') }">
                <x-tabler-key class="size-5 text-primary" />
                <input type="password" class="grow bg-transparent focus:outline-none" placeholder="Password" wire:model="password" />
            </label>
        </div>
        <div class="card-actions flex justify-center">
            <button class="btn btn-primary btn-animated flex items-center gap-2">
                <x-tabler-login class="size-5" />
                <span>Login</span>
            </button>
        </div>
    </form>
</div>
