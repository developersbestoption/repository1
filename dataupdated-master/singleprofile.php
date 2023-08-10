<!DOCTYPE html>
<html>
<head><link rel="shortcut icon" href="#" /><title>
	Student-Profile
</title><link href="bootstrap.min.css" rel="stylesheet" /><link href="css/loginstyle.css" rel="stylesheet" /><link href="css/srfstyle.css" rel="stylesheet" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="Scripts/jquery.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <link href="css/bootstrap-datepicker.css" rel="stylesheet" />
   
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" /></head>
<body>
   
    <form method="post" action="./profile.aspx" onsubmit="javascript:return WebForm_OnSubmit();" id="form1">
         <div class="container" style="margin-top:10px;"">
            <div class="row center-block">
                <div class=" col-lg-2 col-md-1 col-sm-1"></div>
                <div class="col-xs-12 col-lg-10 col-md-11 col-sm-11">
                    <img src="images/banner.png" class="img-responsive"/>
                </div>
            </div>
         </div>
       <br />
     <div class="container">
  <div class="row">
      <div class="col-md-6"><h4>Student Profile</h4></div>
      <div class="col-md-6"><span class="pull-right">
          <span class="glyphicon glyphicon-home">
             <a href="index.php" >HOME</a>
          </span></div>
  </div>
</div>
        <div class="container" style="margin-top:20px;  display: flex; border:3px solid #0e0d0d; border-radius: 10px;">
    <div class="container">
        <div class="row">
            <div class="col">
            <div class="col-md-6 panel panel-heading">Enter Roll Number</div>
            </div>
        </div>
        <div class="row form-group">
            <label class="col-md-2">Roll No</label>
            <div class="col-md-6">
               <div class="input-group">
			      <span class="input-group-addon"> </span>
                  <input name="Rollno_txtbx" type="text" maxlength="10" id="Rollno_txtbx" class="form-control input-md ac_mobile" />
               </div>
                <span id="RequiredFieldValidator1" ValidationExpression=".{5}.*" style="color:Red;visibility:hidden;">Please enter Roll Number</span>
            </div>
            <div class="col-md-2">
                  <div class="input-group">
	                 <input type="submit" name="srh_btn" value="Search"  id="srh_btn" class="btn btn-large btn-success" />
                  </div>
            </div>
         </div>
        <div class="row form-group">
            <div class="col-md-12">
                <span id="rollsrh" style="color:Red;"></span>
                <span id="Label1"></span>
            </div>
        </div>
        <div class="row"><div class="col-md-12">
         <span id="applbl"></span></div>
            </div>
        <div class="row">
            
            </div>
    </div>
<div class="container">
        <div class="row">
            
        </div>
    </div>

