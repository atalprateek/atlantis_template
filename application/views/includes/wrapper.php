                <?php
                    if($page_type=='auth'){
                        !empty($content)?$this->load->view($content):'';
                    }
                    else{
                ?>
                
                <div class="main-panel">
                    <div class="content">
                        <div class="page-inner">
                            <div class="page-header">
                                <h4 class="page-title"><?= $title; ?></h4>
                                <?php
                                if(!empty($breadcrumbs)){
                                ?>
                                <ul class="breadcrumbs">
                                    <?php
                                    if(!isset($breadcrumb['active']) && $this->uri->segment(1)!=''){ $breadcrumb['active']=$title; }
                                    foreach($breadcrumb as $link=>$crumb){
                                        if($link=='active'){
                                            echo '<li class="breadcrumb-item active" aria-current="page">'.$crumb.'</li>';
                                        }
                                        else{
                                            echo '<li class="breadcrumb-item"><a href="'.base_url($link).'">'.$crumb.'</a></li>';
                                        }
                                    }	
                                    ?>
                                    <li class="nav-home">
                                        <a href="#">
                                            <i class="flaticon-home"></i>
                                        </a>
                                    </li>
                                    <li class="separator">
                                        <i class="flaticon-right-arrow"></i>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#">Base</a>
                                    </li>
                                    <li class="separator">
                                        <i class="flaticon-right-arrow"></i>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#">Avatars</a>
                                    </li>
                                </ul>
                                <?php
                                }
                                ?>
                            </div>
                            <?php !empty($content)?$this->load->view($content):''; ?>
                        </div>
                    </div>
                    <?php $this->load->view($footer); ?>
                </div>

                <?php
                    }
                ?>