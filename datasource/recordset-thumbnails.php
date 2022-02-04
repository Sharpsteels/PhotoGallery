<?php

// This recordset is for the THUMBNAILS GALLERY page

$content = array (  // an array is a set of related information. Ex: multiple pieces of info about one photo
                    // $content is the "parent" array, as it holds several other arrays

array (   // the first array inside "content":: child array #1
		'id'                => "1",
    'metatitle'         => "Sunlight On A Fall Tree",
    'metadescription'   => "Sunlight shimmering on a fall tree at John Abbott College",
		'h1title'           => "Sunlight On a Fall Tree",
		'imagepath'         => "/img/thumbs/armstrong-ethan-004.jpg",
		'caption'           => "Sunlight shimmering on a fall tree at John Abbott College",
    'copyright'         => "&copy Ethan Armstrong, 2021"),  // last line ends with a ),

  array (  // the second array inside "content": child array #2
      'id'                => "2",
      'metatitle'         => "The Bird House",
      'metadescription'   => "A bird house on a wooden pole in L'Orignal",
      'h1title'           => "The Bird House",
      'imagepath'         => "/img/thumbs/IMG_0770.jpg",
      'caption'           => "A bird house on a wooden pole in L'Orignal",
      'copyright'         => "&copy Ethan Armstrong, 2021"),

    array (  // the third array inside "content": child array #3
      'id'                => "3",
      'metatitle'         => "Purple Plants",
      'metadescription'   => "A cluster of purple plants in a garden",
      'h1title'           => "Purple Plants",
      'imagepath'         => "/img/thumbs/IMG_0771.jpg",
      'caption'           => "A cluster of purple plants in a garden",
      'copyright'         => "&copy Ethan Armstrong, 2021"),    


  // You can add as many arrays as you want thumbnails on the gallery page    

);  // last line closes the parent $content array
?>