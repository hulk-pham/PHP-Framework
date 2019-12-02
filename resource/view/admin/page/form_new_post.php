<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">New Post</h4>
                        <p class="card-category">Create new post</p>
                    </div>
                    <div class="card-body">
                        <form action="/dashboard-new-post" method="post" enctype="multipart/form-data">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control" placeholder="Post title" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Brief</label>
                                        <input type="text" name="brief" class="form-control" placeholder="Post short brief" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select class="form-control" name="category" required>
                                            <?php foreach ($listCate as $cate) { ?>
                                                <option value="<?= $cate['id'] ?>"> <?= $cate['name'] ?></option>
                                            <?php } ?>
                                        </select>
                                        <!--                                        <input type="text" class="form-control" placeholder="Company" value="Mike">-->
                                    </div>
                                </div>
                                <div class="col-md-6 pl-1">
                                    <div class="form-group">
                                        <label>Tags
<!--                                            <span class="text-lowercase"> (hold Control or Command to select multiple)</span> -->
                                        </label>
                                        <select id="tag_select" class="form-control" name="tag" required>
                                            <?php foreach ($listTag as $tag) { ?>
                                                <option value="<?= $tag['id'] ?>"> <?= $tag['name'] ?></option>
                                            <?php } ?>
                                        </select>
<!--                                        <input type="text" class="form-control" placeholder="Last Name" value="Andrew">-->
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Avatar</label>
                                        <input type="file" accept="image/*" name="avatar" class="form-control" placeholder="Avatar file" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Content</label>
                                        <textarea name="content"
                                                  id="editor" required>&lt;p&gt;Initial editor content.&lt;/p&gt;</textarea>
                                        <script>

                                        </script>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-info btn-fill pull-right">Save</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="<?= asset_url("vendor/ckeditor/ckeditor.js") ?>"></script>
<script src="<?= asset_url("vendor/ckeditor/sample.js") ?>"></script>
<script src="<?= asset_url("vendor/ckfinder/ckfinder.js") ?>"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://unpkg.com/multiple-select@1.5.2/dist/multiple-select.min.js"></script>
<script>
    var editor = CKEDITOR.replace('content');
    CKFinder.setupCKEditor( editor );
    // initSample();
    $( document ).ready(function() {
        $('#tag_select').multipleSelect()
    });
</script>
