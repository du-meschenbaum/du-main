<!doctype html>
<!--[if IE 9]>
<html class="lt-ie10" lang="en"> <![endif]-->
<html class="no-js" lang="en" data-useragent="Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Foundation Template | So Boxy</title>
  <meta name="description" content="Documentation and reference library for ZURB Foundation. JavaScript, CSS, components, grid and more."/>
  <meta name="author" content="ZURB, inc. ZURB network also includes zurb.com"/>
  <meta name="copyright" content="ZURB, inc. Copyright (c) 2013"/>
  <link rel="stylesheet" href="../assets/css/templates/foundation.css"/>
  <script src="../assets/js/modernizr.js"></script>
</head>
<body>
<div class="row">
  <div class="large-12 columns">

    <ul class="button-group">
      <li><a href="#" class="button">Nav Item 1</a></li>
      <li><a href="#" class="button">Nav Item 2</a></li>
      <li><a href="#" class="button">Nav Item 3</a></li>
    </ul>


    <div class="row">
      <div class="large-6 columns">
        <img src="http://placehold.it/500x500&text=Image"><br>
      </div>
      <div class="large-6 columns">
        <h3 class="show-for-small">Header
          <hr/>
        </h3>
        <div class="panel">
          <h4 class="hide-for-small">Header
            <hr/>
          </h4>
          <h5 class="subheader">Fusce ullamcorper mauris in eros dignissim molestie posuere felis blandit. Aliquam erat
            volutpat. Mauris ultricies posuere vehicula. Sed sit amet posuere erat. Quisque in ipsum non augue euismod
            dapibus non et eros. Pellentesque consectetur tempus mi iaculis bibendum. Ut vel dolor sed eros tincidunt
            volutpat ac eget leo.</h5>
        </div>
        <div class="row">
          <div class="large-6 small-6 columns">
            <div class="panel">
              <h5>Header</h5>
              <h6 class="subheader">Praesent placerat dui tincidunt elit suscipit sed.</h6>
              <a href="#" class="small button">BUTTON TIME!</a>
            </div>
          </div>
          <div class="large-6 small-6 columns">
            <div class="panel">
              <h5>Header</h5>
              <h6 class="subheader">Praesent placerat dui tincidunt elit suscipit sed.</h6>
              <a href="#" class="small button">BUTTON TIME!</a>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="row">
      <div class="large-12 columns">
        <div class="radius panel">
          <form>
            <div class="row collapse">
              <div class="large-10 small-8 columns">
                <input type="text"/>
              </div>
              <div class="large-2 small-3 columns">
                <a href="#" class="postfix button expand">Search</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>


    <div class="row">
      <div class="large-12 show-for-small columns">
        <h3>Header</h3>
        <hr>
      </div>
      <div class="large-3 small-6 columns">
        <img src="http://placehold.it/500x500&text=Thumbnail">

        <div class="panel">
          <p>Description</p>
        </div>
      </div>
      <div class="large-3 small-6 columns">
        <img src="http://placehold.it/500x500&text=Thumbnail">

        <div class="panel">
          <p>Description</p>
        </div>
      </div>
      <div class="large-3 small-6 columns">
        <img src="http://placehold.it/500x500&text=Thumbnail">

        <div class="panel">
          <p>Description</p>
        </div>
      </div>
      <div class="large-3 small-6 columns">
        <img src="http://placehold.it/500x500&text=Thumbnail">

        <div class="panel">
          <p>Description</p>
        </div>
      </div>
    </div>


    <footer class="row">
      <div class="large-12 columns">
        <hr/>
        <div class="row">
          <div class="large-6 columns">
            <p>&copy; Copyright no one at all. Go to town.</p>
          </div>
          <div class="large-6 columns">
            <ul class="inline-list right">
              <li><a href="#">Link 1</a></li>
              <li><a href="#">Link 2</a></li>
              <li><a href="#">Link 3</a></li>
              <li><a href="#">Link 4</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

  </div>
</div>
<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/templates/foundation.js"></script>
<script>
  $(document).foundation();

  var doc = document.documentElement;
  doc.setAttribute('data-useragent', navigator.userAgent);
</script>
</body>
</html>