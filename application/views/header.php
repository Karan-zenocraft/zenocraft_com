    <header class="Header">
        <div class="container">
            <div class="row">

                <div class="col-md-12 d-flex align-items-center HeaderInner">
                    <div class="Logo">
                        <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="" class="img-fluid"></a>
                    </div>

                    <!--
                    <nav class="HeaderNav">
                        <ul class="d-flex align-items-center justify-content-center">
                            <li data-toggle="collapse" data-target="#a1"><a href="#" >Solutions</a>
                            <ul id="a1" class="collapse">
                            <li data-toggle="collapse" data-target="#a2"><a>Enterprise Applications</a>
                                <ul id="a2" class="collapse">
                                <li><a href="">Emerging Technologies</a></li>
                            <li><a href="">Application Development</a></li>

                            </ul>


                            </li>
                            <li><a href="">Emerging Technologies</a></li>
                            <li><a href="">Application Development</a></li>
                            <li><a href="">Quality Engineering</a></li>
                            <li><a href="">Advance Analytics & Big Data</a></li>
                            <li><a href="">Cognitive TeChnologies</a></li>
                            <li><a href="">Managed Services</a></li>
                            <li><a href="">Mobile & Wireless</a></li>

                            </ul>


                            </li>
                            <li data-toggle="collapse" data-target="#demo1"><a href="#">Products</a>

                            <ul id="demo1" class="collapse">
                            <li><a href="">Company Profile</a></li>
                            <li><a href="">Our Process</a></li>
                            <li><a href="">Our Journey So Far</a></li>
                            <li><a href="">Team Engagements</a></li>
                            <li><a href="">We’re Hiring</a></li>
                            </ul>
                            </li>
                            <li><a href="">Engagement Models</a></li>
                            <li><a href="">Industries</a></li>
                            <li><a href="">Company</a></li>
                            <li><a href="">Careers</a></li>
                            <li><a href="">Contact Us</a></li>
                        </ul>
                    </nav>
-->


                    <span class="Menu toggle" onclick="myFunction(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
                </span>


                    <nav class="HeaderNavigation">





<!--
                <span class="Menu toggle" onclick="myFunction(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
                </span>
