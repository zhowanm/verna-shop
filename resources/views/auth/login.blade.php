@extends('layouts.app')

@section('title', 'ورود | اتصالات ورنا')

@section('content')
<section class="mx-auto flex min-h-[70vh] max-w-md items-center px-4 py-12">
    <div class="w-full rounded-3xl border border-slate-800 bg-slate-900 p-6 shadow-2xl sm:p-8">

        <div class="mb-8 text-center">
            <h1 class="text-2xl font-black text-white">ورود به حساب</h1>
            <p class="mt-2 text-sm text-slate-500">
                برای ادامه، شماره موبایل و رمز عبور خود را وارد کنید.
            </p>
        </div>

        @if ($errors->any())
            <div class="mb-6 rounded-2xl border border-red-900/50 bg-red-950/30 p-4 text-sm text-red-300">
                <ul class="space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login.store') }}" class="space-y-5">
            @csrf

            <div>
                <label for="phone" class="mb-2 block text-sm font-medium text-slate-300">
                    شماره موبایل
                </label>

                <input
                    id="phone"
                    name="phone"
                    type="text"
                    value="{{ old('phone') }}"
                    inputmode="tel"
                    autocomplete="tel"
                    required
                    autofocus
                    dir="ltr"
                    placeholder="09120000000"
                    class="w-full rounded-xl border border-slate-800 bg-slate-950 px-4 py-3 text-white outline-none placeholder:text-slate-600 focus:border-slate-600 focus:ring-2 focus:ring-slate-700"
                >
            </div>

            <div>
                <label for="password" class="mb-2 block text-sm font-medium text-slate-300">
                    رمز عبور
                </label>

                <input
                    id="password"
                    name="password"
                    type="password"
                    required
                    autocomplete="current-password"
                    dir="ltr"
                    class="w-full rounded-xl border border-slate-800 bg-slate-950 px-4 py-3 text-white outline-none focus:border-slate-600 focus:ring-2 focus:ring-slate-700"
                >
            </div>

            <label class="flex items-center gap-2 text-sm text-slate-400">
                <input
                    type="checkbox"
                    name="remember"
                    value="1"
                    class="rounded border-slate-700 bg-slate-950"
                >
                مرا به خاطر بسپار
            </label>

            <button
                type="submit"
                class="w-full rounded-xl bg-white px-5 py-3.5 font-bold text-slate-950 transition hover:bg-slate-200"
            >
                ورود
            </button>
        </form>

        <div class="mt-6 text-center text-sm text-slate-500">
            حساب کاربری ندارید؟
            <a href="{{ route('register') }}" class="font-semibold text-slate-300 hover:text-white">
                ثبت‌نام کنید
            </a>
        </div>

    </div>
</section>
@endsection