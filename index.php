<!--------------------- 借り入れheader---------------------->
<html lang="ja"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>OJT</title>
     <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
     <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/footer_article.css">
    <script src="https://kit.fontawesome.com/9e1bf99b51.js" crossorigin="anonymous"></script>
  </head>
  <body>
<!--------------------- ここから ariticle-------------------->

<div class="nav_text">Latest Articles</div>
    
    <div class="album py-5 bg-white">
      <div class="container">
  
        <div class="row">
<?php if(have_posts()): ?>
<?php query_posts("cat=''&showposts=6"); ?>
<?php while (have_posts()): the_post();?>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
          <!-- ここから サムネイル-->      
              <img class="card-img-top"  Thumbnail [100%x225] style="height: 225px; width: 100%; display: block;" data-holder-rendered="true" src=" " >
              <?php the_post_thumbnail(''); ?>
              <div class="card-body">
        　<!-- ここから 日付-->     
                <p class="card-text"><?php the_time('Y年m月d日'); ?></p>
        　<!-- ここから 記事--> 
                <p class="card-text">
                <?php echo get_the_excerpt(); //本文を抜粋して出してくれる ?>
                </p>    
                    <div class="d-flex justify-content-between align-items-center">                
        　<!-- ここから 続きを見る--> 
                    <small class="text-muted">
                    <a href="<?php the_permalink(); //詳細へのリンク　?>">READ MORE</a>
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



<!--------------------- ここから footer---------------------->
<footer>
    <div class="footer_line">
        Copyright &copy; Shinohara.　ALL RIGHTS RESERVED.
    </div>
</footer>
<!--------------------- ここまで footer---------------------->

  </body>
</html>