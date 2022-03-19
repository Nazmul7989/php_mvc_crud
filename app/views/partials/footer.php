<!--  image file load-->
<!--    <img src="--><?php //echo BASEURL?><!--/assets/images/nature.jpg" alt="">-->

<!-- link js file dynamically  -->
<?php linkJs('assets/js/jquery-3.5.1.min.js'); ?>
<?php linkJs('assets/js/popper.min.js'); ?>
<?php linkJs('assets/js/bootstrap.min.js'); ?>
<?php linkJs('assets/js/dataTable.js'); ?>
<?php linkJs('assets/js/custom.js'); ?>

<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script>

</body>
</html>


