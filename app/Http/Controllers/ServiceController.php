<?php

namespace App\Http\Controllers;

use App\Http\Helpers\PersianResponse;
use App\Http\Requests\Service\ServiceRequest;
use App\Models\Service;
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
            return $this->successResponse($service,PersianResponse::SAVE_SUCCESS,201);

        } catch (\Exception $e) {
            return $e->getMessage();
            return $this->errorResponse(PersianResponse::SAVE_FAILED,500);
        }
    }

    public function show(string $id)
    {
        //
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
