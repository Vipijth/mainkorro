<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	  
	<!-- Custom CSS -->  


    <title>Khorroboree Video Journal</title>
  </head>


  <script>
    function ends(){
      $('#pause').hide();
$('#plays').show();

document.getElementById("qnum").innerHTML="1/2";
document.getElementById("videocol").style.display="none";
document.getElementById("questab").style.display="block";

}

function next1(){
document.getElementById("qnum").innerHTML="2/2";
document.getElementById("questab").style.display="none";
document.getElementById("questab2").style.display="block";
 } 
function back2(){
document.getElementById("qnum").innerHTML="1/2";
document.getElementById("questab").style.display="block";
document.getElementById("questab2").style.display="none";
 } 
function en1(){

document.getElementById("n1").disabled = false;
  }

  function en2(){

document.getElementById("n2").disabled = false;
document.getElementById("dirbutnext").style.display="block";
  }


    function submit(){
document.getElementById("questab2").style.display="none";
document.getElementById("sub").style.display="block";
  setTimeout(endsx, 4000)
  }

  function endsx(){

      window.location.href = '<?php echo base_url() ?>video/video_2';
  }
  </script>



<body style="  background-image:radial-gradient(#6961D4, #45408D, #201E43);">
  <div class="container-fluid">
     
     
               <div class="row justify-content-md-center">
                   <div class="col-md-2 col-xl-2 col-lg-2" style="height:70px;" >
                    <center>
                    <img src="<?php echo base_url() ?>frontassets/videojunral/images/logo/klogo.png" id="logomain">
                  </center> 
                   </div>
               </div>
               

<div class="col-sm-12 brand1" id="head" style="margin-top:60px;">

                       <center>
                            Conscious Parenting<br>
                         <small> With</small>
                               <br style="line-height: .8">
                            <Span style="font-family: mistral;font-size:32px" id="color">Lina Ashar</Span>
                      </center>
                  </div>


<div class="row justify-content-md-end desk" style="height:auto;padding-left: 40px;padding-top: 2%;">
              
                  <div class="col-md-2 col-xl-2 col-lg-2 brand" id="head" >
                       <center>
                            Conscious Parenting<br>
                         <small> With</small>
                               <br style="line-height: .8">
                            <Span style="font-family: mistral;font-size:32px" id="color">Lina Ashar</Span>
                      </center>
                  </div>

             
                              <div class="col-md-9  col-xl-9 col-lg-9 scrn_chnage" style=" height:80px;">
                                         <table id="table">
   <tr>
    <td style="padding:3% 0%;width:5%"> 
<button class="butactive tablet1" id="one">
1
</button>
    </td>

    <td style="padding:3% 0%;width:5%"  data-toggle="tooltip" title="Locked"> 
      <button class="but tablet2" id="two">
      2
      </button>
          </td>
      
          <td style="padding:3% 0%;width:5%" data-toggle="tooltip" title="Locked">
            <button class="but tablet3" id="three">
            3
            </button>
                </td>
          <td style="padding:3% 0%;width:5%" data-toggle="tooltip" title="Locked">
            <button class="but tablet4" id="four">
           4
            </button>
                </td>

                <td style="padding:3% 0%;width:5%" data-toggle="tooltip" title="Locked">
                  <button class="but tablet5" id="five">
                  5
                  </button>
                      </td>   <td style="padding:3% 0%;width:5%" data-toggle="tooltip" title="Locked">
                        <button class="but tablet6" id="six">
                        6
                        </button>
                            </td>   <td style="padding:3% 0%;width:5%" data-toggle="tooltip" title="Locked">
                              <button class="but tablet7" id="seven">
                              7
                              </button>
                                  </td>   <td style="padding:3% 0%;width:5%" data-toggle="tooltip" title="Locked">
                                    <button class="but tablet8" id="eight">
                                   8
                                    </button>
                                        </td>   <td style="padding:3% 0%;width:5%" data-toggle="tooltip" title="Locked">
                                          <button class="but tablet9" id="nine">
                                          9
                                          </button>
                                              </td>   <td style="padding:3% 0%;width:5%" data-toggle="tooltip" title="Locked">
                                                <button class="but tablet10" id="ten">
                                                10
                                                </button>
                                                    </td>
                                                    <td style="padding:3% 0%;width:5%" data-toggle="tooltip" title="Locked"> 
                                                      <button class="but tablet11" id="eleven">
                                                     11
                                                      </button>
                                                          </td>   <td style="padding:3% 0%;width:5%" data-toggle="tooltip" title="Locked">
                                                            <button class="but tablet12" id="twelve">
                                                            12
                                                            </button>
                                                                </td>   <td style="padding:3% 0%;width:5%" data-toggle="tooltip" title="Locked">
                                                                  <button class="but tablet13" id="thirteen">
                                                                 13
                                                                  </button>
                                                                      </td>
                                                                      <td style="padding:3% 0%;width:5%" data-toggle="tooltip" title="Locked">
                                                                        <button class="but tablet14" id="fourteen">
                                                                        14
                                                                        </button>
                                                                            </td>
                                                                                
                                                
   </tr>
    </table>
                           
      </div> 
       </div>

      <div class=" col-1 col-md-1  col-xl-1 col-lg-1" id="block"></div>
