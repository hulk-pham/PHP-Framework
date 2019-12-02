<?php
?>
<!--   Core JS Files   -->
<script src="<?= asset_url("vendor/assets/js/core/jquery.3.2.1.min.js") ?>" type="text/javascript"></script>
<script src="<?= asset_url("vendor/assets/js/core/popper.min.js") ?>" type="text/javascript"></script>
<script src="<?= asset_url("vendor/assets/js/core/bootstrap.min.js") ?>" type="text/javascript"></script>



<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="<?= asset_url("vendor/assets/js/plugins/bootstrap-switch.js") ?>"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

<!--  Chartist Plugin  -->
<script src="<?= asset_url("vendor/assets/js/plugins/chartist.min.js") ?>"></script>

<!--  Notifications Plugin    -->
<script src="<?= asset_url("vendor/assets/js/plugins/bootstrap-notify.js") ?>"></script>

<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="<?= asset_url("vendor/assets/js/light-bootstrap-dashboard.js?v=2.0.0") ?>" type="text/javascript"></script>

<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="<?= asset_url("vendor/assets/js/demo.js") ?>"></script>

<script type="text/javascript">
    $(document).ready(function () {
// Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();



    });
</script>
<?php
$status = "info|haha";
if ($status) {
    $type = explode("|", $status)[0];
    $type = 'info';
    $msg = explode("|", $status)[1];
    $msg = 'haha';

//    var_dump($type)
    ?>
    <script type="text/javascript">
        $(document).ready(function () {
// Javascript method's body can be found in assets/js/demos.js
//             demo.initDashboardPageCharts();

            //demo.showNotification('<?//=$msg ?>//','<?//=$type?>//');
            color = Math.floor((Math.random() * 4) + 1);
            $.notify({
                icon: "nc-icon nc-app",
                message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."

            }, {
                type: type[color],
                timer: 8000,
                placement: {
                    from: from,
                    align: align
                }
            });
            //demo.showNotification('<?//=$msg ?>//','<?//=$type?>//');
            // demo.showNotification();

        });
    </script>
    <?php
}
?>
