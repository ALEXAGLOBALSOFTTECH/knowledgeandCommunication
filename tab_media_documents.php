<?php
/* Template Name: Tab Media Documents */ 
if ( is_user_logged_in() ) { ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/all.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.theme.default.min.css" rel="stylesheet">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/font.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/evolution.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
   
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/wcc_custom_style.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/media.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/jpg" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style_new.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/select2/select2.css" rel="stylesheet">
</head>
<body class="main_all_bg_Sec">
<?php include('user-sidebar.php');?>
    <div class="col-xl-12 my-resources-temp mt-4">
        <div class="row justify-content-end temp-my-resources">
        <div class="col-xl-11 col-lg-11 col-md-11 col-10 d-flex align-items-center flex-wrap">
            <?php include('user_topbar.php')?>
                
        </div>
        </div>
        <div class="row justify-content-end top-space">
            <div class="col-xl-11 col-lg-11 col-md-11 col-10">
                <div class="d-lg-flex d-lg-flex align-items-center justify-content-lg-between w-100">
                    <div class="linked_blog">
                        <ul class="nav nav-pills justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link " href="https://knowledge.communication.worldcares.org/all-resources/">
                                    <i class="now-ui-icons objects_umbrella-13"></i> All
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="https://knowledge.communication.worldcares.org/resources-created-by-me/">
                                    <i class="now-ui-icons shopping_cart-simple"></i> Created By Me
                                </a>
                            </li>
                            <li class="nav-item ">
                                 <a class="nav-link active" href="https://knowledge.communication.worldcares.org/media-documents/">
                                
                                    <i class="now-ui-icons shopping_shop"></i> Media or Document
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="btn_list_blog">
                        <a href="<?php echo get_site_url(); ?>/my-resource-create-resources/">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plus_icon.png" class="img-fluid mr-2"> Create New Resource-88
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-end main-table-content">
            <div class="col-xl-11 col-lg-11 col-md-11 col-10">
                <div class=" col-xl-12 d-flex align-items-center justify-content-between flex-wrap px-0">
    <div class="linked_blog linked_blog_nobg mb-4 ">

        <ul class="nav nav-pills justify-content-center" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#all-media-docuent"
                    role="tab">
                    <i class="now-ui-icons objects_umbrella-13"></i> All-4454
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#uploaded-by-me" role="tab">
                    <i class="now-ui-icons shopping_cart-simple"></i> Uploaded by Me
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#saved" role="tab">
                    <i class="now-ui-icons shopping_shop"></i> Saved
                </a>
            </li>
        </ul>

    </div>
    <div class="btn_list_blog btn_short_list my-lg-4 my-2 mr-lg-4 mr-2">
        <button class="btn_short_list" type="button" data-toggle="modal"
            data-target="#modalupload">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plus_icon.png"
                class="img-fluid mr-2">Upload New File
        </button>
    </div>


    <div class="tab-content w-100">
        <div class="tab-pane active" id="all-media-docuent" role="tabpanel">
            <div class="global-table">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Media or Document</th>
                                <th>Tags</th>
                                <th>Date</th>
                                <th>Description</th>
                                <th>Group</th>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                            </tr>
                            <?php 
                             $current_user_id = get_current_user_id();
                             $allResourceImg = get_posts( array(
                                                             'post_type'      => 'resourcemedia',
                                                             'post_status'    => 'publish',
                                                              'numberposts' => 1000
                                                        ) );   




                            if(!empty($allResourceImg)){
                            foreach($allResourceImg as $resourceImgVal){

                            $feat_image = wp_get_attachment_url( get_post_thumbnail_id($resourceImgVal->ID) );
                            if(empty($feat_image)){                                                        
                                $feat_image= get_template_directory_uri()."/assets/images/range_1.png";
                            }                                            
                         
                            $member_id = $resourceImgVal->post_author;
                            $gid = get_post_meta($resourceImgVal->ID, 'resourcemedia_group_id', true );
                            $args = array(
                                                'post_type' => 'groups',
                                                'post__in' => array($gid)
                                            );

                            $groupData = get_posts($args);
                            //$groupData =$groupData[0];
                            $otherDetails =  get_post_meta($resourceImgVal->ID,'rf_publish',true);
                       

                            ?>
                            <tr class="bg-color">
                                <td style="width:10%"><?php echo @$resourceImgVal->post_title;?></td>
                                <td style="width:16%">
                                    <div class="images">
                                        <img src="<?php echo $feat_image; ?>" title="" width="" height="" alt="">
                                    </div>
                                </td>
                                <td style="width:21%">
                                    <div class="tag">
                                        <?php
                                        $tags = get_post_meta($resourceImgVal->ID, 'resource_ld_group_tag');
                                        $tagHtml = '';
                                        $tagHtml1 = '';
                                        if(!empty($tags[0])){
                                            foreach($tags[0] as $tag){
                                                $tagHtml1 .='<div class="badge"><span>'.$tag.'</span></div>';
                                                $tagHtml .=$tag.',';
                                            }
                                        }
                                        echo $tagHtml1;
                                        ?>
                                    </div>
                                    
                                </td>
                                <td style="width:15%">
                                    <span><?php echo date('Y-m-d',strtotime($resourceImgVal->post_date))?></span>
                                </td>
                                <td>
                                    <p> <?php  echo mb_strimwidth($resourceImgVal->post_content, 0, 60, '...');?></p>
                                </td>
                                <td>
                                    <?php echo 'group data'; ?>
                                </td>
                                    
                                 
                                
                                <td>
                                    <div class="d-flex w-100">
                                        <div>
                                           <!--  <a href="javascript:void(0);" class="d-block saveMedia" data-id="<?//php echo $resourceImgVal->ID?>" data-gid="<?//php echo $gid?>">
                                                <div class="orange-box">
                                                   <i class="fa fa-bookmark" aria-hidden="true"></i>
                                                </div>
                                            </a>  -->      
                                            <button class="btn btn-primary save saveMedia" data-id="<?php echo $resourceImgVal->ID?>" data-img=""><i class="fa fa-bookmark" aria-hidden="true"></i></button> 
                                        </div>
                                        <div class="mx-3">
                                            <a href="javascript:void(0);" class="d-block downloadF" data-img="<?php echo $feat_image ?>">
                                                <div class="orange-box">
                                                    <i class="fa fa-download" aria-hidden="true"></i>
                                                </div>
                                            </a>        
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);" class="d-block viewDetails" type="button"
                                            data-toggle="modal"
                                            data-target="#modaldocumentview" 
                                            data-title="<?php echo $resourceImgVal->post_title; ?>" 
                                            data-img="<?php echo $feat_image ?>" 
                                            data-tag="<?php echo rtrim($tagHtml, ','); ?>"  
                                            data-desc="<?php echo $resourceImgVal->post_content; ?>" 
                                            data-group="<?php echo @$groupData->post_title; ?>" 
                                            data-date="<?php echo date('Y-m-d',strtotime($resourceImgVal->post_date)); ?>" >
                                                <div class="orange-box view-box">
                                                    <p>View</p>
                                                </div>
                                            </a>        
                                        </div>
                                    </div>
                                </td>
                            </tr>


                             <?php }
                            } else { ?>
                            <tr class="bg-color my-3">
                               <td  colspan="8" class="text-center">No Record found</td> 
                            </tr>
                            <?php } ?>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="uploaded-by-me" role="tabpanel">
            <div class="global-table">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Media or Document</th>
                                <th>Tags</th>
                                <th>Date</th>
                                <th>Description</th>
                                <th>Group</th>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                 $current_user_id = get_current_user_id();
                                 $allResourceImg = get_posts( array(
                                                                 'post_type'      => 'resourcemedia',
                                                                 'post_status'    => 'publish',
                                                                  'numberposts' => 1000,
                                                                   'author'        =>  $current_user_id,
                                                            ) );                      

                            if(!empty($allResourceImg)){
                            foreach($allResourceImg as $resourceImgVal){

                            $feat_image = wp_get_attachment_url( get_post_thumbnail_id($resourceImgVal->ID) );
                            if(empty($feat_image)){                                                        
                                $feat_image= get_template_directory_uri()."/assets/images/range_1.png";
                            }                                            
                         
                            $member_id=$resourceImgVal->post_author;
                            $gid = get_post_meta($resourceImgVal->ID, 'resourcemedia_group_id', true );
                            $args = array(
                                                'post_type' => 'groups',
                                                'post__in' => array($gid)
                                            );

                            $groupData = get_posts($args);
                            $groupData =$groupData[0];
                        
                            ?>
                            <tr class="bg-color">
                                <td style="width:10%"><?php echo $resourceImgVal->post_title?></td>
                                <td style="width:16%">
                                    <div class="images">
                                        <img src="<?php echo $feat_image; ?>" title="" width="" height="" alt="">
                                    </div>
                                </td>
                                <td style="width:15%">
                                    <div class="tag">
                                        <?php

                                        $tags = get_post_meta($resourceImgVal->ID, 'resource_ld_group_tag');
                                        $tagHtml = '';
                                        $tagHtml1 = '';
                                        if(!empty($tags[0])){
                                            foreach($tags[0] as $tag){
                                                $tagHtml1 .='<div class="badge"><span>'.$tag.'</span></div>';
                                                $tagHtml .=$tag.',';
                                            }
                                        }
                                        echo $tagHtml1;
                                        ?>
                                    </div>
                                    
                                </td>
                                <td>
                                    <span><?php echo date('Y-m-d',strtotime($resourceImgVal->post_date))?></span>
                                </td>
                                <td>
                                    <p> <?php  echo mb_strimwidth($resourceImgVal->post_content, 0, 60, '...');?></p>
                                </td>
                                <td><?php echo @$groupData->post_title;?></td>
                                <td>
                                    <div class="d-flex w-100">
                                        <div>
                                          <!--   <a href="javascript:void(0);" class="d-block saveMedia" data-id="<?//php echo $resourceImgVal->ID?>" data-gid="<?//php echo $gid?>">
                                                <div class="orange-box">
                                                    <i class="fa fa-bookmark" aria-hidden="true"></i>
                                                </div>
                                            </a>  -->   
                                            <button class="btn btn-primary save saveMedia" data-id="<?php echo $resourceImgVal->ID?>" data-img=""><i class="fa fa-bookmark" aria-hidden="true"></i></button>    
                                        </div>
                                        <div class="mx-3">
                                            <a href="javascript:void(0);" class="d-block downloadF" data-img="<?php echo $feat_image ?>">
                                                <div class="orange-box">
                                                    <i class="fa fa-download" aria-hidden="true"></i>
                                                </div>
                                            </a>        
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);" class="d-block viewDetails" data-toggle="modal"
                                            data-target="#modaldocumentview" data-id="<?php echo $resourceImgVal->ID?>"

                                            data-title="<?php echo $resourceImgVal->post_title; ?>" 
                                            data-img="<?php echo $feat_image ?>" 
                                            data-tag="<?php echo rtrim($tagHtml, ','); ?>"  
                                            data-desc="<?php  echo mb_strimwidth($resourceImgVal->post_content, 0, 60, '...');?>" 
                                            data-group="<?php echo @$groupData->post_title; ?>" 
                                            data-date="<?php echo date('Y-m-d',strtotime($resourceImgVal->post_date)); ?>" >
                                                <div class="orange-box view-box">
                                                    <p>View</p>
                                                </div>
                                            </a>        
                                        </div>
                                        <div class="custom-dropdown d-flex align-items-center ml-3">
                                            <div class="dropdown">
                                                <a  href="javascript:void(0);" class="" type="button" id="dropdownMenuButtons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButtons">
                                                    <a class="dropdown-item editResource" href="javascript:void(0)" data-toggle="modal"
                                                            data-target="#editModal" data-id="<?php echo $resourceImgVal->ID?>"
                                                             data-title="<?php echo $resourceImgVal->post_title; ?>" 
                                                            data-img="<?php echo $feat_image ?>" 
                                                            data-tag="<?php echo rtrim($tagHtml, ','); ?>"  
                                                            data-desc="<?php echo $resourceImgVal->post_content; ?>" 
                                                            data-group="<?php echo @$groupData->post_title; ?>" 
                                                            data-date="<?php echo date('Y-m-d',strtotime($resourceImgVal->post_date)); ?>">Edit Document</a>
                                                    <a class="dropdown-item editResource deleteMedia" href="javascript:void(0)"
                                                            data-toggle="modal" 
                                                            data-id="<?php echo $resourceImgVal->ID?>"
                                                             data-title="<?php echo $resourceImgVal->post_title; ?>" 
                                                            data-img="<?php echo $feat_image ?>" 
                                                            data-tag="<?php echo rtrim($tagHtml, ','); ?>"  
                                                            data-desc="<?php echo $resourceImgVal->post_content; ?>" 
                                                            data-group="<?php echo @$groupData->post_title; ?>" 
                                                            data-date="<?php echo date('Y-m-d',strtotime($resourceImgVal->post_date)); ?>">Delete Document</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>


                            <?php  }
                            } else{ ?>
                                <tr><td colspan="15">No Record found</td></tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="saved" role="tabpanel">
            <div class="global-table">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Media or Document</th>
                                    <th>Tags</th>
                                    <th>Date</th>
                                    <th>Description</th>
                                    <th>Group</th>
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                global $wpdb;
                                $current_user_id = get_current_user_id();
                                $sql = "SELECT resource_id FROM wp_saved_resources WHERE user_id = '".$current_user_id."'";
                                $saveResourceMedia = $wpdb->get_results( $sql,ARRAY_A); 


                                if(!empty($saveResourceMedia)){
                                foreach($saveResourceMedia as $resource){

                                    $rid = $resource['resource_id'];

                      
                                    $resourceImgVal = get_post( $rid ); 
                                    $feat_image = wp_get_attachment_url( get_post_thumbnail_id($resourceImgVal->ID) );
                                    if(empty($feat_image)){                                                        
                                        $feat_image= get_template_directory_uri()."/assets/images/range_1.png";
                                    }                                            

                                    $member_id=$resourceImgVal->post_author;
                                    $gid = get_post_meta($resourceImgVal->ID, 'resourcemedia_group_id', true );

                                    $args = array(
                                    'post_type' => 'groups',
                                    'post__in' => array($gid)
                                    );

                                    $groupData = get_posts($args);
                                    $groupData =$groupData[0];

                                ?>
                                <tr class="bg-color">
                                    <td style="width:10%"><?php echo $resourceImgVal->post_title?></td>
                                    <td style="width:16%">
                                        <div class="images">
                                            <img src="<?php echo $feat_image; ?>" title="" width="" height="" alt="">
                                        </div>
                                    </td>
                                    <td style="width:15%">
                                        <div class="tag">

                                            <?php

                                            $tags = get_post_meta($resourceImgVal->ID, 'resource_ld_group_tag');
                                            $tagHtml = '';
                                            $tagHtml1 = '';
                                            if(!empty($tags[0])){
                                                foreach($tags[0] as $tag){
                                                    $tagHtml1 .='<div class="badge"><span>'.$tag.'</span></div>';
                                                    $tagHtml .=$tag.',';
                                                }
                                            }
                                            echo $tagHtml1;
                                            ?>
                                        </div>
                                        
                                    </td>
                                    <td>
                                        <span><?php echo date('Y-m-d',strtotime($resourceImgVal->post_date))?></span>
                                    </td>
                                    <td>
                                        <p> <?php  echo mb_strimwidth($resourceImgVal->post_content, 0, 60, '...');?></p>
                                    </td>
                                    <td><?php echo @$groupData->post_title;?></td>
                                    <td>
                                        <div class="d-flex w-100">
                                            
                                            <div class="mx-3">
                                                <a href="javascript:void(0);" class="d-block downloadF" data-img="<?php echo $feat_image ?>">
                                                    <div class="orange-box">
                                                        <i class="fa fa-download" aria-hidden="true"></i>
                                                    </div>
                                                </a>        
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);" class="d-block viewDetails" data-toggle="modal"
                                                data-target="#modaldocumentview" data-title="<?php echo $resourceImgVal->post_title; ?>" 
                                                data-img="<?php echo $feat_image ?>" 
                                                data-tag="<?php echo rtrim($tagHtml, ','); ?>"  
                                                data-desc="<?php  echo mb_strimwidth($resourceImgVal->post_content, 0, 60, '...');?>" 
                                                data-group="<?php echo @$groupData->post_title; ?>" 
                                                data-date="<?php echo date('Y-m-d',strtotime($resourceImgVal->post_date)); ?>" >
                                                    <div class="orange-box view-box">
                                                        <p>View</p>
                                                    </div>
                                                </a>        
                                            </div>
                                            
                                        </div>
                                    </td>
                                </tr>
                                <?php  }
                                } else { ?>
                                <tr>
                                    <td colspan="15">No Record found</td></tr>
                                <?php  }
                                ?>
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>

    <?php 
    $tagList = get_terms(array('taxonomy' => 'ld_group_tag','hide_empty' => false));

    

     $searchArg= array(); 
                        $searchArg['post_type'] = 'groups';
                        $searchArg['post_status'] = 'publish';
                        $searchArg['numberposts'] = 1000;
     $allGroups = get_posts($searchArg);
    ?>

    <!-- Create new Modal  -->
        <div class="modal fade document-upload" id="modalupload" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog mr-short-by modal-xl modal-dialog-centered create_tickit modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title text-center w-100">Upload Media or Document</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/close_modal.png">
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">  
                                <form method="POST" class="form-upload  resources-modal-page float" enctype="multipart/form-data">
                                    <input type="hidden" name="ugroup_id" value="<?php echo $post->ID?>" />
                                    <input type="hidden" name="ums_create_media" value="ums_create_media" />
                                    <input type="hidden" name="resource_image_nonce" value="<?php echo wp_create_nonce('resource_image_nonce'); ?>" />
                                    <div class="row">
                                        <div class="col-lg-12 col-12">
                                            <div class="mb-3">
                                                <div class="drag-drop-images text-center image-upload-box"> 
                                                    <div class="avatar-edit">
                                                        <input type="file" id="fileUpload" name="resource_media_img" accept=".png, .jpg, .jpeg" required>
                                                        <label for="fileUpload" class="d-flex align-items-center justify-content-center">
                                                            <div>
                                                                <div class="icon">
                                                                    <i class="fa fa-upload" aria-hidden="true"></i>
                                                                </div>
                                                                <p class="pt-4">Drop your Image here, or <b>Browse</b></p>
                                                                <span class="d-block pt-1">Support JPG, JPEG, Png, MP4</span>    
                                                            </div>
                                                            
                                                        </label>
                                                    </div>
                                               </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-12">
                                           <div class="avatar-upload mb-3">
                                                <div class="avatar-preview">
                                                    <div id="imagePreviewFile" class="imagePreviewFile" style="background-image: url(https://via.placeholder.com/120x88);"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-12">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="title" name="title"  placeholder="Enter here" id="title" name="title"  required >
                                                <label for="floatingInput">Document title</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-12">
                                            <div class="mb-3">
                                                   <select class="js-select2" name="states[]" multiple id="tags" name="tags[]">
                                                        <option value="AL">Alabama</option>
                                                        <option value="WY">Wyoming</option>
                                                    </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-12">
                                            <div class="form-floating mb-3">
                                                <textarea class="form-control" placeholder="Enter here" id="mr_description" name="mr_description"  style="height: 100px" required></textarea>
                                                <label for="floatingInput">Media / Document Description</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                                <div class="row">
                                                    <div class="col-12 col-lg-12 mb-3">
                                                        <div class="form-check d-flex align-items-center">
                                                            <label class="form-check-label">
                                                                <input onclick="show32();" type="radio" <?php echo (get_post_meta($rf_id,'rf_publish',true)=="Select From My Group")?"CHECKED='CHECKED'":""?> class="form-check-input">Select From My Joined Group
                                                            </label>
                                                        </div>
                                                        <div class="form-check d-flex align-items-center">
                                                           
                                                            <div id="div51" class="hides"> 
                                                                <select class="form-control mt-3 border" name ="rf_publish2">
                                                                    <option value='' selected>--Select any group--</option>
                                                                     <?php $joinGrp = learndash_get_users_group_ids( $current_user_id);
                                                                          $joinedArg= array(); 
                                                                            $joinedArg['post_type'] = 'groups';
                                                                            $joinedArg['post_status'] = 'publish';
                                                                            $joinedArg['paged'] = $currentPage;
                                                                            $joinedArg['posts_per_page'] = 50;
                                                                            $joinedArg['post__in'] = $joinGrp;
                                                                            $myJoinedGroups = get_posts( $joinedArg );

                                                                    ?>

                                                                     <?php foreach($myJoinedGroups as $joinedGrpupVal){
                                                                           $author_id=$joinedGrpupVal->post_author;
                                                                            if($current_user_id!=$author_id){ ?>
                                                                          <option value = "<?php echo $joinedGrpupVal->ID ?>" ><?php echo $joinedGrpupVal->post_title ?></option>
                                                                    <?php }} ?>     


                                                              
                                                                </select>
                                                            </div>    
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-12 mb-3">
                                                        <div class="form-check d-flex align-items-center">
                                                            <label class="form-check-label">
                                                                <input onclick="show21();" type="radio" <?php echo (get_post_meta($rf_id,'rf_publish',true)=="Select From My Group")?"CHECKED='CHECKED'":""?> class="form-check-input" name="rf_publish">Select From My Group
                                                            </label>
                                                        </div>
                                                        <div id="div41" class="hides">
                                                        <select class="form-control mt-3 border" name ="rf_publish">
                                                            <option value='' selected>--Select any group--</option>
                                                            <?php
                                                                $current_user_id = get_current_user_id();  
                                                                $args = array(
                                                                        'numberposts'   => -1,
                                                                        'post_type'     => 'groups',
                                                                        'post_status'   => 'publish',
                                                                         'author'       =>  $current_user_id
                                                                    );
                                                                   //$all_groups = learndash_get_users_group_ids($current_user_id);
                                                                    $all_groups = get_posts( $args );
                                                                   // echo "<pre>";
                                                                    //print_r($all_groups);       
                                                            ?>
                                                            <?php foreach($all_groups as $value){ ?>
                                                              <option value = "<?php echo $value->ID ?>" ><?php echo $value->post_title ?></option>
                                                            <?php } ?>      
                                                        </select>    
                                                    </div>
                                                    </div>
                                                    <div class="col-12 col-lg-12 mb-3">
                                                        <div class="form-check d-flex align-items-center">
                                                            <label class="form-check-label">
                                                                <input  onclick="show12();" type="radio" <?php echo (get_post_meta($rf_id,'rf_publish',true)=="all_users")?"CHECKED='CHECKED'":""?> class="form-check-input" name="rf_publish" value="all_rrn_users">All RRN Users
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                        <div class="col-lg-12 col-12 d-flex justify-content-center">
                                            <button class="btn btn-primary btn_update" title="Upload" id="Upload" type="submit">Upload</button>
                                        </div>
                                </form> 
                            </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
