<!DOCTYPE html>
<html>
        <head>
  			@include('header')
        </head>
        <body>
 
                <div class = "navbar navbar-inverse navbar-static-top">
                        <div class = "container">
                            @include('nav')
                        </div> 
                    @if(Session::has('message'))
         				<div class="container">
         					<div class="alert panel panel-danger">
						        
						            <p >{{ Session::get('message') }}</p>
						    </div>
					    </div>    
			        @endif
			        @if(isset($message))
         				<div class="container">
         					<div class="alert panel panel-danger">
						        
						            <p >{{ $message}}</p>
						    </div>
					    </div>    
			        @endif
                          
                </div>
                  @yield('content')
                </div>
                        <div class = "navbar navbar-default navbar-fixed-bottom">
                        <div class = "container">
                                <p class = "navbar-text pull-left">פיתוח: יעקב דרורי - yacov@drori.org</p>
                                <a href = "http://drori.org" class = "navbar-btn btn-info btn pull-right">drori.org</a>
                        </div>
                			</div>
 
    <script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
                <script src = "js/bootstrap.js"></script>
                <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/jquery-ui.min.js"></script>
        <link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/themes/smoothness/jquery-ui.css" />

        <script type="text/javascript" src="http://checkboxtree.googlecode.com/svn/tags/checkboxtree-0.5.2/jquery.checkboxtree.min.js"></script>
        <link rel="stylesheet" type="text/css" href="http://checkboxtree.googlecode.com/svn/tags/checkboxtree-0.5.2/jquery.checkboxtree.min.css" />
        
               
        </body>
</html>