<!-- <form action="<?php echo base_url() ?>video/question_1" method="post"> -->

                  <div class="row  justify-content-md-center" style=" height:auto;">
                         <div class="col-md-10  col-xl-5 col-lg-6" style=" height:auto;margin:5px; ">
                           
                             <figure>
                                 <video id="myVideo"  onended="setTimeout(ends, 500)" >
                                    <source src="<?php echo base_url() ?>frontassets/videojunral/videos/Segment 1.mp4" type="video/mp4"  />
                                  </video>   
                             <figcaption>

                                     <!-- <progress id="progress" max="100" value="" style="width:80%">Progress</progress>-->
                               <table style="width:100%;">
                                 <tr>
                                    <td style="width:80%" >
                                       <progress id="progress" max="100" value="" style="width:90%;">Progress</progress>
                                    </td>
                                    <td style="width:10%" >
                                              <button  id="plays">
                                                    &nbsp;<i class="fa fa-play"></i>
                                               </button>

                                               <button  id="pause" style="display:none" >
                                                     <i class="fa fa-pause"></i>
                                               </button>
  
                                    </td>
                                     <td style="width:10%" >
                                         <button onClick="openFullscreen()">
                                           <i class="fa fa-expand"></i>
                                        </button>
                                   </td>
                                   </tr>
                                 </table>

 
    
                            </figcaption>
                            </figure>
                                
                         </div>
                       <div class="col-md-10   col-xl-4 col-lg-4" id="videocol"  >
                           <center>
                                 <button class="segmentbutton">Segment 1</button>
                        
                                      <br><br> <br>
                                  <span id="qfont" >
                                   How to deal with our Brain’s pre-programmed 
                                  “Negativity Bias”
                                 </span>
                          </center>
                        </div>

       <div class="col-md-10  col-xl-4 col-lg-4" id="sub" style="display: none">
             <center>
              <button class="segmentbutton">Segment 1</button>
              <br>
               <img src="<?php echo base_url() ?>frontassets/videojunral/images/success.png" style="height: 250px">
          </center>
      </div>



      <div class="col-md-10  col-xl-4 col-lg-4 videocol2" id="questab" style="display: none">
        <center>
          <button class="segmentbutton">Segment 1</button>
           <br> <br>

            <div  id="qstn1" class="col-md-12" >   
                Our brain attracts (or acts as velcro for) what kind of news?
            </div>

          <table>
           <input type="hidden"    name="question_name1" id="question_name1" value="Our brain attracts (or acts as velcro for) what kind of news?" >
            <input type="hidden"     name="segment_id"  value="1">
            <tr>
               <td style="padding:4px 16px">
                 <input type="radio" onchange="en1()"  required name="first" id="first" value = "Good News">
              </td>
              <td style="width:94%;height:30px"> Good News</td>
            </tr>

            <tr>
              <td style="padding:4px 16px">
                 <input type="radio" required  onchange="en1()"  name="first" id="first"  value = "Bad News">
              </td>
              <td style="width:96%;height:30px"  >Bad News</td>
           </tr>


           <tr>
             <td style="padding:4px 16px">
                 <input type="radio" onchange="en1()"   required name="first" id="first"  value = "Neutral News">
             </td>
             <td style="width:96%;height:30px" >Neutral News</td>
            </tr>
            <tr>
              <td style="padding:4px 16px">
                  <input type="radio" onchange="en1()"   required name="first" id="first"  value = "Both Bad and Good news">
              </td>
              <td style="width:96%;height:30px"  >Both Bad and Good news</td>
              </tr>
          </table>
        </center>
         <div style="padding:18px 10px;background:#5B00E2;width:100%;left:0;height:60px;position: absolute;bottom: 0px">
         <div class="row justify-content-md-around">
          <div class="col-8 col-sm-8 col-md-10 col-lg-8 col-xl-8"><button class="disablebutton" disabled >Back</button></div>
         <div class="col-4 col-sm-4 col-md-2 col-lg-4 col-xl-4"><button class="enablebutton" disabled id="n1" onclick="next1()" >Next</button></div>
      </div>
    </div>
   </div>

  <div class="col-md-10  col-xl-4 col-lg-4 videocol2" id="questab2" style="display: none">
    <center>
           <button class="segmentbutton">Segment 1</button>
         <br> <br>
         <div  id="qstn1" class="col-md-12 pb-2 qstn" >   
                 Your child has secured an A+ in Painting while an F in Math. What is our brain most likely to tell us to do?
         </div>
        <div>
        <table>
         <input type="hidden"    name="question_name_2" id="question_name_2" value="Your child has secured an A+ in Painting while an F in Math. What is our brain most likely to tell us to do?" >
            <input type="hidden"     name="segment_id"  value="1">
            <tr>
               <td style="padding:4px 16px">
               <input type="radio"  onchange="en2()"  required  name="radio" id="radio4"  value = "Tell us to praise the kid for getting A+ in Painting " >
                 </td>
                 <td class="ans" style="width:94%;height:30px" id="ans1">
                                    Tell us to praise the kid for getting A+ in Painting

                                </td>
            </tr>
            <tr>
                <td style="padding:4px 16px">
                   <input type="radio"  onchange="en2()" required name="radio" id="radio4"  value = "Tell us to praise the kid for getting A+ in Painting and scold him/her for securing an F in Math"> 
                </td>
                <td class="ans" style="width:96%;height:30px" id="ans2">
                                    Tell us to praise the kid for getting A+ in Painting and scold him/her for securing an F in Math

                                </td>
              </tr>
            <tr>
                <td style="padding:4px 16px">
                    <input type="radio"   onchange="en2()" required name="radio" id="radio4"  value = "Tell us to encourage him/her to focus on painting while trying to improve in Math">
                </td>
                     <td class="ans" style="width:96%;height:30px" id="ans3">
                            Tell us to encourage him/her to focus on painting while trying to improve in Math
                      </td>
            </tr>
            <tr>
                <td style="padding:4px 16px">
                    <input type="radio"  onchange="en2()"  required name="radio" id="radio4"  value = "Tell us to scold him/her for securing an F in Math with no appreciation for the A in Painting">
                </td>
                <td class="ans" style="width:96%;height:30px" id="ans4">
                         Tell us to scold him/her for securing an F in Math with no appreciation for the A in Painting
                  </td>
            </tr>
        </table>
      </div>

    </center>
            <div style="padding:18px 10px;background:#5B00E2;width:100%;left:0;height:60px;position: absolute;bottom: 0px">

               <div class="row justify-content-md-around">
                       <div class="col-8 col-sm-8 col-md-10 col-lg-8 col-xl-8"><button class="back" onclick="back2()">Back</button>
                       </div>
               <div class="col-4 col-sm-4 col-md-2 col-lg-4 col-xl-4"><button class="enablebutton" disabled id="n2" onclick="submit()">Submit</button>
               </div>

