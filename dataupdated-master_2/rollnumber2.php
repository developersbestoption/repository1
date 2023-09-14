
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head><link rel="shortcut icon" href="images/svrec_logo1.ico" /><title>
	SVREC_Student-Reg-Form
</title>
     <link href="bootstrap.min.css" rel="stylesheet" /><link href="css/loginstyle.css" rel="stylesheet" /><link href="css/srfstyle.css" rel="stylesheet" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="Scripts/jquery.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <link href="css/bootstrap-datepicker.css" rel="stylesheet" />
     <script>
    function goBack()
      {
      window.history.back()
      }
    </script>
    </head>
<body>
     <div class="container" style="margin-left:15%">
            <img src="images/banner.png" class="img-responsive"/></div> 
       <br />

     <form method="post" action="rollgen.php" onsubmit="javascript:return WebForm_OnSubmit();" id="rollnumberform" enctype="multipart/form-data">
<div class="aspNetHidden">
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKLTMwNzUzNDgxNw9kFgICAw8WAh4HZW5jdHlwZQUTbXVsdGlwYXJ0L2Zvcm0tZGF0YWRkYTO+V1MP6extA+oCTjHeS9E1auT/YzV74iftzHe+Sd0=" />
</div>

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['rollnumberform'];
if (!theForm) {
    theForm = document.rollnumberform;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>


<script src="/WebResource.axd?d=xti4xBprDiK6owuDT8pXfGthsym0IHM54-z4UJ5B3OaCnF5tK7nWg8vIsnLrlcvXkE58D4-y2luoCb9JaKbU9IGhHQqr45vbWz5FpxJNRJg1&amp;t=638240097260000000" type="text/javascript"></script>


<script src="/WebResource.axd?d=eqpGcJs6aBuNFnU_SbKxE3VpPNxY_8xfAP1rOdj6uXzdl2XDkktRJ-utdd7Yv0JGLtF-T3jTAzbKAHSxh1vOCcRP2LIVVOY_gAy3UvZaXCw1&amp;t=638240097260000000" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
function WebForm_OnSubmit() {
if (typeof(ValidatorOnSubmit) == "function" && ValidatorOnSubmit() == false) return false;
return true;
}
//]]>
</script>

<div class="aspNetHidden">

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="9153BDA4" />
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEdAA5XfEp/5j1TTyxBXSrXsl60LRvVdt78X4yVusgh+5qcLPmiHTlUbUiecrEBsf2Zk3ib28vunaYJXyoBPAFePieu1boIbs7YloO5nxiuCwf0mi3yhNlPJYdAhdxBosJ+KXY8QahbA+POJxGv8iT4q/mgiZoqtfmTFnoRkDd/MzE/BndZRlAPDeZikuW4pA9kSQQA+Axi3RWegvKL9vHySVP0A5YlGpxCOytrTUJ6iTLv6s34O/GfAV4V4n0wgFZHr3c/WMskeKo19Gyidl+m11dTEQU3z3exbELsmaSYFwAgv/KrDsEDSfNLTkloC7L0Q4pbknvaPGWs9tWH24Lt/H/8" />
</div>
    <div class="container">
  <div class="row">
      <div class="col-md-6"><h4>Student Rollnumber Generation form</h4></div>
      <div class="col-md-6"><span class="pull-right">
          <span class="glyphicon glyphicon-log-in">
             <a href="../SVREC_SIS/Admin/admin.aspx" onclick="goBack()">Back</a>
             
          </span></div>
  </div>
</div>
    
   
       
          <!--Start communication Details -->
        <div class="container" style="margin-top:20px; border:1px solid #cecece; border-radius: 25px;">
                     
          <div class="row">
            <div class="col-md-2 panel panel-heading">Student Roll Number</div>
            <div class="col-md-4 panel panel-heading" style="display:none; color:red" id="address_error" ></div>
          </div>

            <div class="row form-group">
            <label class="col-md-2 control-label" for="H.no">New Roll Number</label>
            <div class="col-md-2">
		<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-th"></i>
			</span>
                <input name="roll_txtbx" type="text" maxlength="10" id="roll_txtbx" name="hno" class="form-control input-md ac_village" />
            </div>
                <span id="RequiredFieldValidator1" style="color:Red;visibility:hidden;">Please enter Roll Number</span>
            </div>
                
              <div class="col-md-6">
		         <span id="Label2" style="color:Red;font-weight:bold;"></span>
                 </div>
          </div>
            <div class="row form-group">
            <label class="col-md-2 control-label" for="H.no">First Name</label>
            <div class="col-md-2">
		<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-user"></i>
			</span>
                <input name="firstname_txtbx" type="text" id="firstname_txtbx" class="form-control input-md ac_village" style="text-transform:uppercase;" />
             </div>
                <span id="RequiredFieldValidator2" style="color:Red;visibility:hidden;">Please enter First Name</span>
            </div>

            <label class="col-md-2 control-label" for="street">Middle Name</label>
            <div class="col-md-2">
		<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-user"></i>
			</span>
                <input name="middlename_txtbx" type="text" id="middlename_txtbx" class="form-control input-md ac_street" style="text-transform:uppercase;" />
             
            </div></div>

            <label class="col-md-2 control-label" for="Village">Last Name(Surname)</label>
            <div class="col-md-2">
		<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-user"></i>
			</span>
             <input name="lastname_txtbx" type="text" id="lastname_txtbx" class="form-control input-md ac_village" style="text-transform:uppercase;" />
            </div>
             <span id="RequiredFieldValidator3" style="color:Red;visibility:hidden;">Please enter Surname</span>
            
		</div>
          </div>

          <div class="row form-group">
           <label class="col-md-2 control-label" for="District">Category</label>  
             <div class="col-md-2">
                <select name="category_drpdwn" id="category_drpdwn" class="form-control input-md ac_district">
	<option value="--select-- ">--select-- </option>
	<option value="Counselling">Counselling</option>
	<option value="Spot">Spot</option>
	<option value="Management">Management</option>

</select>
             </div>
          </div>

          <div class="row form-group">
            <label class="col-md-2 control-label" for="pin_code">Admission No</label>  
            <div class="col-md-2">
                <input name="Admissiono_txtbx" type="text" id="Admissiono_txtbx" class="form-control input-md" placeholder="" />
            </div>

              <label class="col-md-2 control-label" for="pin_code">Admission Date</label>  
            <div class="col-md-2">
			<div class="input-group">
                <span class="input-group-addon">
                      <span class="glyphicon-calendar glyphicon"></span>
                  </span>
		    <input name="doa" type="date" id="doa" class="form-control input-md" />
                 
               </div>
		     </div>
          </div>

                      
             <div class="form-group row">
            <div class="col-md-8 text-center">
                   <input type="submit" name="Button1" value="Save" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;Button1&quot;, &quot;&quot;, true, &quot;requiredfields&quot;, &quot;&quot;, false, false))" id="Button1" class="btn btn-large btn-success" />
                   <input type="submit" name="Button2" value="Clear" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;Button2&quot;, &quot;&quot;, true, &quot;requiredfields&quot;, &quot;&quot;, false, false))" id="Button2" class="btn btn-large btn-danger" />
              
            </div>
          </div>
      </div>
        
        <div class="container" style="margin-top:20px; border:1px solid #cecece; border-radius: 25px;">
            <br />
            <div class="form-group row"><div class="col-md-12"><B>For Bulk upload please select sample file from here</B> 
                <a href="excel/Newrollnumber.xlsx">Newrollnumber.xlsx</a></div></div><br />
            <div class="form-group row">
               
                <label class="col-md-2 control-label" for="pin_code">Bulk Upload</label>  
            <div class="col-md-4">
             <input type="file" name="FileUpload1" id="FileUpload1" class="form-control input-md" placeholder="" />
             <span id="ctl07" style="color:Red;display:none;">Please select Excel File</span>

             <span id="RegularExpressionValidator1" style="color:Red;display:none;">Please select a valid excel file.</span>
            </div>
                <div class="col-md-6">
                  <input type="submit" name="ctl08" value="Upload" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl08&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" controltovalidate="FileUpload1" class="btn btn-large btn-success" />    
            </div>
          </div>

            <span id="Label1"></span>

        </div> 
         
