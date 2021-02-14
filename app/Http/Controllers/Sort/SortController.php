<?php

namespace App\Http\Controllers\Sort;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class SortController extends Controller
{
    /**
     * SortController constructor.
     * @param SortService $sortService
     */
    public function __construct(SortService $sortService)
    {
        $this->sortService = $sortService;
    }

    public function index (Request $request) {
        return $this->sortService->index($request);

    }
}
