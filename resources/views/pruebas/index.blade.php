<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Blog sobre tecnología y programación móvil y web, PHP, Java, HTML, C#, JQuery, AJAX, JavaScript y demás tecnologías">
    <meta name="author" content="Carlos Daniel Agudelo, Blog Programación y Tecnología">

    <title>Programación y Tecnología</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('css/clean-blog.min.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index">Programación y Tecnología</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index">Inicio</a>
                    </li>
                    <li>
                        <a href="about">Sobre mi</a>
                    </li>
                    <!--<li>
                        <a href="post.html">Sample Post</a>
                    </li>-->
                    <li>
                        <a href="contact">Contacto</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Programación y Tecnología</h1>
                        <hr class="small">
                        <span class="subheading">Blog dedicado a aprender y discutir sobre nuevas tecnologías y programación en general</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-preview">
                    <a href="post_1_recursos_aprender_programacion">
                        <h2 class="post-title">
                            Buenos recursos online para aprender a programar
                        </h2>
                        <h3 class="post-subtitle">
                            Cursos online de programación
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="about.html">Carlos Daniel</a> on Julio 10, 2016</p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="post_2">
                        <h2 class="post-title">
                            Usa y aprende sobre Frameworks de JavaScript
                        </h2>
                    </a>
                    <p class="post-meta">Posted by <a href="about.html">Carlos Daniel</a> on Julio 10, 2016</p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="post_3">
                        <h2 class="post-title">
                            Recursos para aprender a desarrollar tu propia aplicación de Android
                        </h2>
                    </a>
                    <p class="post-meta">Posted by <a href="about.html">Carlos Daniel</a> on Julio 10, 2016</p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="post_4">
                        <h2 class="post-title">
                            Aprende a desarrollar aplicaciones con el Framework Laravel de PHP 
                        </h2>
                    </a>
                    <p class="post-meta">Posted by <a href="about.html">Carlos Daniel</a> on Julio 10, 2016</p>
                </div>
                <hr>
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">Publicaciones Anteriores &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <hr>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-google fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-muted">Copyright &copy; Carlos Daniel Agudelo 2016</p>
                </div>
            </div>
        </div>
    </footer>
	
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-76785154-3', 'auto');
	  ga('send', 'pageview');

	</script>

    <!-- jQuery -->
    <script src="{{asset('js/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{asset('js/clean-blog.min.js')}}"></script>

</body>

</html>
