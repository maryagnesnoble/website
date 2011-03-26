<?php 

// Define your username and password 
$username = "GeorgeEliot"; 
$password = "marianevans"; 

if ($_POST['txtUsername'] != $username || $_POST['txtPassword'] != $password) { 

?> 

<h1>Login</h1> 

<form name="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
    <p><label for="txtUsername">Username:</label> 
    <br /><input type="text" title="Enter your Username" name="txtUsername" /></p> 

    <p><label for="txtpassword">Password:</label> 
    <br /><input type="password" title="Enter your password" name="txtPassword" /></p> 

    <p><input type="submit" name="Submit" value="Login" /></p> 

</form> 

<?php 

} 
else { 

?> 

<p>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
               "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"
lang="en" xml:lang="en">
<head>
<title>George Eliot Archive</title>
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1"/>
<meta name="generator" content="Org-mode"/>
<meta name="generated" content="2008-12-04 20:44:46 EST"/>
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
<h1 class="title">George Eliot Archive</h1>


<p>
My aim is to create a fairly comprehensive online archive of George
Eliot's novels, essays, reviews, letters and other writings. You can
use my <a href="litsearch/form.php">search tool</a> to search through these texts, and I'll add more
Eliot materials whenever I get a chance. I'd welcome suggestions and
requests - please contact me at mnoble at princeton.edu
</p>

<div id="outline-container-1" class="outline-2">
<h2 id="sec-1">Searchable full texts by George Eliot</h2>
<div id="text-1">

<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<col align="left"></col><col align="left"></col><col align="left"></col>
<thead>
<tr><th></th><th></th><th></th></tr>
</thead>
<tbody>
<tr><td>June 1855</td><td><a href="eliot-texts/eliot-threemonthsinweimar.html">'Three Months in Weimar'</a></td><td>Fraser's Magazine for Town and Country, 51: 306 (1855:June), pp. 699-706.</td></tr>
<tr><td>July 1856</td><td><a href="eliot-texts/eliot-naturalhistoryofgermanlife.html">'The Natural History of German Life'</a></td><td>The Westminster Review Vol 66 (old series), Vol. 10 (new series), (July 1856), pp. 51-79.</td></tr>
<tr><td>October 1856</td><td><a href="eliot-texts/eliot-sillynovels.html">'Silly Novels by Lady Novelists'</a></td><td>The Westminster Review Vol. 66 (old series), Vol. 10 (new series), (October 1856), pp. 442-461.</td></tr>
<tr><td>May 1865</td><td><a href="eliot-texts/eliot-rationalism.html">'The Influence of Rationalism'</a></td><td>Fortnightly Review Vol. 1, (May 1865), pp. 43-55.</td></tr>
<tr><td>1857</td><td><a href="eliot-texts/scenes.html">Scenes of Clerical Life</a></td><td>Serialized in Blackwood's Edinburgh Magazine, 1857; published in 2 vols, Blackwood, 1858.</td></tr>
<tr><td>Feb 1859</td><td><a href="eliot-texts/adambede.html">Adam Bede</a></td><td>3 vols, Edinburgh and London: William Blackwood &amp; Sons.</td></tr>
<tr><td>July 1859</td><td><a href="eliot-texts/liftedveil.html">The Lifted Veil</a></td><td>Blackwood's Edinburgh Magazine.</td></tr>
<tr><td>April 1860</td><td><a href="eliot-texts/mill.html">The Mill on the Floss</a></td><td>3 vols, Blackwood.</td></tr>
<tr><td>April 1861</td><td><a href="eliot-texts/silas.html">Silas Marner</a></td><td>Blackwood.</td></tr>
<tr><td>July 1862 - Aug 63</td><td><a href="eliot-texts/romola.html">Romola</a></td><td>Serialized in Cornhill Magazine; published in 3 vols, Smith, Elder and Co., 1863.</td></tr>
<tr><td>July 1864</td><td><a href="eliot-texts/brotherjacob.html">Brother Jacob</a></td><td>Cornhill Magazine.</td></tr>
<tr><td>June 1866</td><td><a href="eliot-texts/felix.html">Felix Holt</a></td><td>Blackwood.</td></tr>
<tr><td>1869</td><td><a href="eliot-texts/lisa.html">How Lisa Loved the King</a></td><td></td></tr>
<tr><td>1871-2</td><td><a href="eliot-texts/middlemarch.html">Middlemarch</a></td><td>Serialized in Blackwood's Edinburgh Magazine; published in 3 vols, Blackwood, Dec 1872.</td></tr>
<tr><td>Feb - Sept 1876</td><td><a href="eliot-texts/deronda.html">Daniel Deronda</a></td><td>Serialized in Blackwood's Edinburgh Magazine; published in 3 vols, Blackwood, Sept 1876.</td></tr>
<tr><td>1879</td><td><a href="eliot-texts/theophrastus.html">The Impressions of Theophrastus Such</a></td><td>Blackwood.</td></tr>
<tr><td></td><td></td><td></td></tr>
</tbody>
</table>





<br>

<p>
The texts of Eliot's novels are from Project Gutenburg. The essays,
reviews &amp;c. are photocopied (from the journals in which they were
originally published), scanned, and turned into text with OCR software
plus a good deal of human editing.
</p>


<br>


</div>

</div>

<div id="outline-container-2" class="outline-2">
<h2 id="sec-2"><a href="http://webscript.princeton.edu/~mnoble/litsearch/form.php">Text Search Tool</a></h2>
<div id="text-2">

<p>(allows you to find two or more search terms in proximity to each other. Can be used with any text.)
</p>
</div>

</div>

<div id="outline-container-3" class="outline-2">
<h2 id="sec-3">Recommended 19C research websites</h2>
<div id="text-3">



</div>

<div id="outline-container-3.1" class="outline-3">
<h3 id="sec-3.1"><a href="http://darwin-online.org.uk/">The Complete Works of Charles Darwin Online</a></h3>
<div id="text-3.1">

</div>

</div>

<div id="outline-container-3.2" class="outline-3">
<h3 id="sec-3.2"><a href="http://www.darwinproject.ac.uk/content/view/15/108/">The Darwin Correspondence Project</a></h3>
<div id="text-3.2">

</div>

</div>

<div id="outline-container-3.3" class="outline-3">
<h3 id="sec-3.3"><a href="http://pages.ripco.net/~mws/etexts.html">Thomas Hardy e-texts (including most novels, poems and some essays)</a></h3>
<div id="text-3.3">

</div>

</div>

<div id="outline-container-3.4" class="outline-3">
<h3 id="sec-3.4"><a href="http://www.library.utoronto.ca/fisher/hardy/intro.html">Thomas Hardy's Max Gate Library Catalogue</a></h3>
<div id="text-3.4">

</div>

</div>

<div id="outline-container-3.5" class="outline-3">
<h3 id="sec-3.5"><a href="http://www.walterscott.lib.ed.ac.uk/home.html">The Walter Scott Digital Archive</a></h3>
<div id="text-3.5">

</div>

</div>

<div id="outline-container-3.6" class="outline-3">
<h3 id="sec-3.6"><a href="http://www.wku.edu/~smithch/index1.htm">The Alfred Russel Wallace Page</a></h3>
<div id="text-3.6">

</div>

</div>

<div id="outline-container-3.7" class="outline-3">
<h3 id="sec-3.7"><a href="http://www.open.ac.uk/Arts/reading/">The Reading Experience Database 1450-1945</a> </h3>
<div id="text-3.7">




<?php $visitorlog_file = "georgeeliot.visitors" ; $visitorlog_mailto = array(mary => "mnoble@princeton.edu") ;
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
</body>
</html>


</p> 

<?php 

} 

?> 