</div>

</div>
 



</div>   
</div>




    <div id="block2"></div>
          <div class="row justify-content-md-center" style="height:60px;" id="bottomrow">
                  <a href="#">
               <div id="dirbutlast" style="display: none;">
                    Last Segment</div>
                   <div id="dirbutlast_mbl" style="display: none;">
                    
                   </div>


                  </a>
                    <div id="qstnbottom">
                    <table id="qstnbottomin">
                      <tr>
                        <td style="width:50%;border-right:2px solid #707070">
                          <center>
                            Questions
                            <br>
                            <span style="color:#fff;font-family: segoe ui regular;" id="qnum" >
                            0/2
                          </span>
                          </center>
                        </td>
                           <td style="width:50%;">
                          <center>
                            Video Duration
                            <br>
                         <span style="color:#fff;font-family: segoe ui regular;" id="duration">
                           <big><big> 03:24</big></big>
                          </span>
                          </center>
                        </td>
                      </tr>
                    </table>
                    </div>

                  
  
    </div>
    
      </form>    
    
  </div>





      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url() ?>frontassets/videojunral/css/style2.css">
      <script src="<?php echo base_url() ?>frontassets/videojunral/js/myscript.js"></script>
        
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" />

<script>
function submit(){
      //alert(first);
      var first = $('#first').val();
      var radio4 = $('#radio4').val();
      var question_name1 = $('#question_name1').val();
      var question_name_2 = $('#question_name_2').val();
      $.ajax
        ({
          type: "POST",
          url: "<?php echo base_url() ?>video/question_1",
          data: { "first": first, "radio4": radio4, "question_name1": question_name1,"question_name_2": question_name_2 },
          success: function (data) {
           
            // $('#segment_2')[0].reset();
            setTimeout(function(){
              window.location.href = '<?php echo base_url() ?>video/video_2';
            
            
            } , 2000);
          }
        });
    };
</script>