@extends('layouts.app')

@section('title', $product->name . ' | اتصالات ورنا')

@section('content')
<section class="mx-auto max-w-7xl px-4 py-10 sm:px-6 lg:px-8">

    {{-- مسیر صفحه --}}
    <nav class="mb-8 text-sm text-slate-500">
        <a href="{{ url('/') }}" class="hover:text-white">خانه</a>
        <span class="mx-2">/</span>

        @if ($product->category)
            <span class="text-slate-400">{{ $product->category->name }}</span>
            <span class="mx-2">/</span>
        @endif

        <span class="text-slate-300">{{ $product->name }}</span>
    </nav>

    <div class="grid gap-10 lg:grid-cols-2">

        {{-- تصویر محصول --}}
        <div>
            <div class="flex aspect-square items-center justify-center rounded-3xl border border-slate-800 bg-slate-900">
                @if ($product->images->isNotEmpty())
                    <img
                        src="{{ asset('storage/' . $product->images->first()->path) }}"
                        alt="{{ $product->images->first()->alt_text ?: $product->name }}"
                        class="h-full w-full rounded-3xl object-contain p-8"
                    >
                @else
                    <div class="text-center">
                        <div class="text-7xl">🔩</div>
                        <p class="mt-5 text-sm text-slate-500">تصویر محصول هنوز اضافه نشده است</p>
                    </div>
                @endif
            </div>
        </div>

        {{-- اطلاعات محصول --}}
        <div class="flex flex-col justify-center">

            @if ($product->brand)
                <p class="mb-3 text-sm text-slate-500">
                    برند: {{ $product->brand->name }}
                </p>
            @endif

            <h1 class="text-3xl font-black leading-tight text-white sm:text-4xl">
                {{ $product->name }}
            </h1>

            <div class="mt-4 flex flex-wrap gap-3 text-sm">
                <span class="rounded-lg border border-slate-800 bg-slate-900 px-3 py-2 text-slate-400">
                    کد کالا:
                    <span class="font-mono text-slate-200">{{ $product->sku }}</span>
                </span>

                <span class="rounded-lg border border-slate-800 bg-slate-900 px-3 py-2 text-slate-400">
                    واحد فروش:
                    <span class="text-slate-200">{{ $product->unit }}</span>
                </span>
            </div>

            @if ($product->short_description)
                <p class="mt-6 text-lg leading-8 text-slate-300">
                    {{ $product->short_description }}
                </p>
            @endif

            @if ($product->description)
                <div class="mt-6 border-t border-slate-800 pt-6">
                    <h2 class="text-lg font-bold text-white">توضیحات محصول</h2>

                    <div class="mt-3 leading-8 text-slate-400">
                        {{ $product->description }}
                    </div>
                </div>
            @endif

            {{-- Variant ها --}}
            @if ($product->variants->isNotEmpty())
                <div class="mt-8 border-t border-slate-800 pt-6">
                    <h2 class="text-lg font-bold text-white">مدل محصول</h2>

                    <div class="mt-4 space-y-3">
                        @foreach ($product->variants as $variant)
                            @if ($variant->is_active)
                                <div class="rounded-2xl border border-slate-800 bg-slate-900 p-4">
                                    <div class="flex items-center justify-between gap-4">
                                        <div>
                                            <p class="font-semibold text-white">
                                                {{ $variant->name ?: $product->name }}
                                            </p>

                                            <p class="mt-1 text-xs text-slate-500">
                                                کد:
                                                <span class="font-mono">{{ $variant->sku }}</span>
                                            </p>
                                        </div>

                                        @if ((float) $variant->price > 0)
                                            <div class="text-left">
                                                <span class="text-lg font-bold text-white">
                                                    {{ number_format((float) $variant->price) }}
                                                </span>
                                                <span class="text-xs text-slate-500">تومان</span>
                                            </div>
                                        @else
                                            <span class="text-sm text-slate-500">
                                                قیمت اعلام می‌شود
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            @endif

            {{-- دکمه خرید؛ فعلاً غیرفعال --}}
            <div class="mt-8">
                <button
                    type="button"
                    disabled
                    class="w-full cursor-not-allowed rounded-2xl bg-slate-800 px-6 py-4 font-bold text-slate-500"
                >
                    افزودن به سبد خرید — به‌زودی
                </button>
            </div>

        </div>
    </div>
</section>
@endsection