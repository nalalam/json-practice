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


<div class="card-body">
					<ul>
					<li class=""><a href="slider_index_grid.php"> Grid View</a></li>
						 <li class=""><a href="index.php">List View</a></li>
					</ul>	 
					<a href="#" class="btn btn-outline bg-grey border-grey text-grey-600 btn-icon rounded-round border-2 legitRipple"><i class="icon-plus2"></i></a>
					<a href="#" class="btn btn-outline bg-grey border-grey text-grey-600 btn-icon "><i class="icon-file-pdf mr-3"></i></a>
					
						 
						  Trash (Delete | Restore) | Download XL | Download PDF | Print View
						  | 
					</div>















<div class="table-responsive">
					<div class="row mx-0">

					<?php
    foreach($slides as $key=>$slide):

     ?> 
					<div class="col-sm-6 col-xl-3">
						<div class="card">
							<div class="card-img-actions mx-1 mt-1">
								<img class="card-img img-fluid" src="<?=$slide['src']?>" alt="<?=$slide['alt']?>" style="height:200px">
								<div class="card-img-actions-overlay card-img">
									<a href="../../../../global_assets/images/placeholders/placeholder.jpg" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round" data-popup="lightbox" rel="group">
										<i class="icon-plus3"></i>
									</a>

									<a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
										<i class="icon-link"></i>
									</a>
								</div>
							</div>

							<div class="card-body">
								<div class="d-flex align-items-start flex-nowrap">
									<div>
										<h6 class="font-weight-semibold mr-2"><?=$slide['title']?></h6>
										<span><?=$slide['caption']?></span>
									</div>

									<div class="d-flex flex-wrap align-items-center">
									<a href="#" class="btn btn-outline bg-grey border-grey text-grey-600 btn-icon rounded-round border-2 legitRipple"><i class="icon-eye"></i></a>
									<a href="#" class="btn btn-outline bg-grey border-grey text-grey-600 btn-icon rounded-round border-2 legitRipple"><i class="icon-pencil"></i></a>
									<a href="#" class="btn btn-outline bg-grey border-grey text-grey-600 btn-icon rounded-round border-2 legitRipple"><i class="icon-trash"></i></a>
								</div>
								</div>
							</div>
						</div>
					</div>
<?php
 endforeach
?>




   
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