<!-- start of Header-->
        <?php include_once "includes/header.inc.php";?>
                <!-- End of Header -->

                <!-- Start of Search Wrapper -->
               <?php include_once "includes/searchwrapper.inc.php";?>
                <!-- End of Search Wrapper -->

                <!-- Start of Page Container -->
                
                <div class="page-container">
                        <div class="container">
                                <div class="row">

                                        <!-- start of page content -->
                                        <div class="span8 main-listing">
                                        <?php   include_once "functions/functions.php"; getAllPostsByCategoryID(1) ;?>
                                                <!-- <article class="format-standard type-post hentry clearfix">

                                                        <header class="clearfix">

                                                                <h3 class="post-title">
                                                                        <a href="single.php?id=4">Integrating WordPress with Your Website</a>
                                                                </h3>

                                                                <div class="post-meta clearfix">
                                                                        <span class="date">25 Feb, 2013</span>
                                                                        <span class="category"><a href="#" title="View all posts in Server &amp; Database">Server &amp; Database</a></span>
                                                                        <span class="comments"><a href="#" title="Comment on Integrating WordPress with Your Website">3 Comments</a></span>
                                                                        <span class="like-count">66</span>
                                                                </div> end of post meta 

                                                        </header>

                                                        <p>Many of us work in an endless stream of tasks, browser tasks, social media, emails, meetings, rushing from one thing to another, never pausing and never ending.&nbsp;Then the day is over, and we are exhausted, and we often have very little to show for it. And we start the next . . . <a class="readmore-link" href="http://knowledgebase.inspirythemes.com/integrating-wordpress-with-your-website/">Read more</a></p>

                                                </article> -->

<!--                                                 

                                                <article class=" type-post  format-standard hentry clearfix">

                                                 
                                                        <header class="clearfix">

                                                                <h3 class="post-title">
                                                                        <a href="single.php">WordPress Site Maintenance</a>
                                                                </h3>

                                                                <div class="post-meta clearfix">
                                                                        <span class="date">24 Feb, 2013</span>
                                                                        <span class="category"><a href="#" title="View all posts in Website Dev">Website Dev</a></span>

                                                                        <span class="comments"><a href="#" title="Comment on WordPress Site Maintenance">0 Comments</a></span>

                                                                        <span class="like-count">15</span>
                                                                </div> end of post meta

                                                        </header>

                                                        <p>Many of us work in an endless stream of tasks, browser tasks, social media, emails, meetings, rushing from one thing to another, never pausing and never ending.&nbsp;Then the day is over, and we are exhausted, and we often have very little to show for it. And we start the next . . . <a class="readmore-link" href="http://knowledgebase.inspirythemes.com/wordpress-site-maintenance/">Read more</a></p>

                                                </article> -->

                                                <div id="pagination">
                                                        <a href="#" class="btn active">1</a>
                                                        <a href="#" class="btn">2</a>
                                                        <a href="#" class="btn">3</a>
                                                        <a href="#" class="btn">Next »</a>
                                                        <a href="#" class="btn">Last »</a>
                                                </div>

                                        </div>
                                        <!-- end of page content -->


                                        <!-- start of sidebar -->
                                        <aside class="span4 page-sidebar">

                                                <section class="widget">
                                                        <div class="support-widget">
                                                                <h3 class="title">Support</h3>
                                                                <p class="intro">Need more support? If you did not found an answer, contact us for further help.</p>
                                                        </div>
                                                </section>


                                                <section class="widget">
                                                        <h3 class="title">Featured Articles</h3>
                                                        <ul class="articles">
                                                                <li class="article-entry standard">
                                                                        <h4><a href="single.php">Integrating WordPress with Your Website</a></h4>
                                                                        <span class="article-meta">25 Feb, 2013 in <a href="#" title="View all posts in Server &amp; Database">Server &amp; Database</a></span>
                                                                        <span class="like-count">66</span>
                                                                </li>
                                                                <li class="article-entry standard">
                                                                        <h4><a href="single.php">WordPress Site Maintenance</a></h4>
                                                                        <span class="article-meta">24 Feb, 2013 in <a href="#" title="View all posts in Website Dev">Website Dev</a></span>
                                                                        <span class="like-count">15</span>
                                                                </li>
                                                                <li class="article-entry video">
                                                                        <h4><a href="single.php">Meta Tags in WordPress</a></h4>
                                                                        <span class="article-meta">23 Feb, 2013 in <a href="#" title="View all posts in Website Dev">Website Dev</a></span>
                                                                        <span class="like-count">8</span>
                                                                </li>
                                                                <li class="article-entry image">
                                                                        <h4><a href="single.php">WordPress in Your Language</a></h4>
                                                                        <span class="article-meta">22 Feb, 2013 in <a href="#" title="View all posts in Advanced Techniques">Advanced Techniques</a></span>
                                                                        <span class="like-count">6</span>
                                                                </li>
                                                        </ul>
                                                </section>



                                                <section class="widget"><h3 class="title">Categories</h3>
                                                        <ul>
                                                                <li><a href="#" title="Lorem ipsum dolor sit amet,">Advanced Techniques</a> </li>
                                                                <li><a href="#" title="Lorem ipsum dolor sit amet,">Designing in WordPress</a></li>
                                                                <li><a href="#" title="Lorem ipsum dolor sit amet,">Server &amp; Database</a></li>
                                                                <li><a href="#" title="Lorem ipsum dolor sit amet, ">Theme Development</a></li>
                                                                <li><a href="#" title="Lorem ipsum dolor sit amet,">Website Dev</a></li>
                                                                <li><a href="#" title="Lorem ipsum dolor sit amet,">WordPress for Beginners</a></li>
                                                                <li><a href="#" title="Lorem ipsum dolor sit amet, ">WordPress Plugins</a></li>
                                                        </ul>
                                                </section>

                                                <section class="widget">
                                                        <h3 class="title">Recent Comments</h3>
                                                        <ul id="recentcomments">
                                                                <li class="recentcomments"><a href="#" rel="external nofollow" class="url">John Doe</a> on <a href="#">Integrating WordPress with Your Website</a></li>
                                                                <li class="recentcomments">saqib sarwar on <a href="#">Integrating WordPress with Your Website</a></li>
                                                                <li class="recentcomments"><a href="#" rel="external nofollow" class="url">John Doe</a> on <a href="#">Integrating WordPress with Your Website</a></li>
                                                                <li class="recentcomments"><a href="#" rel="external nofollow" class="url">Mr WordPress</a> on <a href="#">Installing WordPress</a></li>
                                                        </ul>
                                                </section>

                                        </aside>
                                        <!-- end of sidebar -->
                                </div>
                        </div>
                </div>
                <!-- End of Page Container -->

                <!-- Start of Footer -->
                <?php include_once "includes/footer.inc.php";?>
               <!-- End of Footer-->
