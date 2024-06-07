<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mastering php </title>
</head>
<body>
    
<?php
  $books  = [
      'Dertogada',
      'Fikir eske mekabir',
      'yeogaden dimetoch'
  ];
 
     
?>
     <ul>
        <?php
        //   foreach($books as $book){
        //     echo "<li>".  $book. "</li>";
        //   }
        ?>
        <?php foreach($books as $book) : ?>
           <li><?= $book?></li>
           <?php endforeach; ?>
     </ul>

     <!-- assocaitive array -->
    <?php 
      $medias = [
          [
            'name'=> 'facebooks',
            'website' => 'https://www.facebook.com',
          ],
          [
            'name' => 'titkok',
            'website'=> 'https://titkok.com',
          ],
          [
           'name'=> 'google',
           'website'=>'https://www.google.com'
          ]
      ]
    
    ?>
       <ul>
           <?php foreach($medias as $media) :?>

             <li>
                <a  blank="" href="<?=$media['website'] ?>"> <?= $media['name']?></a>
             </li>
            <?php endforeach; ?>
       </ul>
</body>
</html>
