@extends('layouts.admin.master')


@section('content')

    <div class="content-body">
        <div class="row justify-content-between align-items-center mb-10">

            <!-- Page Heading Start -->
            <div class="col-12 col-lg-auto mb-20">
                <div class="page-heading">
                    <h3>فرم <span>/ افزودن</span></h3>
                </div>
            </div><!-- Page Heading End -->

        </div>
        <div class="col-12 mb-30">
            <div class="box">

                <form action="{{route('gift.store')}}" method="POST">
                    @csrf
                    <div class="box-body">
                        <div class="box-head">
                            <h3 class="title">عنوان</h3>
                        </div>
                        <div class="col-12 mb-15"><input type="text" class="form-control" name="title"></div>


                        <div class="box-head">
                            <h3 class="title">جزییات</h3>
                        </div>
                        <div class="box-body">
                            <textarea class="summernote" id="summernote" name="desc"></textarea>
                        </div>
                    </div>

                    <button type="submit" class="button button-primary"><span><i class="zmdi zmdi-check"></i>ارسال</span></button>
                </form>
            </div>
        </div>

    </div>


    <!--Plugins JS-->
    <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="assets/js/plugins/tippy4.min.js.js"></script>
    <!--Main JS-->
    <script src="assets/js/main.js"></script>

    <!-- Plugins & Activation JS For Only This Page -->
    <script src="assets/js/plugins/summernote/summernote-bs4.min.js"></script>
    <script src="assets/js/plugins/summernote/summernote.active.js"></script>
    <script src="assets/js/plugins/quill/quill.min.js"></script>
    <script src="assets/js/plugins/quill/quill.active.js"></script>

@endsection
