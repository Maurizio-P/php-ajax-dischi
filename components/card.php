<?php 

function printCard($album){
    if(is_null($album)){
        return;
    }

    $albumImg = $album["poster"];
    $albumTitle = $album["title"];
    $albumAuthor = $album["author"];
    $albumGenre = $album["genre"];
    $albumYear = $album["year"];

?>

<div class="col mb-3">
    <div class="card">
        <div class="container-img">
            <img class="poster card-img-top" src="<?php echo $albumImg ?>" alt="">
            <div class="overlay">
                <h5><?php echo $albumGenre ?></h5>
            </div>
        </div>
        <div class="card-body text-center">
            <div class="card-title"><?php echo $albumTitle ?></div>
            <div class="card-text"><?php echo $albumAuthor ?></div>
            <div class="card-text"><?php echo $albumYear ?></div>
        </div>
    </div>
</div>

<?php
}
?>