</div>
            </div>
        </div>
    </div>
    <?php include('common_user_footer.php')?>
    <!--short by filter modal-->
    <?php 
         $city_list = $wpdb->get_results( "SELECT distinct(meta_value) FROM wp_postmeta WHERE meta_key = 'resources_city'");
         
        


   /*$allCities = !empty($allCities) ? array_map(function($item) {
            $item->city = preg_replace('/[^A-Z a-z0-9]/', '', $item->city);
            return $item;
        }, $allCities) : []; */   
    //     $city_list = $wpdb->get_results("SELECT * FROM `wp_cities`");
    
    ?>

   

        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog mr-short-by modal-xl modal-dialog-centered create_tickit modal-dialog-scrollable custom-modal-ap" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h4>Short by</h4> -->
                    <div class="d-flex justify-content-between w-100 align-items-center">
                        <div class="modal-title">
                            <h4>Filter by</h4>
                        </div>
                        <div>
                            <div class="filter-btn">
                                <a class="btn  btn-primary" href="javascript:void(0);" title="Reset Filter">Reset Filter</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-body">   
                    <form class="" method="get" class="p-0 m-0">
                        <div class="row m-0">
                            <div class="col-lg-12 col-12">
                                <div class="form-group">
                                    <label>Filter by Date</label>
                                    <input type="date" class="form-control" id="date" name="date" placeholder="Select Date">
                                </div>
                            </div>
                            <div class="col-lg-12 col-12">
                                <div class="form-group">
                                    <label>Filter by City</label>
                                    <select class="js-select2 form-control" multiple>
                                        <?php print_r($city_list);?>
                                        
                                        <?php foreach($city_list as $value){ ?>
                                            <option value="<?php echo $value->meta_value;?>"><?php echo $value->meta_value ?></option>
                                        <?php } ?>

                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 col-12">
                                <div class="form-group">
                                    <label>Filter by Name</label>
                                    <input type="text" class="form-control" id="title" name="title"  placeholder="Type here">
                                </div>
                            </div>
                            <div class="col-lg-12 col-12 modal-btn-ap">
                                <div class="d-flex justify-content-between align-items-center w-100">
                                    <div class="left-btn w-100">
                                        <button class="btn btn-outline-primary close" title="Cancal" data-dismiss="modal">Cancel</button>
                                    </div>
                                    <div class="mx-2"></div>
                                    <div class="right-btn w-100">
                                        <button class="btn btn-primary " type="submit" title="Apply filter">Apply filter</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
               
                </div>
            </div>

        </div>
    </div>





    <!-- js links -->
