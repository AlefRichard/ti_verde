<html>
<title> TI SUSTENTÁVEL </title>

                                                        <!-- Principais -->
<!-- Monta a imagem da aba do navegador -->
    <link rel="shortcut icon" href="<?php echo base_url ('includes/favicon.ico'); ?>" type="image/x-icon" />
<!-- Compila o AJAX -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Compila o CSS -->
    <link rel="stylesheet" href="<?php echo base_url('includes/bootstrap/css/bootstrap.min.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('includes/bootstrap/css/cssmeu.css'); ?>" />
<!-- Compila o JavaScript -->
    <script src="<?php echo base_url('includes/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('includes/bootstrap/js/tis.js'); ?>"></script>
<!-- Usar font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('includes/font-awesome-4.3.0/css/font-awesome.min.css'); ?>" />
<!-- Deixa usar acentuação -->
    <?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>


<body style="background-color: #E2F1DC">
<!-- Cabeçalho padrão -->
    <header>
        <div class="container">
            <!-- Caixa Principal -->
            <ul id="nomeempresa">
                <a href="<?php echo base_url ('tisustentavel') ?>" class="menuheader"><p class="menuheader">SMART SOLAR</p></a>
            </ul>
        </div>
        
        <div class="container">
            <nav class="navbar navbar-default" style="background: #9AEA8E;">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <a class="navbar-brand" href="<?php echo base_url ('tisustentavel') ?>"><b>Home</b></a>
                    </div>
        
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="<?php echo base_url ('TiSustentavel/iso') ?>"><b>ISO 20121</b><span class="sr-only">(current)</span></a></li>
                            <li><a href="<?php echo base_url ('TiSustentavel/isoqua') ?>"><b>ISO 14000</b><span class="sr-only">(current)</span></a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" role="button" aria-expanded="false"><b>Sustentabilidade </b><i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" style="background-color: #CCE7C2">
                                    <li><a href="#">Onde as árvores serão plantadas?</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Quais as mudas usadas na plantação?</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Cálculo de quantas árvores usar para anular o CO2</a></li>
                                    <li class="divider"></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><b></i>Informações ou dúvidas</b></li></a>
                        </ul>
                   </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>
    </header>
<!-- Fim do cabeçalho -->
</html>
