<?php

namespace App\Http\Controllers;

use Response;

class ApiController extends Controller
{

    public function responseSuccess($data = [])
    {
        return $this->respond(true, 200, $data);
    }

    public function responseError($error_code, $message, $data = [])
    {
        return $this->respond(false, $error_code, $data, $message);
    }

    public function respond($status, $error_code = 0, $data = [], $message = '')
    {
        $response = [
            'status' => $status,
            'code' => (int)$error_code,
            'data' => $data
        ];

        if(!empty($message)) $response['message'] = $message;
        return Response::json($response);
    }

    public function responseFailProcess()
    {
        return $this->respond(false, config('api-code.error_code.fail_process'), []);
    }

    public function responseDataNotFound()
    {
        return $this->respond(false, config('api-code.error_code.data_not_found'), []);
    }

    public function responseParametersInvalid()
    {
        return $this->respond(false, config('api-code.error_code.parameters_invalid'), []);
    }
}
