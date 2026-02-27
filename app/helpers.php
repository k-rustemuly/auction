<?php

if (! function_exists('money')) {
    function money($value): string
    {
        if (is_null($value)) {
            return '0.00';
        }
        return number_format($value ?? 0, 2, '.', ' ');
    }
}

if (! function_exists('mileage')) {
    function mileage($value): string
    {
        if (is_null($value)) {
            return '0';
        }
        return number_format($value ?? 0, 0, '.', ' ');
    }
}

if (! function_exists('getPurchasePrice')) {
    function getPurchasePrice($fileUrl): ?string
    {
        $fileContent = file_get_contents($fileUrl);
        $readableText = mb_convert_encoding($fileContent, 'UTF-8', 'Windows-1251');
        if (str_contains($readableText, '')) {
            $readableText = mb_convert_encoding($fileContent, 'UTF-8', 'UTF-16LE');
        }
        preg_match_all('/[а-яА-Яa-zA-Z0-9\s\.,]{10,}/u', $readableText, $matches);
        $finalOutput = implode("\n", $matches[0]);

        if (preg_match('/продан по цене\s*([\d\x{00A0}\s]+(?:,[\d]{2})?)/u', $finalOutput, $matches)) {

            $rawPrice = $matches[1];

            // 1. Удаляем все виды пробелов: обычные, табуляцию и неразрывные (\u{A0})
            $cleanPrice = preg_replace('/[\s\x{00A0}]+/u', '', $rawPrice);

            // 2. Заменяем запятую на точку для формата float
            $finalPrice = str_replace(',', '.', $cleanPrice);

            // Убираем возможную точку в конце, если она попала из текста
            $finalPrice = rtrim($finalPrice, '.');

            return $finalPrice;
        }
        return null;
    }
}
