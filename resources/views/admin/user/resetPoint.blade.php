@extends('layouts.admin.master')


@section('content')
    <!-- Content Body Start -->

    <div class="content-body">
        <div class="box-body">
            <h2>ریست کردن امتیاز</h2>

            <a href="{{Route('resetPointDay')}}" class="button button-warning"><span><i class="zmdi zmdi-check"></i>امتیاز روزانه</span></a>
            <a href="{{Route('resetPointWeek')}}" class="button button-danger"><span><i class="zmdi zmdi-check"></i>امتیاز هفتگی</span></a>


        </div>
    </div><!-- Content Body End -->



@endsection
