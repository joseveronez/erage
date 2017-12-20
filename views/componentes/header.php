<nav class="navbar navbar-fixed-top bg-branco" role="navigation">
    <div class="container">
        <!-- parte de cima da navbar -->
        <div class="col-lg-12 col-md-12 col-sm-12 bg-branco padding-zero">
            <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs cinza-claro-fonte">
                <a href="">
                    <img src="<?= RAIZSITE ?>/imagens/placeholder.png" class="img-responsive" style="height: 30px;">
                </a>
            </div>
        </div>
    </div>
    <!-- navbar mobile -->
    <div class="navbar-header">
        <div class="hidden-lg hidden-md hidden-sm col-xs-12">
            <a href=""><img src="<?= RAIZSITE ?>/imagens/placeholder.png" class="img-mobile"></a>

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
    </div>
    <!-- parte de baixo da navbar -->
    <div class="collapse navbar-collapse header-bg bg-preto" id="example-navbar-collapse" style="border-top: 1px solid rgb(204, 204, 204);">
        <div class="container padding-mobile">
            <ul class="nav navbar-nav padding-zero">
                <li><a href="<?= RAIZSITE ?>">HOME</a></li>
                <li><a href="<?= RAIZSITE ?>">CONTATO</a></li>
            </ul>
        </div>
    </div>
</nav>