<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Order;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedback = Feedback::when(Auth::user()->user_type == 'cashier', function ($q) {
            $q->whereHas('order', function ($query) {
                $query->where('created_at', Auth::user()->id);
            });
        })->paginate(20);
        return view('feedbacks.index', compact('feedbacks'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'order_id' => 'required',
            'feedback' => 'required'
        ]);
        Feedback::create([
            'order_id' => $request->order_id,
            'feedback' => $request->feedback
        ]);
        return redirect()->back()->with('success', 'Feedback is added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function show(Feedback $feedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function edit(Feedback $feedback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feedback $feedback)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feedback $feedback)
    {
        //
    }

    public function saveFeedback(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'phone' => 'required',
                'rating' => 'required',
            ]
        );

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Bad Request'
            ], 400);
        }
        $feedback = Feedback::create([
            'phone' => $request->phone,
            'rating' => $request->rating,
            'feedback' => $request->feedback
        ]);
        if (!$feedback) {
            return response()->json([
                'success' => false,
                'message' => 'Something wrong at Server'
            ], 500);
        }
        return response()->json([
            'success' => true,
            'message' => 'Feedback sent successfully'
        ], 200);
    }

    public function getQuestions(Request $request)
    {
        $questions = Question::all();
        return response()->json([
            'success' => true,
            'questions' => $questions
        ], 200);
    }
}
