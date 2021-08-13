<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">ویرایش کاربر</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('users.update','test')}}" method="POST">
                @csrf
                {{method_field('patch')}}
            <div class="modal-body">

                    <div class="form-group">
                        <label for="exampleInputEmail1">جان</label>
                        <input type="text" name="health" class="form-control health" id="health" aria-describedby="emailHelp" >

                    </div>


                <input type="text" hidden id="user-ID" name="id">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
                <button type="submit" class="btn btn-primary" id="editUser">تایید </button>
            </div>
            </form>
        </div>
    </div>
</div>
