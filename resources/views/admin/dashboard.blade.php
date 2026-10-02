@extends('layouts.app')

@section('title', 'داشبورد مدیریت | اتصالات ورنا')

@section('content')
<section class="mx-auto max-w-7xl px-4 py-10 sm:px-6 lg:px-8">

    <div class="mb-8">
        <p class="text-sm text-slate-500">مدیریت فروشگاه</p>

        <h1 class="mt-2 text-3xl font-black text-white">
            داشبورد مدیریت
        </h1>

        <p class="mt-3 text-slate-400">
            از این بخش می‌توانید محصولات، سفارش‌ها، کاربران و سایر بخش‌های فروشگاه را مدیریت کنید.
        </p>
    </div>

    <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-4">

        <a href="#" class="rounded-2xl border border-slate-800 bg-slate-900 p-6 transition hover:border-slate-700">
            <div class="text-3xl">📦</div>
            <h2 class="mt-4 font-bold text-white">محصولات</h2>
            <p class="mt-2 text-sm text-slate-500">
                مدیریت محصولات و مشخصات آن‌ها
            </p>
        </a>

        <a href="#" class="rounded-2xl border border-slate-800 bg-slate-900 p-6 transition hover:border-slate-700">
            <div class="text-3xl">🛒</div>
            <h2 class="mt-4 font-bold text-white">سفارش‌ها</h2>
            <p class="mt-2 text-sm text-slate-500">
                مشاهده و مدیریت سفارش‌های مشتریان
            </p>
        </a>

        <a href="#" class="rounded-2xl border border-slate-800 bg-slate-900 p-6 transition hover:border-slate-700">
            <div class="text-3xl">👥</div>
            <h2 class="mt-4 font-bold text-white">کاربران</h2>
            <p class="mt-2 text-sm text-slate-500">
                مدیریت حساب‌های کاربری
            </p>
        </a>

        <a href="#" class="rounded-2xl border border-slate-800 bg-slate-900 p-6 transition hover:border-slate-700">
            <div class="text-3xl">📊</div>
            <h2 class="mt-4 font-bold text-white">گزارش‌ها</h2>
            <p class="mt-2 text-sm text-slate-500">
                آمار و گزارش‌های فروشگاه
            </p>
        </a>

    </div>

</section>
@endsection