<script type="text/javascript">
//<![CDATA[
var Page_Validators =  new Array(document.getElementById("RequiredFieldValidator1"), document.getElementById("RequiredFieldValidator2"), document.getElementById("RequiredFieldValidator3"), document.getElementById("ctl07"), document.getElementById("RegularExpressionValidator1"));
//]]>
</script>

<script type="text/javascript">
//<![CDATA[
var RequiredFieldValidator1 = document.all ? document.all["RequiredFieldValidator1"] : document.getElementById("RequiredFieldValidator1");
RequiredFieldValidator1.controltovalidate = "roll_txtbx";
RequiredFieldValidator1.errormessage = "Please enter Roll Number";
RequiredFieldValidator1.validationGroup = "requiredfields";
RequiredFieldValidator1.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
RequiredFieldValidator1.initialvalue = "";
var RequiredFieldValidator2 = document.all ? document.all["RequiredFieldValidator2"] : document.getElementById("RequiredFieldValidator2");
RequiredFieldValidator2.controltovalidate = "firstname_txtbx";
RequiredFieldValidator2.errormessage = "Please enter First Name";
RequiredFieldValidator2.validationGroup = "requiredfields";
RequiredFieldValidator2.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
RequiredFieldValidator2.initialvalue = "";
var RequiredFieldValidator3 = document.all ? document.all["RequiredFieldValidator3"] : document.getElementById("RequiredFieldValidator3");
RequiredFieldValidator3.controltovalidate = "lastname_txtbx";
RequiredFieldValidator3.errormessage = "Please enter Surname";
RequiredFieldValidator3.validationGroup = "requiredfields";
RequiredFieldValidator3.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
RequiredFieldValidator3.initialvalue = "";
var ctl07 = document.all ? document.all["ctl07"] : document.getElementById("ctl07");
ctl07.controltovalidate = "FileUpload1";
ctl07.errormessage = "Please select Excel File";
ctl07.display = "Dynamic";
ctl07.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
ctl07.initialvalue = "";
var RegularExpressionValidator1 = document.all ? document.all["RegularExpressionValidator1"] : document.getElementById("RegularExpressionValidator1");
RegularExpressionValidator1.controltovalidate = "FileUpload1";
RegularExpressionValidator1.errormessage = "Please select a valid excel file.";
RegularExpressionValidator1.display = "Dynamic";
RegularExpressionValidator1.evaluationfunction = "RegularExpressionValidatorEvaluateIsValid";
RegularExpressionValidator1.validationexpression = "([a-zA-Z0-9\\*$\\()\\s_\\\\.\\-:])+(.xls|.xlsx)$";
//]]>
</script>


<script type="text/javascript">
//<![CDATA[

var Page_ValidationActive = false;
if (typeof(ValidatorOnLoad) == "function") {
    ValidatorOnLoad();
}

function ValidatorOnSubmit() {
    if (Page_ValidationActive) {
        return ValidatorCommonOnSubmit();
    }
    else {
        return true;
    }
}
        //]]>
</script>
</form>
   <!--end communication Details -->

<div class="b">
 <div class="navbar navbar-default navbar-fixed-bottom">
    <div class="container">
     <p class="navbar-text pull-left">© 2018 - Site Design By<a href="http://www.svrec.ac.in" target="_blank">SVREC-DEVELOPERS</a>
      </p>
     </div>
  </div>
</div>
   
</body>
  
</html>
