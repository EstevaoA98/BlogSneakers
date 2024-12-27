<?php
include_once("tamplates/header.php");
?>
<main>
    <div id="title-conteiner">
        <h1>Blog sneaker</h1>
        <p> Blog for sneaker lovers</p>
    </div>
    <div id=" posts-conteiner">
        <?php foreach($posts as $post): ?>
            <div class="post-box">
                <img src="<?= $BASE_URL ?>/img/<?= $post['img'] ?>" alt="<?= $post['title'] ?>">
                <h2 class= "post-title"> 
                <a href="<?= $BASE_URL ?>post.php?id=<?= $post['id'] ?>"><?=$post["title"] ?></a>
            </h2>
            <p class="=post-description"><?= $post['description']?></p>
            <div class="tags-conteiner">
                <?php foreach($post['tags'] as $tag): ?>
                    <a href="#"><?= $tag ?></a>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    </div>
</main>
<?php

include_once("tamplates/footer.php");

?>
