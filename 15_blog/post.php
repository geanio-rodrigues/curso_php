<?php 
    include_once("templates/header.php");

    if(isset($_GET['id'])) {
        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {
            if($post['id'] == $postId) {
                $currentPost = $post;
            }
        }
    }
?>

<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?=$currentPost['title']?></h1>
        <p id="post-description"><?=$currentPost['description']?></p>
        <div class="img-container">
            <img src="<?=$BASE_URL?>img/<?=$currentPost['img']?>" alt="<?=$currentPost['title']?>">
        </div>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti vel itaque ullam deserunt error cum ea. Culpa deserunt, qui libero eveniet debitis, blanditiis saepe labore ipsa tenetur maxime nemo architecto?
        Saepe nesciunt fuga nostrum ea similique minus molestiae cupiditate accusantium totam recusandae. Ut voluptatibus doloremque tempore, fugit perspiciatis, itaque et officiis dignissimos sed atque nostrum debitis libero ipsum nobis eligendi!
        Incidunt doloribus tempore aspernatur nesciunt sequi. Nihil facilis minus deleniti dolores in, modi beatae? Doloribus aperiam quibusdam dolores repellat dicta nostrum sed alias velit dolor maiores itaque, eveniet ut beatae.
        Fugiat, labore illo consequuntur reiciendis non, perspiciatis officiis nostrum eligendi unde aut eius nam vel repellendus veniam a quae mollitia rerum eos ullam ad? Fugit nemo animi repellat voluptas commodi.
        Nisi possimus aliquid fugit necessitatibus pariatur, sit cupiditate quibusdam beatae nostrum! Explicabo accusantium quod quasi iusto, doloribus possimus fugit odio ullam praesentium excepturi recusandae error distinctio fuga expedita veniam vitae.</p>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti vel itaque ullam deserunt error cum ea. Culpa deserunt, qui libero eveniet debitis, blanditiis saepe labore ipsa tenetur maxime nemo architecto?
        Saepe nesciunt fuga nostrum ea similique minus molestiae cupiditate accusantium totam recusandae. Ut voluptatibus doloremque tempore, fugit perspiciatis, itaque et officiis dignissimos sed atque nostrum debitis libero ipsum nobis eligendi!
        Incidunt doloribus tempore aspernatur nesciunt sequi. Nihil facilis minus deleniti dolores in, modi beatae? Doloribus aperiam quibusdam dolores repellat dicta nostrum sed alias velit dolor maiores itaque, eveniet ut beatae.
        Fugiat, labore illo consequuntur reiciendis non, perspiciatis officiis nostrum eligendi unde aut eius nam vel repellendus veniam a quae mollitia rerum eos ullam ad? Fugit nemo animi repellat voluptas commodi.
        Nisi possimus aliquid fugit necessitatibus pariatur, sit cupiditate quibusdam beatae nostrum! Explicabo accusantium quod quasi iusto, doloribus possimus fugit odio ullam praesentium excepturi recusandae error distinctio fuga expedita veniam vitae.</p>
    </div>
</main>
<aside id="navconteine">
    <h3 id="tags-title">Tags</h3>
    <ul id="tag-list">
        <?php foreach($currentPost['tags'] as $tag):?>
            <li><a href="#"><?=$tag?></a></li>
        <?php endforeach?>
    </ul>
    <h3 id="categories-title">Categorias</h3>
    <ul id="categories-list">
        <?php foreach($categories as $category):?>
            <li><a href="#"><?=$category?></a></li>
        <?php endforeach?>
    </ul>
</aside>

<?php 
    include_once("templates/footer.php");
?>