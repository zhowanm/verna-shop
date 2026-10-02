@extends('layouts.app')

@section('title', $search !== '' ? "جستجو برای {$search} | اتصالات ورنا" : 'جستجوی محصولات | اتصالات ورنا')

@section('content')

    <section class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8">

        <div class="mb-10">
            <p class="text-sm text-slate-500">
                فروشگاه اتصالات ورنا
            </p>

            <h1 class="mt-2 text-3xl font-black text-white">
                نتایج جستجو
            </h1>

            @if ($search !== '')
                <p class="mt-3 text-slate-400">
                    نتایج برای:
                    <span class="font-bold text-white">
                        {{ $search }}
                    </span>
                </p>
            @else
                <p class="mt-3 text-slate-400">
                    همه محصولات فعال فروشگاه
                </p>
            @endif
        </div>


        @if ($products->count())

            <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">

                @foreach ($products as $product)

                    <article class="overflow-hidden rounded-2xl border border-slate-800 bg-slate-900">

                        <div class="flex aspect-square items-center justify-center bg-slate-800 text-6xl">
                            🔩
                        </div>

                        <div class="p-5">

                            @if ($product->brand)
                                <p class="text-xs text-slate-500">
                                    {{ $product->brand->name }}
                                </p>
                            @endif

                            <h2 class="mt-2 font-bold text-white">
                                {{ $product->name }}
                            </h2>

                            <p class="mt-2 text-xs text-slate-500">
                                کد کالا:
                                {{ $product->sku }}
                            </p>

                            @if ($product->short_description)
                                <p class="mt-3 line-clamp-2 text-sm leading-6 text-slate-400">
                                    {{ $product->short_description }}
                                </p>
                            @endif

                            <div class="mt-5">
                                <a
                                    href="{{ route('products.show', $product->slug) }}"
                                    class="block rounded-xl border border-slate-700 px-4 py-3 text-center text-sm font-bold text-white transition hover:bg-slate-800"
                                >
                                    مشاهده محصول
                                </a>
                            </div>

                        </div>

                    </article>

                @endforeach

            </div>

            @if ($products->hasPages())
                <div class="mt-10">
                    {{ $products->links() }}
                </div>
            @endif

        @else

            <div class="rounded-2xl border border-slate-800 bg-slate-900 px-6 py-16 text-center">

                <div class="text-5xl">
                    🔎
                </div>

                <h2 class="mt-5 text-xl font-bold text-white">
                    محصولی پیدا نشد
                </h2>

                <p class="mt-3 text-slate-400">
                    عبارت جستجو را تغییر دهید و دوباره امتحان کنید.
                </p>

                <a
                    href="{{ url('/') }}"
                    class="mt-6 inline-block rounded-xl bg-white px-5 py-3 text-sm font-bold text-slate-950 transition hover:bg-slate-200"
                >
                    بازگشت به صفحه اصلی
                </a>

            </div>

        @endif

    </section>

@endsection