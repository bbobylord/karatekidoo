@extends('layouts.admin.master')


@section('content')
    <!-- Content Body Start -->

    <div class="content-body">
        <div class="box-body">
            <h2> جایزه</h2>

            @if($giftCount < 1)
                <a href="{{Route('gift.create')}}" class="button button-round button-info"><span>افزودن </span></a>
            @endif

            <table
                class="table footable footable-1 footable-filtering footable-filtering-right footable-paging footable-paging-center breakpoint-xl"
                data-paging="true" data-filtering="true" data-sorting="true"
                data-breakpoints="{ &quot;xs&quot;: 480, &quot;sm&quot;: 768, &quot;md&quot;: 992, &quot;lg&quot;: 1200, &quot;xl&quot;: 1400 }"
                style="">
                <thead>

                <tr class="footable-header">


                    <th data-name="نام" class="footable-sortable footable-first-visible" style="display: table-cell;">
                        شماره<span class="fooicon fooicon-sort"></span></th>
                    <th data-name="نام" class="footable-sortable footable-first-visible" style="display: table-cell;">
                        عنوان<span class="fooicon fooicon-sort"></span></th>

                    <th data-breakpoints="xs sm md" data-name="حقوق" class="footable-sortable footable-last-visible"
                        style="display: table-cell;">تنظیمات<span class="fooicon fooicon-sort"></span></th>
                </tr>
                </thead>
                <tbody>


                @foreach($gift as $item)
                    <tr>

                        <td style="display: table-cell;">1</td>
                        <td class="footable-first-visible"
                            style="display: table-cell;">{{$item->firstName.' '.$item->title}}</td>

                        <td class="footable-last-visible" style="display: table-cell;">


                            <form action="{{Route('gift.destroy',["gift"=>$item->id])}}" method="post">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button class="button button-xs button-danger"><span>حذف</span></button>
                                <a style="color: #ffff" href="{{Route('gift.edit',["gift"=>$item->id])}}" class="button button-xs button-info "><span>ویرایش</span></a>

                            </form>


                        </td>

                </tbody>
                @endforeach
                <tfoot>
                <tr class="footable-paging">
                    <td colspan="6">
                        <div class="footable-pagination-wrapper">
                            {{--                            {{ $users->render() }}--}}
                            <div class="divider"></div>
                            <span class="label label-default">3 of 3</span></div>
                    </td>
                </tr>
                </tfoot>
            </table>

        </div>
    </div><!-- Content Body End -->



@endsection