-->
                        <ul class="menu">




                            <li>

                                <!-- First Tier Drop Down -->
                                <label class="toggle DD1">Solutions </label>
                                <a class="a arrow">Solutions</a>
                                <input type="checkbox" id="drop-2" />


      <ul class="InnerMenu DD11">


        <li>


          <label class="toggle DD5">Enterprise Applications </label>
          <a href="#" class="Label">Works</a>
          <input type="checkbox" id="drop-3"/>
          <ul class="InnerDropdown onlysm DD55">
            <li><a href="<?php echo base_url(); ?>enterpriseApplications/oracle">Oracle E-Business Suite</a></li>
            <li><a href="<?php echo base_url(); ?>enterpriseApplications/sap">SAP S / 4HANA</a></li>
            <li><a href="<?php echo base_url(); ?>enterpriseApplications/odoo">Odoo</a></li>
            <li><a href="<?php echo base_url(); ?>enterpriseApplications/oracle_apex">Oracle Apex</a></li>
          </ul>
        </li>



          <li>


          <label class="toggle DD6">Emerging Technologies </label>
          <a href="#" class="Label">Works</a>
          <input type="checkbox" id="drop-4"/>
          <ul class="InnerDropdown onlysm DD66">
            <li><a href="<?php echo base_url(); ?>emergingTechnologies/internet_of_things">Internet Of Things</a></li>
            <li><a href="<?php echo base_url(); ?>emergingTechnologies/block_chain_technologies">Block-Chain Technologies</a></li>
            <li><a href="<?php echo base_url(); ?>emergingTechnologies/augmented_reality">Augmented Reality & Virtual Reality</a></li>
          </ul>
        </li>


          <li>


          <label class="toggle DD7">Application Development </label>
          <a href="#" class="Label">Works</a>
          <input type="checkbox" id="drop-5"/>
          <ul class="InnerDropdown onlysm DD77">
            <li><a href="<?php echo base_url(); ?>ApplicationDevelopment/custom_application_development">Custom Application Development</a></li>
            <li><a href="<?php echo base_url(); ?>ApplicationDevelopment/application_integration">Application Integration</a></li>
            <li><a href="<?php echo base_url(); ?>ApplicationDevelopment/legacy_application_transfromation">Legacy Application Transformation</a></li>
          </ul>
        </li>


          <li>


          <label class="toggle DD8">Quality Engineering </label>
          <a href="#" class="Label">Works</a>
          <input type="checkbox" id="drop-6"/>
          <ul class="InnerDropdown onlysm DD88">
            <li><a href="<?php echo base_url(); ?>qualityEngineering/functional_engineering">Functional Engineering</a></li>
            <li><a href="<?php echo base_url(); ?>qualityEngineering/automation">Automation</a></li>
            <li><a href="<?php echo base_url(); ?>qualityEngineering/performance_engineering">Performance Engineering</a></li>
          </ul>
        </li>


          <li>


          <label  class="toggle DD9">Cognitive Technologies</label>
          <a href="#" class="Label">Works</a>
          <input type="checkbox" id="drop-7"/>
          <ul class="InnerDropdown onlysm DD99">
            <li><a href="<?php echo base_url(); ?>cognitiveTechnologies/machine_learning">Machine Learning</a></li>
            <li><a href="<?php echo base_url(); ?>ApplicationDevelopment/custom_application_development"> Data Science</a></li>
            <li><a href="<?php echo base_url(); ?>cognitiveTechnologies/deep_learning">Deep Learning Technologies</a></li>
             <li><a href="<?php echo base_url(); ?>cognitiveTechnologies/artificial_intelligence"> Artificial Intelligence</a></li>
              <li><a href="<?php echo base_url(); ?>cognitiveTechnologies/predective_analytics"> Predictive Analytics</a></li>
          </ul>
        </li>


          <li>


          <label class="toggle DD10">Advance Analytics & Big Data</label>
          <a href="#" class="Label">Works</a>
          <input type="checkbox" id="drop-8"/>
          <ul class="InnerDropdown onlysm DD1010">
            <li><a href="<?php echo base_url(); ?>bigData/businessintelligence">Business Intelligence</a></li>
            <li><a href="<?php echo base_url(); ?>bigData/sapcloud"> SAP Cloud Analytics</a></li>
            <li><a href="<?php echo base_url(); ?>bigData/dataquality">Data Quality Management</a></li>

          </ul>
        </li>





          <li>


          <label class="toggle DD13">Managed Services</label>
          <a href="#" class="Label">Works</a>
          <input type="checkbox" id="drop-9"/>
          <ul class="InnerDropdown onlysm DD3333">
            <li><a href="<?php echo base_url(); ?>managedServices/application_management">Application Management Services</a></li>
            <li><a href="<?php echo base_url(); ?>managedServices/infastructure_management"> Infrastructure Management Services</a></li>
            <li><a href="<?php echo base_url(); ?>managedServices/database_management">Database Management Services</a></li>

          </ul>
        </li>


          <li>


          <label  class="toggle DD12">Staffing Services</label>
          <a href="#" class="Label">Works</a>
          <input type="checkbox" id="drop-10"/>
          <ul class="InnerDropdown onlysm DD1212">
            <li><a href="<?php echo base_url(); ?>staffingServices/msp">MSP (Manage Staffing Provider)</a></li>
                    <li><a href="<?php echo base_url(); ?>staffingServices/contingent_staffing">Contingent Staffing</a></li>
                <li><a href="<?php echo base_url(); ?>staffingServices/recruitment_process">Recruitment Process Outsourcing</a></li>
                                            
                <li><a href="<?php echo base_url(); ?>staffingServices/project_staffing">Project Staffing Services</a></li>
<!--
            <li><a href="<?php echo base_url(); ?>staffingServices/consulting_work_force"> Consulting Work Force</a></li>
            <li><a href="<?php echo base_url(); ?>staffingServices/permenant_placement">Permanent Placement</a></li>
