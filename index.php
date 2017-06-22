<!-- Latest compiled and minified CSS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Latest compiled and minified JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="app.css">
<!--using short-code `bs3-cdn:css` then tab for declare this page use Bootstrap's styles -->
<body class="toplevel_page_list_gags">
<!--using `bs3-navbar` for auto generate Bootstrap 3 Navigation Bar-->
<?php require_once 'navbar.php' ?>
<div class="container">
    <div class="row">
        <div class="col-sm-8" id="main_section">
            <div id="list_gags">

                <!-- using short-code `lorem` for generate random, simply, dummy text -->
                <?php
                $articles_json = file_get_contents('media-items.json');
                $articles = (json_decode($articles_json));
                foreach ($articles as $article){
                    echo "<div class='gag-item'>";
                    echo "<h4 class='gag-title'>{$article->title}</h4>";
                    if ($article->type === 'image') {
                        echo "
<div class='gag-media-content'>
<img src='{$article->media_source}'>
</div>                        
                        ";
                    }
                    echo "
<div class='counts'>
    <span class='points'>
        <a href='#'>2,728 points</a>
    </span>
     · 
    <span class='comments'>
        <a href='#'>200 comments</a>
    </span>
</div>
<div class='actions'>
    <div class='actions-in-left pull-left'>
        <span class='btn btn-default btn-like'>
            <span class='glyphicon glyphicon-chevron-up'></span>
        </span>
        <span class='btn btn-default btn-unlike'>
            <span class='glyphicon glyphicon-chevron-down'></span>
        </span>
        <span class='btn btn-default btn-comment'>
            <span class='glyphicon glyphicon-comment'></span>
        </span>
    </div>
    <div class='actions-in-right pull-right'>
        <span class='btn btn-facebook btn-share-facebook'>
            Facebook
        </span>
        <span class='btn btn-twitter btn-share-twitter'>
            Twitter
        </span>
    </div>
</div>
    <div style='clear:both'></div>
";
                    echo "
<hr>
</div>";
                }
                ?>
            </div>
        </div>
        <div class="col-sm-4" id="sidebar_section">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci dolor impedit nam nesciunt, omnis tempore veniam. Deserunt, dolores eos, error facere, fugiat illum magnam maiores optio porro quos saepe sequi!
        </div>
        <div class="col-sm-8">
            <ul class="pager">
                <li><a href="#">Previous</a></li>
                <li><a href="#">Next</a></li>
            </ul>
        </div>
    </div>
</div>
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div id="form-upload">
                    <div class="row buttons-switch-form"></div>
                    <hr>
                    <div class="forms">
                        <div role="form">
                            <h3 class="title"></h3>

                            <div class="form-group">
                                <label for="media_input"></label>
                                <input type="text" class="form-control" name="" id="media_input" placeholder="https://">
                            </div>

                            <button type="submit" class="btn btn-primary btn-submit"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<script src="app.js"></script>
</body>
