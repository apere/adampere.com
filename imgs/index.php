  <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>[ adam m pere ]</title>
    <link rel="stylesheet" type="text/css" href="/assets/css/all.css">
    <style>
      img {
        max-width: 95%;
      }
      h4 {
        margin-top: 2rem;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <nav class="sidebar1">
        <ul>
          <li><a href="/">adampere.com</a></li>
          <li><a href="/about/">about</a></li>
          <li><a href="/contact/">contact</a></li>
          <li><a href="/projection/">projection</a></li>
          <li><a href="/video/">video</a></li>
          <li><a href="/photo/">photography</a></li>
          <li><a href="/digi/">digital</a></li>
          <li><a href="/phys/">physical computing</a></li>
          <li><a href="/3d/">3d modeling</a></li>
          <li><a href="/graph/">graphic design</a></li>
          <li><a href="/book/">book</a></li>
        </ul>
      </nav>
      <article class="content">
        <h1 class="right">
           
          images - [ adam m pere ]
        </h1>
        <ul>
          <li>
            a collection of images hosted by adam, for adam
          </li>
          <li>
            adam makes no claim that these images were made by adam (or belong to adam)
          </li>
          <li>
            they're not for you (if you are not adam)
          </li>
          <li>
            they're not, not for you (if you are or are not adam)
          </li>
          <li>
            adam just wanted an easy place to host images that don't belong on adam's portfolio
          </li>
          <li>
            these images are in no specific order
          </li>
          <li>
            well, adam believes it defaults to alphabetical but that's not super helpful, so adam is calling the order arbitrary
          </li>
          <li>
            adam will do his best not to have any information that is too private
          </li>
          <li>
            but if adam does, please let him know
          </li>
          <li>
            because of the nature of this page, there is no real optimization happening
          </li>
          <li>
            adam hasn't added any pagination (for now)
          </li>
          <li>
            so load time may vary
          </li>
        </ul>
        <br>
        <hr>
        <div class="table-wrapper">
          <?php
          
          if ($handle = opendir('.')) {
              $i = 1;
              while (false !== ($entry = readdir($handle))) {

                  if ($entry != "." && $entry != ".." && $entry != "index.php") {
                      echo '<div class="cell">';
                      echo '<a class = "img-container" href = "http://adampere.com/imgs/';
                      echo $entry;
                      echo '">';
                      echo '<h4>';
                      echo $i ;
                      echo '. ';
                      echo $entry;
                      echo '</h4>';
                      echo '<img src ="http://adampere.com/imgs/';
                      echo $entry;
                      echo '" alt ="';
                      echo $entry;
                      echo '"></a>';
                      echo '<div class = "proj-name">';
                      echo "";
                      echo '</div></div>';
                    $i = $i + 1;
                  }
              }

              closedir($handle);
          }
          ?>
        </div>
      </article>
      <footer>
        <aside>
          <h4><a href="/"><img id="Insert_logo" src="/assets/img/logo.gif" alt="Insert Logo Here" name="Insert_logo"></a>[adam m pere]</h4>
        </aside>
      </footer>
      <div class="clear"></div>
    </div>
  </body>
</html>