<?php
require 'include/bootstrap.php';


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title><?=$site_title;?></title>
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">

        <!-- Add custom CSS here -->
        <link href="css/modern-business.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    </head>

    <body>

        <?php getUI('nav.php');?>

        <div class="container">

            <?php getUI('breadcrump.php'); ?>

            <div class="row">

                <div class="col-lg-8">

                    <!-- the actual blog post: title/author/date/content -->
                    <hr>
                    <p><i class="fa fa-clock-o"></i> Posted on August 24, 2013 at 9:00 PM by <a href="#">Start Boostrap</a></p>
                    <hr>
                   

                   

                    <hr>

                    <!-- the comment box -->
                    <div class="well">
                    
                    <?php
                        $message = '';
                        if(isset($_POST['submit']))
                        {
                            $result =  ExecuteQuery("INSERT INTO links
                                         (OriginalLink, ShortenLink, Title, Enable, Visits)
                                   VALUES(
                                     '$_POST[txtOriginalLink]'
                                   , 'http://www.$domain_name/?$_POST[txtNewLink]'
                                   , '$_POST[txtTitle]'
                                   , '1'
                                   , '0'
                                   
                                   ) 
                                    ");
                            if($result)
                            {
                                $message = "<p>Your Linke Created Successfully.</p>";
                                $message .= "<p>Original Link: " . $_POST['txtOriginalLink'] . '</p>';
                                $message .= "Shorten Link: " 
                                . "<a href='http://www.$domain_name/?q=$_POST[txtNewLink]'>$_POST[txtTitle]</a>";
                            }
                        }
                    ?>
                        <h4>Enter Yor Link Here:</h4>
                        <form role="form" action="" method="POST">
                            <div class="form-group">

                                <input placeholder="Original Link" type="text" class="form-control" rows="3" name="txtOriginalLink" />
                            </div> 
                            <div class="form-group">

                                <input type="text" class="form-control" rows="3" name="txtTitle" placeholder="Title" />
                            </div> 
                            <div class="form-group">

                                <input type="text" class="form-control" rows="3" name="txtNewLink" placeholder="New Link" />
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Make Link</button>
                        </form>
                    </div>

                    <hr>

                    <!-- the comments -->
                    <h3><?=$message;?></h3>
                    

                </div>

                <div class="col-lg-4">
                    <div class="well">
                        <h4>Blog Search</h4>
                        <div class="input-group">
                            <input type="text" class="form-control">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                            </span>
                        </div><!-- /input-group -->
                    </div><!-- /well -->
                    <div class="well">
                        <h4>Popular Blog Categories</h4>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="list-unstyled">
                                    <li><a href="#dinosaurs">Dinosaurs</a></li>
                                    <li><a href="#spaceships">Spaceships</a></li>
                                    <li><a href="#fried-foods">Fried Foods</a></li>
                                    <li><a href="#wild-animals">Wild Animals</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="list-unstyled">
                                    <li><a href="#alien-abductions">Alien Abductions</a></li>
                                    <li><a href="#business-casual">Business Casual</a></li>
                                    <li><a href="#robots">Robots</a></li>
                                    <li><a href="#fireworks">Fireworks</a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- /well -->
                    <div class="well">
                        <h4>Side Widget Well</h4>
                        <p>Bootstrap's default well's work great for side widgets! What is a widget anyways...?</p>
                    </div><!-- /well -->
                </div>
            </div>

        </div><!-- /.container -->

        <div class="container">
<?php getUI('footer.php');?>

        </div><!-- /.container -->

        <!-- JavaScript -->
        <script src="js/jquery-1.10.2.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/modern-business.js"></script>

    </body>
</html>