-->
             <!--  <li><a href="<?php echo base_url(); ?>ApplicationDevelopment/hybrid_model">Hybrid Model</a></li> -->

          </ul>
        </li>








      </ul>



        <ul class="OnlyMobile">

        <li>

          <!-- Second Tier Drop Down -->
          <label for="drop-11" class="toggle">Enterprise Applications</label>
          <a href="#">Enterprise Applications</a>
          <input type="checkbox" id="drop-11"/>
          <ul>
              <li><a href="<?php echo base_url(); ?>enterpriseApplications/oracle">Oracle E-Business Suite</a></li>
                                    <li><a href="<?php echo base_url(); ?>enterpriseApplications/sap">SAP S / 4HANA</a></li>
                                    <li><a href="<?php echo base_url(); ?>enterpriseApplications/odoo">Odoo</a></li>
                                    <li><a href="<?php echo base_url(); ?>enterpriseApplications/oracle_apex">Oracle Apex</a></li>
          </ul>
        </li>





            <li>

          <!-- Second Tier Drop Down -->
          <label for="drop-12" class="toggle">Emerging Technologies</label>
          <a href="#">Emerging Technologies</a>
          <input type="checkbox" id="drop-12"/>
          <ul>
            <li><a href="<?php echo base_url(); ?>emergingTechnologies/internet_of_things">Internet Of Things</a></li>
            <li><a href="<?php echo base_url(); ?>emergingTechnologies/block_chain_technologies">Block-Chain Technologies</a></li>
            <li><a href="<?php echo base_url(); ?>emergingTechnologies/augmented_reality">Augmented Reality & Virtual Reality</a></li>
          </ul>
        </li>



            <li>

          <!-- Second Tier Drop Down -->
          <label for="drop-13" class="toggle">Application Development</label>
          <a href="">Application Development</a>
          <input type="checkbox" id="drop-13"/>
          <ul>
            <li><a href="<?php echo base_url(); ?>ApplicationDevelopment/custom_application_development">Custom Application Development</a></li>
            <li><a href="<?php echo base_url(); ?>ApplicationDevelopment/application_integration">Application Integration</a></li>
            <li><a href="<?php echo base_url(); ?>ApplicationDevelopment/legacy_application_transfromation">Legacy Application Transformation</a></li>
          </ul>
        </li>



            <li>

          <!-- Second Tier Drop Down -->
          <label for="drop-14" class="toggle">Quality Engineering</label>
          <a href="#">Quality Engineering</a>
          <input type="checkbox" id="drop-14"/>
          <ul>
            <li><a href="<?php echo base_url(); ?>qualityEngineering/functional_engineering">Functional Engineering</a></li>
            <li><a href="<?php echo base_url(); ?>qualityEngineering/automation">Automation</a></li>
            <li><a href="<?php echo base_url(); ?>qualityEngineering/performance_engineering">Performance Engineering</a></li>
          </ul>
        </li>



            <li>

          <!-- Second Tier Drop Down -->
          <label for="drop-15" class="toggle">Cognitive Technologies</label>
          <a href="#">COGNITIVE TECHNOLOGIES</a>
          <input type="checkbox" id="drop-15"/>
          <ul>
              <li><a href="<?php echo base_url(); ?>cognitiveTechnologies/machine_learning">Machine Learning</a></li>
            <li><a href="<?php echo base_url(); ?>cognitiveTechnologies/data_science"> Data Science</a></li>
            <li><a href="<?php echo base_url(); ?>cognitiveTechnologies/deep_learning">Deep Learning Technologies</a></li>
            <li><a href="<?php echo base_url(); ?>cognitiveTechnologies/artificial_intelligence">Artificial Intelligence</a></li>
              <li><a href="<?php echo base_url(); ?>cognitiveTechnologies/predective_analytics">Predictive Analytics</a></li>
          </ul>
        </li>



            <li>

          <!-- Second Tier Drop Down -->
          <label for="drop-16" class="toggle">Advance Analytics & Big Data</label>
          <a href="#">Advance Analytics & Big Data</a>
          <input type="checkbox" id="drop-16"/>
          <ul>
              <li><a href="<?php echo base_url(); ?>bigData/businessintelligence">Business Intelligence</a></li>
            <li><a href="<?php echo base_url(); ?>bigData/sapcloud">SAP Cloud Analytics</a></li>
            <li><a href="<?php echo base_url(); ?>bigData/dataquality">Data Quality Management</a></li>

          </ul>
        </li>



            <li>

          <!-- Second Tier Drop Down -->
          <label for="drop-17" class="toggle">Managed Services</label>
          <a href="#">Managed Services</a>
          <input type="checkbox" id="drop-17"/>
          <ul>
            <li><a href="<?php echo base_url(); ?>managedServices/application_management">Application Management Services</a></li>
                                    <li><a href="<?php echo base_url(); ?>managedServices/infastructure_management">Infrastructure Management Services</a></li>
                                    <li><a href="<?php echo base_url(); ?>managedServices/database_management">Database Management Services</a></li>

          </ul>
        </li>


            <li>

          <!-- Second Tier Drop Down -->
          <label for="drop-10" class="toggle">Staffing Services</label>
          <a href="#">Staffing Services</a>
          <input type="checkbox" id="drop-10"/>
          <ul>
              <li><a href="<?php echo base_url(); ?>staffingServices/msp">MSP (Manage Staffing Provider)</a></li>
                    <li><a href="<?php echo base_url(); ?>staffingServices/contingent_staffing">Contingent Staffing</a></li>
                <li><a href="<?php echo base_url(); ?>staffingServices/recruitment_process">Recruitment Process Outsourcing</a></li>
                                            
                <li><a href="<?php echo base_url(); ?>staffingServices/project_staffing">Project Staffing Services</a></li>
              <!--
            <li><a href="<?php echo base_url(); ?>staffingServices/consulting_work_force">Consulting Work Force</a></li>
            <li><a href="<?php echo base_url(); ?>staffingServices/permenant_placement">Permanent Placement</a></li>
