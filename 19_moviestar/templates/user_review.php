<?php 

?>

<div class="col-md-12 review">
    <div class="row">
        <div class="col-md-1">
            <div class="profile-image-container review-image" style="background-image: url('img/users/user.png');"></div>
        </div>
        <div class="col-md-9 author-details-container">
            <h4 class="author-name">
                <a href="#">Geanio Teste</a>
            </h4>
            <p><i class="fas fa-star"></i> 9</p>
        </div>
        <div class="col-md-12">
            <p class="comment-title">Comentário:</p>
            <p><?=$review->review?></p>
        </div>
    </div>
</div>