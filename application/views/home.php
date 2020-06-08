<?php $this->load->view('__partial\header.php') ?>

<body>
	 <?php $this->load->view('navbar.php') ?>
	 <div id="right-panel" class="right-panel">
        <!-- Header-->
       <?php $this->load->view('navbar_header.php'); ?>
        <!-- /#header -->

        <!-- Content -->
            <?php
                $this->load->view('content.php');
            ?>
        <!-- /.content -->

        <div class="clearfix">
        </div>
    </div>

<?php
    $this->load->view('__partial\footer.php');
?>