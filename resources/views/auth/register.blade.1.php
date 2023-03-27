<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="post[name]" :value="__('氏名')" />
            <x-text-input id="post[name]" class="block mt-1 w-full" type="text" 
                            name="post[name]" :value="old('post[name]')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('post[name]')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="post[email]" :value="__('メールアドレス')" />
            <x-text-input id="post[email]" class="block mt-1 w-full" type="email" 
                            name="post[email]" :value="old('post[email]')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('post[email]')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="post[password]" :value="__('パスワード')" />

            <x-text-input id="post[password]" class="block mt-1 w-full"
                            type="password"
                            name="post[password]"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('post[password]')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('パスワード確認')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Company Key 
        <div class="mt-4">
            <x-input-label for="company_key" :value="__('会社コード')" />

            <x-text-input id="company_key" class="block mt-1 w-full"
                            type="text" name="company_key" :value="old('company_key')"
                            required autocomplete="off" />

            <x-input-error :messages="$errors->get('company_key')" class="mt-2" />
        </div>
        
        <!-- Store Key 
        <div class="mt-4">
            <x-input-label for="store_key" :value="__('店舗コード')" />

            <x-text-input id="store_key" class="block mt-1 w-full"
                            type="text" name="store_key" :value="old('store_key')"
                            required autocomplete="off" />

            <x-input-error :messages="$errors->get('store_key')" class="mt-2" />
        </div>
        
        <!-- Position -->
        <div class="mt-4">
            <x-input-label for="post[position_id]" :value="__('役職')" />

            <select id="post[position_id]" name="post[position_id]" required>
                @foreach($positions as $position)
                    <option value="{{ $position->id }}">{{ $position->name }}</option>
                @endforeach
            </select> 

            <x-input-error :messages="$errors->get('post[position_id]')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('既に登録していますか?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('登録') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
