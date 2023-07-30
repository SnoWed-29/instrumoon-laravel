@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
        <div>
            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                {{ __('Verify Your Email Address') }}
            </h2>
        </div>
        <div class="card">
            <div class="card-body">
                @if (session('resent'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                        <span class="block sm:inline">{{ __('A fresh verification link has been sent to your email address.') }}</span>
                    </div>
                @endif

                <p class="mt-4">{{ __('Before proceeding, please check your email for a verification link.') }}</p>
                <p class="mb-4">{{ __('If you did not receive the email') }},</p>
                <form class="inline" method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <button type="submit" class="text-indigo-600 hover:text-indigo-500">
                        {{ __('click here to request another') }}
                    </button>.
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
