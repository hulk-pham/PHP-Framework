<?php
//dump($post);
?>
<div class="container">
    <div>
        <div class="row">
            <div class="post-text text-center mt-4 col-12 overflow-hidden">

                <div class="post-introduce">

                    <h1><a href="#" class="post-title big"><?= $post['title'] ?></a></h1>
                    <p class="post-date"><?= explode(" ",$post['created_at'])[0] ?></p>

                    <div class="img-container mb-5 text-center">
                        <img class="img-fluid" style="max-width: 800px" src="<?= asset_url("upload/post/" . $post['avatar']) ?>">
                    </div>
                    <div class="body-text-content text-left p-5">
                        <?= $post['content'] ?>
                    </div>

                    <div class="post-stats text-right">
                        <a href="#" class="category"><?= $post['cate_name'] ?></a>
                        <!--                            <p class="stat">beautiful</p>-->
                    </div>
                    <!--                    <a href="post/--><? //=$i ?><!--" class="btn-read-more">Read More</a>-->
                </div>

            </div>
        </div>
    </div>
</div>
