<?php get_header();
$rate = 1;
if (is_macipad()){
    $rate = 2;
}
$template_dir_uri = get_template_directory_uri();
$template_dir_uri_qiniu = str_replace("http://www.aitecar.com/wp-content/","http://cdn.aitecar.com/wp-content/", $template_dir_uri);

$site_url = site_url();
?>
<div id="banner">
    <div id="banner-img">
    <?php
        $posts = array();
        $post_not_in = array();
        $catid_arr = array(604,605,606,607,608,609);
        foreach ($catid_arr as $value) {
            $arg = array(
                "category"      =>$value,
                "numberposts"   =>1,
                'orderby'       => 'post_date',   
                'order'           => 'DESC', 
            );
            $posts = array_merge($posts,get_posts( $arg));
        }
        print(posts_to_html_lb($posts,$rate));
    ?>
    
    </div>

    <div id="banner-small-img" >
    <ul id="right-show-list">
		<?php if( $posts ):
        foreach( $posts as $kk => $post ) : setup_postdata( $post );$post_not_in[] = $post->ID ?>
        <li<?php if($kk==0)echo ' class="chose"';elseif($kk==5)echo ' style="margin:0;"';?>>
        <a href="<?php if(!empty($post->link)){echo $post->link;}else{the_permalink();} ?>" target="_blank">
        <div class="li-mask"<?php if($kk==0){echo ' style="display:none;"';}?>></div>
        <?php 
        $thumb_url = str_replace(".jpg",".jpg?imageMogr2/thumbnail/".(160*$rate)."x/gravity/South/crop/".(160*$rate)."x".(107*$rate),$post->thumb_url)
		?><img src="<?php echo $thumb_url;?>"  width="160" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"/>
        </a>
        </li>  
        <?php endforeach; ?>
    	<?php endif; ?>             
    </ul>  
    </div>    
</div>

<div class="main">   
<div class="left-content">
<!-- 资讯 -->    
    <div class="layout">
    <h3 class="box-h3-title">资讯</h3>
    	<?php 
		$arg = array(
			"category"		=>'177',
			"numberposts"	=>5,
			'orderby'       => 'post_date',
			'order'           => 'DESC', 
            'exclude'       =>implode(',',$post_not_in)
		);
		$posts = get_posts( $arg);
        $out_arm_str =  http_build_query($arg);
        ?>
		<?php if( $posts ):
		foreach( $posts as $kk => $post ) : setup_postdata( $post ); ?>
        <div class="box">
            <div class="box-content">
                <?php 
                $thumb_info = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID));
                $thumb_info[0] = str_replace("http://www.aitecar.com/wp-content/uploads/","http://cdn.aitecar.com/wp-content/uploads/",$thumb_info[0]);
                $thumb_info[0] = str_replace(".jpg",".jpg?imageView2/2/w/".(237*$rate)."/q/80",$thumb_info[0]);
                $tags = wp_get_post_tags($post->ID);
                ?>
                <a href="<?php the_permalink(); ?>" target="_blank" class="img-area" title="<?php the_title(); ?>" ><img src="<?php echo $thumb_info[0];?>" width="237" height="158" /></a>
                <h3>
                <a href="<?php the_permalink(); ?>" target="_blank" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                </h3>
                <p class="text-content">
                <?php echo $post->brief?$post->brief:$post->post_excerpt; ?>
                </p>
                <div class="box-footer">
                <span class="footer-edit">
                <?php echo esc_attr( judge_time() );?>
                <a class="tip" href="<?php the_permalink(); ?>#comments" target="_blank" rel="nofollow"><?php echo $post->comment_count;?></a>
                </span>
                <span class="info-footer-title">
                <?php  foreach ($tags as $kk => $tag):  if($kk>1)break;?>
                    <a href="<?php echo get_tag_link($tag->term_id);?>" target="_blank"><?php echo mb_strimwidth($tag->name, 0, 14);?></a>
                <?php endforeach?>
                </span>
                </div>
                <span class="arrow-1"></span>
            </div>
        </div>
        <?php endforeach; ?>
    	<?php endif; ?> 
        <div class="Plist"></div>
        <div class="index-more"><a href="<?php echo $site_url;?>/staff">更多内容</a></div>
        </div>
        <div style="margin:5px 0 10px 0;"><a href="https://itunes.apple.com/cn/app/cai-che-da-ren/id921425431?mt=8" target="_blank"><img width="672" src="<?php echo $template_dir_uri_qiniu; ?>/images/test-guanggao.jpg" /></a></div>
