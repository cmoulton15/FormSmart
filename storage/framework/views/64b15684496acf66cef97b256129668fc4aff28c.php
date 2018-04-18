              


<?php $__env->startSection('content'); ?>
                <!-- Intro -->
                    <div id="intro">
                        <h1>This is<br />
                        Massively</h1>
                        <p>A free, fully responsive HTML5 + CSS3 site template designed by <a href="https://twitter.com/ajlkn">@ajlkn</a> for <a href="https://html5up.net">HTML5 UP</a><br />
                        and released for free under the <a href="https://html5up.net/license">Creative Commons license</a>.</p>
                        <ul class="actions">
                            <li><a href="#header" class="button icon solo fa-arrow-down scrolly">Continue</a></li>
                        </ul>
                    </div>

                <!-- Header -->
                    <header id="header">
                        <a href="/" class="logo">Massively</a>
                    </header>

                <!-- Nav -->
                    <nav id="nav">
                        <ul class="links">
                            <li class="active"><a href="/">This is Massively</a></li>
                            <li><a href="/generic">Generic Page</a></li>
                            <li><a href="/elements">Elements Reference</a></li>
                        </ul>
                        <ul class="icons">
                            <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                            <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                            <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                            <li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
                        </ul>
                    </nav>

                <!-- Main -->
                    <div id="main">

                        <!-- Featured Post -->
                            <article class="post featured">
                                <header class="major">
                                    <span class="date">Recent Form Posts</span>

                                    <?php $__currentLoopData = $formposts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $formpost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <li><strong><?php echo e($formpost->id); ?>. <?php echo e($formpost->name); ?></strong>, (<?php echo e($formpost->email); ?>)
                                            <br><i><?php echo e($formpost->message); ?></i>
                                        </li>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    <hr>

                                    <h2><a href="#">And this is a<br />
                                    massive headline</a></h2>
                                    <p>Aenean ornare velit lacus varius enim ullamcorper proin aliquam<br />
                                    facilisis ante sed etiam magna interdum congue. Lorem ipsum dolor<br />
                                    amet nullam sed etiam veroeros.</p>
                                </header>
                                <a href="#" class="image main"><img src="images/pic01.jpg" alt="" /></a>
                                <ul class="actions">
                                    <li><a href="#" class="button big">Full Story</a></li>
                                </ul>
                            </article>

                        <!-- Posts -->
                            <section class="posts">
                                <article>
                                    <header>
                                        <span class="date">April 24, 2017</span>
                                        <h2><a href="#">Sed magna<br />
                                        ipsum faucibus</a></h2>
                                    </header>
                                    <a href="#" class="image fit"><img src="images/pic02.jpg" alt="" /></a>
                                    <p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
                                    <ul class="actions">
                                        <li><a href="#" class="button">Full Story</a></li>
                                    </ul>
                                </article>
                                <article>
                                    <header>
                                        <span class="date">April 22, 2017</span>
                                        <h2><a href="#">Primis eget<br />
                                        imperdiet lorem</a></h2>
                                    </header>
                                    <a href="#" class="image fit"><img src="images/pic03.jpg" alt="" /></a>
                                    <p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
                                    <ul class="actions">
                                        <li><a href="#" class="button">Full Story</a></li>
                                    </ul>
                                </article>
                                <article>
                                    <header>
                                        <span class="date">April 18, 2017</span>
                                        <h2><a href="#">Ante mattis<br />
                                        interdum dolor</a></h2>
                                    </header>
                                    <a href="#" class="image fit"><img src="images/pic04.jpg" alt="" /></a>
                                    <p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
                                    <ul class="actions">
                                        <li><a href="#" class="button">Full Story</a></li>
                                    </ul>
                                </article>
                                <article>
                                    <header>
                                        <span class="date">April 14, 2017</span>
                                        <h2><a href="#">Tempus sed<br />
                                        nulla imperdiet</a></h2>
                                    </header>
                                    <a href="#" class="image fit"><img src="images/pic05.jpg" alt="" /></a>
                                    <p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
                                    <ul class="actions">
                                        <li><a href="#" class="button">Full Story</a></li>
                                    </ul>
                                </article>
                                <article>
                                    <header>
                                        <span class="date">April 11, 2017</span>
                                        <h2><a href="#">Odio magna<br />
                                        sed consectetur</a></h2>
                                    </header>
                                    <a href="#" class="image fit"><img src="images/pic06.jpg" alt="" /></a>
                                    <p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
                                    <ul class="actions">
                                        <li><a href="#" class="button">Full Story</a></li>
                                    </ul>
                                </article>
                                <article>
                                    <header>
                                        <span class="date">April 7, 2017</span>
                                        <h2><a href="#">Augue lorem<br />
                                        primis vestibulum</a></h2>
                                    </header>
                                    <a href="#" class="image fit"><img src="images/pic07.jpg" alt="" /></a>
                                    <p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
                                    <ul class="actions">
                                        <li><a href="#" class="button">Full Story</a></li>
                                    </ul>
                                </article>
                            </section>

                        <!-- Footer -->
                            <footer>
                                <div class="pagination">
                                    <!--<a href="#" class="previous">Prev</a>-->
                                    <a href="#" class="page active">1</a>
                                    <a href="#" class="page">2</a>
                                    <a href="#" class="page">3</a>
                                    <span class="extra">&hellip;</span>
                                    <a href="#" class="page">8</a>
                                    <a href="#" class="page">9</a>
                                    <a href="#" class="page">10</a>
                                    <a href="#" class="next">Next</a>
                                </div>
                            </footer>

                    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>