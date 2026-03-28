<x-guest-layout>
    <form method="POST" action="{{ route('login') }}" class="text-end">
        @csrf

        <div class="mb-3">
            <label for="email" class="form-label">البريد الإلكتروني</label>
            <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">كلمة المرور</label>
            <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
        </div>

        <div class="d-flex justify-content-between align-items-center mb-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                <span class="ms-2 text-sm text-gray-600">تذكرني</span>
            </label>

            @if (Route::has('password.request'))
                <a class="text-sm text-decoration-none" href="{{ route('password.request') }}">
                    نسيت كلمة المرور؟
                </a>
            @endif
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-primary w-100 shadow-sm">
                تسجيل الدخول
            </button>
        </div>
    </form>
</x-guest-layout>