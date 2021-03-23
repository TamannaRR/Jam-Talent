<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Category;
use App\Models\Backend\Task;
use App\Models\Backend\TaskOffer;
use App\Models\Backend\TaskApply;
use Auth;
class TaskController extends Controller
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
        $categories = Category::orderBy('name','asc')->get();
        return view('backend.pages.task.post',compact('categories'));
    }


    // request task manage by freelancer
    public function requestTaskManage()
    {
        $taskRequests = TaskOffer::orderBy('id','asc')->where('freelancer_id',5)->get();
        return view('backend.pages.freelancer.task.requestTask',compact('taskRequests'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $task = new Task();
        $task->user_id              = Auth::user()->id;
        $task->task_name            = $request->task_name;
        $task->category_name        = $request->category_name;
        $task->location             = $request->location;
        $task->budget_type          = $request->radio;
        $task->min_budget           = $request->min_budget;
        $task->max_budget           = $request->max_budget;
        $task->description          = $request->description;
        $task->save();
        return redirect()->route('user.dashbord');

    }
    // offer task
    public function offerTask(Request $request, $id)
    {
        $taskOffer = new TaskOffer();
        $taskOffer->employer_id            = Auth::user()->id;
        $taskOffer->freelancer_id          = $id;
        $taskOffer->email                  = $request->emailaddress;
        $taskOffer->title                  = $request->title;
        $taskOffer->message                = $request->message;
        //$task->file          = $request->radio;
        $taskOffer->save();
        return redirect()->route('user.dashbord');

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // show single Task in fron
    public function show($id)
    {
        $task = Task::Find($id);
        return view('frontend.pages.task.show',compact('task'));
    }
    public function applyTask(Request $request, $id)
    {
        $task = Task::Find($id);
        $taskApply = new TaskApply();
        $taskApply->task_id                     = $task->id;
        $taskApply->freelancer_id               = Auth::user()->id;
        $taskApply->employer_id                 = $task->user_id;
        $taskApply->min_budget                  = $request->min_budget;
        $taskApply->delivery_type               = $request->delivery_type;
        $taskApply->delivary_time               = $request->qtyInput;
        //$jobApply->email                = $request->emailaddress;
        $taskApply->save();
        return redirect()->route('user.dashbord');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
