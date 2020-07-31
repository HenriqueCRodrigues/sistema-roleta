<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\SpinRepository;
use App\Http\Responses\GenericResponse;

class SpinController extends Controller
{
    protected $spinRepository;

    public function __construct(SpinRepository $spinRepository)
    {
        $this->spinRepository = $spinRepository;
    }
    public function spinRandom() {
        $data = $this->spinRepository->spinRandom();
        return GenericResponse::response($data);
    }
}
