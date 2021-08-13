@extends('layouts.admin.master')


@section('content')
    <!-- Content Body Start -->

    <div class="content-body">
        <div class="box-body">
            <h2>لیست کاربران</h2>
            <h5>تعداد کاربران : {{$userCount}}</h5>
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
                        نام<span class="fooicon fooicon-sort"></span></th>
                    <th data-name="موقعیت" class="footable-sortable" style="display: table-cell;">نام کاربری<span
                            class="fooicon fooicon-sort"></span></th>
                    <th data-breakpoints="xs" data-name="دفتر" class="footable-sortable" style="display: table-cell;">
                        امتیاز روزانه<span class="fooicon fooicon-sort"></span></th>
                    <th data-breakpoints="xs" data-name="سن" class="footable-sortable" style="display: table-cell;">
                        امتیاز هفتگی<span class="fooicon fooicon-sort"></span></th>
                    <th data-breakpoints="xs sm" data-name="شروع" class="footable-sortable"
                        style="display: table-cell;">شماره تماس<span class="fooicon fooicon-sort"></span></th>
                    <th data-breakpoints="xs sm" data-name="شروع" class="footable-sortable"
                        style="display: table-cell;">جان<span class="fooicon fooicon-sort"></span></th>
                    <th data-breakpoints="xs sm md" data-name="حقوق" class="footable-sortable footable-last-visible"
                        style="display: table-cell;">تنظیمات<span class="fooicon fooicon-sort"></span></th>
                </tr>
                </thead>
                <tbody>


                @foreach($users as $user)
                    <tr>

                        <td style="display: table-cell;">{{$counter++}}</td>
                        <td class="footable-first-visible"
                            style="display: table-cell;">{{$user->firstName.' '.$user->lastName}}</td>
                        <td style="display: table-cell;">{{$user->username}}</td>
                        <td style="display: table-cell;">{{$user->point}}</td>
                        <td style="display: table-cell;">{{$user->weekPoint}}</td>
                        <td style="display: table-cell;">{{$user->phone}}</td>
                        <td style="display: table-cell;">{{$user->health}}</td>
                        <td class="footable-last-visible" style="display: table-cell;">


                            <form action="{{Route('users.destroy',["user"=>$user->id])}}" method="post">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button class="button button-xs button-danger"><span>حذف</span></button>
                                <a style="color: #ffff" class="button button-xs button-info editModal"
                                   data-toggle="modal"
                                   data-target="#exampleModalCenter"
                                   id="editModal"
                                   data-health="{{ $user->health}}"
                                   data-userID="{{ $user->id }}"
                                ><span>ویرایش</span></a>

                            </form>


                        </td>

                </tbody>
                @endforeach
                <tfoot>
                <tr class="footable-paging">
                    <td colspan="6">
                        <div class="footable-pagination-wrapper">
                            {{ $users->render() }}
                            <div class="divider"></div>
                            <span class="label label-default">3 of 3</span></div>
                    </td>
                </tr>
                </tfoot>
            </table>

        </div>
    </div><!-- Content Body End -->


    @include('admin.user.modal')
    <script src="/assets/js/vendor/jquery-3.3.1.min.js"></script>
    <script>


        $(document).ready(function () {
            /// Open modal and set value
            $('.editModal').click(function () {
                var health = $(this).attr('data-health')
                var userID = $(this).attr('data-userID')

                $("#health").val(health);
                $("#user-ID").val(userID);
                $('#exampleModalCenter').modal('show');

            });

            /// Edit user
            // $('#editUser').click(function () {
            //     let day = $("#day").val();
            //     let week = $("#week").val();
            //     let userID = $("#user-ID").val();
            //
            //     $('#exampleModalCenter').modal('hide');
            //
            // })
        })
    </script>
@endsection
