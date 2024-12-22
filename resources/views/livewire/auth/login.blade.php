<div class="login-container">
    <div class="login-left">
        <img src="{{ asset('images/logo3.png') }}" alt="Logo" class="login-logo">
    </div>
    <div class="login-right">
        <h2 class="login-title">Selamat Datang</h2>
        <p>Silahkan masukkan username dan password anda</p>
        
        @if ($errorMessage) <!-- Display error message if it exists -->
            <div class="error-notification">
                <strong></strong> {{ $errorMessage }}
            </div>
        @endif

        <form wire:submit.prevent="login">
            <div class="form-group">
                <label for="email">Username</label>
                <input type="email" id="email" wire:model="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" wire:model="password" required>
            </div>
            <button type="submit" class="login-button">Login</button>
        </form>
    </div>
</div>
