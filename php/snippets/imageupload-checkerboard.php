<div class="form-group">
    <ccf-image-upload arrayname="media" dimensions="NO_RESIZE" max="4" >
        <div class="">
            <div class="">
                <image-upload >
                    <div  filedrop="" class="img-ul"  >
                        <div  class="img-ul-file-upload img-ul-hr-inline-group" >
                            <label  class="img-ul-upload img-ul-button" tabindex="0"> <span >Upload Image</span>
                                <input  multiple type="file" accept="image/png,image/jpg,image/jpeg">
                            </label>
                            <label  class="img-ul-clear img-ul-button"> <span >Clear</span> </label>
                            <div  class="img-ul-drag-box-msg">or drop image here. You may drag images to reorder.</div>
                        </div>
                    </div>
                </image-upload>
                <div class="img-preview rbt-checkered-bg" draggable="false" style="cursor: pointer;">
                    <div draggable="true" style="cursor: move;" class=""> 
                        <img alt="" tabindex="0" src="http://via.placeholder.com/300x200" class="">
                        <button class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> <span class="sr-only">
                        <message key="global.buttons.delete">Delete</message>
                        </span> </button>
                    </div>
                </div>
            </div>
        </div>
    </ccf-image-upload>
</div>
