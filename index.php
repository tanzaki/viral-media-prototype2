<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="app.css">
<!--using short-code `bs3-cdn:css` then tab for declare this page use Bootstrap's styles -->
<body>
<!--using `bs3-navbar` for auto generate Bootstrap 3 Navigation Bar-->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
        </ul>
        <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Link</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li><a href="#">Separated link</a></li>
                </ul>
            </li>
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>
<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <!-- using short-code `lorem` for generate random, simply, dummy text -->
            <?php
            $articles_json = file_get_contents('media-items.json');
            $articles = (json_decode($articles_json));
            foreach ($articles as $article){
                var_export($article);
                break;
            }
            ?>
        </div>
        <div class="col-sm-4">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci dolor impedit nam nesciunt, omnis tempore veniam. Deserunt, dolores eos, error facere, fugiat illum magnam maiores optio porro quos saepe sequi!
        </div>
    </div>
</div>
</body>
