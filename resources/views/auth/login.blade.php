<x-master>
    <div class="container mx-auto flex justify-center ">
    <div class="px-4 py-6 bg-gray-300 rounded-lg">
        <div class="col-md-8">
            <div class="card-header font-bold mb-4">{{ __('Login') }}</div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                        <div class="form-group row">
                            <div class="mb-6">
                                <label for="email" class="col-md-4 col-form-label text-md-right">
                                    {{ __('E-Mail Address') }}
                                </label>


                                <input class="border border-grey-400 p-2 w-full"
                                       type="email"
                                       name="email"
                                       id="email"
                                       autocomplete="email"
                                       value="{{old('email')}}"
                                       required>

                                @error('email')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror

                            </div>

                        </div>

                        <div class="form-group row">
                            <div class="mb-6">

                                <label class="block mb-2 uppercase font-bold text-xs text-grey-700" for="password">
                                    Password
                                </label>

                                <input class="border border-grey-400 p-2 w-full"
                                       type="password"
                                       name="password"
                                       id="password"
                                       value="{{old('password')}}"
                                       autocomplete="current-password"
                                       required>

                                @error('password')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror

                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="px-2 py-2 rounded text-sm uppercase bg-blue-500 mt-2 text-white">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
        </div>
    </div>
</div>
</x-master>
