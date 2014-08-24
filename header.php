<?php
include("admin/include/functions.php");
include("admin/include/db.php");

//echo '<pre>';
$home="";
$blog="";
$project_ideas="";
$archives="";
$support="";
$about="";
if(isset($_SERVER['SCRIPT_FILENAME']) && $_SERVER['SCRIPT_FILENAME']!=''){
$file_name=$_SERVER['SCRIPT_FILENAME'];
			$file_info=pathinfo($file_name);
			$file_name=$file_info['basename'];
			if($file_name=="blog.php"){
				$blog='id="current"';
			} else if($file_name=="archives.php"){
				$archives='id="current"';
			} else if($file_name=="support.php"){
				$support='id="current"';
			} else if($file_name=="about.php"){
				$about='id="current"';
			}else if($file_name=="project_ideas.php"){
				$project_ideas='id="current"';
			}else
			{
				$home='id="current"';
			}
}
			
?>
<div id="header-wrap"><div id="header">

	<a name="top"></a>

	<h1 id="logo-text"><a href="index.php" title="">Hello</a></h1>
	<p id="slogan">The demo </p>

	<div  id="nav">
		<ul>
			<?php echo dispMenu("select * from menu_master where mid in (select pmid from menu_master)"); ?>
		</ul>
	</div>

   
   

   <form id="quick-search" name="qsearchfrm" method="post" action="" onsubmit="">
   	<fieldset class="search">
      	<label for="qsearch">Search:</label>
         <input class="tbox" id="qsearch" type="text" name="qsearch" value="Search..." title="Start typing and hit ENTER" onfocus="clearit(this)" />
         <button class="btn" title="Submit Search">Search</button>
      </fieldset>
   </form>
   
