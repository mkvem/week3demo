@extends('base')

@section("content")
    <div class="row">
        <div class="col-md-3 m-1 p-1 bg-primary">
            Column 1 of 2
        </div>
        <div class="col-md-2 m-2 p-1 bg-secondary">
            Column 2 of 2
        </div>
    </div>

    <!-- Pop up modal -->
    <div id="notificationModal" class="modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Notification</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p id="usernameModal">Username: </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Ok</button>
            </div>
            </div>
        </div>
    </div>

    <!-- Custom form -->
     <form id="frmLogin">
        <!-- Username -->
        <div class="form-floating mt-3">
            <input type="text" class="form-control" name="username" 
            id="username" placeholder="username" />
            <label for="username">Username</label>
        </div>
        <!-- Password -->
        <div class="form-floating mt-3">
            <input type="password" class="form-control" name="password" 
            id="password" placeholder="1234" />
            <label for="password">Password</label>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
     </form>
@endsection

@section('js')
    <script type="text/javascript">
        $(document).ready(function() {
            $("#frmLogin").on('submit', function() {
                console.log("Form disubmit !");
                var username = $("input[name=username]").val();
                $("#usernameModal").html("Username: " + username);
                //Untuk trigger open modal dari jquery
                $("#notificationModal").modal('show');
                return false;
            });
        });
    </script>
@endsection