
<div class="row">
    <div class="col-md-6">
        <div class="form-group form-group-error-main">
            <label class="control-label" id="titleLabel">
                <message key="global.ad.field.title">Title</message>
                <span class="subLabel small">
                <message key="global.ad.field.required">(required)</message>
                </span> </label>
            <countdown>
                <div class="rbt-charcount">
                    <input aria-labelledby="titleLabel" class="form-control " formcontrolname="title" id="counterDemo1">
                    <span class="badge badge-success" id="counterDemo1_badge"> <span id="charcounter1">20</span> </span> </div>
            </countdown>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label class="control-label" id="descriptionLabel">
                <message key="global.ad.field.description">Description</message>
            </label>
            <countdown>
                <div class="rbt-charcount">
                    <textarea aria-labelledby="descriptionLabel" class="form-control ng-pristine ng-valid ng-touched" formcontrolname="description" id="counterDemo2" rows="5"></textarea>
                    <span class="badge badge-success" id="counterDemo2_badge"><span id="charcounter2">30</span></span> </div>
            </countdown>
        </div>
    </div>
</div>
