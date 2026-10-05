@extends('layouts.app')

@section('content')
    <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">

        <div class="mb-6 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <h1 class="text-2xl font-bold text-white">
                    مدیریت محصولات
                </h1>

                <p class="mt-1 text-sm text-gray-400">
                    مشاهده و مدیریت محصولات فروشگاه
                </p>
            </div>

            <a
                href="{{ route('admin.products.create') }}"
                class="inline-flex items-center justify-center rounded-lg bg-indigo-600 px-4 py-2.5 text-sm font-medium text-white transition hover:bg-indigo-500"
            >
                افزودن محصول
            </a>
        </div>

        @if (session('success'))
            <div class="mb-6 rounded-lg border border-green-800 bg-green-900/30 px-4 py-3 text-sm text-green-300">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="mb-6 rounded-lg border border-red-800 bg-red-900/30 px-4 py-3 text-sm text-red-300">
                {{ session('error') }}
            </div>
        @endif

        <div class="overflow-hidden rounded-xl border border-gray-800 bg-gray-900">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-800">
                    <thead class="bg-gray-950">
                        <tr>
                            <th class="px-4 py-3 text-right text-xs font-medium text-gray-400">
                                محصول
                            </th>

                            <th class="px-4 py-3 text-right text-xs font-medium text-gray-400">
                                دسته‌بندی
                            </th>

                            <th class="px-4 py-3 text-right text-xs font-medium text-gray-400">
                                برند
                            </th>

                            <th class="px-4 py-3 text-right text-xs font-medium text-gray-400">
                                SKU
                            </th>

                            <th class="px-4 py-3 text-right text-xs font-medium text-gray-400">
                                وضعیت
                            </th>

                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-400">
                                عملیات
                            </th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-800">
                        @forelse ($products as $product)
                            <tr class="transition hover:bg-gray-800/50">

                                <td class="whitespace-nowrap px-4 py-4">
                                    <div class="font-medium text-white">
                                        {{ $product->name }}
                                    </div>

                                    <div class="mt-1 text-xs text-gray-500">
                                        {{ $product->unit }}
                                    </div>
                                </td>

                                <td class="whitespace-nowrap px-4 py-4 text-sm text-gray-300">
                                    {{ $product->category?->name ?? '—' }}
                                </td>

                                <td class="whitespace-nowrap px-4 py-4 text-sm text-gray-300">
                                    {{ $product->brand?->name ?? '—' }}
                                </td>

                                <td class="whitespace-nowrap px-4 py-4 text-sm text-gray-400">
                                    {{ $product->sku }}
                                </td>

                                <td class="whitespace-nowrap px-4 py-4">
                                    @if ($product->is_active)
                                        <span class="rounded-full bg-green-900/40 px-2.5 py-1 text-xs font-medium text-green-300">
                                            فعال
                                        </span>
                                    @else
                                        <span class="rounded-full bg-red-900/40 px-2.5 py-1 text-xs font-medium text-red-300">
                                            غیرفعال
                                        </span>
                                    @endif
                                </td>

                                <td class="whitespace-nowrap px-4 py-4 text-left text-sm">
                                    <a
                                        href="{{ route('admin.products.edit', $product) }}"
                                        class="text-indigo-400 transition hover:text-indigo-300"
                                    >
                                        ویرایش
                                    </a>
                                </td>

                            </tr>
                        @empty
                            <tr>
                                <td
                                    colspan="6"
                                    class="px-4 py-12 text-center text-sm text-gray-500"
                                >
                                    هنوز محصولی ثبت نشده است.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if ($products->hasPages())
                <div class="border-t border-gray-800 px-4 py-4">
                    {{ $products->links() }}
                </div>
            @endif
        </div>

    </div>
@endsection