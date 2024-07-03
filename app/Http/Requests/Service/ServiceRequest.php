<?php

namespace App\Http\Requests\Service;

use Illuminate\Foundation\Http\FormRequest;
use Spatie\Permission\Models\Role;

class ServiceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {

        return (bool)$this->user()->hasRole(['SuperAdmin', 'admin']);

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
    return    [
        'service_category' => 'required|numeric',
        'Service_state_location_id' => 'required|numeric',
        'service_name' => 'required|string|max:191',
        'service_price' => 'required|numeric',
        'service_description' => 'required|string',
        'service_banner' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'service_status' => 'required|string|in:active,not_active,pending',
    ];
    }

    public function messages(): array{
        return [
            'service_category_id.required' => 'نام دسته بندی الزامیست!',
            'service_category_id.numeric' => 'شناسه دسته بندی صحیح نیست !',
            'service_state_location_id.required' => ' شناسه مکان سرویس الزامی است!',
            'service_state_location_id.numeric' => '  مکان صحیح نیست !',
            'service_name.required' => ' نام سرویس الزامی است!',
            'service_name.string' => ' نام سرویس باید از نوع رشته باشد!',
            'service_name.max' => 'حداکثر طول  نام سرویس ۱۹۱ کاراکتر می‌باشد!',
            'service_price.required' => ' قیمت سرویس الزامی است!',
            'service_price.numeric' => '  قیمت باید عددی باشد!',
            'service_description.required' => ' توضیحات سرویس الزامی است!',
            'service_description.string' => ' توضیحات باید از نوع رشته باشد!',
            'service_banner.image' => 'قالب تصویری ارسالی صحیح نمی‌باشد!',
            'service_banner.mimes' => 'فرمت تصویر مجاز نیست! فرمت‌های مجاز: jpg, jpeg, png, gif',
            'service_banner.max' => 'تصویر مورد نظر بیش از حد حجیم می‌باشد!',
            'service_status.required' => ' وضعیت سرویس الزامی است!',
            'service_status.string' => ' وضعیت صحیح نیست  !',
            'service_status.in' => 'چنین وضعیتی تعریف نشده است!',
        ];
    }


}
