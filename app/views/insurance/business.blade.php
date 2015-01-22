@extends('layouts.master');

@section('title')
<section class="title">
    <div class="container">
        <div class="row-fluid">
            <div class="span6">
                <h1>BUSINESS INSURANCE</h1>
            </div>
            <div class="span6">
                <ul class="breadcrumb pull-right">
                    <li><a href="index.html">Home</a> <span class="divider">/</span></li>                    
                    <li class="active">Business Insurance</li>
                </ul>
            </div>
        </div>
    </div>
</section>
@stop

@section('content')
<div class="row-fluid">
    <div class="span2"></div>
    <div class="span8">        
        <div class="well well-nice well-box wizard">
            <form id="DWZD" class="form-horizontal form-dark" method="" action="/">
                <div class="navbar">
                    <div class="navbar-inner">
                        <div class="ccontainer">
                            <ul>
                                <li><a href="#vehicle_1" data-toggle="tab">Business Information</a></li>                                
                            </ul>
                            <div class="number-page pull-right"></div>
                        </div>
                    </div>
                </div>
                <div class="section-content item bg-blue-medium padding-top10 padding-bottom10 no-border-top">
                    <div id="bar" class="progress progress-info progress-mini no-margin">
                        <div class="bar"></div>
                    </div>
                </div>
                <div class="tab-content section-content item">
                    <div class="tab-pane" id="vehicle_1">
                        <div class="row-fluid">
                            <div class="span12">
                                <fieldset>
                                    <legend><span>Click here to get your quick, easy and secure insurance quote in just minutes</span></legend>
                                    <ul class="form-list label-left list-bordered dotted">                                                                                
                                        
                                        <li class="control-group">
                                            <label for="business_name" class="control-label span4">
                                                Business Name                                                
                                            </label>
                                            <div class="controls">                                                
                                                <input id="business_name" class="span10" type="text" name="business_name" value="">
                                            </div>
                                        </li>
                                        <!-- // form item -->

                                        <li class="control-group">
                                            <label for="business_address" class="control-label span4">
                                                Business Address                                                
                                            </label>
                                            <div class="controls">                                                
                                                <input id="business_address" class="span10" type="text" name="business_address" value="">
                                            </div>
                                        </li>
                                        <!-- // form item -->
                                        
                                        <li class="control-group">
                                            <label for="business_contact_number" class="control-label span4">
                                                Contact Number                                                
                                            </label>
                                            <div class="controls">                                                
                                                <input id="business_contact_number" class="span10 maskPhoneExt" type="text" name="business_contact_number" value="">
                                            </div>
                                        </li>
                                        <!-- // form item -->
                                        
                                        <li class="control-group">
                                            <label for="business_email" class="control-label span4">
                                                Business Email                                                
                                            </label>
                                            <div class="controls">                                                
                                                <input id="business_email" class="span10" type="text" name="business_email" value="">
                                            </div>
                                        </li>
                                        <!-- // form item -->
                                        
                                        <li class="control-group">
                                            <label for="business_type" class="control-label span4">
                                                Business Type                                               
                                            </label>
                                            <div class="controls">                                                
                                                <input id="business_type" class="span10" type="text" name="business_type" value="">
                                            </div>
                                        </li>
                                        <!-- // form item -->
                                        
                                        <li class="control-group">
                                            <label for="business_entity" class="control-label span4">
                                                Business Entity                                                
                                            </label>
                                            <div class="controls">                                                
                                                <select id="business_entity" class="span10" name="business_entity">
                                                    <option value="single">Corporate</option>                                                    
                                                    <option value="married">LLC</option>                                                                                                        
                                                    <option value="widowed">Sole Proprietorship</option>                                                                                                        
                                                </select>
                                            </div>
                                        </li>
                                        <!-- // form item -->
                                        
                                        <li class="control-group">
                                            <label for="business_name" class="control-label span4">
                                                Annual Revenue                                                
                                            </label>
                                            <div class="controls">                                                
                                                <input id="business_name" class="span10" type="text" name="business_name" value="">
                                            </div>
                                        </li>
                                        <!-- // form item -->
                                        
                                        <li class="control-group">
                                            <label for="business_name" class="control-label span4">
                                                Total Expanses                                                
                                            </label>
                                            <div class="controls">                                                
                                                <input id="business_name" class="span10" type="text" name="business_name" value="">
                                            </div>
                                        </li>
                                        <!-- // form item -->
                                        
                                        <li class="control-group">
                                            <label for="business_name" class="control-label span4">
                                                Number Of Employees                                                
                                            </label>
                                            <div class="controls">                                                
                                                <input id="business_name" class="span10" type="text" name="business_name" value="">
                                            </div>
                                        </li>
                                        <!-- // form item -->
                                        
                                        <li class="control-group">
                                            <label for="business_name" class="control-label span4">
                                                Approximate Square Footage Area                                                
                                            </label>
                                            <div class="controls">                                                
                                                <input id="business_name" class="span10" type="text" name="business_name" value="">
                                            </div>
                                        </li>
                                        <!-- // form item -->
                                    </ul>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <!-- // tab1 -->                    
                </div>	
                <div class="section-content footer">
                    <ul class="wizard-action wizard-pager">
                        <li><a class="previous first btn" href="javascript:void(0);">First</a></li>
                        <li><a class="previous btn btn-blue" href="javascript:void(0);"><i class="fontello-icon-left-circle2"></i> Previous</a></li>
                        <li><a class="next last btn" href="javascript:void(0);">Last</a></li>
                        <li><a class="next btn btn-blue" href="javascript:void(0);">Next <i class="fontello-icon-right-circle2"></i></a></li>
                        <li>
                            <button type="submit" class="next finish btn btn-green">Send form</button>
                        </li>                        
                        <li><a class="next cancel btn btn-red" href="javascript:void(0);">Cancel</i></a></li>
                    </ul>
                    <!-- // Action --> 
                </div>
            </form>
        </div>
    </div>
</div>
@stop

@section('stylesheets')
@stop

@section('scripts') 
@stop