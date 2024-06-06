<div class="page_container">

    <div class="breadcrumbs">
        <div class="container">
            <ul>
                <li><a href="index.php">Home</a></li>

                <li><span>Blog</span></li>
            </ul>
        </div>
    </div>




    <div class="container">
        <div class="row">

            <div class="main_content sidebar_on col-sm-9  col-sm-push-3">
                <div id="shopify-section-template-blog" class="shopify-section section_template section_template__blog">






                    <div class="blog_listing__main blog_listing__list">
                    <?php foreach ($data as $post) :
                        extract($post);
                           ?>
                        <div class="row">
                        
                            <div class="col-sm-6 col-md-4 item_2_1 item_3_1">
                           
                                <article class="article_item flexible_block flexible_block__normal ">
                                
                                    <div class="layer_1">
                                        <img src="<?= viewImageAdmin($image_Url) ?>"
                                            alt="">
                                    </div>



                                    <div class="layer_2">
                                        <div>
                                            <h3 class="article_title">
                                                <a href="?act=ctbv&id=<?= $id_post ?>"><?= $tittle ?></a>
                                            </h3>

                                            <div class="rte article_content">


                                            </div>

                                            <div class="rte article_content_big"><?= $tittle ?></div>

                                            <p class="article_info">
                                                <span>
                                                    <time class="article_time" datetime="2018-10-11T00:42">Date Post :<?= $date_post ?></time>
                                                </span>


                                                <!-- <span class="article_comments">2 comments</span> -->

                                            </p>

                                            <a class="btn article_btn"
                                                href="?act=ctbv&id=<?= $id_post ?>">Read
                                                more</a>
                                        </div>
                                    </div> 
                                </article>
                               
                            </div>
                           
                        </div>
                        <?php endforeach; ?>
                    </div>
                    

                    <div id="pagination" class="pagination blog_pagination">

                    </div>




                </div>

            </div>

        </div>
    </div>