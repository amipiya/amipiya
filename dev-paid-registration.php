<!DOCTYPE html>
<html>
	<head>
	    <link rel="icon" href="https://scocre.com/assets/img/logo.png" type="image/gif" sizes="16x16">
 	    <link href="https://scocre.com/assets/css/style.css" rel="stylesheet" >	    
 
            <title> Dev Registrations</title>
		 
            <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
            <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

            <script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
            <link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />
            <script type="text/javascript" src="https://scocre.com/tableExport.js"></script>

	</head>
	






<style>
form {
    padding-top: 100px;
}

lable {
    margin-left: 37%;
}

table#countries {
    width: 95% !important;
    margin: 15px !important;
    font-size: 16px !important;
}
th{
    font-weight: 600 !important;
    font-size: 12px !important;
    max-width: 180px;
}

body {
    background:#fff !important;    
    
}
	</style>
	
	<body <?php if($_GET['sts']!='true'){ ?> onload='myFunction();' <?php } ?> >
	    
	<header id="header" class="fixed-top">
        <div class="container mhide">
            <div class="logo float-left">
               <a href="https://scocre.com/" class="scrollto"><img src="https://scocre.com/assets/img/logo.png" alt="" class="img-fluid"></a>
            </div>
     
    <script>
        function myFunction() {
            var person = prompt("Please enter Password ", "");
            if (person == 'machakdo') {
            
                window.location.replace("/dev-paid-registration.php?sts=true");
            
            }else{
                alert('Password incorrect');
                myFunction();
            }
        }
    </script>


     
     
	 <nav class="main-nav float-right d-none d-lg-block ">

        <ul>
          <li class="active"><a href="https://scocre.com/">Home</a></li>

 <?php if($_GET['sts']=='true'){ ?>
          <li><a href="https://scocre.com/track.php">Logout </a></li>
 
 <?php }else{ ?>
          <li><a href="https://scocre.com/track.php">Login</a></li>
 
 <?php } ?>
        </ul>
        
      </nav> 
    </div>

     
  </header>
  <?php if($_GET['sts']=='true'){ ?>
	 <div class='container'>
	 <form method='get'>
	     
	     <div class='row col-md-6 text-center' style='margin-left:28%'> 
	     
	     <lable>Date</lable>
	     <input  name='st' id='datepicker'  <?php if(isset($_GET['st'])){ ?>value="<?=$_GET['st'];?>"<?php } ?> />
	     <input type='hidden' value='true' name='sts' />
	      	     	      
	     <input type='submit' style='margin-left:38%;margin-top:7px;' class='btn btn-success text-center' value='search' name='submit'/>
	     </div>
	     </div></div>
	 </form>
	 
	 <br>
	 
	 <?php

include('config.php');

if(isset($_GET['st'])){
    $st=explode('-',trim(str_replace("/","-",$_GET['st'])));

    $start=$st[2].'-'.$st[0].'-'.$st[1]." 00:00:00";
     
    $end=$st[2].'-'.$st[0].'-'.$st[1]." 23:59:59" ;
    
}

 $list=$db->getRows("SELECT * FROM `users` WHERE (`created_at` BETWEEN '".$start."' AND '".$end."') AND `response_status` LIKE '%0%' and freeuser=0 order by id ASC"); 

// echo $db->lq()."<br><br>";

if(isset($list)){
//    echo "<pre>";print_r($list);exit;
    
}


?>
		<button class="exportToExcel hide"  onClick="doExport('#countries', {type: 'csv',htmlHyperlink: 'href',numbers: {html: {decimalMark: '.', thousandsSeparator: ','}, output: {decimalMark: ',',thousandsSeparator: ''}} });"  >Click to export </button>

<table class="table2excel"  id="countries">
    <thead>
			 
		<tr class="noExl">
            <th>sr no</th>
            <th>id</th>
            <th>username</th>   
            <th>email</th>   
            <th>password</th>   
            <th>avatar</th>   
            <th>created_at</th>   
            <th>updated_at</th>   
            <th>is_admin</th>   
            <th>is_confirmed</th>   
            <th>is_deleted</th>   
            <th>request_api</th>   
            <th>response_api</th>   
            <th>pan_card</th>   
            <th>mobile</th>   
            <th>address</th>   
            <th>otp</th>   
            <th>is_mobile_verified</th>   
            <th>json_responce</th>   
            <th>credit_score</th>   
            <th>udate</th>   
            <th>request_status</th>   
            <th>fname</th>   
            <th>lname</th>   
            <th>city</th>   
            <th>dob</th>   
            <th>apiid</th>   
            <th>poid</th>   
            <th>payresponse</th>   
            <th>status</th>   
            <th>paystatus</th>   
            <th>response_status</th>   
            <th>is_membership</th>   
            <th>accinfo</th>   
            <th>enqinfo</th>   
            <th>scoreinfo</th>   
            <th>sessionrequestdata</th>   
            <th>ipaddress</th>   
            <th>deviceid</th>   
            <th>requestdata</th>   
            <th>memory_get_usage</th>   
            <th>lat</th>   
            <th>lang</th>   
            <th>data</th>   
            <th>mem</th>   
            <th>pincode</th>   
            <th>referrer</th>   
            <th>avlheightscreen</th>   
            <th>avlwidthscreen</th>   
            <th>utm_source</th>   
            <th>utm_medium</th>   
            <th>utm_campaign</th>   
            <th>is_api_excute</th>   
            <th>soapapi</th>   
            <th>is_pixel_fired</th>   
            <th>clickid</th>   
            <th>gender</th>   
            <th>fathername</th> 
            <th>income</th>   
            <th>emptype</th>   
            <th>reg_pxl</th>   
            <th>is_contactable</th>  
            <th>markasintrested</th> 
            <th>verifiedby</th>  
            <th>cstatus</th>
            <th>faircomment</th>
         </tr>
  
  	</thead>

	<tbody> 

        <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style> 

 <?php

 $i=0;
 if(count($list)>0){


foreach($list as $datam){
     $i++;
$score="";

?>
		
  
		
    <tr class="noExl">
            <th><?=$i;?></th>
<th><?=$datam['id'];?></th>
            <th><?=$datam['username'];?></th>   
            <th><?=$datam['email'];?></th>   
            <th><?=$datam['password'];?></th>   
            <th><?=$datam['avatar'];?></th>   
            <th><?=$datam['created_at'];?></th>   
            <th><?=$datam['updated_at'];?></th>   
            <th><?=$datam['is_admin'];?></th>   
            <th><?=$datam['is_confirmed'];?></th>   
            <th><?=$datam['is_deleted'];?></th>   
            <th><?=$datam['request_api'];?></th>   
            <th><?=$datam['response_api'];?></th>   
            <th><?=$datam['pan_card'];?></th>   
            <th><?=$datam['mobile'];?></th>   
            <th><?=$datam['address'];?></th>   
            <th><?=$datam['otp'];?></th>   
            <th><?=$datam['is_mobile_verified'];?></th>   
            <th><?=$datam['json_responce'];?></th>   
            <th><?=$datam['credit_score'];?></th>   
            <th><?=$datam['udate'];?></th>   
            <th><?=$datam['request_status'];?></th>   
            <th><?=$datam['fname'];?></th>   
            <th><?=$datam['lname'];?></th>   
            <th><?=$datam['city'];?></th>   
            <th><?=$datam['dob'];?></th>   
            <th><?=$datam['apiid'];?></th>   
            <th><?=$datam['poid'];?></th>   
            <th><?=$datam['payresponse'];?></th>   
            <th><?=$datam['status'];?></th>   
            <th><?=$datam['paystatus'];?></th>   
            <th><?=$datam['response_status'];?></th>   
            <th><?=$datam['is_membership'];?></th>   
            <th><?=$datam['accinfo'];?></th>   
            <th><?=$datam['enqinfo'];?></th>   
            <th><?=$datam['scoreinfo'];?></th>   
            <th><?=$datam['sessionrequestdata'];?></th>   
            <th><?=$datam['ipaddress'];?></th>   
            <th><?=$datam['deviceid'];?></th>   
            <th><?=$datam['requestdata'];?></th>   
            <th><?=$datam['memory_get_usage'];?></th>   
            <th><?=$datam['lat'];?></th>   
            <th><?=$datam['lang'];?></th>   
            <th><?=$datam['data'];?></th>   
            <th><?=$datam['mem'];?></th>   
            <th><?=$datam['pincode'];?></th>   
            <th><?=$datam['referrer'];?></th>   
            <th><?=$datam['avlheightscreen'];?></th>   
            <th><?=$datam['avlwidthscreen'];?></th>   
            <th><?=$datam['utm_source'];?></th>   
            <th><?=$datam['utm_medium'];?></th>   
            <th><?=$datam['utm_campaign'];?></th>   
            <th><?=$datam['is_api_excute'];?></th>   
            <th><?=$datam['soapapi'];?></th>   
            <th><?=$datam['is_pixel_fired'];?></th>   
            <th><?=$datam['clickid'];?></th>   
            <th><?=$datam['gender'];?></th>   
            <th><?=$datam['fathername'];?></th> 
            <th><?=$datam['income'];?></th>   
            <th><?=$datam['emptype'];?></th>   
            <th><?=$datam['reg_pxl'];?></th>   
            <th><?=$datam['is_contactable'];?></th>  
            <th><?=$datam['markasintrested'];?></th> 
            <th><?=$datam['verifiedby'];?></th>  
            <th><?=$datam['cstatus'];?></th>
            <th><?=$datam['faircomment'];?></th>
    </tr>
  
<?php
     
 }
 }else{
?>

<?php } ?>
 			</tbody>
 			
 			
		</table>
         
         
         
         
		<button class="exportToExcel hide"  onClick="doExport('#countries', {type: 'csv',htmlHyperlink: 'href',numbers: {html: {decimalMark: '.', thousandsSeparator: ','}, output: {decimalMark: ',',thousandsSeparator: ''}} });"  >Click to export </button>
		<?php } ?>
	 
 <style>
     
    .exportToExcel {
        color: #fff;
        margin-left: 42%;
        font-size: 25px;
        background-color: #5cb85c;
        border-color: #4cae4c;
    }
     
 </style>

  <div class="copyrightdiv" style="    margin-top: 11px;background: #004a99;">
    <div class="copyright" style="    text-align: center;
    padding-top: 30px;"> © Copyright <strong>SCOCRE</strong>. All Rights Reserved </div>
    <div class="credits" style="text-align: center;"> 
      Designed by <a href="https://scocre.com/" style="color:white;">scocre</a>
    </div>
  </div>
  
  

 <script type="text/javaScript">


    function doExport(selector, params) {
      var options = {
        //ignoreRow: [1,11,12,-2],
        //ignoreColumn: [0,-1],
        //pdfmake: {enabled: true},
        //onBeforeSaveToFile: DoOnBeforeSaveToFile,
        //onAfterSaveToFile: DoOnAfterSaveToFile,

        tableName: 'Table name'
      };

      jQuery.extend(true, options, params);

      $(selector).tableExport(options);
    }

    function DoOnBeforeSaveToFile (data, fileName, type, charset, encoding) {
      alert ( "onBeforeSaveToFile: " + fileName );
    }

    function DoOnAfterSaveToFile (data, fileName, type, charset, encoding) {
      alert ( "onAfterSaveToFile: " + fileName );
    }

    /**
     * @return {string}
     */
    function DoOnCellHtmlData(cell, row, col, data) {
      var result = "";
      if (data !== "") {
        var html = $.parseHTML( data );

        $.each( html, function() {
          if ( typeof $(this).html() === 'undefined' )
            result += $(this).text();
          else if ( $(this).is("input") )
            result += $('#'+$(this).attr('id')).val();
          else if ( $(this).is("select") )
            result += $('#'+$(this).attr('id')+" option:selected").text();
          else if ( $(this).hasClass('no_export') !== true )
            result += $(this).html();
        });
      }
      return result;
    }

    /**
     * @return {string}
     */
    function DoOnCsvCellData(cell, row, col, data) {
      var result = data;
      if (result !== "" && row > 0 && col === 0) {
        result = "\x1F" + data;
      }
      return result;
    }

    /**
     * @return {number}
     */
    function DoOnXlsxCellData(cell, row, col, data) {
      var result = data;
      if (result !== "" && (row < 1 || col !== 0)) {
        if ( result === +result )
          result = +result;
      }
      return result;
    }

    /**
     * @return {string}
     */
    function DoOnMsoNumberFormat(cell, row, col) {
      var result = "";
      if (row > 0 && col === 0)
        result = "\\@";
      return result;
    }

  </script>



   <script>
           
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap'
        });
        $('#datepicker2').datepicker({
            uiLibrary: 'bootstrap'
        });
       </script>
  
	</body>
</html>