-->
              <!-- <li><a href="<?php echo base_url(); ?>staffingServices/hybrid_model">Hybrid Model</a></li> -->

          </ul>
        </li>
      </ul>

                                <ul class="InnerMenu InnerMenu2 InnerMenu3 Onlylg">
                                    <div class="Row">
                                    <div class="col-md-3 p-0">
                                    <label>Enterprise Applications</label>

                                    <li><a href="<?php echo base_url(); ?>enterpriseApplications/oracle">Oracle E-Business Suite</a></li>
                                    <li><a href="<?php echo base_url(); ?>enterpriseApplications/sap">SAP S / 4HANA</a></li>
                                    <li><a href="<?php echo base_url(); ?>enterpriseApplications/odoo">Odoo</a></li>
                                    <li><a href="<?php echo base_url(); ?>enterpriseApplications/oracle_apex">Oracle Apex</a></li>


                                        </div>

                                    <div class="col-md-3 p-0">
                                    <label>Emerging Technologies</label>


                                  <li><a href="<?php echo base_url(); ?>emergingTechnologies/internet_of_things">Internet Of Things</a></li>
                                  <li><a href="<?php echo base_url(); ?>emergingTechnologies/block_chain_technologies">Block-Chain Technologies</a></li>
                                  <li><a href="<?php echo base_url(); ?>emergingTechnologies/augmented_reality">Augmented Reality & Virtual Reality</a></li>


                                        </div>


                                    <div class="col-md-3 p-0">
                                    <label>Application Development</label>

                                    <li><a href="<?php echo base_url(); ?>ApplicationDevelopment/custom_application_development">Custom Application Development</a></li>
                                    <li><a href="<?php echo base_url(); ?>ApplicationDevelopment/application_integration">Application Integration</a></li>
                                    <li><a href="<?php echo base_url(); ?>ApplicationDevelopment/legacy_application_transfromation">Legacy Application Transformation</a></li>


                                        </div>



                                        <div class="col-md-3 p-0">
                                    <label>Quality Engineering</label>

                                   <li><a href="<?php echo base_url(); ?>qualityEngineering/functional_engineering">Functional Engineering</a></li>
            <li><a href="<?php echo base_url(); ?>qualityEngineering/automation">Automation</a></li>
            <li><a href="<?php echo base_url(); ?>qualityEngineering/performance_engineering">Performance Engineering</a></li>


                                        </div>
                                        </div>




                                    <div class="Row">

                                    <div class="col-md-3 p-0">
                                    <label>COGNITIVE TECHNOLOGIES</label>

                                              <li><a href="<?php echo base_url(); ?>cognitiveTechnologies/machine_learning">Machine Learning</a></li>
            <li><a href="<?php echo base_url(); ?>cognitiveTechnologies/data_science"> Data Science</a></li>
            <li><a href="<?php echo base_url(); ?>cognitiveTechnologies/deep_learning">Deep Learning Technologies</a></li>
            <li><a href="<?php echo base_url(); ?>cognitiveTechnologies/artificial_intelligence">Artificial Intelligence</a></li>
              <li><a href="<?php echo base_url(); ?>cognitiveTechnologies/predective_analytics">Predictive Analytics</a></li>

                                        </div>



                                    <div class="col-md-3 p-0">
                                    <label>Advance Analytics & Big Data</label>

                                    <li><a href="<?php echo base_url(); ?>bigData/businessintelligence">Business Intelligence</a></li>
                                    <li><a href="<?php echo base_url(); ?>bigData/sapcloud">SAP Cloud Analytics</a></li>
                                    <li><a href="<?php echo base_url(); ?>bigData/dataquality">Data Quality Management</a></li>
                                    <li style="visibility: hidden"><a href="#">Data Quality Management</a></li>
                                    <li style="visibility: hidden"><a href="#">Data Quality Management</a></li>


                                        </div>





                                        <div class="col-md-3 p-0">
                                    <label>MANAGED SERVICES</label>

                                    <li><a href="<?php echo base_url(); ?>managedServices/application_management">Application Management Services</a></li>
                                    <li><a href="<?php echo base_url(); ?>managedServices/infastructure_management">Infrastructure Management Services</a></li>
                                    <li><a href="<?php echo base_url(); ?>managedServices/database_management">Database Management Services</a></li>
                                    <li style="visibility: hidden"><a href="#">Data Quality Management</a></li>
                                    <li style="visibility: hidden"><a href="#">Data Quality Management</a></li>

                                        </div>




                                        <div class="col-md-3 p-0">
                                    <label>Staffing Services</label>
                    <li><a href="<?php echo base_url(); ?>staffingServices/msp">MSP (Manage Staffing Provider)</a></li>
                    <li><a href="<?php echo base_url(); ?>staffingServices/contingent_staffing">Contingent Staffing</a></li>
                <li><a href="<?php echo base_url(); ?>staffingServices/recruitment_process">Recruitment Process Outsourcing</a></li>
                                            
                <li><a href="<?php echo base_url(); ?>staffingServices/project_staffing">Project Staffing Services</a></li>
                                            <!--
            <li><a href="<?php echo base_url(); ?>staffingServices/consulting_work_force">Consulting Work Force</a></li>
            <li><a href="<?php echo base_url(); ?>staffingServices/permenant_placement">Permanent Placement</a></li>
