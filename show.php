<?php
$menu = file_get_contents("demo2 - Copy.json");
$slides = json_decode($menu, "true");

?>




<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>

<body>
  <header>


<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Slides</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
					<ul>
					<li class=""><a href="dd_grid.php"> Grid View</a></li>
						 <li class=""><a href="dd.php">List View</a></li>
					</ul>	 
					
						 
					<a href="dd.php">Create</a>  
						 | Trash (Delete | Restore) | Download XL | Download PDF | Print View
						  
					</div>

					<div class="table-responsive">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>#</th>
									<th>Title</th>
									<th>Src</th>
									<th>Alt</th>
									<th>Caption</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>

<?php
    foreach($slides as $key=>$slide):
        // if(0 == $key){
        //  $active = 'active';
        // }else{
        //  $active = '';
        // }
		
     ?> 


								<tr>
									<td title="<?=$slide['uuid']?>"><?=++$key?></td>
									<td><?=$slide['title']?></td>
									<td><img src="<?=$slide['src']?>" style="width:100px;height:100px"></td>
									<td><?=$slide['alt']?></td>
									<td><?=$slide['caption']?></td>
									<td> 
									<!-- <a href="slider_show.php?slideIndex=<?=$key-1?>">Show</a>   -->
										<a href="single_index.php?id=<?=$slide['id']?>">Show</a>  
									
									| Edit | Delete | Activate/InActive | Copy</td>
								</tr>
<?php
 endforeach
?>
							</tbody>
						</table>
					</div>
				</div>
				<!-- /bordered table -->



					</div>
				</div>

    
                </header>
  <main>

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>