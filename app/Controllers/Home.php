<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('frontend/dist/index.html');
    }
    public function about()
    {
        $sampleData = [
            'status' => 'success',
            'message' => 'This is a sample JSON response',
            'data' => [
                'id' => 1,
                'name' => 'CodeIgniter',
                'version' => 4
            ]
        ];

        return $this->response->setJSON($sampleData);
    }
}
