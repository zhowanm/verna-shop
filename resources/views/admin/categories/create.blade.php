@extends('layouts.app')

@section('title', 'افزودن دسته‌بندی | مدیریت | اتصالات ورنا')

@section('content')
<section class="mx-auto max-w-3xl px-4 py-10 sm:px-6 lg:px-8">

    <div class="mb-8">
        <a
            href="{{ route('admin.categories.index') }}"
            class="text-sm text-slate-500 transition hover:text-white"
        >
            ← بازگشت به دسته‌بندی‌ها
        </a>

        <p class="mt-6 text-sm text-slate-500">مدیریت فروشگاه</p>

        <h1 class="mt-2 text-3xl font-black text-white">
            افزودن دسته‌بندی
        </h1>

        <p class="mt-3 text-slate-400">
            اطلاعات دسته‌بندی جدید را وارد کنید.
        </p>
    </div>

    <div class="rounded-2xl border border-slate-800 bg-slate-900 p-6 shadow-xl sm:p-8">

        @if ($errors->any())
            <div class="mb-6 rounded-2xl border border-red-900/50 bg-red-950/30 p-4 text-sm text-red-300">
                <ul class="space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form
            method="POST"
            action="{{ route('admin.categories.store') }}"
            class="space-y-6"
        >
            @csrf

            <div>
                <label
                    for="name"
                    class="mb-2 block text-sm font-medium text-slate-300"
                >
                    نام دسته‌بندی
                </label>

                <input
                    id="name"
                    name="name"
                    type="text"
                    value="{{ old('name') }}"
                    required
                    autofocus
                    class="w-full rounded-xl border border-slate-800 bg-slate-950 px-4 py-3 text-white outline-none placeholder:text-slate-600 focus:border-slate-600 focus:ring-2 focus:ring-slate-700"
                    placeholder="مثلاً فلنج"
                >
            </div>

            <div>
                <label
                    for="slug"
                    class="mb-2 block text-sm font-medium text-slate-300"
                >
                    نامک (Slug)
                </label>

                <input
                    id="slug"
                    name="slug"
                    type="text"
                    value="{{ old('slug') }}"
                    dir="ltr"
                    class="w-full rounded-xl border border-slate-800 bg-slate-950 px-4 py-3 text-white outline-none placeholder:text-slate-600 focus:border-slate-600 focus:ring-2 focus:ring-slate-700"
                    placeholder="مثلاً flanges"
                >

                <p class="mt-2 text-xs text-slate-500">
                    برای آدرس اینترنتی دسته‌بندی استفاده می‌شود.
                </p>
            </div>

            <div>
                <label
                    for="parent_id"
                    class="mb-2 block text-sm font-medium text-slate-300"
                >
                    دسته‌بندی والد
                </label>

                <select
                    id="parent_id"
                    name="parent_id"
                    class="w-full rounded-xl border border-slate-800 bg-slate-950 px-4 py-3 text-white outline-none focus:border-slate-600 focus:ring-2 focus:ring-slate-700"
                >
                    <option value="">بدون والد — دسته‌بندی اصلی</option>

                    @foreach ($parentCategories as $parentCategory)
                        <option
                            value="{{ $parentCategory->id }}"
                            @selected(old('parent_id') == $parentCategory->id)
                        >
                            {{ $parentCategory->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div>
                <label
                    for="description"
                    class="mb-2 block text-sm font-medium text-slate-300"
                >
                    توضیحات
                </label>

                <textarea
                    id="description"
                    name="description"
                    rows="5"
                    class="w-full rounded-xl border border-slate-800 bg-slate-950 px-4 py-3 text-white outline-none placeholder:text-slate-600 focus:border-slate-600 focus:ring-2 focus:ring-slate-700"
                    placeholder="توضیحات مربوط به این دسته‌بندی..."
                >{{ old('description') }}</textarea>
            </div>

            <div>
                <label
                    for="sort_order"
                    class="mb-2 block text-sm font-medium text-slate-300"
                >
                    ترتیب نمایش
                </label>

                <input
                    id="sort_order"
                    name="sort_order"
                    type="number"
                    min="0"
                    value="{{ old('sort_order', 0) }}"
                    class="w-full rounded-xl border border-slate-800 bg-slate-950 px-4 py-3 text-white outline-none focus:border-slate-600 focus:ring-2 focus:ring-slate-700"
                >
            </div>

            <label class="flex items-center gap-3 text-sm text-slate-300">
                <input
                    type="checkbox"
                    name="is_active"
                    value="1"
                    @checked(old('is_active', true))
                    class="rounded border-slate-700 bg-slate-950"
                >

                <span>دسته‌بندی فعال باشد</span>
            </label>

            <div class="flex items-center justify-end gap-3 border-t border-slate-800 pt-6">
                <a
                    href="{{ route('admin.categories.index') }}"
                    class="rounded-xl border border-slate-700 px-5 py-3 text-sm font-semibold text-slate-300 transition hover:border-slate-600 hover:text-white"
                >
                    انصراف
                </a>

                <button
                    type="submit"
                    class="rounded-xl bg-white px-5 py-3 text-sm font-bold text-slate-950 transition hover:bg-slate-200"
                >
                    ذخیره دسته‌بندی
                </button>
            </div>

        </form>

    </div>

</section>
@endsection