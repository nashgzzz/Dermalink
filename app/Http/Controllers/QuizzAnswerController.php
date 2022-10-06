<?php

namespace App\Http\Controllers;

use App\Models\QuizzAnswer;
use App\Http\Requests\StoreQuizzAnswerRequest;
use App\Http\Requests\UpdateQuizzAnswerRequest;

class QuizzAnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreQuizzAnswerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuizzAnswerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\QuizzAnswer  $quizzAnswer
     * @return \Illuminate\Http\Response
     */
    public function show(QuizzAnswer $quizzAnswer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\QuizzAnswer  $quizzAnswer
     * @return \Illuminate\Http\Response
     */
    public function edit(QuizzAnswer $quizzAnswer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQuizzAnswerRequest  $request
     * @param  \App\Models\QuizzAnswer  $quizzAnswer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuizzAnswerRequest $request, QuizzAnswer $quizzAnswer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\QuizzAnswer  $quizzAnswer
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuizzAnswer $quizzAnswer)
    {
        //
    }
}
