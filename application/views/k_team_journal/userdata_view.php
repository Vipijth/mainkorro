<div class="page-body">
               <div class="container-fluid">
                  <div class="page-title">
                     <div class="row">
                        <div class="col-6">
                           <h3>Journal View - Journal One </h3>
                        </div>
                        <div class="col-6">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item">
                          <a href="<?php base_url(); ?>dashboard"><i data-feather="home"></i></a>
                       </li>
                              <li class="breadcrumb-item">
                          <a href="<?php base_url(); ?>kteam_userdata">Journal</a>
                       </li>
                              <li class="breadcrumb-item active"> Journal One View</li>
                           </ol>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Container-fluid starts-->
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-xl-12 xl-60">
                        <div class="row">
                           <div class="col-xl-4 xl-100">
                              
                               <?php  foreach ($topics as $value) { ?>
                              <div class="card">
                             <div class="job-search">
                                    <div class="card-body">

                                       <div class="media">
                                          <img class="img-40 img-fluid m-r-20" src="<?php base_url(); ?>assets/images/job-search/1.jpg" alt="">
                                          <div class="media-body">
                                          <form  method="post" id="<?php echo $value->topic_number ?>" novalidate="" enctype="multipart/form-data" action="<?php base_url(); ?>userdata_topic_view">
                                             <input type="hidden" name="id" value="<?php echo $value->topic_number ?>">
            
                                             <h6 class="f-w-600">
                                            
                                        
      <a type="button" href="javascript:{}" onclick="document.getElementById('<?php echo $value->topic_number ?>').submit();" style="left:-50px !important;position:relative"><?php echo $value->title;  ?></a>              
                     
                                    </form>
                                     <span class="badge badge-primary pull-right">New</span>
                                  </h6>
                                             <p>
                                     Rating:
                                     <span>
                                        <i class="fa fa-star font-warning"></i>
                                        <i class="fa fa-star font-warning"></i>
                                        <i class="fa fa-star font-warning"></i>
                                        <i class="fa fa-star font-warning"></i>
                                        <i class="fa fa-star font-warning"></i>
                                     </span>
                                  </p>
                                          </div>
                                       </div>
                                       <p>
                                 We are looking for an experienced and Cuba designer and/or frontend engineer with expertise in accessibility to join our team , 3+ years of experience working in as a Frontend Engineer or comparable role. You won’t be a team of one though — you’ll be collaborating closely with other...
                              </p>
                                    </div>
                                 </div>
                              </div>
                          
                          
                           
                            <?php } ?>
                           
                    
                            </div>
                           <div class="col-sm-12">
                              <div class="job-pagination">
                                 <nav aria-label="Page navigation example">
                                    <ul class="pagination pagination-primary">
                                       <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                                       <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                       <li class="page-item"><a class="page-link" href="#">2</a></li>
                                       <li class="page-item"><a class="page-link" href="#">3</a></li>
                                       <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                 </nav>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Container-fluid Ends-->
            </div>