<!--车评-->  
    <div class="layout">
    <h3 class="box-h3-title">车评</h3>
        <?php 
		$arg = array(
			"category"		=>'15',
			"numberposts"	=>4,
			'orderby'       => 'post_date',   
			'order'           => 'DESC', 
            'exclude'       =>implode(',',$post_not_in)
		);
		$posts = get_posts( $arg);
        $out_arm_str =  http_build_query($arg);
        ?>

		<?php if( $posts ):
		foreach( $posts as $kk => $post ) : setup_postdata( $post ); ?>
        <div class="box">
            <div class="box-content">
                <?php 
                $thumb_info = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID));
                $thumb_info[0] = str_replace("http://www.aitecar.com/wp-content/uploads/","http://cdn.aitecar.com/wp-content/uploads/",$thumb_info[0]);
                $thumb_info[0] = str_replace(".jpg",".jpg?imageView2/2/w/".(237*$rate)."/q/80",$thumb_info[0]);
                $tags = wp_get_post_tags($post->ID);
                ?>
                <a href="<?php the_permalink(); ?>" target="_blank" class="img-area" title="<?php the_title(); ?>" ><img src="<?php echo $thumb_info[0];?>" width="237" height="158" /></a>
                <h3>
                <a href="<?php the_permalink(); ?>" target="_blank" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                </h3>
                <p class="text-content">
                <?php echo $post->brief?$post->brief:$post->post_excerpt; ?>
                </p>
                <div class="box-footer">
                <span class="footer-edit">
                <?php echo esc_attr( judge_time() );?>
                <a class="tip" href="<?php the_permalink(); ?>#comments" target="_blank" rel="nofollow"><?php echo $post->comment_count;?></a>
                </span>
                <span class="info-footer-title">
                <?php  foreach ($tags as $kk => $tag):  if($kk>1)break;?>
                    <a href="<?php echo get_tag_link($tag->term_id);?>" target="_blank"><?php echo mb_strimwidth($tag->name, 0, 14);?></a>
                <?php endforeach?>
                </span>
                </div>
                <span class="arrow-1"></span>
            </div>
        </div>
        <?php endforeach; ?>
    	<?php endif; ?>
        <div class="Plist"></div>
        <div class="index-more"><a href="<?php echo $site_url;?>/review">更多内容</a></div>                    
        </div>        
<!--值得买--> 
    <div class="layout">
     <h3 class="box-h3-title">值得买</h3>
        <?php 
		$arg = array(
			"category"		=>'3261',
			"numberposts"	=>5,
			'orderby'       => 'post_date',   
			'order'           => 'DESC', 
            'exclude'       =>implode(',',$post_not_in)
		);
		$posts = get_posts( $arg);
        $out_arm_str =  http_build_query($arg);
        ?>
		<?php if( $posts ):
		foreach( $posts as $kk => $post ) : setup_postdata( $post ); ?>
        <div class="box">
            <div class="box-content">
                <?php 
                $thumb_info = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID));
                $thumb_info[0] = str_replace("http://www.aitecar.com/wp-content/uploads/","http://cdn.aitecar.com/wp-content/uploads/",$thumb_info[0]);
                $thumb_info[0] = str_replace(".jpg",".jpg?imageView2/2/w/".(237*$rate)."/q/80",$thumb_info[0]);
                $tags = wp_get_post_tags($post->ID);
                ?>
                <a href="<?php the_permalink(); ?>" target="_blank" class="img-area" title="<?php the_title(); ?>" ><img src="<?php echo $thumb_info[0];?>" width="237" height="158" /></a>
                <h3>
                <a href="<?php the_permalink(); ?>" target="_blank" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                </h3>
                <p class="text-content">
                <?php echo $post->brief?$post->brief:$post->post_excerpt; ?>
                </p>
                <div class="box-footer">
                <span class="footer-edit">
                <?php echo esc_attr( judge_time() );?>
                <a class="tip" href="<?php the_permalink(); ?>#comments" target="_blank" rel="nofollow"><?php echo $post->comment_count;?></a>
                </span>
                <span class="info-footer-title">
                <?php  foreach ($tags as $kk => $tag):  if($kk>1)break;?>
                    <a href="<?php echo get_tag_link($tag->term_id);?>" target="_blank"><?php echo mb_strimwidth($tag->name, 0, 14);?></a>
                <?php endforeach?>
                </span>
                </div>
                <span class="arrow-1"></span>
            </div>
        </div>
        <?php endforeach; ?>
    	<?php endif; ?>
        <div class="Plist"></div>
        <div class="index-more"><a href="<?php echo $site_url;?>/buying">更多内容</a></div>
        </div>
