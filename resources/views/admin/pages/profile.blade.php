@extends('admin.index')
@section('title')
    Admin Profile
@endsection
@section('main')
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">User Data</h4>
                    <form class="forms-sample" action="{{ route('admin.profile.update') }}" method="POST" id="confirmationForm"
                        onsubmit="return submitAction()">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputUsername1">Username</label>
                            <input type="text" class="form-control text-capitalize" disabled id="exampleInputUsername1"
                                value="{{ $user->name }}" />
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control " disabled id="email"
                                value="{{ $user->email }}" />
                        </div>
                        <div class="form-group">
                            <label for="role">Rele</label>
                            <input type="text" class="form-control text-capitalize" disabled id="role"
                                value="{{ $user->role }}" />
                        </div>
                        <hr>
                        <h4 class="card-title">Update user</h4>

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $user->name }}"
                                id="name" placeholder="Name" />
                        </div>
                        <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="email" class="form-control" name="email" id="Email"
                                value="{{ $user->email }}" placeholder="Email" />
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-6 grid-margin stretch-card">
            <section class="card">
                <header class="card-header">
                    <h2 class="text-lg font-medium text-gray-900">
                        {{ __('Update Password') }}
                    </h2>
            
                    <p class="mt-1 text-sm text-gray-600">
                        {{ __('Ensure your account is using a long, random password to stay secure.') }}
                    </p>
                </header>
            
                <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6 card-body">
                    @csrf
                    @method('put')
            
                    <div>
                        <x-input-label for="update_password_current_password" :value="__('Current Password')" />
                        <x-text-input id="update_password_current_password" name="current_password" type="password" class="mt-  form-control mt-2" autocomplete="current-password" />
                        <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                    </div>
            
                    <div>
                        <x-input-label for="update_password_password" :value="__('New Password')" />
                        <x-text-input id="update_password_password" name="password" type="password" class="mt-1  form-control mt-2" autocomplete="new-password" />
                        <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                    </div>
            
                    <div>   
                        <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')" />
                        <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 form-control mt-2" autocomplete="new-password" />
                        <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                    </div>
            
                    <div class="flex items-center gap-4 mt-3">
                        <button class="btn btn-info" type="submit">{{ __('Save') }}</button>
            
                        @if (session('status') === 'password-updated')
                            <p
                                x-data="{ show: true }"
                                x-show="show"
                                x-transition
                                x-init="setTimeout(() => show = false, 2000)"
                                class="text-sm text-gray-600"
                            >{{ __('Saved.') }}</p>
                        @endif
                    </div>
                </form>
            </section>
        </div>
    </div>
@endsection
