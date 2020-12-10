<?php get_header(); ?>

<div class="content">
<main>
    <div class="photo">
      <!-- スライダー -->
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="3000">
        <div class="carousel-inner">
          <div class="carousel-item  active">
            <div class="pc1"><img src="<?php echo get_template_directory_uri(); ?>/img/visual_1_pc.png" width="800" height="400" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: First slide"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#555" dy=".3em"></text></div>
            <div id="sp1"></div>
          </div>
          <div class="carousel-item">
            <div class="pc2"><img src="<?php echo get_template_directory_uri(); ?>/img/visual_2_pc.png" width="800" height="400" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Second slide"><title>Placeholder</title><rect width="100%" height="100%" fill="#666"/><text x="50%" y="50%" fill="#444" dy=".3em"></text></div>
            <div id="sp2"></div>
          </div>
          <div class="carousel-item">
            <div class="pc3"><img src="<?php echo get_template_directory_uri(); ?>/img/visual_3_pc.png" width="800" height="400" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Third slide"><title>Placeholder</title><rect width="100%" height="100%" fill="#555"/><text x="50%" y="50%" fill="#333" dy=".3em"></text></div>
            <div id="sp3"></div>
          </div>
        </div>
      </div>
      <!-- スライダー終了 -->
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

  
        </div>
      </div>
    </div>
<!--------------------- ここまでがarticle-------------------->

<?php get_footer(); ?>