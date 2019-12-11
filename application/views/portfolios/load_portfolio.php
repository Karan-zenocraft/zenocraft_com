   <div class="CustomeRow">
                    <?php $i = 1;
$this->load->model('Portfolio_Model');
/*    $config = array();
$config['full_tag_open'] = "<ul class='pagination'>";
$config['full_tag_close'] = '</ul>';
$config['num_tag_open'] = '<li>';
$config['num_tag_close'] = '</li>';
$config['cur_tag_open'] = '<li class="active"><a href="#">';
$config['cur_tag_close'] = '</a></li>';
$config['prev_tag_open'] = '<li>';
$config['prev_tag_close'] = '</li>';
$config['first_tag_open'] = '<li>';
$config['first_tag_close'] = '</li>';
$config['last_tag_open'] = '<li>';
$config['last_tag_close'] = '</li>';

$config['prev_link'] = '<i class="fa fa-angle-left"></i>';
$config['prev_tag_open'] = '<li>';
$config['prev_tag_close'] = '</li>';

$config['next_link'] = '<i class="fa fa-angle-right"></i>';
$config['next_tag_open'] = '<li>';
$config['next_tag_close'] = '</li>';

$config["base_url"] = base_url() . "portfolio";
$config["total_rows"] = $this->Portfolio_Model->get_count($category->id);
$config["per_page"] = 9;
$config["uri_segment"] = 2;

$this->pagination->initialize($config);

$page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
p($page);

$links = $this->pagination->create_links();*/
$page_limit = 9;
$start_from = !empty($_GET['page']) ? $_GET['page'] * $page_limit : 1;
$total_counts = $this->Portfolio_Model->get_count($category->id);
$pages = ceil($total_counts / 9);
$category_id = !empty($_GET['cetegory']) ? $_GET['cetegory'] : $category->id;

$portfolioByCategory = $this->Portfolio_Model->getPortfolios($page_limit, $start_from, $category_id);
//\$portfolioByCategory = $this->Portfolio_Model->getPortfolioByCategory($category->id);
if (!empty($portfolioByCategory)) {
    foreach ($portfolioByCategory as $key => $portfolio) {
        ?>
                        <div class="col-md-4" data-toggle="modal" data-target="#portfolio<?php echo $portfolio->id . "_category" . $portfolio->category ?>">
                            <div class="PortfolioBox">
                                <img src="<?php echo base_url() . "assets/uploads/" . $portfolio->image ?>" alt="" class="img-fluid">
                                <i class="fa fa-eye"></i>
                            </div>
                            <a data-toggle="modal" data-target="#portfolio<?php echo $portfolio->id . "_category" . $portfolio->category ?>" class="Title"><?php echo $portfolio->title ?></a>
                        </div>
                        <div class="modal fade scrollbar-dusty-grass square thin" id="portfolio<?php echo $portfolio->id . "_category" . $portfolio->category ?>">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-7">
                                                <img src="<?php echo base_url() . "assets/uploads/" . $portfolio->image ?>" alt="" class="img-fluid">
                                            </div>
                                            <div class="col-md-5 d-flex align-items-start justify-content-start flex-column">
                                                <div class="SecOne">
                                                    <h2><?php echo $portfolio->title ?></h2>
                                                    <ul class="d-flex align-items-start justify-content-start flex-column">
                                                        <li>Skill : <?php echo $portfolio->skill ?></li>
                                                    </ul>
                                                </div>
                                                <div class="SecTwo">
                                                    <h2>About <?php echo $portfolio->title ?></h2>
                                                    <p><?php echo $portfolio->description ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                    -->
                                </div>
                            </div>
                        </div>
                                        <?php
if ($i % 3 == 0) {
            echo "</div><div class='CustomeRow'>";
        }
        $i++;}?>
             <p><?php// echo $links; ?></p>
             <?php
$page = !empty($_GET['page']) ? $_GET['page'] + 1 : 2;
    $category_id = !empty($_GET['category']) ? $_GET['category'] : 1;
    ?>
            <input type="button" value="Load More" onclick="get_page(<?php echo $page . "," . $category_id ?>)">
        <?php }?>
                </div>
                <?php if (($category->id == 4) || ($category->id == 3)) {?>
                <div class="CustomeRow">
                    <div class="">
                    <iframe width="340" height="225" style="border-radius: 10px;" src="https://www.youtube.com/embed/cTCBgTN64ik?rel=0&amp;modestbranding=1&amp;autohide=1&amp;showinfo=0&amp;controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                        </div>
                    </div>
               <?php }?>