</div>
        <br />
        <div class="container">
            <div class="row">
                <div class="span6" style="float:unset; margin-left:20%;">
                     <label class="col-md-3 control-label" ><img id="Image2" src="" style="height:175px;width:150px;" /></label>  
                </div>
               
            </div>
           
  <h2>Student Details</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home"><span class="glyphicon glyphicon-home"></span> Basic Info</a></li>
    <li><a data-toggle="tab" href="#Education"><span class="glyphicon glyphicon-book"></span> Education Details</a></li>
    <li><a data-toggle="tab" href="#Parent"><i class="fa fa-users"></i> Parent Details</a></li>
    <li><a data-toggle="tab" href="#bank"><i class="fa fa-inr"></i> Bank Details</a></li>
    <li><a data-toggle="tab" href="#address"><i class="fa fa-address-card-o"></i> Address Info</a></li>
  </ul>


  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
     <br />
        <div class="row form-group">
             <div class="col-md-4 ">
                   <span id="Label3">Student Name: </span> 
                   <span id="name_lbl" style="font-weight:bold;"></span>
             </div>
             <div class="col-md-2 ">
                  <span id="Label2">Gender: </span>
                  <span id="gender_lbl" style="font-weight:bold;"></span>
             </div>
             <div class="col-md-3 ">
                 <span id="Label5">Date of Birth: </span>
                 <span id="dob_lbl" style="font-weight:bold;"></span>
            </div>
     </div>

        <div class="row form-group">
             <div class="col-md-4">
                  <span id="Label7">Blood Group:  </span>
                  <span id="bldgrp_lbl" style="font-weight:bold;"></span>
             </div>
             <div class="col-md-2 col-xs-12">
                   <span id="Label4">Birth Place: </span> 
                   <span id="bth_plc_lbl" style="font-weight:bold;"></span>
             </div>
            
             <div class="col-md-4">
                 <span id="Label9">Mother Tongue: </span>
                 <span id="mtrtng_lbl" style="font-weight:bold;"></span>
            </div>
     </div>

        <div class="row form-group">
             <div class="col-md-4">
                  <span id="Label6">Caste:  </span>
                  <span id="cste_lbl" style="font-weight:bold;"></span>
             </div>
             <div class="col-md-2 col-xs-12">
                   <span id="Label10">Religion: </span> 
                   <span id="rlgn_lbl" style="font-weight:bold;"></span>
             </div>
            
             <div class="col-md-4">
                 <span id="Label12">Nationality: </span>
                 <span id="Nty_lbl" style="font-weight:bold;"></span>
            </div>
     </div>

        <div class="row form-group">
             <div class="col-md-4">
                  <span id="Label8">Aadhar #  </span>
                  <span id="std_adr_lbl" style="font-weight:bold;"></span>
             </div>
             <div class="col-md-2 col-xs-12">
                   <span id="Label13">Contact # </span> 
                   <span id="stdcnt_lbl" style="font-weight:bold;"></span>
             </div>
            
             <div class="col-md-4">
                 <span id="Label15">Moles: </span>
                 <span id="moles_lbl" style="font-weight:bold;"></span>
            </div>
     </div>

        <div class="row form-group">
             <div class="col-md-4">
                  <span id="Label11">email id  </span>
                  <span id="emailid_lbl" style="font-weight:bold;"></span>
             </div>
             
     </div>

    </div>
    <div id="Education" class="tab-pane fade">
      <br />
        <div class="row form-group">
             <div class="col-md-3 ">
                   <span id="Label34">SSC Hallticket #: </span> 
                   <span id="sscno_lbl" style="font-weight:bold;"></span>
             </div>
             <div class="col-md-3 ">
                  <span id="Label40">SSC Board: </span>
                  <span id="sscbrd_lbl" style="font-weight:bold;"></span>
             </div>
             <div class="col-md-3 ">
                 <span id="Label42">SSC(%): </span>
                 <span id="sscper_lbl" style="font-weight:bold;"></span>
            </div>
            <div class="col-md-3 ">
                 <span id="Label44">Passing Year: </span>
                 <span id="sscyear_lbl" style="font-weight:bold;"></span>
            </div>
            </div>
       <div class="row form-group">
             <div class="col-md-3 ">
                 <span id="Label62">Pass Type: </span>
                 <span id="sscpass_lbl" style="font-weight:bold;"></span>
             </div>
             <div class="col-md-3 ">
                 <span id="Label64">School Name: </span>
                 <span id="schoolname_lbl" style="font-weight:bold;"></span>
             </div>
      </div>
       <div class="row form-group">
             <div class="col-md-3 ">
                   <span id="Label38">Inter Hallticket #: </span> 
                   <span id="ipehall_lbl" style="font-weight:bold;"></span>
             </div>
             <div class="col-md-3 ">
                  <span id="Label43">Inter Board: </span>
                  <span id="ipebrd_lbl" style="font-weight:bold;"></span>
             </div>
             <div class="col-md-3 ">
                 <span id="Label46">Inter (%): </span>
                 <span id="ipeper_lbl" style="font-weight:bold;"></span>
            </div>
            <div class="col-md-3 ">
                 <span id="Label48">Passing Year: </span>
                 <span id="ipepassyear_lbl" style="font-weight:bold;"></span>
            </div>
        </div>
        <div class="row form-group">
             <div class="col-md-3 ">
                 <span id="Label41">EAMCET Rank: </span>
                 <span id="eamcetrank_lbl" style="font-weight:bold;"></span>
             </div>
             
      </div>
        <div class="row form-group">
             <div class="col-md-3 ">
                   <span id="Label45">Diploma Hallticket #: </span> 
                   <span id="diphallno_lbl" style="font-weight:bold;"></span>
             </div>
             <div class="col-md-3 ">
                  <span id="Label49">Diploma Board: </span>
                  <span id="dipbrd_lbl" style="font-weight:bold;"></span>
             </div>
             <div class="col-md-3 ">
                 <span id="Label51">Diploma (%): </span>
                 <span id="dipper_lbl" style="font-weight:bold;"></span>
            </div>
            <div class="col-md-3 ">
                 <span id="Label53">Passing Year: </span>
                 <span id="dipyrpass_lbl" style="font-weight:bold;"></span>
            </div>
        </div>
        <div class="row form-group">
             <div class="col-md-3 ">
                 <span id="Label55">ECET Rank: </span>
                 <span id="ectrank_lbl" style="font-weight:bold;"></span>
         </div>
            </div>
         <div class="row form-group">
             <div class="col-md-3 ">
                   <span id="Label47">B.Tech Rollnumber: </span> 
                   <span id="btechrollnum_lbl" style="font-weight:bold;"></span>
             </div>
             <div class="col-md-3 ">
                  <span id="Label52">B.Tech University: </span>
                  <span id="btechun_lbl" style="font-weight:bold;"></span>
             </div>
             <div class="col-md-3 ">
                 <span id="Label56">B.Tech (%): </span>
                 <span id="btechpr_lbl" style="font-weight:bold;"></span>
            </div>
            <div class="col-md-3 ">
                 <span id="Label58">Passing Year: </span>
                 <span id="btechyr_lbl" style="font-weight:bold;"></span>
            </div>
        </div>
        <div class="row form-group">
             <div class="col-md-3 ">
                 <span id="Label60">Gate/Pgcet Rank: </span>
                 <span id="gaterank_lbl" style="font-weight:bold;"></span>
         </div>
             
      </div>
    </div>
    <div id="Parent" class="tab-pane fade">
      <br />
        <div class="row form-group">
             <div class="col-md-3 ">
                   <span id="Label14">Father Name: </span> 
                   <span id="ftr_name_lbl" style="font-weight:bold;"></span>
             </div>
             <div class="col-md-3 ">
                  <span id="Label17">Father Aadhar #: </span>
                  <span id="faadr_lbl" style="font-weight:bold;"></span>
             </div>
             <div class="col-md-3 ">
                 <span id="Label19">Contact #: </span>
                 <span id="fnph_lbl" style="font-weight:bold;"></span>
            </div>
            <div class="col-md-3 ">
                 <span id="Label16">Occupation: </span>
                 <span id="focc_lbl" style="font-weight:bold;"></span>
            </div>
     </div>
        <div class="row form-group">
             <div class="col-md-3 ">
                   <span id="Label18">Mother Name: </span> 
                   <span id="mtrnme_lbl" style="font-weight:bold;"></span>
             </div>
             <div class="col-md-3 ">
                  <span id="Label21">Mother Aadhar#: </span>
                  <span id="mtraadr_lbl" style="font-weight:bold;"></span>
             </div>
             <div class="col-md-3 ">
                 <span id="Label23">Contact #: </span>
                 <span id="mtrph_lbl" style="font-weight:bold;"></span>
            </div>
            <div class="col-md-3 ">
                 <span id="Label25">Occupation: </span>
                 <span id="mtrocc_lbl" style="font-weight:bold;"></span>
            </div>
     </div>
        <div class="row form-group">
             <div class="col-md-3 ">
                   <span id="Label27">Guardian  Name: </span> 
                   <span id="gnnme_lbl" style="font-weight:bold;"></span>
             </div>
             <div class="col-md-3 ">
                  <span id="Label29">Guardian Aadhar #: </span>
                  <span id="gnaadr_lbl" style="font-weight:bold;"></span>
             </div>
             <div class="col-md-3 ">
                 <span id="Label31">Contact #: </span>
                 <span id="gnph_lbl" style="font-weight:bold;"></span>
            </div>
            <div class="col-md-3 ">
                 <span id="Label33">Occupation: </span>
                 <span id="gocc_lbl" style="font-weight:bold;"></span>
            </div>
     </div>
    </div>
    <div id="bank" class="tab-pane fade">
        <br />
        <div class="row form-group">
             <div class="col-md-3 ">
                   <span id="Label20">Bank Name: </span> 
                   <span id="bnkname_lbl" style="font-weight:bold;"></span>
             </div>
             <div class="col-md-3 ">
                  <span id="Label24">Branch Name: </span>
                  <span id="bnkbr_lbl" style="font-weight:bold;"></span>
             </div>
       </div>
        <div class="row form-group">
             <div class="col-md-3 ">
                 <span id="Label28">Account #: </span>
                 <span id="acnumber_lbl" style="font-weight:bold;"></span>
            </div>
            <div class="col-md-3 ">
                 <span id="Label32">IFS Code: </span>
                 <span id="ifsc_lbl" style="font-weight:bold;"></span>
            </div>
      </div>
    </div>
    <div id="address" class="tab-pane fade">
          <br />
          <div class="row form-group">
             <div class="col-md-3 ">
                   <span id="Label22">House #</span> 
                   <span id="hso_lbl" style="font-weight:bold;"></span>
             </div>
             <div class="col-md-3 ">
                  <span id="Label30">Street: </span>
                  <span id="street_lbl" style="font-weight:bold;"></span>
             </div>
             <div class="col-md-3 ">
                 <span id="Label35">Village: </span>
                 <span id="village_lbl" style="font-weight:bold;"></span>
            </div>
            <div class="col-md-3 ">
                 <span id="Label37">Mandal: </span>
                 <span id="mandal_lbl" style="font-weight:bold;"></span>
            </div>
              </div>
               <div class="row form-group">
                   <div class="col-md-3 ">
                 <span id="Label26">District: </span>
                 <span id="district_lbl" style="font-weight:bold;"></span>
            </div>
            <div class="col-md-3 ">
                 <span id="Label36">State: </span>
                 <span id="state_lbl" style="font-weight:bold;"></span>
            </div>
                    <div class="col-md-3 ">
                 <span id="Label39">Pincode: </span>
                 <span id="pin_lbl" style="font-weight:bold;"></span>
            </div>
            </div>
       </div>
    </div>
  </div>
</form>
</body>
</html>
