<form>
    <div class="form-group margin-bottom-3">
        <label for="isvalid">First name</label>
        <input type="text" class="form-control is-valid" id="isvalid" aria-describedby="textinput" >
        <errors controlname="title">
            <div class="valid-feedback"><span class="rbt-icon-circle-check" aria-hidden="true"></span> <span class="font-weight-bold">First name</span> is valid! </div>
        </errors>
    </div>
    <div class="form-group margin-bottom-3">
        <label for="iswarning">Password </label>
        <input type="text" class="form-control is-warning" id="iswarning" aria-describedby="textinput" >
        <errors controlname="title">
            <div class="warning-feedback"><span class="rbt-icon-circle-minus" aria-hidden="true"></span> Your <span class="font-weight-bold">Password</span> is weak. </div>
        </errors>
    </div>
    <div class="form-group margin-bottom-3">
        <label for="isinvalid">Username </label>
        <input type="text" class="form-control is-invalid" id="isinvalid" aria-describedby="textinput" >
        <errors controlname="title">
            <div class="invalid-feedback"><span class="rbt-icon-circle-close" aria-hidden="true"></span> The <span class="font-weight-bold">Username</span> you entered is taken. </div>
        </errors>
    </div>
    <div class="form-group margin-bottom-3">
        <label for="isinfo">Description </label>
        <input type="text" class="form-control is-info" id="isinfo" aria-describedby="textinput" >
        <errors controlname="title">
            <div class="info-feedback"><span class="rbt-icon-info-circle" aria-hidden="true"></span>The <span class="font-weight-bold">Description</span> tells users more about this stuff. </div>
        </errors>
    </div>
</form>