-->
              <!-- <li><a href="<?php echo base_url(); ?>staffingServices/hybrid_model">Hybrid Model</a></li> -->
                                <li style="visibility: hidden"><a href="#">Data Quality Management</a></li>
<!--                                            <li style="visibility: hidden"><a href="#">Data Quality Management</a></li>-->
                                        </div>
                                        </div>
                                </ul>



<!--
                                <ul class="InnerMenu InnerMenu2 InnerMenu3">

                                    <label>list</label>
                                    <li><a href="">one</a></li>
                                    <li><a href="">one</a></li>
                                    <li><a href="">one</a></li>


                                </ul>
-->



                            </li>
                            <li>
                                <!-- First Tier Drop Down -->
                                <label  class="toggle DD2">Products </label>
                                <a class="a arrow">Products</a>
                                      <input type="checkbox" id="drop-18"/>
                                <ul class="InnerMenu InnerMenu2 DD22">
                                    <li><a href="<?php echo base_url(); ?>products/supply_chain">Always Ahead - Supply Chain</a></li>
                                    <li><a href="<?php echo base_url(); ?>products/churn_predict">Churn Predict - K Factor</a></li>
                                    <li><a href="<?php echo base_url(); ?>products/my_view_security">MyView - Security</a></li>
                                    <li><a href="<?php echo base_url(); ?>products/vrdrive_walkthrough">VRDrive WalkThrough</a></li>
                                    <li><a href="<?php echo base_url(); ?>products/degree360_hrms">Degree360 HRMS</a></li>
                                    <li><a href="<?php echo base_url(); ?>products/jakaru_postgres_bdr">Jakaru Postgres BDR</a></li>
                                    <li><a href="<?php echo base_url(); ?>products/polyglot_dbmonitor">Polyglot DBMonitor</a></li>
                                    <li><a href="<?php echo base_url(); ?>products/warehouse_controller">Warehouse Controller</a></li>
                                </ul>
                            </li>
                            <li>

                                <!-- First Tier Drop Down -->
                                <label class="toggle DD3">Engagement Models </label>
                                <a class="a arrow">Engagement Models</a>
                                <input type="checkbox" id="drop-19" />
                                <ul class="InnerMenu InnerMenu2 DD33">
                                    <li><a href="<?php echo base_url(); ?>models/onshore">On-site Delivery Model</a></li>
                                    <li><a href="<?php echo base_url(); ?>models/bot">BOT Model Turnkey Model</a></li>
                                    <li><a href="<?php echo base_url(); ?>models/offshore">Offshore Model</a></li>
                                    <li><a href="<?php echo base_url(); ?>models/hybrid">Hybrid Model</a></li>

