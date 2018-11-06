<form>
    <fieldset>
        <div class="form-group rbt-has-error">
            <label for="textinput-md">Last name</label>
            <div class="grid-x">
                <div class="cell -6">
                    <input type="text" class="form-control" id="textinput-md" aria-describedby="textinput" >
                    <div class="alert alert-danger fade show rbt-alert-list" role="alert">
                        <div class="rbt-alert-inline-message">Last name is required.</div>
                    </div>
                </div>
            </div>
        </div>
    </fieldset>
    <fieldset class="margin-top-4">
        <legend class="rbt-ts-20 margin-bottom-3"><strong>Some choices</strong></legend>
        <div class="grid-x">
            <div class="cell -6 rbt-has-error">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">Option one</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Option two</label>
                </div>
                <div class="alert alert-danger fade show rbt-alert-list" role="alert">
                    <div class="rbt-alert-inline-message">Please make a choice.</div>
                </div>
            </div>
        </div>
    </fieldset>
</form>
