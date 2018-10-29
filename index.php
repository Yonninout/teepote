<!doctype html>
<html>
<head>
    <title>Basic Template e</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Kube CSS -->
    <link rel="stylesheet" href="dist/css/kube.css">

</head>
<body>
	<div class="is-navbar-container">
	    <div class="is-brand">
	        <h1>PRIVATE JOKE</h1>
	        <!-- nav toggle element -->
	        <a href="#"
	                class="nav-toggle is-push-right-mobile is-shown-mobile icon-kube-menu"
	                data-kube="toggle"
	                data-target="#navbar-demo"></a>
	    </div>
	    <!-- collapsable navigation -->
	    <div id="navbar-demo" class="is-navbar is-hidden-mobile">
	        <nav class="is-push-right">
	            <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">A PROPOS</a></li>
                    <li><a href="#">CURRICULUM VITAE</a></li>
                    <li><a href="#">CONTACT</a></li>
                    <!-- <li><a href="#" class="button is-small is-secondary">Sign In</a></li> -->
	            </ul>
	        </nav>
	    </div>
	</div>
	
    <h1>Hello, world!</h1>



    <!-- Kube JS (optional if you are using Kube CSS only) -->
    <script src="dist/js/kube.min.js"></script>
    <script>
        $K.init();
    </script>
</body>
</html>

<?php
	//phpinfo();
?>