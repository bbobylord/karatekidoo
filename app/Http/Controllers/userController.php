<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use UxWeb\SweetAlert\SweetAlert;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userCount= User::all()->count();
        $users = User::paginate(15);
        $counter = 1;
      return  view('admin.user.showUser',compact('users','counter','userCount'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = User::findOrFail($request->id);

        $user->update([
            'health'=>(int)$request->health,
        ]);
        alert()->success('توجه ', 'بروزرسانی با موفقیت انجام گردید');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //

        $user->delete();
        alert()->success('توجه ', 'کاربر با موفقیت حذف گردید');
        return back();
    }




    public function showResetPointDay()
    {
        return  view('admin.user.resetPoint');
    }

    /// resate day point
    public function resetPointDay (){
        $users = User::all();
        foreach ($users as $user){
            $user->update([
                'point'=>(int)0,
            ]);
        }

        alert()->success('توجه ', ' با موفقیت انجام گردید');
        return back();
    }


    /// resate week point
    public function resetPointWeek (){
        $users = User::all();
        foreach ($users as $user){
            $user->update([
                'weekPoint'=>(int)0,
            ]);
        }

        alert()->success('توجه ', ' با موفقیت انجام گردید');
        return back();
    }
}
