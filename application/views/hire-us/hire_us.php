      <style type="text/css">
          
.WhyZenosys .Careers .table thead th:first-child{width: 85%;}
.WhyZenosys .Careers h6 p{font-weight: bold;font-size: 16px;letter-spacing: 1.5px;}
.WhyZenosys .WhyZenosysContent.Hiring  p{padding: 0;margin-bottom: 3px;}       
.WhyZenosys .WhyZenosysContent.Hiring ul li{margin-bottom: 5px;}
.WhyZenosys .WhyZenosysContent.Careers, .WhyZenosys .WhyZenosysContent.Hiring{padding-top: 10px;}  
.WhyZenosys .quote h6{margin: 0}
.WhyZenosys .quote{margin-bottom: 20px;padding-bottom: 20px;
    padding-top: 20px;background: #F7F7F7;}
.WhyZenosys .quote h6{font-size: 18px;letter-spacing: 2px;font-family: 'Arial';font-weight: lighter;margin-bottom:0px;line-height: 20px;margin-right: auto;}
          .WhyZenosys .quote .Hirebtn{margin-right: 40px;}
          .WhyZenosys .quote h6 .arrow-right{width: 0;
    height: 0;
    border-top: 8px solid transparent;
    border-bottom: 8px solid transparent;
    border-left: 8px solid #ff7070;
    margin-right: 10px;
    margin-bottom: 0px;
    display: inline-flex;}
@media(min-width:320px) and (max-width:767px){.WhyZenosys .quote h6{font-size: 15px;margin-top: 20px;letter-spacing: 0;}
    .WhyZenosys .quote .Hirebtn{font-size: 12px;width: 195x;}         
    .WhyZenosys .Careers .table thead th:first-child{width: 75%;}
    .WhyZenosys .Careers .table-responsive {padding-bottom: 0;}
}
@media(min-width:768px) and (max-width:1199px){.WhyZenosys .quote h6{font-size: 16px;margin-top: 20px;letter-spacing: 1;}}
@media(min-width:767px) and (max-width:1024px){.WhyZenosys .Careers .table thead th:first-child{width: 78%;}}
      </style>

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
                <div class="col-md-12 WhyZenosysContent Careers">
                    <h2 class="TitleH2">Hire Developers</h2>
                    <h6><p>Create extraordinary business strategies with our highly skilled and certified professionals for your business needs.</p></h6>
                    <p>In today’s world, online presence plays a vital role and hiring the right resource to execute the right job makes the business successful. Hiring dedicated resources help you reduce many costs such as recruitment, peripheral benefits, promotion, training, infrastructure, etc. compared to your in-house employees.</p>
                    <p>Create amazing business strategies with our highly skilled and certified professionals for your business needs. We offer services to a wide range of industries by exceeding our client’s expectations. You can directly interact with the developer or team regarding your project, the same way as you do with your in-house team.</p>
                    <p>We understand that every task requires different skill-sets and hiring models. We provide a flexible hiring model that suits your needs on Monthy/Weekly/Hourly basis.</p>
                </div>
          </div>
          
          <div class="row">
                <div class="col-md-7 WhyZenosysContent Careers">
                    <div class="table-responsive">
                    <table class="table table-striped">
    <thead>
      <tr>
        <th>Technology</th>
        <th>Rate / hr</th>
      </tr>
    </thead>
    <tbody>
        <?php if (!empty($jobs)) {
    foreach ($jobs as $key => $job) {?>
      <tr>
        <td><?php echo $job->description; ?></td>
        <td><?php echo $job->rate;?> USD</a></td>


        <input type="hidden" id="desc<?php echo $job->id; ?>" name="desc" value="<?php echo addslashes($job->description); ?>">
      </tr>
  <?php }?>

    </tbody>
  </table>

                        <p><?php echo $links; ?></p>

<?php }?>
</div>

               


        </div>


<div class="col-md-5 Hiring WhyZenosysContent">
    <p>Why hire dedicated resources from Zenocraft?</p>
    <ul>
        <li>Flexible Hiring Models</li>
        <li>Total involvement and control of your team</li>
        <li>Highly skilled and certified professionals.</li>
        <li>Seamless communication with the offshore team anytime, anywhere.</li>
        <li>Monitor performance via daily reports.</li>
        <li>Secured development area.</li>
        <li>Source code authorization.</li>
        <li>Save time and money.</li>
        <li> Flexible timings.</li>
        <li>Track the team’s performance with Project Management.</li>
        <li>Tools like Basecamp, Jira, Redmine, etc.</li>
        <li> Adherence to deadlines.</li>
        <li> 100% confidentiality.</li>
    
    
    </ul>
    
</div>
 </div>
</div>

<section class="CustomeRow quote">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="d-flex align-items-center justify-content-start col-md-12 text-center">
    <h6><b><div class="arrow-right"></div>Do you have any idea in mind ? Let’s we discuss and give life to your idea. </b></h6><a href="<?php echo base_url(); ?>contact" class="Hirebtn">“Get a free quote”</a>    
 </div>
</div>
</div>
</div>
</section>

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
