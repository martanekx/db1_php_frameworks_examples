<html>
<head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
	
	<script src="https://code.jquery.com/jquery.js"></script>
	
	<!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php 


	$page = @$_REQUEST["page"];

	// defaulne to home
	if (trim($page) == "") $page = "home";
	
	echo "aktualni stranka: $page <br/><br/>";

	echo "<div class=\"row\">";
		echo "<div class=\"col-md-4\">MENU VLEVO</div>";
		echo "<div class=\"col-md-8\">OBSAH</div>";
	echo "</div>";
	
	
	echo "<div class=\"container\">";
	
		echo "<table class=\"table table-striped\">";
			echo "<tr><td>Jan</td></tr>";
			echo "<tr><td>Tomáš</td></tr>";
		echo "</table>";
	echo "</div>";
	
	// polozky v menu
	$menu_polozky = array();
	$menu_polozky["home"] = "Úvodní stránka";
	$menu_polozky["login"] = "Přihlášení";
	
	//print_r($menu_polozky);
	
	foreach ($menu_polozky as $key => $polozka)
	{
		echo "<a href=\"index.php?page=$key\" class=\"btn btn-success\">$polozka</a><br/>";
	}
	
	
	if ($page == "login")
	{
		// nacist ze souboru
		include("inc/login_form.inc.php");
	}
	else if ($page == "login_go")
	{
		// zkus prihlasit
		echo "Testuji prihlaseni: ";
		
		$user = $_POST["user"];
		print_r($user);
	}
	else 
	{
		?>
		
			<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
          Collapsible Group Item #1
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
          Collapsible Group Item #2
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
          Collapsible Group Item #3
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>
		
		<?php 
	}
?>
</body>
</html>