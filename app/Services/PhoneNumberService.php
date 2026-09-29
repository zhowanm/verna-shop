```php
<?php

namespace App\Services;

class PhoneNumberService
{
    public function normalize(string $phone): string
    {
        $phone = trim($phone);

        // تبدیل ارقام فارسی و عربی به انگلیسی
        $phone = strtr($phone, [
            '۰' => '0',
            '۱' => '1',
            '۲' => '2',
            '۳' => '3',
            '۴' => '4',
            '۵' => '5',
            '۶' => '6',
            '۷' => '7',
            '۸' => '8',
            '۹' => '9',
            '٠' => '0',
            '١' => '1',
            '٢' => '2',
            '٣' => '3',
            '٤' => '4',
            '٥' => '5',
            '٦' => '6',
            '٧' => '7',
            '٨' => '8',
            '٩' => '9',
        ]);

        // حذف فاصله، خط تیره و پرانتز
        $phone = preg_replace('/[\s\-\(\)]/', '', $phone);

        // تبدیل 0098... به +98...
        if (str_starts_with($phone, '0098')) {
            $phone = '+'.substr($phone, 2);
        }

        // تبدیل 98... به +98...
        if (str_starts_with($phone, '98')) {
            $phone = '+'.$phone;
        }

        // تبدیل 09... به +989...
        if (str_starts_with($phone, '09')) {
            $phone = '+98'.substr($phone, 1);
        }

        return $phone;
    }
}
```
