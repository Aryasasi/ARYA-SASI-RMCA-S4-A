<?php
include 'admin_header.php';?>

        <center><div class="content mt-3">
		<center><div class="col-lg-4 col-md-6">
        <center><div class="card">
            <div class="card-header">
                <strong class="card-title mb-3">Profile Card</strong>
            </div>
            <div class="card-body">
                <div class="mx-auto d-block">
                    <img class="rounded-circle mx-auto d-block" src="images/admin.png" alt="Card image cap">
                    <h5 class="text-sm-center mt-2 mb-1">Admin</h5>
                    <div class="location text-sm-center"><i class="fa fa-map-marker"></i> Kanjirapally , Kerala</div>
                </div>
                <hr>
                <div class="card-text text-sm-center">
                    <a href="https://www.facebook.com"><i class="fa fa-facebook pr-1"></i></a>
                    <a href="https://www.twitter.com"><i class="fa fa-twitter pr-1"></i></a>
                    <a href="https://www.linkedin.com"><i class="fa fa-linkedin pr-1"></i></a>
                    <a href="https://www.pinterest.com"><i class="fa fa-pinterest pr-1"></i></a>
                </div>
            </div>
        </div>
    </div>
		<h2></h2>
		</div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>