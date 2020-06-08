<?php
    if (@$_GET['page'] == '' || @$_GET['page'] == 'dashboard' ) {
        # code...
        $this->load->view('dashboard.php');
    }

    elseif (@$_GET['page'] == 'master_list') {
        # code...
        $this->load->view('data_list.php');
    }

    elseif (@$_GET['page'] == 'master_item') {
        # code...
        $this->load->view('data_item.php');
    }

?>
        <div class="clearfix"></div>

        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        &copy; 2020 PT SIJI SOLUSI DIGITAL
                    </div>
                    <div class="col-sm-6 text-right">
                        Designed by <a href="MAILTO:NOVRIIWANDA@GMAIL.COM"> NOVRI WANDA </a>
                    </div>
                </div>
            </div>
        </footer>

        </div><!-- /#right-panel -->

        