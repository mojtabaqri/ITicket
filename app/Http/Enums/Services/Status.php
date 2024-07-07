<?php

namespace App\Http\Enums\Services;

enum Status: string
{
    case Pending = "pending";
    case Active = "active";
    case NotActive = "not_active";

    public function label(): string
    {
        return match($this) {
            self::Pending => __('در دست بررسی'),
            self::Active => __('فعال'),
            self::NotActive => __('غیرفعال'),
        };
    }


}
