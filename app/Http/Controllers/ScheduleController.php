<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateScheduleRequest;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Collection;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param Request $request
     * @return Collection
     */
    public function index(Request $request): Collection
    {
        return Schedule::all();
    }

    /**
     * Store a newly created resource in storage.
     * @param CreateScheduleRequest $request
     * @return Schedule
     */
    public function store(CreateScheduleRequest $request): Schedule
    {
        return Schedule::create($request->validated());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return Response
     */
    public function show(Schedule $schedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Schedule  $schedule
     * @return Response
     */
    public function update(Request $request, Schedule $schedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return Response
     */
    public function destroy(Schedule $schedule)
    {
        //
    }
}
