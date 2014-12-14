<?php

// this contains the application parameters that can be maintained via GUI
return array(

	// this is used in error pages
	'adminEmail'=>'webmaster@example.com',
	'commentNeedApproval'=>true,
	// maximum number of posts in feed
	'postsPerFeedCount'=>20,
        // configurations for highslide extension
        'imageHome'=>'images/',
        'imageHomeAbs'=>dirname(__FILE__).'/../../images/',
        'imageBoundingbox'=>'240',
        'imageParams'=>'style="float:left;margin:5px;"',
        'imageThumbnailBoundingBox'=>'120',
        'maxImageSize'=>512*1024, // 512KByte
        'profileImageBoundingbox'=>'60',
  // default JPEG quality for CImage
  'CImageJPEGQuality' => 90,
);
