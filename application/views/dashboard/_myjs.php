    <!-- Required Jqurey -->
    <script src="<?php echo base_url();?>_assets/ablepro/assets/plugins/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url();?>_assets/ablepro/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?php echo base_url();?>_assets/ablepro/assets/plugins/tether/dist/js/tether.min.js"></script>

    <!-- Required Fremwork -->
    <script src="<?php echo base_url();?>_assets/ablepro/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- waves effects.js -->
    <script src="<?php echo base_url();?>_assets/ablepro/assets/plugins/Waves/waves.min.js"></script>

    <!-- Scrollbar JS-->
    <script src="<?php echo base_url();?>_assets/ablepro/assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="<?php echo base_url();?>_assets/ablepro/assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js"></script>

    <!--classic JS-->
    <script src="<?php echo base_url();?>_assets/ablepro/assets/plugins/classie/classie.js"></script>

    <!-- notification -->
    <script src="<?php echo base_url();?>_assets/ablepro/assets/plugins/notification/js/bootstrap-growl.min.js"></script>

    <!-- Rickshaw Chart js -->
    <script src="<?php echo base_url();?>_assets/ablepro/assets/plugins/d3/d3.js"></script>
    <script src="<?php echo base_url();?>_assets/ablepro/assets/plugins/rickshaw/rickshaw.js"></script>

    <!-- Sparkline charts -->
    <script src="<?php echo base_url();?>_assets/ablepro/assets/plugins/jquery-sparkline/dist/jquery.sparkline.js"></script>

    <!-- Counter js  -->
    <script src="<?php echo base_url();?>_assets/ablepro/assets/plugins/waypoints/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url();?>_assets/ablepro/assets/plugins/countdown/js/jquery.counterup.js"></script>

    <!-- custom js -->
    <script type="text/javascript" src="<?php echo base_url();?>_assets/ablepro/assets/js/main.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>_assets/ablepro/assets/pages/elements.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>_assets/ablepro/assets/js/menu.min.js"></script>
    
    <!-- Tabel Custom -->
    <script type="text/javascript" src="<?php echo base_url();?>_assets/ablepro/assets/plugins/datatables/datatables.min.js"></script>   
    <script src="<?php echo base_url();?>_assets/ablepro/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url();?>_assets/ablepro/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <!-- Tabel Custom -->
    <script>
    $(document).ready(function (){
        var table = $('#example1').DataTable({
            'responsive': true
        });

        // Handle click on "Expand All" button
        $('#btn-show-all-children').on('click', function(){
            // Expand row details
            table.rows(':not(.parent)').nodes().to$().find('td:first-child').trigger('click');
        });

        // Handle click on "Collapse All" button
        $('#btn-hide-all-children').on('click', function(){
            // Collapse row details
            table.rows('.parent').nodes().to$().find('td:first-child').trigger('click');
        });
    });
    </script>