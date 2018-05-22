        <?php $users = $this->model_users->users_edit($this->session->nama)->row_array(); ?>
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo $this->session->foto; ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><a href="<?php echo base_url(); ?>administrator/profil"><?php echo $this->session->nama; ?></a></p>
              <a href="<?php echo base_url(); ?>administrator/profil"><i class="fa fa-circle text-success"></i> Profile</a>
            </div>
          </div>

          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header" style='color:#fff; text-transform:uppercase; border-bottom:2px solid #00c0ef'>MENU PENGGUNA</li>
            <li><a href="<?php echo base_url(); ?>administrator/home"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <?php
                if ($this->session->level == 'admin'){
                    $main = $this->model_menu->mainmenu_admin();
                    foreach ($main->result_array() as $row) {
                      if ($this->model_menu->submenu_admin($row['id_main'])->num_rows() == 0){
                        echo "<li><a href='".base_url()."$row[link]'><i class='glyphicon glyphicon-th-large'></i> <span>$row[nama_menu]</span></a></li>";
                      }else{
                        echo "<li class='treeview'>
                                <a href='".base_url()."$row[link]'><i class='glyphicon glyphicon-th-list'></i> <span>$row[nama_menu]</span><i class='fa fa-angle-left pull-right'></i></a>
                                <ul class='treeview-menu'>";
                                    $sub = $this->model_menu->submenu_admin($row['id_main']);
                                    foreach ($sub->result_array() as $rows){
                                      echo "<li><a href='".base_url()."$rows[link_sub]'><i class='fa fa-circle-o'></i> $rows[nama_sub]</a></li>";
                                    }
                                echo "</ul>
                              </li>";
                      }
                    }
                }elseif ($this->session->level == ''){
                    $mainuser = $this->model_menu->mainmenu_user();
                    foreach ($mainuser->result_array() as $row) {
                      echo "<li><a href='".base_url()."$row[link]'><i class='fa fa-circle-o'></i> <span>$row[nama_modul]</span></a></li>";
                    }
                }elseif ($this->session->level == 'operator'){
                    $mainoperator = $this->model_menu->mainmenu_operator();
                    foreach ($mainoperator->result_array() as $row) {
                      if ($this->model_menu->submenu_operator($row['id_main'])->num_rows() == 0){
                        echo "<li><a href='".base_url()."$row[link]'><i class='glyphicon glyphicon-th-large'></i> <span>$row[nama_menu]</span></a></li>";
                      }else{
                        echo "<li class='treeview'>
                                <a href='".base_url()."$row[link]'><i class='glyphicon glyphicon-th-list'></i> <span>$row[nama_menu]</span><i class='fa fa-angle-left pull-right'></i></a>
                                <ul class='treeview-menu'>";
                                    $sub = $this->model_menu->submenu_operator($row['id_main']);
                                    foreach ($sub->result_array() as $rows){
                                      echo "<li><a href='".base_url()."$rows[link_sub]'><i class='fa fa-circle-o'></i> $rows[nama_sub]</a></li>";
                                    }
                                echo "</ul>
                              </li>";
                      }
                    }
                }
            ?>
            <li><a href="<?php echo base_url(); ?>administrator/logout"><i class="fa fa-power-off"></i> <span>Logout</span></a></li>
          </ul>
        </section>