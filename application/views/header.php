    <header class="Header">
        <div class="container">
            <div class="row">

                <div class="col-md-12 d-flex align-items-center HeaderInner">
                    <div class="Logo">
                        <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="" class="img-fluid"></a>
                    </div>
                    <span class="Menu toggle" onclick="myFunction(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
                </span>


                    <nav class="HeaderNavigation">
                        <ul class="menu">
                            <li>
                                <!-- First Tier Drop Down -->
                                <label class="toggle DD1">Solutions </label>
                                <a class="a arrow">Solutions</a>
                                <input type="checkbox" id="drop-2" />

      <ul class="InnerMenu DD11">
        <li>
          <label class="toggle DD5">PHP Development</label>
          <a href="#" class="Label">Works</a>
          <input type="checkbox" id="drop-3"/>
          <ul class="InnerDropdown onlysm DD55">
            <li><a href="<?php echo base_url(); ?>php/yii">Yii2</a></li>
            <li><a href="<?php echo base_url(); ?>php/laravel">Laravel</a></li>
            <li><a href="<?php echo base_url(); ?>php/Wordpress">Wordpress</a></li>
            <li><a href="<?php echo base_url(); ?>php/codeigniter">Codeigniter</a></li>
            <li><a href="<?php echo base_url(); ?>php/cakephp">Cakephp</a></li>
          </ul>
        </li>
          <li>
          <label class="toggle DD6">Mobile App Development </label>
          <a href="#" class="Label">Works</a>
          <input type="checkbox" id="drop-4"/>
          <ul class="InnerDropdown onlysm DD66">
             <li><a href="<?php echo base_url(); ?>mobileAppDevelopment/ios">IOS Development</a></li>
            <li><a href="<?php echo base_url(); ?>mobileAppDevelopment/android">Android Development</a></li>
            <li><a href="<?php echo base_url(); ?>mobileAppDevelopment/react_native">React Native</a></li>
            <li><a href="<?php echo base_url(); ?>mobileAppDevelopment/phonegap">Phonegap</a></li>
          </ul>
        </li>
          <li>
          <label class="toggle DD7">Application Development </label>
          <a href="#" class="Label">Works</a>
          <input type="checkbox" id="drop-5"/>
          <ul class="InnerDropdown onlysm DD77">
            <li><a href="<?php echo base_url(); ?>applicationDevelopment/custom_application_development">Custom Application Development</a></li>
            <li><a href="<?php echo base_url(); ?>applicationDevelopment/application_integration">Application Integration</a></li>
            <li><a href="<?php echo base_url(); ?>applicationDevelopment/legacy_application_transfromation">Legacy Application Transformation</a></li>
          </ul>
        </li>
      <li>
          <label class="toggle DD8">Emerging Technologies </label>
          <a href="#" class="Label">Works</a>
          <input type="checkbox" id="drop-6"/>
          <ul class="InnerDropdown onlysm DD88">
            <li><a href="<?php echo base_url(); ?>emergingTechnologies/internet_of_things">Internet Of Things</a></li>
            <li><a href="<?php echo base_url(); ?>emergingTechnologies/block_chain_technologies">Block-Chain Technologies</a></li>
            <li><a href="<?php echo base_url(); ?>emergingTechnologies/augmented_reality">Augmented Reality & Virtual Reality</a></li>
          </ul>
        </li>
          <li>
          <label  class="toggle DD9">Cognitive Technologies</label>
          <a href="#" class="Label">Works</a>
          <input type="checkbox" id="drop-7"/>
          <ul class="InnerDropdown onlysm DD99">
            <li><a href="<?php echo base_url(); ?>cognitiveTechnologies/machine_learning">Machine Learning</a></li>
            <li><a href="<?php echo base_url(); ?>cognitiveTechnologies/data_science"> Data Science</a></li>
            <li><a href="<?php echo base_url(); ?>cognitiveTechnologies/deep_learning">Deep Learning Technologies</a></li>
             <li><a href="<?php echo base_url(); ?>cognitiveTechnologies/artificial_intelligence"> Artificial Intelligence</a></li>
              <li><a href="<?php echo base_url(); ?>cognitiveTechnologies/predective_analytics"> Predictive Analytics</a></li>
          </ul>
        </li>
          <li>
          <label class="toggle DD10">Design & Creative Arts</label>
          <a href="#" class="Label">Works</a>
          <input type="checkbox" id="drop-8"/>
          <ul class="InnerDropdown onlysm DD1010">
            <li><a href="<?php echo base_url(); ?>design/logo_design">Logo Design</a></li>
            <li><a href="<?php echo base_url(); ?>design/ui_ux"> UI/UX Design</a></li>
            <li><a href="<?php echo base_url(); ?>design/responsive_web_design">Responsive Web Design</a></li>

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
          <label class="toggle DD12">Enterprise Applications </label>
          <a href="#" class="Label">Works</a>
          <input type="checkbox" id="drop-10"/>
          <ul class="InnerDropdown onlysm DD1212">
            <li><a href="<?php echo base_url(); ?>enterpriseApplications/oracle">Oracle E-Business Suite</a></li>
            <li><a href="<?php echo base_url(); ?>enterpriseApplications/sap">SAP S / 4HANA</a></li>
            <li><a href="<?php echo base_url(); ?>enterpriseApplications/odoo">Odoo</a></li>
            <li><a href="<?php echo base_url(); ?>enterpriseApplications/oracle_apex">Oracle Apex</a></li>
          </ul>
        </li>
      </ul>
        <ul class="OnlyMobile">
        <li>
          <!-- Second Tier Drop Down -->
          <label for="drop-11" class="toggle">PHP Development</label>
          <a href="#">PHP Development</a>
          <input type="checkbox" id="drop-11"/>
          <ul>
           <li><a href="<?php echo base_url(); ?>php/yii">Yii2</a></li>
            <li><a href="<?php echo base_url(); ?>php/laravel">Laravel</a></li>
            <li><a href="<?php echo base_url(); ?>php/Wordpress">Wordpress</a></li>
            <li><a href="<?php echo base_url(); ?>php/codeigniter">Codeigniter</a></li>
            <li><a href="<?php echo base_url(); ?>php/cakephp">Cakephp</a></li>
          </ul>
        </li>
            <li>

          <!-- Second Tier Drop Down -->
          <label for="drop-12" class="toggle">Mobile App Development</label>
          <a href="#">Emerging Technologies</a>
          <input type="checkbox" id="drop-12"/>
          <ul>
             <li><a href="<?php echo base_url(); ?>mobileAppDevelopment/ios">IOS Development</a></li>
            <li><a href="<?php echo base_url(); ?>mobileAppDevelopment/android">Android Development</a></li>
            <li><a href="<?php echo base_url(); ?>mobileAppDevelopment/react_native">React Native</a></li>
            <li><a href="<?php echo base_url(); ?>mobileAppDevelopment/phonegap">Phonegap</a></li>
          </ul>
        </li>
            <li>

          <!-- Second Tier Drop Down -->
          <label for="drop-13" class="toggle">Application Development</label>
          <a href="">Application Development</a>
          <input type="checkbox" id="drop-13"/>
          <ul>
            <li><a href="<?php echo base_url(); ?>applicationDevelopment/custom_application_development">Custom Application Development</a></li>
            <li><a href="<?php echo base_url(); ?>applicationDevelopment/application_integration">Application Integration</a></li>
            <li><a href="<?php echo base_url(); ?>applicationDevelopment/legacy_application_transfromation">Legacy Application Transformation</a></li>
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
          <label for="drop-16" class="toggle">Design & Creative Arts</label>
          <a href="#">Design & Creative Arts</a>
          <input type="checkbox" id="drop-16"/>
          <ul>
              <li><a href="<?php echo base_url(); ?>design/logo_design">Logo Design</a></li>
            <li><a href="<?php echo base_url(); ?>design/ui_ux">UI/UX Design</a></li>
            <li><a href="<?php echo base_url(); ?>design/responsive_web_design">Responsive Web Design</a></li>

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
      </ul>

                                <ul class="InnerMenu InnerMenu2 InnerMenu3 Onlylg">
                                    <div class="Row">
                                    <div class="col-md-3 p-0">
                                    <label>PHP Development</label>

           <li><a href="<?php echo base_url(); ?>php/yii">Yii2</a></li>
            <li><a href="<?php echo base_url(); ?>php/laravel">Laravel</a></li>
            <li><a href="<?php echo base_url(); ?>php/Wordpress">Wordpress</a></li>
            <li><a href="<?php echo base_url(); ?>php/codeigniter">Codeigniter</a></li>
            <li><a href="<?php echo base_url(); ?>php/cakephp">Cakephp</a></li>

                                        </div>

                                    <div class="col-md-3 p-0">
                                    <label>Mobile App Development</label>


                                   <li><a href="<?php echo base_url(); ?>mobileAppDevelopment/ios">IOS Development</a></li>
            <li><a href="<?php echo base_url(); ?>mobileAppDevelopment/android">Android Development</a></li>
            <li><a href="<?php echo base_url(); ?>mobileAppDevelopment/react_native">React Native</a></li>
            <li><a href="<?php echo base_url(); ?>mobileAppDevelopment/phonegap">Phonegap</a></li>


                                        </div>


                                    <div class="col-md-3 p-0">
                                    <label>Application Development</label>

                                    <li><a href="<?php echo base_url(); ?>applicationDevelopment/custom_application_development">Custom Application Development</a></li>
                                    <li><a href="<?php echo base_url(); ?>applicationDevelopment/application_integration">Application Integration</a></li>
                                    <li><a href="<?php echo base_url(); ?>applicationDevelopment/legacy_application_transfromation">Legacy Application Transformation</a></li>


                                        </div>




                                    <div class="col-md-3 p-0">
                                    <label>Emerging Technologies</label>


                                  <li><a href="<?php echo base_url(); ?>emergingTechnologies/internet_of_things">Internet Of Things</a></li>
                                  <li><a href="<?php echo base_url(); ?>emergingTechnologies/block_chain_technologies">Block-Chain Technologies</a></li>
                                  <li><a href="<?php echo base_url(); ?>emergingTechnologies/augmented_reality">Augmented Reality & Virtual Reality</a></li>


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
                                    <label>Design & Creative Arts</label>

                                    <li><a href="<?php echo base_url(); ?>design/logo_design">Logo Design</a></li>
                                    <li><a href="<?php echo base_url(); ?>design/ui_ux">UI/UX Design</a></li>
                                    <li><a href="<?php echo base_url(); ?>design/responsive_web_design">Responsive Web Design</a></li>
                                    <li style="visibility: hidden"><a href="#">Responsive Web Design</a></li>
                                    <li style="visibility: hidden"><a href="#">Responsive Web Design</a></li>


                                        </div>





                                        <div class="col-md-3 p-0">
                                    <label>MANAGED SERVICES</label>

                                    <li><a href="<?php echo base_url(); ?>managedServices/application_management">Application Management Services</a></li>
                                    <li><a href="<?php echo base_url(); ?>managedServices/infastructure_management">Infrastructure Management Services</a></li>
                                    <li><a href="<?php echo base_url(); ?>managedServices/database_management">Database Management Services</a></li>
                                    <li style="visibility: hidden"><a href="#">Responsive Web Design</a></li>
                                    <li style="visibility: hidden"><a href="#">Responsive Web Design</a></li>

                                        </div>




                                      <div class="col-md-3 p-0">
                                    <label>Enterprise Applications</label>

                                    <li><a href="<?php echo base_url(); ?>enterpriseApplications/oracle">Oracle E-Business Suite</a></li>
                                    <li><a href="<?php echo base_url(); ?>enterpriseApplications/sap">SAP S / 4HANA</a></li>
                                    <li><a href="<?php echo base_url(); ?>enterpriseApplications/odoo">Odoo</a></li>
                                    <li><a href="<?php echo base_url(); ?>enterpriseApplications/oracle_apex">Oracle Apex</a></li>
                                          <li style="visibility: hidden"><a href="#">Data Quality Management</a></li>

                                        </div>
                                        </div>
                                </ul>
                            </li>
                            <li>
                                <!-- First Tier Drop Down -->
                                <label  class="toggle DD2">Portfolio</label>
                                <a class="a arrow" href="<?php echo base_url(); ?>portfolio">Portfolio</a>
                                      <input type="checkbox" id="drop-18"/>
                                <ul class="InnerMenu InnerMenu2 DD22">
                                    <li><a href="<?php echo base_url(); ?>portfolio#php">PHP</a></li>
                                    <li><a href="<?php echo base_url(); ?>portfolio#ios">IOS</a></li>
                                    <li><a href="<?php echo base_url(); ?>portfolio#java">JAVA</a></li>
                                    <li><a href="<?php echo base_url(); ?>portfolio#asp">ASP.NET</a></li>
                                    <li><a href="<?php echo base_url(); ?>portfolio#android">ANDROID</a></li>
                                </ul>
                            </li>
                            <li>

                                <!-- First Tier Drop Down -->
                                <label class="toggle DD3">Engagement Models </label>
                                <a class="a arrow">Engagement Models</a>
                                <input type="checkbox" id="drop-19" />
                                <ul class="InnerMenu InnerMenu2 DD33">
                                    <li><a href="<?php echo base_url(); ?>hire">Hire Resources</a></li>
                                    <li><a href="<?php echo base_url(); ?>models/onshore">On-site Delivery Model</a></li>
                                    <li><a href="<?php echo base_url(); ?>models/offshore">Offshore Model</a></li>
                                    <li><a href="<?php echo base_url(); ?>models/hybrid">Hybrid Model</a></li>
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
