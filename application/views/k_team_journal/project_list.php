<div class="page-body">
               <div class="container-fluid">
                  <div class="page-title">
                     <div class="row">
                        <div class="col-6">
                           <h3>List of Projects</h3>
                        </div>
                        <div class="col-6">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item">
								  <a href="<?php base_url(); ?>dashboard">
									  <i data-feather="home"></i>
								  </a>
							  </li>
							  <li class="breadcrumb-item">Projects</li> 
                           </ol>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Container-fluid starts-->
               <div class="container-fluid">
                  <div class="row">
					  <div class="col-md-12 project-list">
                        <div class="card">
                           <div class="row">
                              <div class="col-sm-6">
                                 <div class="text-left">
                                    <div class="form-group mb-0 mr-0"></div>
                                    <a class="btn btn-primary" href="<?php base_url(); ?>create"> <i data-feather="plus-square"> </i>Create New Episode</a>
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="text-right">
                                    <div class="form-group mb-0 mr-0"></div>
                                    <a class="btn btn-primary" href="<?php base_url(); ?>topic_create"> <i data-feather="plus-square"> </i>Create New Topic</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
					  <div class="col-sm-12">
						<div class="card">
						  <div class="card-body">
							<div class="table-responsive">
							  <table class="display" id="basic-10">
								<thead>
								  <tr>
									<th>Name</th>
									<th>Month</th>
									<th>Topics</th>
									<th>Editor</th>
									<th>Tracking</th>
									<th>Track</th>  
								  </tr>
								</thead>
								<tbody>
								<?php  
         foreach ($h->result() as $row)  
         {  

			$id= $row->episode_number;
            ?>

   <form class="theme-form needs-validation" method="post"  enctype="multipart/form-data" >
										 
								  <tr>

									<td><?php echo $row->title;?></td>
									<td><?php echo $row->month;?></td>
									<td>
									<?php  
									$count='0';
         foreach ($m->result() as $row)  
         {  

           if($row->episode==$id){
			   $count=$count+1;


		   }

		 }
				echo $count;					
						?>			
									</td>
									<td>Sashreek</td>
									<td>
										<div class="project-status mt-0">
											<div class="media">
												<p>70%</p>
												<div class="media-body text-right"><span>Done</span></div>
											</div>
											<div class="progress" style="height: 5px">
												<div class="progress-bar-animated bg-primary progress-bar-striped" role="progressbar" style="width: 70%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>
									</td>
						
									<td>
										<a class="btn btn-danger" href="<?php base_url(); ?>tracker">Track</a>
									</td>
								  </tr>

		 </form>
								  <?php }   ?>  
								 
								</tfoot>
							  </table>
							</div>
						  </div>
						</div>
					  </div>
                  </div>
               </div>
               <!-- Container-fluid Ends-->
            </div>