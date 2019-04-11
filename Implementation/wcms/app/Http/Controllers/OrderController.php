<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use DB;
use App\Order;
use Carbon;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item = new Item();
        $items = $item->get();
        return view('woodcraft.order2',[
        'item' => $items
    ]);
    //          
    }
public function orderlist()
{
    $user=auth()->user();
    $order = new Order();
        $orders = DB::table('order')
        ->join('item','item.itemid','=','order.itemid')
        ->select('order.*','item.*')
        ->where('order.userid','=',$user->userid)
        ->get();
        return view('woodcraft.orderlist',[
        'order' => $orders
    ]);

}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $user=auth()->user();
            $order = new Order();
             $order->order_date=(Carbon\Carbon::now('Asia/Kathmandu')->toDateString('Y-m-d'));
            $order->quantity=$request->quantity;
             $order->userid=$user->userid;
            $order->itemid=$id;
            $order->save();
        } catch (Exception $e) {
            DB::rollback();
            throw $e;
        }

        try {
            $getOrder = DB::table('order')->select('orderid')->get()->last();

            $getBill = DB::table('order')
            ->join('item','item.itemid','=','order.itemid') 
            ->where('order.orderid','=',$getOrder)
            ->select('order.*','item.*')
            ->get();
        } catch (Exception $e) {
            
        }

        DB::commit();
        
        return view('woodcraft.receipt',compact('getBill'))->with('Success', 'Order Successful. Your order will be delivered within 24 hours.');    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orders = DB::table('item')->get()->toArray();
        return view('woodcraft.order2', compact('item'));

        
    }
    public function show2($id)
    {
        
         $orders = DB::table('item')->where('itemid',$id)->get()->toArray();
        return view('woodcraft.orderprocess', compact('orders'));
        
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
