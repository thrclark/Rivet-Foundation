<form>
    <div class="form-group margin-bottom-3">
        <label for="isvalid_ta">Essay</label>
        <textarea class="form-control is-valid" id="isvalid_ta" rows="5"></textarea>
        <errors controlname="title">
            <div class="valid-feedback"><span class="rbt-icon-circle-check" aria-hidden="true"></span> Your <span class="font-weight-bold">Essay</span> is valid! </div>
        </errors>
    </div>
    <div class="form-group margin-bottom-3">
        <label for="iswarning_ta">Response </label>
        <textarea class="form-control is-warning" id="iswarning_ta" rows="5"></textarea>
        <errors controlname="title">
            <div class="warning-feedback"><span class="rbt-icon-circle-minus" aria-hidden="true"></span> Your <span class="font-weight-bold">Response</span> has some mispellings! </div>
        </errors>
    </div>
    <div class="form-group margin-bottom-3">
        <label for="isinvalid_ta">Description </label>
        <textarea class="form-control is-invalid" id="isinvalid_ta" rows="5"></textarea>
        <errors controlname="title">
            <div class="invalid-feedback"><span class="rbt-icon-circle-close" aria-hidden="true"></span> Your <span class="font-weight-bold">Description</span> Description has special characters that need replaced.</div>
        </errors>
    </div>
    <div class="form-group margin-bottom-3">
        <label for="isinfo_ta">Message </label>
        <textarea class="form-control is-info" id="isinfo_ta" rows="5"></textarea>
        <errors controlname="title">
            <div class="info-feedback"><span class="rbt-icon-info-circle" aria-hidden="true"></span>Add a <span class="font-weight-bold">Message</span> Message to give users more information.</div>
        </errors>
    </div>
</form>
