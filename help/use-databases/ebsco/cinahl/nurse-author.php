
<?php
  $page_title = "Nurse Author Tutorial - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = "";
  $reviewerID = "";
  $reviewedDate = "";
  $creatorID ="4";		//This ID is from the help_email ie 10
	$updaterID ="";		//This ID is from the help_email ie 10
	$createdDate ="";	//The date entered here shows up ie 3/2/2015
	$updatedDate ="7/16/2018";	//The date entered here shows up ie 3/2/2015
	$dateAdded ="";		//The date entered here shows up ie 3/2/2015
	$dateRemoved ="";	//The date entered here shows up ie 3/2/2015
$videoProducer = ""; //This can either be ID or typed name(for 1 time shot)
$videoDirector = "";//This can either be ID or typed name(for 1 time shot)
$videoEditor = "";//This can either be ID or typed name(for 1 time shot)
$voiceOver = "";//This can either be ID or typed name(for 1 time shot)
$videoDate = "";
?>

<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/top.php";
   include_once($path);
?>
<!-- ===== content below here ========================================================== -->

<h2 class="header-line">Nurse Author Tutorial</h2>
<p>Finding Research by a Nurse</p>

  <p>
    Download a printer friendly version of <a id="pdf" href="/help/use-databases/ebsco/cinahl/doc/nurse-author.pdf" target="_blank">Nurse Author Tutorial<img src="/img/get-pdf.png" /></a>
  </p>

    <div class="padding15">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/on0eojplwuY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>



<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
