@extends('index')
@section('content')
    <!-- initialize checkboxTree plugin -->
                    <script type="text/javascript">
                    //<!--
                      $(document).ready(function() {
                        $('#tree1').checkboxTree({
                            initializeUnchecked: 'collapsed'
                          /* specify here your options */
                        });
                      });
                    //-->
                    </script>
                    
<div class=" container">
<div class="jumbotron">
    <h2>בחר מסכת</h2>
{{ Form::open(array('url' => 'admin/pickmasechet','class'=>'form-inline','role'=>'form','id'=>'addFriend')) }}
<div class="row">
    <div class="col-md-4 pull-right">
    <ul id="tree1">
    @foreach($seders as $seder)
        <ul>
            <li>{{ Form::checkbox('seder[]',$seder->id,false) }} {{ Form::label('seder[]',$seder->name)}}
                <ul>
                    @foreach($seder->masechet as $masechet)
                        @if(in_array($masechet->id,$pickedMasAll))
                            <?php
                                if (in_array($masechet->id,$pickedMas))
                                {
                                    $arr = array('enabled' => 'enabled');
                                }
                                else
                                {
                                    $arr=array('disabled'=>'disabled');
                                }
                            ?>

                            <li>{{ Form::checkbox('masechet[]',$masechet->id,true,$arr) }} {{ Form::label('masechet[]',$masechet->name)}}
                        @else
                            <li>{{ Form::checkbox('masechet[]',$masechet->id,false) }} {{ Form::label('masechet[]',$masechet->name)}}
                        @endif
                    @endforeach
            </ul>
        </ul>
    @endforeach
    </ul>
   {{ Form::hidden('niftar_id',$niftar_id)}}
    </div>
</div>
<div class="row">
    <div class="col-md-4 pull-right">
        {{ Form::submit('המשך->', array('class'=>'btn btn-xs'))}}
    </div>
</div>
    {{ Form::close() }}
</div>
</div>
@stop