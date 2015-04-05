<?php  
// include db config 
include_once("config.php");
ini_set("error_reporting", E_ALL & ~E_DEPRECATED);

// set up DB 
mysql_connect('208.91.198.197:3306','mpanchayat','Mudichur@123');
mysql_select_db(PHPGRID_DBNAME); 

// include and create object 
//include(PHPGRID_LIBPATH."inc".DIRECTORY_SEPARATOR."jqgrid_dist.php");   
include("C:/wamp/www/ASISI-wfh/finalmudichurpanchayat/lib/inc/jqgrid_dist.php");
// you can customize your own columns ... 
$col = array(); 
$col["title"] = "ComplaintRefNo"; 
$col["name"] = "ComplaintRefId"; 
$col["width"] = "5"; 
$col["sortable"] = true;
$col["editable"] = false; // this column is not editable 
$col["align"] = "center";
$cols[] = $col; 

$col = array(); 
$col["title"] = "ComplaintRegisteredBy"; 
$col["name"] = "LoggedinUser"; 
$col["width"] = "5"; 
$col["editable"] = false; // this column is not editable 
$col["align"] = "center";
$cols[] = $col;

$col = array(); 
$col["title"] = "ComplaintType"; 
$col["name"] = "ComplaintType"; 
$col["width"] = "5"; 
$col["editable"] = true; // this column is not editable 
$col["align"] = "center";
$cols[] = $col;

$col = array(); 
$col["title"] = "WardNo"; 
$col["name"] = "WardNumber"; 
$col["width"] = "5"; 
$col["editable"] = true; // this column is not editable 
$col["align"] = "center";
$cols[] = $col; 


$col = array(); 
$col["title"] = "StreetName"; 
$col["name"] = "StreetName"; 
$col["width"] = "8"; 
$col["editable"] = true; // this column is not editable 
$col["align"] = "center";
$cols[] = $col; 

$col = array(); 
$col["title"] = "Complaint Description"; 
$col["name"] = "ComplaintDesc"; 
$col["width"] = "10"; 
$col["editable"] = true; // this column is not editable 
$cols[] = $col; 

$col = array(); 
$col["title"] = "ComplaintStatus"; // caption of column 
$col["name"] = "ComplaintStatus"; // grid column name, must be exactly same as returned column-name from sql (tablefield or field-alias) 
$col["width"] = "8";
$col["editable"] = true;
$col["edittype"] = "select";
$col["editoptions"] = array("value"=>'Completed:Completed;Inprogress:Inprogress;New:New;');
$col["align"] = "center";
$cols[] = $col;         

$col = array(); 
$col["title"] = "SMSSent"; // caption of column 
$col["name"] = "SMSFlag"; // grid column name, must be exactly same as returned column-name from sql (tablefield or field-alias) 
$col["width"] = "8";
$col["editable"] = false;
$col["align"] = "center";
$cols[] = $col;

$g = new jqgrid(); 

$grid["rowNum"] = 20; // by default 20 
$grid["caption"] = "Mudichur Panchayat Online Complaints Admin View"; // caption of grid 
$grid["autowidth"] = true; // expand grid to screen width 
$grid["export"] = array("format"=>"pdf", "filename"=>"my-file", "sheetname"=>"test"); 

$g->set_options($grid); 

$g->set_actions(array(     
                        "add"=>true, // allow/disallow add 
                        "edit"=>true, // allow/disallow edit 
                        "delete"=>true, // allow/disallow delete 
                        //"save"=>true,
                        "rowactions"=>true, // show/hide row wise edit/del/save option 
                        "export"=>true, // show/hide export to excel option 
                        "autofilter" => true, // show/hide autofilter for search 
                        "search" => "advance" // show single/multi field search condition (e.g. simple or advance) 
                    )  
                ); 

$g->table = "complaints"; 

$g->set_columns($cols,true); 
$out = $g->render("list1"); 

?> 
<?php
include 'plainheader.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"> 
<html> 
<head> 
    <link rel="stylesheet" type="text/css" media="screen" href="/ASISI-wfh/finalmudichurpanchayat/lib/js/themes/redmond/jquery-ui.custom.css"></link>     
    <link rel="stylesheet" type="text/css" media="screen" href="/ASISI-wfh/finalmudichurpanchayat/lib/js/jqgrid/css/ui.jqgrid.css"></link>     
    <link rel="stylesheet" type="text/css" href="otherlinks.css" />
    <script src="/ASISI-wfh/finalmudichurpanchayat/lib/js/jquery.min.js" type="text/javascript"></script> 
    <script src="/ASISI-wfh/finalmudichurpanchayat/lib/js/jqgrid/js/i18n/grid.locale-en.js" type="text/javascript"></script> 
    <script src="/ASISI-wfh/finalmudichurpanchayat/lib/js/jqgrid/js/jquery.jqGrid.min.js" type="text/javascript"></script>     
    <script src="/ASISI-wfh/finalmudichurpanchayat/lib/js/themes/jquery-ui.custom.min.js" type="text/javascript"></script> 
</he
></head> 
<body> 
    <div style="margin:10px"> 
   
    <br> 
    <br> 
    <?php echo $out?> 
    </div> 
     <?php
include 'footer.php';
?>
</body> 
</html> 
 
