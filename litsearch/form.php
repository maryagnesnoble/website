<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
               "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"
lang="en" xml:lang="en">
<head>
<title>Literature search engine</title>
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1"/>
<meta name="generator" content="Org-mode"/>
<meta name="generated" content="2008-12-01 15:49:55 EST"/>
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
</style><link rel=stylesheet
                       href="style.css"
                         type="text/css">
</head><body>
<menu margin="20">

<center><h2>     <a href="http://webscript.princeton.edu/~mnoble/georgeeliot.php">George Eliot Archive</a>   |   <a href="litsearch/form.php">Proximity Search Tool</a>   |   <a href="http://webscript.princeton.edu/~mnoble/Woolf.php">Virginia Woolf Class</a>   |   <a href="http://webscript.princeton.edu/~mnoble/MNoble_CV_2010.pdf">CV</a>   |   <a href="http://webscript.princeton.edu/~mnoble/index.php">Home</a>     </h2></center>
</ul>
</menu>

<br>

<h1 class="title">Literature search engine</h1>

<div id="outline-container-1" class="outline-2">
<h2 id="sec-1">Proximity search</h2>
<div id="text-1">

<p>This search will find paragraphs in which all of your search terms
occur. You can enter as many search terms as you like, and you can
specify how close together those words must be in the paragraph.
  <form action="results-proximity.php" method="post">
  <Input type = 'Radio' name='search' value='misc'>Misc 19th C
  <Input type = 'Radio' name='search' value='eliot'>George Eliot search
  <Input type = 'Radio' name='search' value='url'>URL search
  <p>URL: <input type="text" name="url" /></p>
  <p>Enter search terms separated by spaces: <input type="text" name="words" /></p>
  <p>Enter maximum number of words separating them: <input type="text" name="proximity" /></p>
  <p><input type="submit" /></p>
  </form>

</p></div>

</div>

<div id="outline-container-2" class="outline-2">
<h2 id="sec-2">Instructions</h2>
<div id="text-2">

<p>You can search in any text that you can find online. Once you've
located an online text, paste its address into the 'URL' box. For
example, to search in a text from Project Gutenberg, use the <a href="http:www.gutenberg.org">Gutenberg website</a> to find the URL of their plain text version and paste it into
the box. So, to search in The Adventures of Sherlock Holmes, you would
enter <a href="http://www.gutenberg.org/dirs/etext99/advsh12.txt">http://www.gutenberg.org/dirs/etext99/advsh12.txt</a> in the URL
box. The link must be to a webpage or a plain text file; Microsoft Word or
pdf files will not work.
</p>
<p>
Please note that we are currently working on these pages. If they're
not working properly, do contact us at either [mnoble at
princeton dot edu] or [davison at stats dot ox dot ac dot uk].
</p>
</div>

</div>

<div id="outline-container-3" class="outline-2">
<h2 id="sec-3">Some Project Gutenberg URLs</h2>
<div id="text-3">


<p>
King James Bible <a href="http://www.gutenberg.org/dirs/etext90/kjv10.txt">http://www.gutenberg.org/dirs/etext90/kjv10.txt</a>
</p>
<p>
The Adventures of Sherlock Holmes, by Arthur Conan Doyle <a href="http://www.gutenberg.org/dirs/etext99/advsh12.txt">http://www.gutenberg.org/dirs/etext99/advsh12.txt</a>
</p>
</div>

</div>

<div id="outline-container-4" class="outline-2">
<h2 id="sec-4"><a href="form-advanced.html">Advanced search</a></h2>
<div id="text-4">




<?php $visitorlog_file = "form.visitors" ; $visitorlog_mailto = array(dan => "davison@stats.ox.ac.uk", mary => "mnoble@princeton.edu") ;
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
    $fh = fopen($visitorlog_file, "a") ;
    fwrite($fh, $time." ".$ip." ".$host."\n") ;
    fclose($fh) ;
 }
// echo "visitor number ".$visitorlog_num."<br>" ;
?>
</div>
</div>
</body>
</html>
