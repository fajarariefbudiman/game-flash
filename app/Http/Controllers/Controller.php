<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\App;

abstract class Controller
{
    //
    use AuthorizesRequests, ValidatesRequests;

    protected function parsePhoneNumber($phoneNumber)
    {
        if (isset($phoneNumber) && !empty($phoneNumber)) {
            $phoneNumber = str_replace("+620","0",$phoneNumber);
            $phoneNumber = str_replace("+62","0",$phoneNumber);
            $phoneNumber = str_replace("-",'',$phoneNumber);
            $phoneNumber = preg_replace("/^62/","0",$phoneNumber);
            $phoneNumber = preg_replace("/\s+/", '',$phoneNumber);
        }
        return $phoneNumber;

    }
    protected function get_data_for_table($model, $searchColumns, $request, $sortBy = 'id', $sortType = 'asc', $paginate = 5)
    {
        try {
            $data = $model->when($request->search_value, function ($q) use ($request,$searchColumns){
                foreach ($searchColumns as $key => $column) {
                    if ($key == 0) {
                        $q->where($column, 'LIKE' ,'%' . $request->search_value . '%' );
                    } else {
                        $q->orWhere($column, 'LIKE' ,'%' . $request->search_value . '%' );
                    }
                }
            })
            ->when($request->name_filter, function ($q) use ($request) {
                $q->where('name', $request->name_filter);
            })
            ->when($request->id_filter, function ($q) use ($request) {
                $q->where('id', $request->id_filter);
            })
            ->when($request->owner_filter, function ($q) use ($request) {
                $q->where('owner', $request->owner_filter);
            })
            ->orderBy($sortBy, $sortType)
            ->paginate($paginate)
            ->withQueryString();

            return $data;

        } catch (\Throwable $th) {
            if (App::hasDebugModeEnabled()) {
                dd($th);
            }
        }
    }
}
