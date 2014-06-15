                                <a href = "#" class = "navbar-brand"> משניות לעילוי נשמת</a>
                              
                                <button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
                                        <span class = "icon-bar"></span>
                                        <span class = "icon-bar"></span>
                                        <span class = "icon-bar"></span>
                                </button>
                               
                                <div class = "collapse navbar-collapse navHeaderCollapse">
                               
                                        <ul class = "nav navbar-nav navbar-right">
                                        @if(!Auth::check())
                                                <li>{{ HTML::link('users/register','הרשם והזמן חברים')}}</li>
                                        @else
                                         <li class = "dropdown">
                                         	<a href = "users/profile" class = "dropdown-toggle" data-toggle = "dropdown">{{Auth::user()->firstname}}<b class = "caret"></b></a>
                                         	<ul class = "dropdown-menu">
                                                 <li>{{ HTML::link('admin/profile','פרופיל משתמש')}}</li>
                                            </ul>
                                        </li>
                                        @endif
                                                <li>{{ HTML::link('users/register','הרשם כלומד')}}</li>
                                                <li class = "dropdown">
                                                       
                                                        <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">שתף<b class = "caret"></b></a>
                                                        <ul class = "dropdown-menu">
                                                                <li><a href = "#">Twitter</a></li>
                                                                <li><a href = "#">Facebook</a></li>
                                                                <li><a href = "#">Google+</a></li>
                                                                <li><a href = "#">Instagram</a></li>
                                                        </ul>
                                               
                                                </li>
                                                @if(!Auth::check())
                                                <li>{{ HTML::link('/users/login','כניסה')}}</li>
                                                @else
                                                <li>{{ HTML::link('/users/logout','יציאה')}}</li>
                                                @endif
                                                <li><a href = "#">אודות</a></li>
                                        <li class = "active">{{ HTML::link('/','דף הבית')}}</li>
                                        </ul>


\