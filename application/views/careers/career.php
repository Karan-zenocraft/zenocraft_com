      <div class="container">
            <div class="slick-carousel row WhyZenosysInner d-flex align-items-center align-items-center">
        <div>
            <div class="slide-content col-md-12 WhyZenosysInnerBox">
                <img src="<?php echo base_url(); ?>assets/images/Cost-Management.png" alt="" class="img-fluid">
                <h6 class="TitleH6">Cost Management</h6>
                <p>Target IT Cost Reduction while strengthening the quality of services</p>

            </div>
        </div>
        <div>
            <div class="slide-content col-md-12 WhyZenosysInnerBox">

                <img src="<?php echo base_url(); ?>assets/images/Human-capital-Management.png" alt="" class="img-fluid">

                <h6 class="TitleH6">Human capital </h6>
                <p>Assist with improving/utilizing Core People Capabilities to derive competitive edge.</p>
            </div>
        </div>
        <div>
            <div class="slide-content col-md-12 WhyZenosysInnerBox">
                <img src="<?php echo base_url(); ?>assets/images/Asset-Management.png" alt="" class="img-fluid">

                <h6 class="TitleH6">Asset Management </h6>
                <p>  ITAM-Oversee, Manage & Optimize Company IT Systems, Hardware, Processes & Data</p>

            </div>
        </div>
        <div>
            <div class="slide-content col-md-12 WhyZenosysInnerBox">
                <img src="<?php echo base_url(); ?>assets/images/Risk-Management.png" alt="" class="img-fluid">

                <h6 class="TitleH6">Risk Management</h6>
                <p>Help Minimize risk with the use, operation & adoption of IT in the organization</p>

            </div>
        </div>


    </div>


            <div class="row">
                <div class="col-md-7 WhyZenosysContent Careers">
                    <h2 class="TitleH2">CURRENT OPENINGS</h2>


                    <div class="table-responsive">
                    <table class="table table-striped">
    <thead>
      <tr>
        <th>Job ID</th>
        <th>Job</th>
        <th>Location</th>
        <th>Type</th>
      </tr>
    </thead>
    <tbody>
        <?php if (!empty($jobs)) {
    foreach ($jobs as $key => $job) {?>
      <tr>
        <td><?php echo $job->job_id; ?></td>
        <td onclick="get_description('<?php echo $job->id; ?>')"><a href="javascript:void(0);"><?php echo $job->title; ?></a></td>
        <input type="hidden" id="desc<?php echo $job->id; ?>" name="desc" value="<?php echo addslashes($job->description); ?>">
        <td><?php echo $job->location; ?></td>
        <td><?php echo $job->type; ?></td>
      </tr>
  <?php }?>
   
    </tbody>
  </table>
                        
                        <p><?php echo $links; ?></p>

<?php }?>
</div>

                </div>
                <div class="col-md-5 WhyZenosysContent Careers CareersRight">

<!--                    <h2 class="TitleH2">Job Description</h2>-->

                    <h3 class="TitleH3">Job Description</h3>
                    <?php $first_job = !empty($jobs) ? current($jobs) : "";?>
                    <p class="put_desc"><?php echo !empty($first_job) ? $first_job->description : "No data" ?></p>
                    </ul>


                 </div>

            </div>



        </div>
<script type="text/javascript">
$(document).ready(function () {

$(".job_title").click(function(){
var job_id = $(this).attr("id");
alert(job_id);
var job_type = $(this).attr("data-jobType");
var job_location = $(this).attr("data-jobLocation");
var post_content = $(this).attr("data-content");
document.getElementById("job_desc_title").textContent = "JOB DESCRIPTION";
$("#job_title").html(post_content);
//document.getElementById("job_title").html = post_content;

});
});
function get_description(id){
    var description = $('#desc'+id).val();
    $(".put_desc").html(description);

}
</script>
