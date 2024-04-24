<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="nombre" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- tel -->
        <div class="mt-4">
            <x-input-label for="telf" :value="__('Telefono')" />
            <x-text-input id="telf" class="block mt-1 w-full" type="text" name="telefono" :value="old('telefono')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('telefono')" class="mt-2" />
        </div>

        <div class="mt-4">
            <div class="form-group col-md-3">
                <label for="">Rol</label>
                <select class="form-control block mt-1 w-full" type="text" name="rol">
                    @php($roles = \App\Models\Rol::all())
                    @foreach($roles as $rol)
                        <option value="{{$rol->id}}">{{$rol->rol}}</option>
                    @endforeach

                </select>
            </div>
        </div>
        <div class="mt-4">
            <div class="form-group">
                <label for="">Guia</label>
                <select class="form-control block mt-1 w-full" type="text" name="guia">
                    @php($guias = \App\Models\User::where('rol_id',3)->get())
                    <option value="">Sin guia</option>
                    @foreach($guias as $guia)
                        <option value="{{$guia->id}}">{{$guia->nombre}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="mt-4">
            <div class="form-group">
                <label for="">Licencia</label>
                <select class="form-control block mt-1 w-full" type="text" name="licencia">
                    @php($licencias = \App\Models\Licencia::all())
                    <option value="">Sin licencia</option>
                    @foreach($licencias as $licencia)
                        <option value="{{$licencia->id}}">{{$licencia->numLicencia}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
