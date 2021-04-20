<div class="page-body">
               <div class="container-fluid">
                  <div class="page-title">
                     <div class="row">
                        <div class="col-6">
                           <h3>Topic View - Topic Name</h3>
                        </div>
                        <div class="col-6">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item">
                          <a href="<?php base_url(); ?>dashboard">
                             <i data-feather="home"></i>
                          </a>
                       </li>
                              <li class="breadcrumb-item"> 
                          <a href="<?php base_url(); ?>userdata_view">Topic View</a>
                       </li>
                              <li class="breadcrumb-item active">Topic Name</li>
                           </ol>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Container-fluid starts-->
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-xl-3 xl-40">
                        <div class="default-according style-1 faq-accordion job-accordion" id="accordionoc">
                           <div class="row">
                              <div class="col-xl-12">
                                 <div class="card">
                                    <div class="card-header">
                                       <h5 class="mb-0">
                                          <button class="btn btn-link pl-0" data-toggle="collapse" data-target="#collapseicon1" aria-expanded="true" aria-controls="collapseicon1">List of Names</button>
                                       </h5>
                                    </div>
                                    <div class="collapse show" id="collapseicon1" aria-labelledby="collapseicon1" data-parent="#accordion">
                                       <div class="card-body animate-chk">
                                          <div class="location-checkbox">
                                            <!-- <label class="d-block" for="chk-ani6">
                                     <input class="checkbox_animated" id="chk-ani6" type="checkbox">
                                     Parent / Student Name
                                             </label>-->
                                
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-xl-12">
                                 <div class="card">
                                    <div class="card-header">
                                       <h5 class="mb-0">
                                          <button class="btn btn-link pl-0" data-toggle="collapse" data-target="#collapseicon2" aria-expanded="true" aria-controls="collapseicon2">Activity Type</button>
                                       </h5>
                                    </div>
                                    <div class="collapse show" id="collapseicon2" data-parent="#accordion" aria-labelledby="collapseicon2">
                                       <div class="card-body animate-chk">
                                      <!--    <label class="d-block" for="chk-ani11">
                                   <input class="checkbox_animated" id="chk-ani11" type="checkbox">
                                   MCQ
                                          </label>-->
                                   
                                       </div>
                                    </div>
                                 </div>
                              </div>
                       <div class="col-xl-12">
                                 <div class="card">
                                    <div class="card-header">
                                       <h5 class="mb-0">
                                          <button class="btn btn-link pl-0" data-toggle="collapse" data-target="#collapseicon3" aria-expanded="true" aria-controls="collapseicon2">Ratings</button>
                                       </h5>
                                    </div>
                                    <div class="collapse show" id="collapseicon2" data-parent="#accordion" aria-labelledby="collapseicon3">
                                       <div class="card-body animate-chk">
                                          <label class="d-block" for="chk-ani11">
                                 <!--  <input class="checkbox_animated" id="chk-ani16" type="checkbox">
                                   1 Star
                                          </label>-->
                               
                         
                                       </div>
                                    </div>
                                 </div>
                              </div> 
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-9 xl-60">
                        <div class="card">
                           <div class="job-search">
                              <div class="card-body">
                                 <?php 

