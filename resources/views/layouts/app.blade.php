<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        @yield('title', 'اتصالات ورنا')
    </title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>

<body class="min-h-screen bg-slate-950 text-slate-100 antialiased">

<header class="sticky top-0 z-50 border-b border-slate-800/80 bg-slate-950/95 backdrop-blur">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div class="flex h-20 items-center justify-between gap-6">

            {{-- لوگو --}}
            <a
                href="{{ url('/') }}"
                class="shrink-0"
            >
                <div class="text-xl font-black tracking-tight text-white">
                    اتصالات ورنا
                </div>

                <div class="mt-1 text-xs text-slate-500">
                    تأمین‌کننده اتصالات و تجهیزات
                </div>
            </a>


            {{-- جستجو --}}
            <div class="hidden flex-1 md:block md:max-w-xl">

                <form
                    action="{{ route('search') }}"
                    method="GET"
                    class="relative"
                >
                    <input
                        type="search"
                        name="search"
                        placeholder="جستجوی محصول، کد کالا یا مشخصات..."
                        class="w-full rounded-xl border border-slate-800 bg-slate-900 py-3 pr-12 pl-4 text-sm text-white outline-none placeholder:text-slate-500 focus:border-slate-600 focus:ring-2 focus:ring-slate-700"
                    >

                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-4 text-slate-500">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1.8"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="m21 21-4.35-4.35m2.35-5.65a8 8 0 1 1-16 0 8 8 0 0 1 16 0Z"
                            />
                        </svg>
                    </div>
                </form>

            </div>


            {{-- منو --}}
            <nav class="flex items-center gap-3">

                <a
                    href="{{ url('/') }}"
                    class="hidden text-sm font-medium text-slate-300 transition hover:text-white lg:block"
                >
                    صفحه اصلی
                </a>

                <a
                    href="#categories"
                    class="hidden text-sm font-medium text-slate-300 transition hover:text-white lg:block"
                >
                    دسته‌بندی‌ها
                </a>

                {{-- سبد خرید؛ فعلاً فقط ظاهر --}}
                <a
                    href="#"
                    class="relative rounded-xl border border-slate-800 p-3 text-slate-300 transition hover:bg-slate-900 hover:text-white"
                    aria-label="سبد خرید"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.8"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M3 3h2l2.4 11.2a2 2 0 0 0 2 1.6h7.8a2 2 0 0 0 1.9-1.4L21 7H6"
                        />
                        <circle cx="10" cy="20" r="1.5" />
                        <circle cx="18" cy="20" r="1.5" />
                    </svg>

                    <span class="absolute -right-1 -top-1 flex h-5 min-w-5 items-center justify-center rounded-full bg-white px-1 text-[10px] font-bold text-slate-950">
                        0
                    </span>
                </a>


                {{-- ورود --}}
                <a
                    href="{{ url('/login') }}"
                    class="hidden rounded-xl border border-slate-800 px-4 py-3 text-sm font-medium text-slate-300 transition hover:bg-slate-900 hover:text-white sm:block"
                >
                    ورود
                </a>

                {{-- ثبت نام --}}
                <a
                    href="{{ url('/register') }}"
                    class="rounded-xl bg-white px-4 py-3 text-sm font-bold text-slate-950 transition hover:bg-slate-200"
                >
                    ثبت‌نام
                </a>

            </nav>

        </div>


        {{-- جستجو در موبایل --}}
        <div class="pb-4 md:hidden">

            <form
                action="{{ route('search') }}"
                method="GET"
                class="relative"
            >
                <input
                    type="search"
                    name="search"
                    placeholder="جستجوی محصول..."
                    class="w-full rounded-xl border border-slate-800 bg-slate-900 py-3 pr-11 pl-4 text-sm text-white outline-none placeholder:text-slate-500 focus:border-slate-600"
                >

                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-4 text-slate-500">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.8"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="m21 21-4.35-4.35m2.35-5.65a8 8 0 1 1-16 0 8 8 0 0 1 16 0Z"
                        />
                    </svg>
                </div>
            </form>

        </div>

    </div>
</header>
    <main>
        @yield('content')
    </main>

    <footer class="mt-16 border-t border-slate-800 bg-slate-900">
        <div class="mx-auto max-w-7xl px-4 py-8 text-center text-sm text-slate-400 sm:px-6 lg:px-8">
            © {{ date('Y') }} اتصالات ورنا — تمامی حقوق محفوظ است.
        </div>
    </footer>

    @livewireScripts
</body>
</html>