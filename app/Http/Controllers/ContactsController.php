<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeedbackRequest;
use App\Models\Feedback;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\JsonResponse;

class ContactsController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|Factory|View|Application
     */
    public function view(): Application|View|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('pages.contacts');
    }

    /**
     * @param FeedbackRequest $request
     * @return JsonResponse
     */
    public function createFeedback(FeedbackRequest $request): JsonResponse
    {
        Feedback::create($request->validated());

        return response()->json(['status' => true, 'message' => 'Ваша заявка отправленна'], 201);
    }
}
