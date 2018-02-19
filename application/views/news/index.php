<div class="row">
    <!--colleft-->
    <div class="col-md-8 col-sm-12">
        <div class="box-caption">
            <span>spotlight</span>
        </div>
        <!--sportlight-->
        <section class="owl-carousel owl-spotlight">
            <?php foreach ($spotlight as $article) : ?>
                <div>

                    <article class="spotlight-item">
                        <div class="spotlight-img">
                            <img alt="" src="<?= $article->getFULLIMAGEARTICLE() ?>" class="img-responsive" />
                            <a href="<?= $this->generateUrl('news', strtolower($article->getCATEGORIEOBJ()->getLIBELLECATEGORIE())) ?>" class="cate-tag"><?= $article->getCATEGORIEOBJ()->getLIBELLECATEGORIE(); ?></a>
                        </div>
                        <div class="spotlight-item-caption">
                            <h2 class="font-heading">
                                <a href="article.html">
                                    <?= $article->getTITREARTICLE() ?>
                                </a>
                            </h2>
                            <div class="meta-post">
                                <a href="#">
                                    <?= $article->getAUTEUROBJ()->getNOMCOMPLET(); ?>
                                </a>
                                <em></em>
                                <span>
							<time datetime="<?= $article->getDATECREATIONARTICLE(); ?>"></time>
						</span>

                                </div>
                                   <?= $article->getACCROCHEARTICLE() ?>
                        </div>

                    </article>

                </div>
            <?php endforeach; ?>
        </section>

        <!--spotlight-thumbs-->
        <section class="spotlight-thumbs">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="spotlight-item-thumb">
                        <div class="spotlight-item-thumb-img">
                            <a href="#">
                                <img alt="" src="images/product/3.jpg" />
                            </a>
                            <a href="#" class="cate-tag">business</a>
                        </div>
                        <h3><a href="#">Tip Aligning Digital Marketing with Business Goals and Objectives</a></h3>
                        <div class="meta-post">
                            <a href="#">
                                Sue	Benson
                            </a>
                            <em></em>
                            <span>
							22 Sep 2016
						</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="spotlight-item-thumb">
                        <div class="spotlight-item-thumb-img">
                            <a href="#">
                                <img alt="" src="images/product/4.jpg" />
                            </a>
                            <a href="#" class="cate-tag">Computing</a>
                        </div>
                        <h3><a href="#">Six big ways MacOS Sierra is going to change your Apple experience</a></h3>
                        <div class="meta-post">
                            <a href="#">
                                Marion	Craig
                            </a>
                            <em></em>
                            <span>
							21 Sep 2016
						</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="spotlight-item-thumb">
                        <div class="spotlight-item-thumb-img">
                            <a href="#">
                                <img alt="" src="images/product/5.jpg" />
                            </a>
                            <a href="#" class="cate-tag">Tech</a>
                        </div>
                        <h3><a href="#">Will Anker be the company to finally put a heads-up display in my car?</a></h3>
                        <div class="meta-post">
                            <a href="#">
                                Super User
                            </a>
                            <em></em>
                            <span>
							26 Sep 2016
						</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="spotlight-item-thumb">
                        <div class="spotlight-item-thumb-img">
                            <a href="#">
                                <img alt="" src="images/product/3.jpg" />
                            </a>
                            <a href="#" class="cate-tag">business</a>
                        </div>
                        <h3><a href="#">Tip Aligning Digital Marketing with Business Goals and Objectives</a></h3>
                        <div class="meta-post">
                            <a href="#">
                                Sue	Benson
                            </a>
                            <em></em>
                            <span>
							22 Sep 2016
						</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="spotlight-item-thumb">
                        <div class="spotlight-item-thumb-img">
                            <a href="#">
                                <img alt="" src="images/product/4.jpg" />
                            </a>
                            <a href="#" class="cate-tag">Computing</a>
                        </div>
                        <h3><a href="#">Six big ways MacOS Sierra is going to change your Apple experience</a></h3>
                        <div class="meta-post">
                            <a href="#">
                                Marion	Craig
                            </a>
                            <em></em>
                            <span>
							21 Sep 2016
						</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="spotlight-item-thumb">
                        <div class="spotlight-item-thumb-img">
                            <a href="#">
                                <img alt="" src="images/product/5.jpg" />
                            </a>
                            <a href="#" class="cate-tag">Tech</a>
                        </div>
                        <h3><a href="#">Will Anker be the company to finally put a heads-up display in my car?</a></h3>
                        <div class="meta-post">
                            <a href="#">
                                Super User
                            </a>
                            <em></em>
                            <span>
							26 Sep 2016
						</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

<?php include PATH_SIDEBAR; ?>