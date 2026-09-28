<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Zone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::where('user_id', Auth::id())->with('zone')->get();
        return view('orders.index', compact('orders'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $zones=Zone::all();
        return view('orders.create', compact('zones'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $date=$request->validate([
            'count' => ['required', 'integer', 'max:225'],
            'potvergdenie' => ['required', 'string', 'max:225'],
            'comment' => ['nullable', 'string', 'max:225'],
            'zone_id' => ['required', 'exists:zones,id'],
        ]);

        $date['user_id']=Auth::id();
        Order::create($date);
        return redirect()->route('order.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
