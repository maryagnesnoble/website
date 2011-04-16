<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
               "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"
lang="en" xml:lang="en">
<head>
<title>Mary Noble</title>
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1"/>
<meta name="generator" content="Org-mode"/>
<meta name="generated" content="2008-12-09 15:20:19 EST"/>
<meta name="author" content="Dan"/>
<style type="text/css">
  html { font-family: Times, serif; font-size: 12pt; }
  .title  { text-align: center; }
  .todo   { color: red; }
  .done   { color: green; }
  .tag    { background-color:lightblue; font-weight:normal }
  .target { }
  .timestamp { color: grey }
  .timestamp-kwd { color: CadetBlue }
  p.verse { margin-left: 3% }
  pre {
	border: 1pt solid #AEBDCC;
	background-color: #F3F5F7;
	padding: 5pt;
	font-family: courier, monospace;
        font-size: 90%;
        overflow:auto;
  }
  table { border-collapse: collapse; }
  td, th { vertical-align: top; }
  dt { font-weight: bold; }

  .org-info-js_info-navigation { border-style:none; }
  #org-info-js_console-label { font-size:10px; font-weight:bold;
                               white-space:nowrap; }
  .org-info-js_search-highlight {background-color:#ffff00; color:#000000;
                                 font-weight:bold; }

</style><link rel=stylesheet
	 href="style.css"
	 type="text/css">
</head><body>
<h1 class="title">Mary Noble</h1>
</p>
<p><img src="mary-smaller.png"/>
</p>
<p>
I'm a visiting assistant professor at Drew University in the Casperson School of Graduate Studies. I recently finished my doctoral dissertation on
nineteenth-century anthropology and British fiction, advised by Maria
DiBattista and Deborah Nord.  </p>


<div id="outline-container-1" class="outline-2">
<h2 id="sec-1">Publications</h2>
<div id="text-1">


</div>

<div id="outline-container-1.1" class="outline-3">
<h3 id="sec-1.1">Jennifer Breen and Mary Noble, <a href="http://www.amazon.com/Romantic-Literature-Contexts-Jennifer-Breen/dp/0340806702/ref=sr_1_1?ie=UTF8&s=books&qid=1217757444&sr=8-1"><em>Romantic Literature</em></a> (Arnold: London, 2003).</h3>
<div id="text-1.1">

</div>

</div>

<div id="outline-container-1.2" class="outline-3">
<h3 id="sec-1.2">"Darwin Among the Novelists: Narrative Strategy and <em>The Expression of the Emotions</em>." Forthcoming, <em>Nineteenth-Century Prose</em>, Spring 2011.</h3>
<div id="text-1.2">


</div>
</div>

</div>

<div id="outline-container-2" class="outline-2">
<h2 id="sec-2">Research pages</h2>
<div id="text-2">


</div>

<div id="outline-container-2.1" class="outline-3">
<h3 id="sec-2.1"><a href="georgeeliot.php">George Eliot Page</a> (Searchable full texts of Eliot's novels, essays, reviews, letters and other writings published and unpublished)</h3>
<div id="text-2.1">

</div>

</div>

<div id="outline-container-2.2" class="outline-3">
<h3 id="sec-2.2"><a href="litsearch/form.php">Text Search Tool</a> (Allows you to find two or more search terms in proximity to each other in any online text, as well as in the Eliot archive)</h3>
<div id="text-2.2">




<?php $visitorlog_file = "index.visitors" ; $visitorlog_mailto = array(mary => "mnoble@princeton.edu") ;
// Insert this code into web page to log all visitors (excluding certain search engines and other specified IPs to ignore)
// The following variables must be defined:
//     $visitorlog_mailto (array of email addresses for notification of genuine hits)
//     $visitorlog_msg (string to add to email message)
//     $visitorlog_file (name of log file)


// 74.6.17.190 llf520160.crawl.yahoo.net
// 67.195.37.125 llf320013.crawl.yahoo.net
// 65.214.45.136 crawler4027.ask.com
// 66.249.65.196 crawl-66-249-65-196.googlebot.com
// 65.55.104.208 msnbot-65-55-104-208.search.msn.com
// 208.111.154.15 crawl1.nat.svl.searchme.com
$ignore_hosts = array("yahoo" => "crawl\.yahoo\.",
		      "ask" => "crawler.*\.ask\.",
		      "google" => "crawl.*\.googlebot\.",
		      "msn" => "msnbot.*\.search\.msn\.",
		      "searchme" => "\.searchme\.",
		      "googlebox" => "googlebox\.",
		      "me" => "mnoble-dan") ;
$ignore_ips = array(butler_dan => "140.180.130.83",
		    haywards_cottage => "80.89.87.192") ;

$ip=$_SERVER['REMOTE_ADDR'] ;
$host = gethostbyaddr($ip) ;
$currenturl = $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] ; 

$genuine = true ;
foreach($ignore_hosts as $regex) {
    if(ereg($regex, $host)) { $genuine = false ; }
}
foreach($ignore_ips as $ignore_ip) {
    if($ip == $ignore_ip) { $genuine = false ; }
}
echo "<br><br><br><br><br><br><br><br><br><br><br><br>" ;
// $visitorlog_num = system("wc -l <".$visitorlog_file." 2> /dev/null") ;
// passthru("wc -l <".$visitorlog_file." 2> /dev/null", &$visitorlog_num) ; both these alternatives seem to echo the output as well as return it.
if(! $visitorlog_num) { $visitorlog_num = 0 ; }
if( $genuine ) {
    $visitorlog_num = $visitorlog_num + 1 ;
    $time = date("Y-m-d-H:i") ;
    $msg = "Well done! On " . $time . " someone with IP address " . $ip . " visited " . $currenturl . ". That IP address comes up as " . $host . "\nNumber of visitors so far is " . $visitorlog_num ;
    $msg = $msg . "\n" . $visitorlog_msg ;
    foreach($visitorlog_mailto as $addr) { mail($addr,"website hit!", $msg) ; }
    // $fh = fopen($visitorlog_file, "a") ;
    // fwrite($fh, $time." ".$ip." ".$host."\n") ;
    // fclose($fh) ;
 }
// echo "visitor number ".$visitorlog_num."<br>" ;
?>
</div>
</div>
</div>
<div id="postamble"></div></body>
</html>
