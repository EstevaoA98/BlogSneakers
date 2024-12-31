<?php
include_once("tamplates/header.php");

if (isset($_GET['id'])) {
    $postid = $_GET['id'];
    $currentPost;

    foreach ($posts as $post) {
        if ($post['id'] == $postid) {
            $currentPost = $post;
            break;
        }
    }
}
?>
<main>
    <div id="post-conteiner">
        <div class="content-conteiner">
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>
            <p id="post-description"><?= $currentPost['description'] ?></p>
            <div class="img-conteiner">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
            <p class="post-content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla illum saepe facilis exercitationem tenetur dolor fuga rem dignissimos nostrum eum itaque, facere inventore, repellendus placeat nihil ut totam quae odit.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam unde, culpa dignissimos delectus ex quos. Placeat animi, explicabo nulla perferendis, repudiandae magni quas id illo excepturi voluptates incidunt consequatur cumque?</p>
    </div>
    <aside>
    <div id="nav-conteiner">
        <h3 id="nav-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach ($currentPost['tags'] as $tag): ?>
                <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categories</h3>
        <ul id="categories-list">
            <?php foreach ($categories as $category): ?>
                <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
    </div>
    </aside>
</main>


    <?php
    include_once('tamplates/footer.php');
    ?>