<?php

namespace App\Http\Controllers;

use App\Http\Helpers\PersianResponse;
use App\Http\Requests\Service\ServiceRequest;
use App\Http\Resources\Service\ServiceCategoryResource;
use App\Http\Resources\Service\ServiceResource;
use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;
use Throwable;

class ServiceController extends ApiController
{

    public function index()
    {
//
    }

    public function store(ServiceRequest $request)
    {
        try {
            $service = new Service();
            $service->fill($request->validated());
            if ($request->hasFile('service_banner')) {
                $bannerPath = $request->file('service_banner')->store('banners');
                $service->service_banner = $bannerPath;
            }
            $service->save();
            return $this->successResponse(new ServiceResource($service),PersianResponse::SAVE_SUCCESS,201);

        } catch (\Exception $e) {
            return $this->errorResponse(PersianResponse::SAVE_FAILED,500);
        }
    }

    public function show(Service $service)
    {
    return $this->successResponse(new ServiceResource($service->load('category')),PersianResponse::SUCCESS_WORK,200);

    }

    public function update(ServiceRequest $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
