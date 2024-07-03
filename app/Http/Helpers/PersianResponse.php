<?php

namespace App\Http\Helpers;

class PersianResponse
{
    public const InsufficientBalance = "موجودی شما کافی نیست ! لطفا ابتدا از کیف پول موجودی خود را افزایش دهید!";
    public const HTTP_NOT_FOUND = "متاسفیم ! یافت نشد !";
    public const UN_AUTHENTICATED = "عدم احراز هویت!";
    public const AUTHENTICATED = "احراز هویت موفق بود";

    public const SAVE_SUCCESS = 'با موفقیت ذخیره شد !';
    public const SAVE_FAILED = 'عملیات انجام نشد! ';
    public const ACCESS_DENIED = 'شما مجاز به انجام این عملیات نیستید!';


}