//print_r($topic); exit;   
                                if(is_array($topic)){ 

                                  foreach ($topic as  $v) {  //print_r($v); exit;



                                    ?>
                                   
                                 <div class="media">
                                    <img class="img-40 img-fluid m-r-20" src="<?php base_url(); ?>adminassets/images/job-search/1.jpg" alt="">
                                    <div class="media-body">
                                       <h6 class="f-w-600">
                                 <a href="<?php base_url(); ?>userdata_topic_view"><?php echo $v->title ?></a>
                                       </h6>
                                       <p>
                                
                                 <!-- <span>
                                    <i class="fa fa-star font-warning"></i>
                                    <i class="fa fa-star font-warning"></i>
                                    <i class="fa fa-star font-warning"></i>
                                    <i class="fa fa-star font-warning"></i>
                                    <i class="fa fa-star font-warning"></i>
                                 </span> -->
                              </p>
                                    </div>
                                 </div>
                                 <!-- <div class="job-description">
                                    <h6>Job Description</h6>
                                    <p>Endless is looking for a UI/UX Designer to join our team. The world is seeing an explosion in the amount and variety of location-baWe are looking for a versatile UX/UI Designer to join our growing design team. Our designers contribute to clients’ projects at all stages of development. We might start from scratch, conducting user and stakeholder interviews, making personas and journey maps, and continue on to iterating on designs and prototypes through delivering final adminassets for launch. We might come into the middle of an in-flight program-size project and conduct analysis and usability correction or feature enhancement. We might provide research and vision for handoff to an internal development team.</p>
                                    < <p>Front-end web designers combine design, programming, writing and organizational skills in their work. They help shape the vision for a company's online content.</p>
                                 </div> -->
                                 <div class="job-description">
                                      <ul class="pagination pagination-primary">

                                  <?php  
                                  if($v->topic_number == 1){ ?>
                                 <li class="page-item active"><?php echo $v->video  ?></li>
                                    <?php } else if($v->topic_number == 2){ echo "welcome";  ?>
                                         <li class="page-item active"><?php echo "welcome";  ?></li>
                                         <li class="page-item active"><?php echo "welcome";  ?></li>
                                          <li class="page-item active"><?php echo "welcome";  ?></li>
                                         <li class="page-item active"><?php echo "welcome";  ?></li>
                                   <?php } else if($v->topic_number == 3){?>
                                     <li class="page-item active"><?php echo $v->topic_name  ?></li>
                                     <li class="page-item active"><?php echo $v->topic_info  ?></li>
                                   <?php } else if($v->topic_number == 4){ ?>

                                     <li class="page-item active"><?php echo $v->topics_name  ?></li>
                                     <li class="page-item active"><?php echo $v->topics_name_1  ?></li>
                                       <li class="page-item active"><?php echo $v->topics_name_2  ?></li>
                                       <li class="page-item active"><?php echo $v->topics_name_3  ?></li>
                                    <?php } else if($v->topic_number == 5){ ?>

                                       <li class="page-item active"><?php echo $v->topics_name_1  ?></li>
                                     <li class="page-item active"><?php echo $v->topics_name_2  ?></li>
                                       <li class="page-item active"><?php echo $v->topics_name_3  ?></li>
                                       <li class="page-item active"><?php echo $v->topics_name_4  ?></li>
                                       <li class="page-item active"><?php echo $v->topics_name_5  ?></li>

                                    <?php } else if($v->topic_number == 6){ ?>
                                      <li class="page-item active"><?php echo $v->topics_1  ?></li>
                                       <li class="page-item active">   <?php echo $v->topics_2  ?></li>
                                       <li class="page-item active"><?php echo $v->topics_3  ?></li>
                                       <li class="page-item active"><?php echo $v->topics_4  ?></li>
                                       <li class="page-item active"><?php echo $v->topics_5  ?></li>
                                    <?php }?>
                                       </ul>
                                
                                 </div>
                             
                              <?php } } ?>
                              </div>
                           </div>
                        </div>
                        <div class="header-faq">
                           <h6 class="mb-0 f-w-600">List of Topics</h6>
                        </div>
                        <div class="row">
                           <div class="col-xl-6 xl-100">
                              <div class="card">
                                 <div class="job-search">
                                    <div class="card-body">
                                       <div class="media">
                                          <img class="img-40 img-fluid m-r-20" src="<?php base_url(); ?>adminassets/images/job-search/2.jpg" alt="">
                                          <div class="media-body">
                                             <h6 class="f-w-600">
                                     <a href="<?php base_url(); ?>userdata_topic_view">Topic Name</a>
                                     <span class="badge badge-primary pull-right">New</span>
                                  </h6>
                                             <p>
                                     Rating:
                                     <span>
                                        <i class="fa fa-star font-warning"></i>
                                        <i class="fa fa-star font-warning"></i>
                                        <i class="fa fa-star font-warning"></i>
                                        <i class="fa fa-star font-warning"></i>
                                        <i class="fa fa-star font-warning-o"></i>
                                     </span>
                                  </p>
                                          </div>
                                       </div>
                                       <p>
                                 Ideally 2+ years experience with React. Bonus points if you have React Native experience. This is an incredibly exciting opportunity to gain commercial , Professional experience of React Native and other front end frameworks. Transform product wireframes into responsive, mobile user interface components and
                              </p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-6 xl-100">
                              <div class="card">
                                 <div class="job-search">
                                    <div class="card-body">
                                       <div class="media">
                                          <img class="img-40 img-fluid m-r-20" src="<?php base_url(); ?>adminassets/images/job-search/4.jpg" alt="">
                                          <div class="media-body">
                                             <h6 class="f-w-600">
                                     <a href="<?php base_url(); ?>userdata_topic_view">Topic Name</a>
                                     <span class="pull-right">3 days ago</span>
                                  </h6>
                                             <p>
                                     Rating:
                                     <span>
                                        <i class="fa fa-star font-warning"></i>
                                        <i class="fa fa-star font-warning"></i>
                                        <i class="fa fa-star font-warning"></i>
                                        <i class="fa fa-star font-warning"></i>
                                        <i class="fa fa-star font-warning-half-o"></i>
                                     </span>
                                  </p>
                                          </div>
                                       </div>
                                       <p>
                                 Insipidity the sufficient discretion imprudence resolution sir him decisively. Proceed how any engaged visitor. Explained propriety off out perpetual his you. Feel sold off felt nay rose met you. We so entreaties cultivated astonished is. Was sister for few longer mrs sudden talent become.
                              </p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Container-fluid Ends-->
            </div>