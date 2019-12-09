<div>

    <div id="ckfinder-widget"></div>
</div>
<script src="<?= asset_url("vendor/ckfinder/ckfinder.js") ?>"></script>
<!-- Latest compiled and minified JavaScript -->
<script>
    $(document).ready(function () {
        var config = {title: ""};
        CKFinder.config();
        CKFinder.widget('ckfinder-widget', {
            width: '100%',
            height: 700
        });
    });
</script>