<!--
                                    <li>


                                        <label for="drop-3" class="toggle">Works </label>
                                        <a href="#" class="Label">Works</a>
                                        <input type="checkbox" id="drop-3" />
                                        <ul>
                                            <li><a href="#">HTML/CSS</a></li>
                                            <li><a href="#">jQuery</a></li>
                                            <li><a href="#">Python</a></li>
                                        </ul>
                                    </li>
-->
                                </ul>
                            </li>
                            <li>
                               <!-- First Tier Drop Down -->
                               <label  class="toggle DD4">Industries </label>
                               <a class="a arrow">Industries</a>
                                     <input type="checkbox" id="drop-20"/>
                               <ul class="InnerMenu InnerMenu2 DD44">
                                   <li><a href="<?php echo base_url(); ?>industries/financialindustries">Financial Services</a></li>
                                   <li><a href="<?php echo base_url(); ?>industries/governmentbodies">Government Bodies</a></li>
                                   <li><a href="<?php echo base_url(); ?>industries/educationindustry">Education Industry</a></li>
                                   <li><a href="<?php echo base_url(); ?>industries/retailindustries">Retail, Distribution & ECommerce</a></li>
                                   <li><a href="<?php echo base_url(); ?>industries/teleindustries">Telecommunication</a></li>
                                   <li><a href="<?php echo base_url(); ?>industries/healthcareindustries">Healthcare Industry</a></li>
                                   <li><a href="<?php echo base_url(); ?>industries/manufacuringindustries">Manufacturing Industry</a></li>
                               </ul>
                           </li>
                            <li><a href="<?php echo base_url(); ?>company" class="a">Company</a></li>
                            <li><a href="<?php echo base_url(); ?>careers" class="a">Careers</a></li>
                            <li><a href="<?php echo base_url(); ?>contactUs" class="a">Contact Us</a></li>
                        </ul>




<!--
                        <ul class="menu onlyMobile">
    <li><a href="#">Home</a></li>
    <li>

      <label for="drop-1" class="toggle">Service +</label>
      <a href="#">Service</a>

      <ul>
        <li><a href="#">Service 1</a></li>
        <li><a href="#">Service 2</a></li>
        <li><a href="#">Service 3</a></li>
      </ul>
    </li>
    <li>


      <label for="drop-2" class="toggle">Portfolio +</label>
      <a href="#">Portfolio</a>
      <input type="checkbox" id="drop-2"/>
      <ul>
        <li><a href="#">Portfolio 1</a></li>
        <li><a href="#">Portfolio 2</a></li>
        <li>


          <label for="drop-3" class="toggle">Works +</label>
          <a href="#" class="Label">Works</a>
          <input type="checkbox" id="drop-3"/>
          <ul>
            <li><a href="#">HTML/CSS</a></li>
            <li><a href="#">jQuery</a></li>
            <li><a href="#">Python</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="#">Blog</a></li>
    <li><a href="#">Submit</a></li>
    <li><a href="#">Contact</a></li>
    <li><a href="#">About</a></li>
  </ul>
-->
                    </nav>




                    <!--
                <span class="Menu" onclick="myFunction(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
                </span>
-->

                </div>
            </div>
        </div>

    </header>

    <section class="Slider">
        <div class="container-fluid">


            <div class="col-md-12 p-0 SliderInner">

                <img src="<?php echo base_url(); ?>assets/images/zmain.png" alt="" class="img-fluid SliderImg">
                <img src="<?php echo base_url(); ?>assets/images/zmain-sm.png" alt="" class="img-fluid SliderImg OnlySm">
                <div class="Caption">
                    <div class="CaptionBlock Bg-Dark">
                        <h1 class="TitleH1">Harmonizing </h1>
                        <h1 class="TitleH1">Business Strategies<span class="typed-cursor">|</span> </h1>
                    </div>





                    <p>"Replacing distinctive IT strategy with a strategy that blends in a harmonious set of   <br>
                         corporate strategies designed to assist the organization to act as whole"</p>

                </div>
            </div>
        </div>
    </section>
