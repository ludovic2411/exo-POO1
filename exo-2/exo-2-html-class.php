<?php
class Html{
  public function meta_charset($modify_datas){
    return '<meta charset="'.$modify_datas.'">';
  }
  public function meta_viewport_device_width(){
    return '<meta name="viewport" content="width=device-width">';
  }
  public function meta_viewport_initial_scale(){
    return '<meta name="viewport" content="width=device-width, initial-scale=1">';
  }
  public function link( $link_type,$modify_datas){
    return '<link rel="'.$link_type.'" href="'.$modify_datas.'">';
  }
  public function link_css($modify_datas){
    return '<link rel="stylesheet" href="'.$modify_datas.'">';
  }
  public function img($modify_datas, $alt){
    return '<img src="'.$modify_datas.'" alt="'.$alt.'">';
  }
  public function a_href($link, $content){
    return '<a href="'.$link.'">"'.$content.'"</a>';
  }
}

 ?>
