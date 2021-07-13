<script src="<?php echo base_url() ?>assets/tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
    tinymce.init({
        file_browser_callback: function (field, url, type, win) {
            tinyMCE.activeEditor.windowManager.open({
                file: '<?php echo base_url() ?>assets/kcfinder/browse.php?opener=tinymce4&field=' + field + '&type=' + type,
                title: 'KCFinder',
                width: 700,
                height: 500,
                inline: true,
                close_previous: false
            }, {
                window: win,
                input: field
            });
            return false;
        },
        selector: ".txttinymce",
        height: 450,
        plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
        document_base_url: "<?php echo base_url().'assets/upload/image/'; ?>",
        relative_urls : true,
        remove_script_host : true,
        convert_urls : false
    });
</script>

<style>
    #imagePreview {
        margin-top: 7px;
        width: 458px;
        height: 355px;
        background-position: center center;
        background-size: cover;
        -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);
        display: inline-block;
    }
</style>
<script type="text/javascript">
    $(function () {
        $("#file").on("change", function ()
        {
            var files = !!this.files ? this.files : [];
            if (!files.length || !window.FileReader)
                return; // no file selected, or no FileReader support

            if (/^image/.test(files[0].type)) { // only image file
                var reader = new FileReader(); // instance of the FileReader
                reader.readAsDataURL(files[0]); // read the local file

                reader.onloadend = function () { // set image data as background of div
                    $("#imagePreview").css("background-image", "url(" + this.result + ")");
                }
            }
        });
    });
</script>

<!-- Date Picker -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/CleanDateTimePicker/jquery.datetimepicker.css">


<?php
// Session 
if ($this->session->flashdata('sukses')) {
    echo '<div class="alert alert-success">';
    echo $this->session->flashdata('sukses');
    echo '</div>';
}

// File upload error
if (isset($error)) {
    echo '<div class="alert alert-success">';
    echo $error;
    echo '</div>';
}

// Error
echo validation_errors('<div class="alert alert-success">', '</div>');
?>

<form action="<?php echo base_url('admin/blogs/edit/' . $blog['blog_id']) ?>" method="post" enctype="multipart/form-data">

    <div class="col-md-6">
        <div class="form-group input-group-lg">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="<?php echo $blog['title'] ?>" required placeholder="Title">
        </div>
        <div class="form-group">
            <label>Category Blog</label>
            <select name="category_id" class="form-control">
                <?php foreach ($category as $category) { ?>
                    <option value="<?php echo $category['category_id'] ?>" <?php
                    if ($blog['category_id'] == $category['category_id']) {
                        echo "selected";
                    }
                    ?>>
                    <?php echo $category['category_name'] ?>
                    </option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label>Status</label>
            <select name="status" class="form-control">

                <option value="publish" 
                <?php
                if ($blog['status'] == "publish") {
                    echo "selected";
                }
                ?>
                >Publish</option>}

                <option value="draft" 
                <?php
                if ($blog['status'] == "draft") {
                    echo "selected";
                }
                ?>
                >Draft</option>}                
            </select>
        </div>   
        <div class="form-group input-group-lg">
            <label>Keywords <i>(Example : News Update)</i></label>
            <input type="text" name="keywords" class="form-control" value="<?php echo $blog['keywords'] ?>" required placeholder="Keywords Google">
        </div> 
        <div class="form-group input-group-lg">
            <label>Bootstrap Class</label>
            <input type="text" name="bs_class" class="form-control" value="<?php echo $blog['bs_class'] ?>" placeholder="Bootstrap Class">
        </div>      
        <div class="form-group input-group-lg">
            <label>Program Oleh</label>
            <input type="text" name="blog_by" id="blog_by" class="form-control" value="<?php echo $blog['blog_by']; ?>" placeholder="Pemilik Program">
        </div>      
        <div class="form-group input-group-lg">
            <label>Program Mulai</label>
            <div class="input-group date" data-provide="datepicker">
                <input type="text" class="form-control datepicker" name="date_start" id="date_start" value="<?php echo $this->mPublic->reverse_date($blog['date_start']); ?>">
                <div class="input-group-addon" onclick="clear_date_start()" style="cursor: pointer !important;">
                    <span class="glyphicon glyphicon-th"></span>
                </div>
            </div>     
        </div>
        <div class="form-group input-group-lg">
            <label>Program Berakhir</label>
            <div class="input-group date" data-provide="datepicker">
                <input type="text" class="form-control datepicker" name="date_end" id="date_end" value="<?php echo $this->mPublic->reverse_date($blog['date_end']); ?>">
                <div class="input-group-addon" onclick="clear_date_end()" style="cursor: pointer !important;">
                    <span class="glyphicon glyphicon-th"></span>
                </div>
            </div>     
        </div>     
        <div class="form-group input-group-lg">
            <label>Kebutuhan Program</label>
            <input type="text" name="target_donation" id="target_donation" class="form-control" value="<?php echo $blog['target_donation']; ?>" placeholder="Rupiah Kebutuhan Program / Donasi">
        </div>
        <div class="form-group">
            <label>
                <input type="checkbox" name="blogs_position" value="BPS" <?php echo ($blog['blogs_position']!="" ? "checked" : ""); ?>> Butuh Pertolongan Segera
            </label>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Upload Cover</label>
            <input type="file" name="image" class="form-control" id="file">
            <div class="imagePreview"><img src="<?php echo base_url('assets/upload/image/thumbs/' . $blog['image']) ?>" width="458px" height="355px"></div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label>Detail Singkat</label>
            <input type="text" name="title_long" class="form-control" value="<?php echo $blog['title_long'] ?>" maxlength="75" required placeholder="Detail Singkat">
        </div>
        <div class="form-group">
            <label>Descriptioon / Detail</label>
            <textarea name="content" placeholder="Descriptioon / Detail" class="form-control txttinymce" id="content"><?php echo $blog['content'] ?></textarea>
        </div>
        <div class="form-group">
            <label>Info Terbaru</label>
            <textarea name="info" placeholder="Info Terbaru" class="form-control txttinymce" id="info"><?php echo $blog['info'] ?></textarea>
        </div>
        <div class="form-group">
            <input type="submit" name="submit" value="Update" class="btn btn-primary">
            <a class="btn btn-danger" href="<?php echo base_url('admin/blogs/'); ?>">Cancel</a>
        </div>
    </div>

</form>
<!-- moment -->
<script src="<?php echo base_url();?>assets/moment/moment.min.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url();?>assets/CleanDateTimePicker/jquery.datetimepicker.full.min.js"></script>
<!-- price format -->
<script src="<?php echo base_url();?>assets/priceformat/jquery.price_format.1.8.js"></script>

<script>
    $('#date_start').datetimepicker({ format: 'd-m-Y', formatDate: 'd-m-Y', timepicker: false, mask: '39-19-9999', dayOfWeekStart: 1, lang: 'en', step: 1,  scrollInput: false });
    $('#date_end').datetimepicker({ format: 'd-m-Y', formatDate: 'd-m-Y', timepicker: false, mask: '39-19-9999', dayOfWeekStart: 1, lang: 'en', step: 1,  scrollInput: false });
    function clear_date_start(){
        $('#date_start').val('__-__-____');
    }function clear_date_end(){
        $('#date_end').val('__-__-____');
    }
    $('#blog_by').val('LAZ Al Fatih');
    $('#target_donation').priceFormat({prefix: '', centsSeparator: '.', thousandsSeparator: ',', centsLimit: '0'});
                
</script>