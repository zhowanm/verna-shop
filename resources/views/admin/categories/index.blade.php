@extends('layouts.app')

@section('title', 'دسته‌بندی‌ها | مدیریت | اتصالات ورنا')

@section('content')
<section class="mx-auto max-w-7xl px-4 py-10 sm:px-6 lg:px-8">

    @if (session('success'))
        <div class="mb-6 rounded-2xl border border-emerald-900/50 bg-emerald-950/30 p-4 text-sm text-emerald-300">
            {{ session('success') }}
        </div>
    @endif

    <div class="mb-8 flex items-center justify-between gap-4">
        <div>
            <p class="text-sm text-slate-500">مدیریت فروشگاه</p>
            <h1 class="mt-2 text-3xl font-black text-white">
                دسته‌بندی‌ها
            </h1>
        </div>

        <a
            href="{{ route('admin.categories.create') }}"
            class="rounded-xl bg-white px-5 py-3 text-sm font-bold text-slate-950 transition hover:bg-slate-200"
        >
            افزودن دسته‌بندی
        </a>
    </div>

    <div class="overflow-hidden rounded-2xl border border-slate-800 bg-slate-900">
        <div class="overflow-x-auto">
            <table class="w-full min-w-[700px] text-right text-sm">
                <thead class="border-b border-slate-800 bg-slate-950/50">
                    <tr>
                        <th class="px-5 py-4 font-semibold text-slate-400">نام</th>
                        <th class="px-5 py-4 font-semibold text-slate-400">والد</th>
                        <th class="px-5 py-4 font-semibold text-slate-400">وضعیت</th>
                        <th class="px-5 py-4 font-semibold text-slate-400">ترتیب</th>
                        <th class="px-5 py-4 font-semibold text-slate-400">عملیات</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-slate-800">
                    @forelse ($categories as $category)
                        <tr class="transition hover:bg-slate-800/40">
                            <td class="px-5 py-4 font-semibold text-white">
                                {{ $category->name }}
                            </td>

                            <td class="px-5 py-4 text-slate-400">
                                {{ $category->parent?->name ?? '—' }}
                            </td>

                            <td class="px-5 py-4">
                                @if ($category->is_active)
                                    <span class="text-emerald-400">فعال</span>
                                @else
                                    <span class="text-red-400">غیرفعال</span>
                                @endif
                            </td>

                            <td class="px-5 py-4 text-slate-400">
                                {{ $category->sort_order }}
                            </td>

                            <td class="px-5 py-4">
                                <div class="flex items-center gap-4">
                                    <a
                                        href="{{ route('admin.categories.edit', $category) }}"
                                        class="font-semibold text-slate-300 hover:text-white"
                                    >
                                        ویرایش
                                    </a>

                                    <form
                                        method="POST"
                                        action="{{ route('admin.categories.destroy', $category) }}"
                                        onsubmit="return confirm('آیا از حذف این دسته‌بندی مطمئن هستید؟');"
                                    >
                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="font-semibold text-red-400 transition hover:text-red-300"
                                        >
                                            حذف
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td
                                colspan="5"
                                class="px-5 py-12 text-center text-slate-500"
                            >
                                هنوز هیچ دسته‌بندی‌ای ثبت نشده است.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if ($categories->hasPages())
            <div class="border-t border-slate-800 px-5 py-4">
                {{ $categories->links() }}
            </div>
        @endif
    </div>

</section>
@endsection