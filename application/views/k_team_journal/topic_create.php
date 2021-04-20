<div class="page-body">
               <div class="container-fluid">
                  <div class="page-title">
                     <div class="row">
                        <div class="col-6">
                           <h3>Create New Topic</h3>
                        </div>
                        <div class="col-6">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item">
								  <a href="<?php base_url(); ?>dashboard">
									  <i data-feather="home"></i>
								  </a>
							  </li>
							  <li class="breadcrumb-item">
								  <a href="<?php base_url(); ?>topic_list">Topics</a>
							  </li>
							  <li class="breadcrumb-item">Create New Topic</li> 
                           </ol>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Container-fluid starts-->
               <div class="container-fluid">
                  <div class="row">
					  <div class="col-sm-12 col-xl-12">
						  <div class="row">
							  <div class="col-sm-12">
								  <div class="card">
									 <div class="card-header">
										<h5>Create Your Topics Here</h5>
										<span>Using this form can create multiple topics.</span>
									 </div>
									 <div class="card-body add-post">
								
									 <form class="theme-form needs-validation" method="post"  enctype="multipart/form-data" action="<?php base_url(); ?>topic_creates">
											
									   <div class="form-group row">
											  <label class="col-sm-3 col-form-label" for="episode_title">Select Your Episode</label>
											  <div class="col-sm-9">
											  
											
												 <select class="form-control" id="episode" name="episode"> 
													 <option value="0"> Please Choose Your Episode Number</option>
																									
													 <?php  

													 $epvalue='1';
       												  foreach ($h->result() as $row)  
        												 {  
        												    ?>
                                            <option value="<?php echo $row->episode_number ?>">Episode <?php echo $row->episode_number ?></option>
													
														<?php }   ?> 
												 </select>
											
											  </div>
										   </div>

																

										   <div class="form-group row">
											  <label class="col-sm-3 col-form-label" for="episode_title">Topic Title</label>
											  <div class="col-sm-9">
												 <input class="form-control" required id="topic_title" name="title" type="text" placeholder="Topic Title">
											  </div>
										   </div>	
										<script>
											function select(){
											
												var x=document.getElementById("exampleFormControlSelect9").value;
												<?php 
             												$epvalue ="<script>document.write(x)</script>";             
   											 ?>
											}
										</script>

										   <div class="form-group row">
											  <label class="col-sm-3 col-form-label" for="inputEmail3">Topic Number</label>
											  <div class="col-sm-9">

												<select name="topic_nmbr" id="topic_nmbr" class="form-control" >

                                                </select>
                                   

												 <input class="form-control" required id="topic_title" name="number" type="hidden" value="1" placeholder="Topic Title">
											
											  </div>
										   </div>
										   <div class="form-group row">
											  <label class="col-sm-3 col-form-label" for="">Topic Month</label>
											  <div class="col-sm-9">
												 <h5><?php echo date('F/d')?></h5>
												 <input class="form-control" id="topic_title" name="month" type="hidden" value="<?php echo date('F/d')?>" placeholder="Topic Title">
											
											  </div>
										   </div>	
                                    	
									 </div>
									 <div class="card-footer">
										<button class="btn btn-primary">Create New Topic</button>
										<button class="btn btn-secondary">Create &amp; Save New Topic</button> 
										<input type="reset" class="btn btn-danger"  value="Cancel">
										</form>
									 </div>
								  </div>
                              </div>
						  </div>
					  </div>
                  </div>
               </div>
               <!-- Container-fluid Ends-->
            </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<script type="text/javascript">
   $(document).ready(function(){
	 var count = 1;
	 var c = 0;
         $('#episode').change(function(){ 
         	//alert(episodeID);
             var episodeID = $(this).val();
            if(episodeID) {
                $.ajax({
                    url: 'k_team_journal/topic/topicNmbr/'+episodeID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        $("#topic_nmbr").empty();
                        $.each(data, function(key, value) {
      // console.log(parseInt(value.episode));
                 	c = parseInt(value)+1;
//console.log(parseInt(value.episode)+1);
                            $("#topic_nmbr").append('<option value="'+ value.id +'">'+ c +' </option>');

                        });
                    }
                });
            }else{
                $("#topic_nmbr").empty();
            }
         });
    });
</script>