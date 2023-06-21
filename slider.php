<?php
$slider1 =[
    'src'=>'img/1.jpg',
    'alt'=>'First slide',
    'title'=>'Title 1',
    'caption'=>'Description 1',
];
$slider2 =[
    'src'=>'img/2.jpg',
    'alt'=>'First slide',
    'title'=>'Title 2',
    'caption'=>'Description 2',
];
$slider3 =[
    'src'=>'img/3.jpg',
    'alt'=>'Third slide',
    'title'=>'Title 3',
    'caption'=>'Description 3',
];

$slides = [$slider1, $slider2, $slider3];
?>





<div id="carouselId" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <?php
            $active='';
            foreach($slides as $key=>$slide){
                if(0==$key){
                    $active = 'active';
                }else{
                    $active = '';
                }
            ?>
            <li data-bs-target="#carouselId" data-bs-slide-to="<?=$key?>" class="<?=$active?>" aria-current="true" aria-label="First slide"></li>
            <?php    
                }
            ?>
            
        </ol>
        <div class="carousel-inner" role="listbox">
            <?php
                foreach ($slides as $key=>$slide){
                    if(0==$key){
                        $active = 'active';
                    }else{
                        $active='';
                    }
            ?>
            
            <div class="carousel-item <?=$active?> c-item">
                <img src="<?=$slide['src']?>" class="w-100 d-block limon" alt="<?=$slide['alt']?>">
                <div class="carousel-caption d-none d-md-block">
                    <h3><?=$slide['title']?></h3>
                    <p><?=$slide['caption']?></p>
                </div>
            </div>
            <?php    
                }
            ?>
            <!-- <div class="carousel-item c-item">
                <img src="img/2.jpg" class="w-100 d-block limon" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Title 2</h3>
                    <p>Description 2</p>
                </div>
            </div>
            <div class="carousel-item c-item">
                <img src="img/3.jpg" class="w-100 d-block limon" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Title3</h3>
                    <p>Description 3</p>
                </div>
            </div> -->
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>