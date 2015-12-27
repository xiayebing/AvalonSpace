<!doctype html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=<?php bloginfo('charset');?>"/>
    <title>
        <?php bloginfo('name');?>
    </title>
    <meta name="descrition" content="<?php bloginfo('descrition');?>"/>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>" type="text/css"/>
    <?php wp_head()?>
</head>
<body>
<div id="header">
    <div id="headerimg">
        <h1><a href="<?php echo get_option('home');?>"><?php bloginfo('name')?></a></h1>
        <div class="description"><?php bloginfo('description')?></div>
    </div>
</div>
<div id="home-loop">
    <?php
    if(have_posts()){
        while(have_posts()){
            the_post();
            ?>
         <div class="post-item">
             <div class="post-title"><h2><a href="<?php the_permalink()?>"><?php the_title();?></a></h2></div>
             <div class="post-content"><?php the_content();?></div>
             <div class="post-meta">
                 <a>分类：</a><?php the_category(',');?><span>|</span>
                 <a>作者：</a><?php the_author();?><span>|</span>
                 <a>发布时间：</a><?php the_time('Y-m-d');?><span>|</span>
                 <?php edit_post_link('Edit','<span>| </span>','');?>
             </div>
         </div>
    <?php
        }
    }else{
        echo '没有日志可以显示';
    }
    ?>

</div>
<?//php wp_footer();?>
</body>