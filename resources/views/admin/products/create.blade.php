@extends('layouts.app')

@section('content')
    <div class="mx-auto max-w-4xl px-4 py-8 sm:px-6 lg:px-8">

        <div class="mb-6">
            <h1 class="text-2xl font-bold text-white">
                افزودن محصول
            </h1>

            <p class="mt-1 text-sm text-gray-400">
                اطلاعات اصلی محصول را وارد کنید.
            </p>
        </div>

        @if ($errors->any())
            <div class="mb-6 rounded-lg border border-red-800 bg-red-900/30 px-4 py-3 text-sm text-red-300">
                <p class="mb-2 font-medium">لطفاً خطاهای زیر را برطرف کنید:</p>

                <ul class="list-inside list-disc space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form
            method="POST"
            action="{{ route('admin.products.store') }}"
            class="space-y-6"
        >
            @csrf

            <div class="rounded-xl border border-gray-800 bg-gray-900 p-6">

                <div class="grid grid-cols-1 gap-6 md:grid-cols-2">

                    <div>
                        <label for="name" class="mb-2 block text-sm font-medium text-gray-300">
                            نام محصول
                        </label>

                        <input
                            id="name"
                            name="name"
                            type="text"
                            value="{{ old('name') }}"
                            required
                            class="w-full rounded-lg border border-gray-700 bg-gray-950 px-3 py-2.5 text-sm text-white outline-none transition focus:border-indigo-500"
                        >
                    </div>

                    <div>
                        <label for="sku" class="mb-2 block text-sm font-medium text-gray-300">
                            SKU
                        </label>

                        <input
                            id="sku"
                            name="sku"
                            type="text"
                            value="{{ old('sku') }}"
                            required
                            class="w-full rounded-lg border border-gray-700 bg-gray-950 px-3 py-2.5 text-sm text-white uppercase outline-none transition focus:border-indigo-500"
                        >
                    </div>

                    <div>
                        <label for="slug" class="mb-2 block text-sm font-medium text-gray-300">
                            Slug
                        </label>

                        <input
                            id="slug"
                            name="slug"
                            type="text"
                            value="{{ old('slug') }}"
                            required
                            dir="ltr"
                            class="w-full rounded-lg border border-gray-700 bg-gray-950 px-3 py-2.5 text-sm text-white outline-none transition focus:border-indigo-500"
                        >

                        <p class="mt-1 text-xs text-gray-500">
                            فقط حروف انگلیسی، عدد، خط تیره و زیرخط.
                        </p>
                    </div>

                    <div>
                        <label for="category_id" class="mb-2 block text-sm font-medium text-gray-300">
                            دسته‌بندی
                        </label>

                        <select
                            id="category_id"
                            name="category_id"
                            required
                            class="w-full rounded-lg border border-gray-700 bg-gray-950 px-3 py-2.5 text-sm text-white outline-none transition focus:border-indigo-500"
                        >
                            <option value="">انتخاب دسته‌بندی</option>

                            @foreach ($categories as $category)
                                <option
                                    value="{{ $category->id }}"
                                    @selected(old('category_id') == $category->id)
                                >
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label for="brand_id" class="mb-2 block text-sm font-medium text-gray-300">
                            برند
                        </label>

                        <select
                            id="brand_id"
                            name="brand_id"
                            class="w-full rounded-lg border border-gray-700 bg-gray-950 px-3 py-2.5 text-sm text-white outline-none transition focus:border-indigo-500"
                        >
                            <option value="">بدون برند</option>

                            @foreach ($brands as $brand)
                                <option
                                    value="{{ $brand->id }}"
                                    @selected(old('brand_id') == $brand->id)
                                >
                                    {{ $brand->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label for="unit" class="mb-2 block text-sm font-medium text-gray-300">
                            واحد فروش
                        </label>

                        <input
                            id="unit"
                            name="unit"
                            type="text"
                            value="{{ old('unit', 'عدد') }}"
                            required
                            class="w-full rounded-lg border border-gray-700 bg-gray-950 px-3 py-2.5 text-sm text-white outline-none transition focus:border-indigo-500"
                        >

                        <p class="mt-1 text-xs text-gray-500">
                            مثال: عدد، متر، کیلوگرم
                        </p>
                    </div>

                    <div>
                        <label for="sort_order" class="mb-2 block text-sm font-medium text-gray-300">
                            ترتیب نمایش
                        </label>

                        <input
                            id="sort_order"
                            name="sort_order"
                            type="number"
                            min="0"
                            value="{{ old('sort_order', 0) }}"
                            required
                            class="w-full rounded-lg border border-gray-700 bg-gray-950 px-3 py-2.5 text-sm text-white outline-none transition focus:border-indigo-500"
                        >
                    </div>

                </div>

                <div class="mt-6">
                    <label for="short_description" class="mb-2 block text-sm font-medium text-gray-300">
                        توضیح کوتاه
                    </label>

                    <textarea
                        id="short_description"
                        name="short_description"
                        rows="3"
                        class="w-full rounded-lg border border-gray-700 bg-gray-950 px-3 py-2.5 text-sm text-white outline-none transition focus:border-indigo-500"
                    >{{ old('short_description') }}</textarea>
                </div>

                <div class="mt-6">
                    <label for="description" class="mb-2 block text-sm font-medium text-gray-300">
                        توضیحات کامل
                    </label>

                    <textarea
                        id="description"
                        name="description"
                        rows="7"
                        class="w-full rounded-lg border border-gray-700 bg-gray-950 px-3 py-2.5 text-sm text-white outline-none transition focus:border-indigo-500"
                    >{{ old('description') }}</textarea>
                </div>

                <div class="mt-6">
                    <label class="inline-flex cursor-pointer items-center gap-3">
                        <input
                            type="checkbox"
                            name="is_active"
                            value="1"
                            @checked(old('is_active', true))
                            class="h-4 w-4 rounded border-gray-600 bg-gray-950 text-indigo-600 focus:ring-indigo-500"
                        >

                        <span class="text-sm text-gray-300">
                            محصول فعال باشد
                        </span>
                    </label>
                </div>

            </div>

            <div class="flex items-center justify-end gap-3">
                <a
                    href="{{ route('admin.products.index') }}"
                    class="rounded-lg border border-gray-700 px-4 py-2.5 text-sm font-medium text-gray-300 transition hover:bg-gray-800"
                >
                    انصراف
                </a>

                <button
                    type="submit"
                    class="rounded-lg bg-indigo-600 px-5 py-2.5 text-sm font-medium text-white transition hover:bg-indigo-500"
                >
                    ذخیره محصول
                </button>
            </div>
        </form>

    </div>
@endsection