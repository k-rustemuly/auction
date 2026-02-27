<?php

namespace App\Module\Etp\Dto;

use Carbon\Carbon;

readonly class EtpTradeDto
{
    public function __construct(
        public int $uid,
        public ?string $link,
        public bool $isMethodAucDown,
        public ?string $title_kk,
        public ?string $title_ru,
        public ?float $initialContractPrice,
        public ?float $assuranceAmount,
        public ?string $description_kk,
        public ?string $description_ru,
        public ?string $thumbnail,
        public ?string $registeredDate,
        public ?string $dateModified,
        public ?string $bidSubmissionEndDate,
        public ?string $tradeStartDate,
        public ?string $statusCode,
    ) {}

    public static function fromArray(array $item): self
    {
        $lot = $item['lots'][0] ?? [];
        $timezone = 'Asia/Aqtau';

        return new self(
            uid: $item['id'],
            link: isset($item['viewLocation']) ? "https://etp.adilet.gov.kz{$item['viewLocation']}" : null,
            isMethodAucDown: $lot['methodAucDown'] ?? false,
            title_kk: $lot['title'] ?? null,
            title_ru: $lot['title'] ?? null,
            initialContractPrice: $lot['initialContractPrice'] ?? $item['initialContractPrice'] ?? null,
            assuranceAmount: $item['assuranceAmount'] ?? null,
            description_kk: $lot['goodsDescription'] ?? null,
            description_ru: $lot['goodsDescription'] ?? null,
            thumbnail: $item['images'][0]['thumbnail'] ?? null,
            registeredDate: self::parseDate($item['registeredDate'] ?? null, $timezone),
            dateModified: self::parseDate($item['dateModified'] ?? null, $timezone),
            bidSubmissionEndDate: self::parseDate($item['bidSubmissionEndDate'] ?? null, $timezone),
            tradeStartDate: self::parseDate($item['tradeStartDate'] ?? null, $timezone),
            statusCode: $item['processStatus']['name'] ?? null,
        );
    }

    private static function parseDate(?int $timestamp, string $tz): ?string
    {
        return $timestamp ? Carbon::createFromTimestampMs($timestamp, $tz)->format('Y-m-d H:i:s') : null;
    }

    public function toArray(): array
    {
        return (array) $this;
    }
}