<?php

$nonce = wp_create_nonce("send_group__nonce");
$ajaxUrl = admin_url('admin-ajax.php?action=send_group_request&nonce='.$nonce);
$ajaxUrlaccept = admin_url('admin-ajax.php?action=accept_group_request&nonce='.$nonce);
$feedAjaxUrl = admin_url('admin-ajax.php?nonce='.$nonce);

?>
   
    <script>
        
             var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";

        $(document).ready(function () {


            
            $(".viewDetails").click(function () {
                let title = $(this).data('title');
                let img = $(this).data('img');
                let tag = $(this).data('tag');
                let desc = $(this).data('desc');
                let group = $(this).data('group');
                let date = $(this).data('date');
                 let mresource_id = $(this).data('id');
                $('#mtitle').html(title);
                $('#mimg').attr('src',img);
                $('#mdate').html(date);
                $('#mtag').html(tag);
                $('#mgroup').html(group);
                $('#mdesc').html(desc);

                $('#mresource_id').val(mresource_id);
                 $('.deleteMedia').attr('data-id',mresource_id);
                $('#title').val(title);
                $('#tags').val(tag);
                $('#mr_group').val(group);
                $('#mr_description').val(desc);
                 $('.delbtn').css('display','none');
            });

            
            $(".editResource").click(function () {
                let title = $(this).data('title');
                let img = $(this).data('img');
                let tag = $(this).data('tag');
                let desc = $(this).data('desc');
                let group = $(this).data('group');
                let date = $(this).data('date');
                 let mresource_id = $(this).data('id');
                 $('.delbtn').css('display','block');
                $('#mtitle').html(title);
                $('#mimg').attr('src',img);
                $('.imagePreviewFile').css('background-image', 'url(' + img + ')');

                $('#mdate').html(date);
                $('#mtag').html(tag);
                $('#mgroup').html(group);
                $('#mdesc').html(desc);

                $('#mresource_id1').val(mresource_id);
                 $('.deleteMedia').attr('data-id',mresource_id);
                $('#title1').val(title);
                $('#tags1').val(tag);
                $('#mr_group1').val(group);
                $('#mr_description1').val(desc);
            });



              $(".deleteMedia").click( function(e) {
          e.preventDefault(); 
          var media_id = $(this).data("id");
          var nonce = $(this).attr("data-nonce");
          $.ajax({
             type : "post",
             dataType : "json",
             url :ajaxurl,
             data : {"action": "delete_resource_media", "media_id" : media_id, "nonce": nonce},
             success: function(response) {  
                  console.log(response);          
                  alert(response.msg);
                 $('#modalupload').modal('hide');
                
             }
          })   

       })



            
            $(".downloadF").click(function () {
                let img1 = $(this).data('img');
                 window.open(img1, '_blank');
            });

            $(".next").click(function () {
                let previous = $(this).closest("fieldset").attr('id');
                let next = $('#' + this.id).closest('fieldset').next('fieldset').attr('id');
                if (previous == "step0") {
                    console.log(previous);
                    $('#' + next).show();
                    $('#' + previous).hide();
                }
                else if (previous == "step1") {
                    $('#' + next).show();
                    $('#' + previous).hide();
                }
            });

        });
        $(".previous").click(function () {
            let current = $(this).closest("fieldset").attr('id');
            let previous = $('#' + this.id).closest('fieldset').prev('fieldset').attr('id');
            $('#' + previous).show();
            $('#' + current).hide();
        }); 
    </script>




