                                <a href = "#" class="navbar-brand"> משניות לעילוי נשמת (Beta)</a>
                              
                                <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                                        <span class = "icon-bar"></span>
                                        <span class = "icon-bar"></span>
                                        <span class = "icon-bar"></span>
                                </button>
                               
                                <div class="collapse navbar-collapse navHeaderCollapse">
                               
                                        <ul class="nav navbar-right nav-pills">
                                        
                                        @if(!Auth::check())
                                                <li>{{ HTML::link('users/register','הרשם והזמן חברים')}}</li>
                                                {{ Form::open(array('url' => 'users/login','class'=>'navbar-form navbar-left')) }}
                                                <div class="form-group">
                                                    {{ Form::text('email', Input::old('email'), array('placeholder' => 'awesome@awesome.com','class'=>'form-control input-sm')) }}
                                                    {{ Form::password('password',array('class'=>'form-control  input-sm'))}}
                                                    {{ Form::submit('כניסה!',array('class'=>'btn btn-default btn-xs'))}}

                                                </div>
                                                {{ Form::close() }}
                                        @else
                                        @if(Auth::user()->isadmin)
                                            <li class="dropdown">
                                                <a href="users/profile" class="dropdown-toggle" data-toggle="dropdown">ניהול<b class = "caret"></b></a>
                                                    <ul class="dropdown-menu">
                                                        <li> {{HTML::link('manager/seder/','ניהול סדרי משנה')}}</li>
                                                        <li> {{HTML::link('manager/users/','ניהול משתמשים')}}</li>
                                                        <li> {{HTML::link('manager/groups/','ניהול קבוצות')}}</li>
                                                    </ul>
                                            </li>
                                        @endif
                                         <li class="dropdown">
                                         	<a href="users/profile" class="dropdown-toggle" data-toggle="dropdown">{{Auth::user()->firstname}}<b class = "caret"></b></a>
                                         	<ul class="dropdown-menu">
                                                 <li>{{ HTML::link('admin/profile','פרופיל משתמש')}}</li>
                                            </ul>
                                        </li>
                                        @endif
                                               <!--  <li>{{ HTML::link('users/register','הרשם כלומד')}}</li>
                                                <li class="dropdown">
                                                       
                                                        <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">שתף<b class = "caret"></b></a>
                                                        <ul class = "dropdown-menu">
                                                                <li><a href = "#">Twitter</a></li>
                                                                <li><a href = "#">Facebook</a></li>
                                                                <li><a href = "#">Google+</a></li>
                                                                <li><a href = "#">Instagram</a></li>
                                                        </ul>
                                               
                                                </li> -->
                                                @if(!Auth::check())
<!--                                                 <li>{{ HTML::link('/users/login','כניסה')}}</li>
 -->                                                @else
                                                <li>{{ HTML::link('/users/logout','יציאה')}}</li>
                                                @endif
                                                <!-- <li><a href = "#">אודות</a></li> -->
                                        <li>{{ HTML::link('/','דף הבית')}}</li>
                                        </ul>