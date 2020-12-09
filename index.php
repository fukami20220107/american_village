<?php get_header(); ?>

<main>
    <div class="photo">
        <img class="head_img" src="<?php echo get_template_directory_uri(); ?>/img/visual_1_pc.png" alt="">
        <!-- スマホの時だけ -->
        <div id="hd_img"></div>
        <div id="af_img"></div>
        <!-- スマホの時だけ -->
    </div>

    <p class="amebire_text"><span>進化し続ける「街」</span><span class="br">アメリカンビレッジマガジン</span></p>
</main>

   
<!--------------------- ここから ariticle-------------------->

<div class="nav_text">Latest Articles</div>
    
    <div class="album py-5 bg-white">
      <div class="container">
  
        <div class="row">
<?php if(have_posts()): ?>
<?php query_posts("cat=''&showposts=6"); ?>
<?php while (have_posts()): the_post();?>
          <div class="col-md-4">
             <!-- ここから サムネイル-->   
            <div class="card md-4 shadow-sm border border-0 shadow-none shadow">   
              <?php the_post_thumbnail(""); ?>
              <div class="card-body">
        　<!-- ここから 日付-->     
                <p class="card-text"><?php the_time('Y年m月d日'); ?></p>
        　<!-- ここから 記事--> 
                <p class="card-text">
                <?php echo wp_trim_words( get_the_content(), 25, '...' ); ?>
                </p>    
                    <div class="d-flex justify-content-between align-items-center">                
        　<!-- ここから 続きを見る--> 
                    <small class="text-muted">
                    <a href="<?php the_permalink(); //詳細へのリンク　?>">READ MORE</a>
                      <div class="line-in">
                         <p class="line_bt"></p>
                      </div>
                    </small>
                </div>
              </div>
            </div>
          </div>
<?php endwhile;?>
<?php else: ?>
    　
  <h2 class="subtitle">投稿はありません</h2>

<?php endif;?>

  <!--  -->
  
        </div>
      </div>
    </div>
<!--------------------- ここまでがarticle-------------------->

<?php get_footer(); ?>