<?php } //get_footer('new'); }?>
  <script type="text/javascript">
    function fileupload(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('.imagePreviewFile').css('background-image', 'url('+e.target.result +')');
                $('.imagePreviewFile').hide();
                $('.imagePreviewFile').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#fileUpload").change(function() {
        fileupload(this);
    });
    $("#resource_media_img").change(function() {
        fileupload(this);
    });

     $("#resource_media_img_edit").change(function() {
        fileupload(this);
    });
     
    
    $(document).ready(function() {
        $('.js-example-placeholder-multiple').select2();
         placeholder: "Tags"
    });

    $(document).ready(function() {


        $(".js-select2").select2({
            placeholder: "Pick states",
            theme: "material"
        });
        
        $(".select2-selection__arrow")
            .addClass("material-icons")
            .html("arrow_drop_down");


        /*    $(".saveMedia").click( function(e) {
              e.preventDefault(); 
              var rmid = $(this).data('id'); 
              var group_id = $(this).data('gid'); 
              $.ajax({
                 type : "post",
                 dataType : "json",
                 url :ajaxurl,
                 data : {"action": "save_resource_media", "rmid" : rmid,'group_id':group_id},
                 success: function(json ) {
                    if( json && json.msg ) {
                        alert(json.msg);   
                    }    
                 }
              })
            });*/
    });
$(".saveMedia").click( function(e) {
  e.preventDefault(); 
  var rmid = $(this).data('id'); 
  var group_id = "<?php echo $post->ID?>";
  $.ajax({
     type : "post",
     dataType : "json",
     url :"<?php echo $feedAjaxUrl?>",
     data : {"action": "save_resource_media", "rmid" : rmid,'group_id':group_id},
     success: function(json ) {
        if( json && json.msg ) {
            alert(json.msg);   
        }    
     }
  })
});
</script>


</body>
</html>