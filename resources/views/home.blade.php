@extends('layouts.app')

@section('title', 'اتصالات ورنا | فروشگاه تخصصی اتصالات و شیرآلات')

@section('content')

    <section class="relative overflow-hidden">
        <div class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8">

            <div class="max-w-3xl">

                <div class="mb-6 inline-flex rounded-full border border-slate-700 bg-slate-900 px-4 py-2 text-sm text-slate-300">
                    فروش تخصصی اتصالات و تجهیزات صنعتی
                </div>

                <h1 class="text-4xl font-black leading-tight tracking-tight text-white sm:text-5xl lg:text-6xl">
                    اتصالات مطمئن،
                    <span class="text-slate-400">برای پروژه‌های حرفه‌ای</span>
                </h1>

                <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-400">
                    خرید انواع فلنج، شیرآلات، زانو، سه‌راهی، تبدیل و سایر اتصالات
                    با مشخصات فنی، قیمت و موجودی به‌روز.
                </p>

                <div class="mt-8 flex flex-wrap gap-4">

                    <a
                        href="#products"
                        class="rounded-xl bg-white px-6 py-3 font-bold text-slate-900 transition hover:bg-slate-200"
                    >
                        مشاهده محصولات
                    </a>

                    <a
                        href="#categories"
                        class="rounded-xl border border-slate-700 px-6 py-3 font-bold text-white transition hover:bg-slate-800"
                    >
                        دسته‌بندی‌ها
                    </a>

                </div>

            </div>

        </div>
    </section>


    <section
        id="categories"
        class="border-y border-slate-800 bg-slate-900/50"
    >
        <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8">

            <div class="mb-10">
                <h2 class="text-2xl font-bold text-white">
                    دسته‌بندی محصولات
                </h2>

                <p class="mt-2 text-slate-400">
                    محصولات مورد نیاز پروژه خود را سریع‌تر پیدا کنید.
                </p>
            </div>


            <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-4">

                <div class="rounded-2xl border border-slate-800 bg-slate-900 p-6 transition hover:border-slate-600">
                    <div class="mb-5 text-3xl">⚙️</div>

                    <h3 class="text-lg font-bold text-white">
                        فلنج‌ها
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-400">
                        فلنج استیل، فلنج جوشی، دنده‌ای و انواع فلنج‌های استاندارد.
                    </p>
                </div>


                <div class="rounded-2xl border border-slate-800 bg-slate-900 p-6 transition hover:border-slate-600">
                    <div class="mb-5 text-3xl">🔩</div>

                    <h3 class="text-lg font-bold text-white">
                        اتصالات جوشی
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-400">
                        زانو، سه‌راهی، تبدیل و سایر اتصالات مورد استفاده در خطوط لوله.
                    </p>
                </div>


                <div class="rounded-2xl border border-slate-800 bg-slate-900 p-6 transition hover:border-slate-600">
                    <div class="mb-5 text-3xl">🔧</div>

                    <h3 class="text-lg font-bold text-white">
                        شیرآلات
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-400">
                        انواع شیرآلات صنعتی با مشخصات فنی و اطلاعات کامل محصول.
                    </p>
                </div>


                <div class="rounded-2xl border border-slate-800 bg-slate-900 p-6 transition hover:border-slate-600">
                    <div class="mb-5 text-3xl">📦</div>

                    <h3 class="text-lg font-bold text-white">
                        سایر تجهیزات
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-400">
                        تجهیزات و قطعات مورد نیاز برای تکمیل پروژه‌های صنعتی.
                    </p>
                </div>

            </div>

        </div>
    </section>


    <section
        id="products"
        class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8"
    >

        <div class="mb-10 flex flex-col justify-between gap-4 sm:flex-row sm:items-end">

            <div>
                <h2 class="text-2xl font-bold text-white">
                    محصولات منتخب
                </h2>

                <p class="mt-2 text-slate-400">
                    برخی از محصولات فروشگاه اتصالات ورنا
                </p>
            </div>

            <span class="text-sm text-slate-500">
                به‌زودی محصولات واقعی از دیتابیس نمایش داده می‌شوند
            </span>

        </div>


        <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-4">

            @foreach ([
                ['name' => 'فلنج استیل PN16', 'code' => 'VR-FL-PN16'],
                ['name' => 'فلنج جوشی', 'code' => 'VR-WF-001'],
                ['name' => 'زانو جوشی 90 درجه', 'code' => 'VR-EL-090'],
                ['name' => 'سه‌راهی استیل', 'code' => 'VR-TEE-001'],
            ] as $product)

                <article class="overflow-hidden rounded-2xl border border-slate-800 bg-slate-900">

                    <div class="flex aspect-square items-center justify-center bg-slate-800 text-6xl">
                        🔩
                    </div>

                    <div class="p-5">

                        <p class="text-xs text-slate-500">
                            {{ $product['code'] }}
                        </p>

                        <h3 class="mt-2 font-bold text-white">
                            {{ $product['name'] }}
                        </h3>

                        <p class="mt-2 text-sm text-slate-400">
                            مشخصات فنی و موجودی محصول در صفحه محصول قابل مشاهده خواهد بود.
                        </p>

                        <div class="mt-5 flex items-center justify-between">

                            <span class="text-sm font-medium text-slate-300">
                                موجودی آنلاین
                            </span>

                            <button
                                type="button"
                                class="rounded-lg border border-slate-700 px-3 py-2 text-sm text-white transition hover:bg-slate-800"
                            >
                                جزئیات
                            </button>

                        </div>

                    </div>

                </article>

            @endforeach

        </div>

    </section>


    <section class="border-t border-slate-800 bg-slate-900">

        <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8">

            <div class="grid gap-8 md:grid-cols-3">

                <div>
                    <div class="text-3xl">✓</div>

                    <h3 class="mt-4 font-bold text-white">
                        اطلاعات فنی
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-400">
                        مشخصات فنی محصولات به‌صورت ساختاریافته نمایش داده می‌شود.
                    </p>
                </div>


                <div>
                    <div class="text-3xl">📦</div>

                    <h3 class="mt-4 font-bold text-white">
                        موجودی و قیمت
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-400">
                        قیمت و موجودی هر محصول و هر مدل به‌صورت جداگانه قابل مدیریت است.
                    </p>
                </div>


                <div>
                    <div class="text-3xl">🛒</div>

                    <h3 class="mt-4 font-bold text-white">
                        خرید آنلاین
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-400">
                        کاربران پس از ورود می‌توانند محصولات موردنظر خود را به سبد خرید اضافه کنند.
                    </p>
                </div>

            </div>

        </div>

    </section>

@endsection