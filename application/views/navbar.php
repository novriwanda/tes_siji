<?php 
    if(isset($_GET['page'])){
        $page = $_GET['page'];
      }else{
        $page = "home";
      }
?>

<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">

                <li class="<?php echo($page === 'dashboard') ? 'active' : ''; ?>">
                    <a href="?page=dashboard">
                        <i class="menu-icon fa fa-laptop"></i> Dashboard </a>
                </li>

                <li class="menu-title"> Master List </li>

                <li class="<?php echo($page === 'master_list') ? 'active' : ''; ?>">
                    <a href="?page=master_list">
                        <i class="menu-icon fa fa-table"></i> Master List  
                    </a>
                </li>

                <li class="<?php echo($page === 'master_item') ? 'active' : ''; ?>">
                    <a href="?page=master_item">
                        <i class="menu-icon fa fa-table"></i> Master Item
                    </a>
                </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>