<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
               "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"
lang="en" xml:lang="en">
<head>
<title>Search results</title>
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1"/>
<meta name="generator" content="Org-mode"/>
<meta name="generated" content="2008-08-04 16:45:58 BST"/>
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
<h1 class="title">Search results</h1>
<p>query: <?php echo $_POST['regex']?> in <?php echo $_POST['url']?> </p> 
<?php 
$div = "<br><br>*********************************<br><br>" ;
echo $div ;
$cmd = "curl ".$_POST['url']." | grep -A5 -B5 ".$_POST['regex'] ;
$cmd = $cmd." | perl -p -e 's/^--/".$div."/'" ;
echo system($cmd) ;
echo $div ;
?>
</div>
</body>
</html>
