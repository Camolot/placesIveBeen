<?php
    class Place {

      private $img_path;
      private $place;
      private $desc;

      function __construct($img_path,$place,$desc)
      {
        $this->img_path = $img_path;
        $this->place = $place;
        $this->desc = $desc;
      }

      function setImgPath($new_img_path)
      {
        $this->img_path = $new_img_path;
      }

      function setPlace($new_place)
      {
        $this->place = (string) $place;
      }

      function setDesc($new_desc)
      {
        $this->desc = (string) $new_desc;
      }

      function getImgPath()
      {
        return $this->img_path;

      }

      function getPlace()
      {
        return $this->place;
      }

      function getDesc()
      {
        return $this->desc;
      }


    }

?>
