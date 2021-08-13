<?php

namespace App\Http\Controllers;

use App\Models\Gift;
use Illuminate\Http\Request;

class giftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gift = Gift::all();
        $giftCount= Gift::all()->count();
        return view('admin.gift.showGift', compact('gift','giftCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.gift.addGift');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Gift::create($request->all());
        alert()->success('توجه ', ' با موفقیت انجام گردید');
        return redirect(Route('gift.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Gift $gift
     * @return \Illuminate\Http\Response
     */
    public function show(Gift $gift)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Gift $gift
     * @return \Illuminate\Http\Response
     */
    public function edit(Gift $gift)
    {
        return view('admin.gift.editGift',compact('gift'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Gift $gift
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gift $gift)
    {
        $gift->update($request->all());
        alert()->success('توجه ', 'بروزرسانی با موفقیت انجام گردید');
        return redirect(Route('gift.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Gift $gift
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gift $gift)
    {

        $gift->delete();
        alert()->success('توجه ', 'کاربر با موفقیت حذف گردید');
        return back();
    }
}
