<script>
</script>
<style>
    .Tabbing .CustomeRow .modal-logo{max-width:500px!important}
/*
.modal.show .modal-dialog{transform: scale(0)!important;
-webkit-animation: animatezoom 0.9s;
animation: animatezoom 0.9s}
*/
/*    .WhyZenosys .Tabbing .modal{overflow-y: hidden;}*/
.Tabbing .CustomeRow .PortfolioBox, modal-dialog.modal-dialog-centered, .tab-pane.fade, .tab-pane.active {
-webkit-animation: animatezoom 0.9s;
animation: animatezoom 0.9s;
}
@-webkit-keyframes animatezoom {
from {-webkit-transform: scale(0);transition: 0.8s all}
to {-webkit-transform: scale(1);transition: 0.8s all}
}
@keyframes animatezoom {
from {transform: scale(0);transition: 0.8s all}
to {transform: scale(1);transition: 0.8s all}
}
</style>
<div class="container">
    <div class="row CustomeRows">
        <style>
        .WhyZenosys .WhyZenosysContent h2:before{content: unset;}
        </style>
        <div class="col-md-12 Tabbing">
            <h2>Portfolio</h2>
            <ul class="nav TabbingNav">
                <?php if (!empty($categoryList)) {
    foreach ($categoryList as $key => $category) {?>
                <li class="TabbingLi"><a data-toggle="tab"  href="#category<?php echo $category->id; ?>" id="li_category<?php echo $category->id; ?>" class="TabbingA"> <?php echo ($category->id == 1) ? '<i class="fa fa-eye"></i>' : '' ?><?php echo $category->title; ?></a></li>
                <?php }
}?>
            </ul>
            <div class="tab-content clearfix">
                   <?php foreach ($categoryList as $key => $category) {
    ?>

                <div id="category<?php echo $category->id ?>" class="tab-pane fade">
                    <div class="CustomeRow">
                    <?php $i = 1;
    $this->load->model('Portfolio_Model');
    $portfolioByCategory = $this->Portfolio_Model->getPortfolioByCategory($category->id);

    if (!empty($portfolioByCategory)) {
        foreach ($portfolioByCategory as $key => $portfolio) {
            ?>
                        <div class="col-md-4" data-toggle="modal" data-target="#portfolio<?php echo $portfolio->id . "_category" . $category->id ?>">
                            <div class="PortfolioBox">
                                <img src="<?php echo base_url() . "assets/uploads/" . $portfolio->image ?>" alt="" class="img-fluid">
                                <i class="fa fa-eye"></i>
                            </div>
                            <a data-toggle="modal" data-target="#portfolio<?php echo $portfolio->id . "_category" . $category->id ?>" class="Title"><?php echo $portfolio->title ?></a>
                        </div>
                        <div class="modal fade scrollbar-dusty-grass square thin" id="portfolio<?php echo $portfolio->id . "_category" . $category->id ?>">
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
                                </div>
                            </div>
                        </div>






<!--logodesign-->

<!--
                        <div class="col-md-4" data-toggle="modal" data-target="#portfolio<?php echo $portfolio->id . "_category" . $category->id ?>">
                            <div class="PortfolioBox">
                                <img src="<?php echo base_url() . "assets/uploads/" . $portfolio->image ?>" alt="" class="img-fluid">
                                <i class="fa fa-eye"></i>
                            </div>
                            <a data-toggle="modal" data-target="#portfolio<?php echo $portfolio->id . "_category" . $category->id ?>" class="Title"><?php echo $portfolio->title ?></a>
                        </div>
                        <div class="modal fade scrollbar-dusty-grass square thin" id="portfolio<?php echo $portfolio->id . "_category" . $category->id ?>">
                            <div class="modal-dialog modal-dialog-centered modal-logo">
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <img src="<?php echo base_url() . "assets/uploads/" . $portfolio->image ?>" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
-->


<?php
if ($i % 3 == 0) {
                echo "</div><div class='CustomeRow'>";
            }
            $i++;}

        if (($portfolio->category == 3) || ($portfolio->category == 4)) {

            ?>


                    <div class="col-md-4 d-flex align-items-center justify-content-center Video">
                    <iframe width="340" height="225" style="border-radius: 10px;" src="https://www.youtube.com/embed/cTCBgTN64ik?rel=0&amp;modestbranding=1&amp;autohide=1&amp;showinfo=0&amp;controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                        </div>

   <?php }}?>
                </div>


            </div>
                <?php }?>
        </div>
    </div>
</div>