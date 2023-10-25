
<div class="container-fluid">
    <form id="upload_file">
        <input type="hidden" name="reload" value="<?php echo $reload ?>">
        <div class="form-group">
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="files[]" multiple accept="image/*,.pdf,video/*" class="custom-file-input" id="fileInput" onchange="filenames(this,$(this))" required>
                    <label class="custom-file-label" style="overflow:hidden;width:100%" for="fileInput">Choose file</label>
                </div>
                <div class="input-group-append">
                <span class="input-group-text">Upload</span>
                </div>
            </div>
        </div>    
    </form>
</div>