</div>
<script type="text/javascript">
<!--
function load_more(obj,arg){
    var times = arguments[2] ? arguments[2] : 1;
    newtimes = times+1;

    //alert(jQuery(obj).parent().prev().attr('class'));
    var obj_indexmore = jQuery(obj).parent();
    obj_indexmore.html('正在加载');
    //return;
    jQuery.get("<?php echo $template_dir_uri; ?>/ctrl.php", {
        act:"load_more_getpost",arg:arg,times:times
    }, function(data) {
        if (data.status==1) { 
            obj_indexmore.prev().append(data.out_data);
            obj_indexmore.html('<dd onclick="load_more(this,\''+arg+'\','+newtimes+');">更多内容</dd>');
            
        }else{
            alert('err');
        }
    }, "json");
}
-->
</script>
<?php get_sidebar('index');?>
</div>

<?php get_footer();?>

<?php
function posts_to_html_lb($posts,$rate){
    if( $posts ):
    global $post;
	$site_url = site_url();
    $rt_arr = '';
    foreach( $posts as $kk => $post ) : setup_postdata( $post );
        $brief = $post->brief?$post->brief:$post->post_excerpt;
        $link = !empty($post->link)?$post->link:get_permalink();
        //$brief = get_first_paragraph($post->post_content,250);
        $rt_arr .= '<div';
        if($kk!=0)$rt_arr .= ' class="hide"';
        $rt_arr .= '>';
        $rt_arr .= '<span class="banner-left-img">';
        
        $thumb_info = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID));
        $thumb_info[0] = str_replace("http://www.aitecar.com/wp-content/uploads/","http://cdn.aitecar.com/wp-content/uploads/",$thumb_info[0]);
        // $thumb_info[0] = str_replace($site_url,"http://cdn.aitecar.com",$thumb_info[0]);
        $posts[$kk]->thumb_url = $thumb_info[0];
        $thumb_info[0] = str_replace(".jpg",".jpg?imageMogr2/thumbnail/".(640*$rate)."x/gravity/South/crop/".(640*$rate)."x".(400*$rate),$thumb_info[0]);
            
        $rt_arr .= '<a href="'.$link.'" target="_blank"><img src="'.$thumb_info[0].'" width="640" height="400"  alt="'.$post->post_title.'" title="'.$post->post_title.'"/>';
        $rt_arr .= '</a>';
        $rt_arr .= '</span>';
        $rt_arr .= '<span class="banner-right-text">';
        $rt_arr .= '<a href="'.$link.'" target="_blank">';
        $rt_arr .= '<h2 class="banner-title">'.$post->post_title.'</h2>';
        $rt_arr .= '<h6 class="banner-con">'.$brief.'</h6>';
        $rt_arr .= '<p class="rader-more">阅读全文</p>';
        $rt_arr .= '</a>';
        $rt_arr .= '</span>';
        $rt_arr .= '</div>';
    endforeach; 
    
    return $rt_arr;
    endif;
}
?>