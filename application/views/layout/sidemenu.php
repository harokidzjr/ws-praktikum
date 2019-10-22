<div class="sidebar-menu">
    <!-- BEGIN SIDEBAR MENU ITEMS-->
    <ul class="menu-items">
        <li class="m-t-30 ">
            <a href="<?= site_url("welcome") ?>" class="detailed">
                <span class="title">Dashboard</span>
            </a>
            <span class="bg-success icon-thumbnail"><i class="pg-home"></i></span>
        </li>
        <?php $this->load->view('layout2/usermenu'); ?>
        <?php $this->load->view('layout2/stockmenu'); ?>
        <?php $this->load->view('layout2/produkmenu'); ?>
        <?php $this->load->view('layout2/salesmenu'); ?>
        <?php $this->load->view('layout2/permissionmenu'); ?>
    </ul>
    <div class="clearfix"></div>
</div>