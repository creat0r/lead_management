@extends('layouts.master');

@section('title')
<section class="title">
    <div class="container">
        <div class="row-fluid">
            <div class="span6">
                <h1>AUTO INSURANCE</h1>
            </div>
            <div class="span6">
                <ul class="breadcrumb pull-right">
                    <li><a href="index.html">Home</a> <span class="divider">/</span></li>                    
                    <li class="active">Auto Insurance</li>
                </ul>
            </div>
        </div>
    </div>
</section>
@stop

@section('content')
<div class="row-fluid">
    <div class="span2"></div>
    <div class="span9">                
        <div class="well well-nice well-box wizard">
            <form id="DWZD" class="form-horizontal form-dark" method="" action="/">
                <div class="navbar">
                    <div class="navbar-inner">
                        <div class="ccontainer">
                            <ul>
                                <li><a href="#vehicle_1" data-toggle="tab">Vehicle Information - I</a></li>
                                <li><a href="#vehicle_2" data-toggle="tab">Vehicle Information - II</a></li>
                                <li><a href="#driver_1" data-toggle="tab">Driver Information - I</a></li>                                
                                <li><a href="#driver_2" data-toggle="tab">Driver Information - II</a></li>                                
                                <li><a href="#contact" data-toggle="tab">Contact Information</a></li>                                
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
                                    <legend><span class="header-small">Click here to get your quick, easy and secure insurance quote in just minutes</span></legend>
                                    <ul class="form-list label-left list-bordered dotted">
                                        <li class="control-group">
                                            <label for="select_vehicle_year" class="control-label span6">Vehicle Year</label>
                                            <div class="controls">
                                                <select id="select_vehicle_year" class="span6" name="vehicle_year">
                                                    <option value="" selected="selected">Select a State</option>
                                                    <option value="2015">2015</option>                                                    
                                                    <option value="2014">2015</option>                                                    
                                                    <option value="2013">2015</option>                                                    
                                                    <option value="2012">2015</option>                                                    
                                                    <option value="2011">2015</option>                                                    
                                                    <option value="2010">2015</option>                                                    
                                                    <option value="2009">2015</option>                                                    
                                                    <option value="2008">2015</option>                                                    
                                                    <option value="2007">2015</option>                                                    
                                                    <option value="2006">2015</option>                                                    
                                                    <option value="2005">2015</option>                                                    
                                                    <option value="2004">2015</option>                                                    
                                                    <option value="2003">2015</option>                                                    
                                                    <option value="2002">2015</option>                                                    
                                                    <option value="2001">2015</option>                                                    
                                                    <option value="2000">2015</option>                                                    
                                                </select>
                                            </div>
                                        </li>
                                        <!-- // form item -->

                                        <li class="control-group">
                                            <label for="select_vehicle_make" class="control-label span6">Vehicle Make <span class="required">*</span></label>
                                            <div class="controls">
                                                <select id="select_vehicle_make" class="span6" name="vehicle_make">
                                                    <option value="" selected="selected">Select Vehicle Make</option>
                                                    <option value="toyota">Toyota</option>                                                    
                                                    <option value="auto">Audi</option>                                                    
                                                    <option value="bmw">BMW</option>                                                    
                                                    <option value="jaguar">Jaguar</option>                                                    
                                                    <option value="mercedes">Mercedes</option>                                                                                                        
                                                </select>
                                            </div>
                                        </li>
                                        <!-- // form item -->

                                        <li class="control-group">
                                            <label for="select_vehicle_model" class="control-label span6">Vehicle Model <span class="required">*</span></label>
                                            <div class="controls">
                                                <select id="select_vehicle_model" class="span6" name="vehicle_model">
                                                    <option value="" selected="selected">Select Vehicle Model</option>
                                                    <option value="model_1">SUV</option>
                                                    <option value="model_2">Sedan</option>
                                                    <option value="model_3">Convertable</option>
                                                </select>
                                            </div>
                                        </li>
                                        <!-- // form item -->

                                        <li class="control-group">
                                            <label for="vehicle_zip_code" class="control-label span6">ZIP Code</label>
                                            <div class="controls">                                                
                                                <input id="vehicle_zip_code" class="span6 maskZipcode" type="text" name="vehicle_zip_code" value="" placeholder="Enter ZIP Code">
                                            </div>
                                        </li>
                                        <!-- // form item -->

                                        <li class="control-group">
                                            <label for="is_insured" class="control-label span6">
                                                Have you been insured in the last 6 months?                                                
                                            </label>
                                            <div class="controls">
                                                <input type="hidden" id="is_user_insured" name="is_user_insured" />
                                                <div id="is_insured" class="btn-group change" data-toggle="buttons-radio" data-target="is_user_insured">
                                                    <button type="button" class="btn active" class-toggle="btn-green" name="is_insured" value="true">&nbsp; Yes &nbsp;</button>
                                                    <button type="button" class="btn" class-toggle="btn-red" name="is_insured" value="false">&nbsp; No &nbsp;</button>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- // form item -->

                                        <li class="control-group">
                                            <label for="select_current_insurance_company" class="control-label span6">Current Insurance Company<span class="required">*</span></label>
                                            <div class="controls">
                                                <select id="select_current_insurance_company" class="span6" name="current_insurance_company">
                                                    <option value="" selected="selected">Select a State</option>
                                                    <option value="AL">Insurance Company One</option>                                                    
                                                    <option value="AL">Insurance Company Two</option>                                                    
                                                    <option value="AL">Insurance Company Three</option>                                                    
                                                </select>
                                            </div>
                                        </li>
                                        <!-- // form item -->

                                        <li class="control-group">
                                            <label for="date_of_policy_expiration" class="control-label span6">
                                                Date of policy expiration
                                            </label>
                                            <div class="controls">
                                                <input id="date_of_policy_expiration" class="span6" type="text" name="policy_expiration_date" value="">
                                            </div>
                                        </li>

                                        <li class="control-group">
                                            <label for="length_of_time_with_insurance_company" class="control-label span6">
                                                Length of time with insurance company
                                            </label>
                                            <div class="controls">
                                                <input id="length_of_time_with_insurance_company_year" class="span2" type="text" name="insurance_comp_length_years" value="" placeholder="Years">
                                                <input id="length_of_time_with_insurance_company_month" class="span2" type="text" name="insurance_comp_length_months" value="" placeholder="Months">
                                            </div>
                                        </li>

                                        <li class="control-group">
                                            <label for="length_of_time_cont_insured" class="control-label span6">
                                                Length of time continously insured
                                            </label>
                                            <div class="controls">
                                                <input id="length_of_time_cont_insured_year" class="span2" type="text" name="insurance_continously" value="" placeholder="Years">
                                                <input id="length_of_time_cont_insured_month" class="span2" type="text" name="insurance_continously" value="" placeholder="Months">                                                
                                            </div>
                                        </li>
                                    </ul>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <!-- // tab1 -->                    

                    <div class="tab-pane" id="vehicle_2">
                        <div class="row-fluid">
                            <div class="span12">
                                <fieldset>
                                    <legend><i class="fontello-icon-home"></i> Vehicle coverage and applicant details</legend>
                                    <ul class="form-list label-left list-bordered dotted">
                                        <li class="control-group">
                                            <label for="vehicle_ownership_status" class="control-label span6">
                                                Vehicle Ownership Status                                                
                                            </label>
                                            <div class="controls">                                                
                                                <select id="select_vehicle_ownership_status" class="span6" name="vehicle_ownership_status">
                                                    <option value="" selected="selected">Select your ownership status</option>
                                                    <option value="own">Own</option>
                                                    <option value="rent">Rented</option>
                                                    <option value="lease">Leased</option>
                                                </select>
                                            </div>                                                                                       
                                        </li>
                                        <!-- // form item -->

                                        <li class="control-group">
                                            <label for="vehicle_primary_use" class="control-label span6">
                                                Vehicle Primary Use
                                            </label>
                                            <div class="controls">                                                
                                                <select id="select_vehicle_primary_use" class="span6" name="vehicle_primary_use">
                                                    <option value="" selected="selected">Select vehicle primary use</option>
                                                    <option value="own">Commute Work</option>
                                                    <option value="rent">Personal Use</option>                                                    
                                                </select>
                                            </div>
                                        </li>
                                        <!-- // form item -->

                                        <li class="control-group">
                                            <label for="daily_commute_miles" class="control-label span6">
                                                Daily Commute Miles
                                            </label>
                                            <div class="controls">                                                
                                                <input id="daily_commute_miles" class="span6" type="text" name="daily_commute_miles" value="" placeholder="No. of miles(n)">
                                            </div>
                                        </li>
                                        <!-- // form item -->

                                        <li class="control-group">
                                            <label for="avg_days_used_per_week" class="control-label span6">
                                                Average No. of days used per week
                                            </label>
                                            <div class="controls">                                                
                                                <input id="avg_days_used_per_week" class="span6" type="text" name="avg_days_used_per_week" value="" placeholder="No. of days(n)">
                                            </div>
                                        </li>
                                        <!-- // form item -->

                                        <li class="control-group">
                                            <label for="approx_annual_milage" class="control-label span6">
                                                Approximate Annual Milage
                                            </label>
                                            <div class="controls">                                                
                                                <input id="approx_annual_milage" class="span6" type="text" name="approx_annual_milage" value="" placeholder="No. of miles(n)">
                                            </div>
                                        </li>
                                        <!-- // form item -->

                                        <li class="control-group">
                                            <label for="liability_coverage_level" class="control-label span6">
                                                Liability Coverage Level
                                            </label>
                                            <div class="controls">                                                
                                                <select id="liability_coverage_level" class="span6" name="liability_coverage_level">
                                                    <option value="" selected="selected">Select liability coverage level</option>
                                                    <option value="own">Standard Protection</option>                                                    
                                                </select>
                                            </div>
                                        </li>
                                        <!-- // form item -->

                                        <li class="control-group">
                                            <label for="collision_deductible" class="control-label span6">
                                                Collision Deductible
                                            </label>
                                            <div class="controls">                                                
                                                <select id="select_collision_deductible" class="span6" name="collision_deductible">                                                    
                                                    <option value="500">500</option>                                                    
                                                    <option value="400">400</option>                                                    
                                                    <option value="300">300</option>                                                    
                                                    <option value="200">200</option>                                                    
                                                    <option value="100">100</option>                                                    
                                                </select>
                                            </div>
                                        </li>
                                        <!-- // form item -->

                                        <li class="control-group">
                                            <label for="comprehensive_deductible" class="control-label span6">
                                                Comprehensive Deductible
                                            </label>
                                            <div class="controls">                                                
                                                <select id="select_comprehensive_deductible" class="span6" name="comprehensive_deductible">                                                    
                                                    <option value="500">500</option>                                                    
                                                    <option value="400">400</option>                                                    
                                                    <option value="300">300</option>                                                    
                                                    <option value="200">200</option>                                                    
                                                    <option value="100">100</option>                                                    
                                                </select>
                                            </div>
                                        </li>
                                        <!-- // form item -->
                                    </ul>
                                </fieldset>
                                <!-- // fieldset Input --> 
                            </div>
                        </div>
                    </div>
                    <!-- // tab2 -->

                    <div class="tab-pane summary" id="driver_1">
                        <div class="row-fluid">
                            <div class="span12">
                                <fieldset>
                                    <legend><i class="fontello-icon-th-list-4"></i> Driver Information</legend>
                                    <ul class="form-list label-left list-bordered dotted">
                                        <li class="control-group">
                                            <label for="driver_first_name" class="control-label span6">
                                                First Name                   
                                            </label>
                                            <div class="controls">                                                
                                                <input id="driver_first_name" class="span6" type="text" name="driver_first_name" value="">
                                            </div>                                                                                       
                                        </li>
                                        <!-- // form item -->

                                        <li class="control-group">
                                            <label for="driver_last_name" class="control-label span6">
                                                Last Name                   
                                            </label>
                                            <div class="controls">                                                
                                                <input id="driver_last_name" class="span6" type="text" name="driver_last_name" value="">
                                            </div>                                                                                       
                                        </li>
                                        <!-- // form item -->

                                        <li class="control-group">
                                            <label for="driver_dob" class="control-label span6">
                                                Birth Date               
                                            </label>
                                            <div class="controls">                                                
                                                <input id="driver_dob" class="span6" type="text" name="driver_dob" value="">
                                            </div>                                                                                       
                                        </li>
                                        <!-- // form item -->

                                        <li class="control-group">
                                            <label for="select_driver_gender" class="control-label span6">
                                                Gender            
                                            </label>
                                            <div class="controls">                                                
                                                <select id="select_driver_gender" class="span6" name="drive_gender">
                                                    <option value="male">Male</option>                                                    
                                                    <option value="female">Female</option>                                                                                                        
                                                </select>
                                            </div>                                                                                       
                                        </li>
                                        <!-- // form item -->

                                        <li class="control-group">
                                            <label for="select_drive_martial_status" class="control-label span6">
                                                Marital Status
                                            </label>
                                            <div class="controls">                                                
                                                <select id="select_drive_martial_status" class="span6" name="drive_martial_status">
                                                    <option value="single">Single</option>                                                    
                                                    <option value="married">Married</option>                                                                                                        
                                                    <option value="widowed">Widowed</option>                                                                                                        
                                                </select>
                                            </div>                                                                                       
                                        </li>
                                        <!-- // form item -->

                                        <li class="control-group">
                                            <label for="select_driver_credit_card_rating" class="control-label span6">
                                                Credit Rating
                                            </label>
                                            <div class="controls">                                                
                                                <select id="select_driver_credit_card_rating" class="span6" name="select_driver_credit_card_rating">
                                                    <option value="single">Good</option>                                                    
                                                    <option value="married">Low</option>                                                                                                        
                                                    <option value="widowed">Blocked</option>                                                                                                        
                                                </select>
                                            </div>                                                                                       
                                        </li>
                                        <!-- // form item -->

                                        <li class="control-group">
                                            <label for="driver_occupation" class="control-label span6">
                                                Occupation            
                                            </label>
                                            <div class="controls">                                                
                                                <input id="driver_occupation" class="span6" type="text" name="driver_occupation" value="">
                                            </div>                                                                                       
                                        </li>
                                        <!-- // form item -->

                                        <li class="control-group">
                                            <label for="driver_education" class="control-label span6">
                                                Education            
                                            </label>
                                            <div class="controls">                                                
                                                <input id="driver_education" class="span6" type="text" name="driver_education" value="">
                                            </div>                                                                                       
                                        </li>
                                        <!-- // form item -->

                                        <li class="control-group">
                                            <label for="select_driver_residence_status" class="control-label span6">
                                                Residence Status            
                                            </label>
                                            <div class="controls">                                                
                                                <select id="select_driver_residence_status" class="span6" name="select_driver_residence_status">
                                                    <option value="without_mortgage">Without Mortgage</option>                                                    
                                                    <option value="mortgage">With Mortgage</option>                                                                                                        
                                                    <option value="parents">With Parents</option>                                                                                                        
                                                    <option value="other">Other</option>                                                                                                        
                                                </select>                                                                                       
                                            </div>                                             
                                        </li>
                                        <!-- // form item -->

                                        <li class="control-group">
                                            <label for="driver_year_month_cur_res" class="control-label span6">
                                                Years/Month at current residence            
                                            </label>
                                            <div class="controls">                                                                                                
                                                <input id="driver_year_cur_res" class="span2" type="text" name="driver_year_cur_res" value="" placeholder="Years">
                                                <input id="driver_month_cur_res" class="span2" type="text" name="driver_year_cur_res" value="" placeholder="Months">                                                
                                            </div>                                                                   
                                        </li>
                                        <!-- // form item -->

                                        <li class="control-group">
                                            <label for="driver_age_when_licensed" class="control-label span6">
                                                Age When Licensed            
                                            </label>
                                            <div class="controls">                                                
                                                <input id="driver_age_when_licensed" class="span6" type="text" name="driver_age_when_licensed" value="">
                                            </div>                                                                                       
                                        </li>
                                        <!-- // form item -->

                                        <li class="control-group">
                                            <label for="driver_state_of_license" class="control-label span6">
                                                In which state are you currently licensed            
                                            </label>
                                            <div class="controls">                                                
                                                <select id="driver_state_of_license" class="span6" name="driver_state_of_license">
                                                    <option value="1">Anglesey/Sir Fon</option>                                                    
                                                    <option value="2">Glamorgan/Morgannwg</option>                                                                                                        
                                                    <option value="3">Brecknockshire/Sir Frycheiniog</option>                                                                                                        
                                                    <option value="4">Merioneth/Meirionnydd</option>                                                                                                        
                                                </select>
                                            </div>                                                                                       
                                        </li>
                                        <!-- // form item -->

                                        <li class="control-group">
                                            <label for="driver_licene_no" class="control-label span6">
                                                License Number            
                                            </label>
                                            <div class="controls">                                                
                                                <input id="driver_license_no" class="span6" type="text" name="driver_license_no" value="">
                                            </div>                                                                                       
                                        </li>
                                        <!-- // form item -->
                                    </ul>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <!-- // tab3  --> 

                    <div class="tab-pane summary" id="driver_2">
                        <div class="row-fluid">
                            <div class="span12">
                                <fieldset>
                                    <legend><i class="fontello-icon-th-list-4"></i> Driver Information - Continued</legend>
                                    <ul class="form-list label-left list-bordered dotted">
                                        <li class="control-group">
                                            <label for="is_student" class="control-label span6">
                                                Are you a full-time student with a 3.0 GPA or better?
                                            </label>
                                            <div class="controls">
                                                <div id="is_student" class="btn-group change" data-toggle="buttons-radio" data-target="wzNewGenderInput">
                                                    <button type="button" class="btn active" class-toggle="btn-green" name="is_student" value="true">&nbsp; Yes &nbsp;</button>
                                                    <button type="button" class="btn" class-toggle="btn-green" name="is_student" value="false">&nbsp; No &nbsp;</button>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- // form item -->

                                        <li class="control-group">
                                            <label for="is_license_revoked" class="control-label span6">
                                                In past 5 years, have your license been suspended or revoked?
                                            </label>
                                            <div class="controls">
                                                <div id="is_license_revoked" class="btn-group change" data-toggle="buttons-radio" data-target="wzNewGenderInput">
                                                    <button type="button" class="btn active" class-toggle="btn-green" name="is_license_revoked" value="true">&nbsp; Yes &nbsp;</button>
                                                    <button type="button" class="btn" class-toggle="btn-green" name="is_license_revoked" value="false">&nbsp; No &nbsp;</button>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- // form item -->

                                        <li class="control-group">
                                            <label for="sr22_required" class="control-label span6">
                                                Do you require an SR-22 statement?
                                            </label>
                                            <div class="controls">
                                                <div id="sr22_required" class="btn-group change" data-toggle="buttons-radio" data-target="wzNewGenderInput">
                                                    <button type="button" class="btn active" class-toggle="btn-green" name="sr22_required" value="true">&nbsp; Yes &nbsp;</button>
                                                    <button type="button" class="btn" class-toggle="btn-green" name="sr22_required" value="false">&nbsp; No &nbsp;</button>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- // form item -->

                                        <li class="control-group">
                                            <label for="has_prev_tickets" class="control-label span6">
                                                In past 5 years, have your had any tickets, accidents or claims?
                                            </label>
                                            <div class="controls">
                                                <div id="has_prev_tickets" class="btn-group change" data-toggle="buttons-radio" data-target="wzNewGenderInput">
                                                    <button type="button" class="btn active" class-toggle="btn-green" name="has_prev_tickets" value="true">&nbsp; Yes &nbsp;</button>
                                                    <button type="button" class="btn" class-toggle="btn-green" name="has_prev_tickets" value="false">&nbsp; No &nbsp;</button>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- // form item -->
                                    </ul>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <!-- // tab4  --> 

                    <div class="tab-pane summary" id="contact">
                        <div class="row-fluid">
                            <div class="span12">
                                <fieldset>
                                    <legend><i class="fontello-icon-th-list-4"></i> Contact Information</legend>
                                    <ul class="form-list label-left list-bordered dotted">
                                        <li class="control-group">
                                            <label for="contact_first_name" class="control-label span6">
                                                First Name                   
                                            </label>
                                            <div class="controls">                                                
                                                <input id="contact_first_name" class="span6" type="text" name="contact_first_name" value="">
                                            </div>                                                                                       
                                        </li>
                                        <!-- // form item -->

                                        <li class="control-group">
                                            <label for="contact_last_name" class="control-label span6">
                                                Last Name                   
                                            </label>
                                            <div class="controls">                                                
                                                <input id="contact_last_name" class="span6" type="text" name="contact_last_name" value="">
                                            </div>                                                                                       
                                        </li>
                                        <!-- // form item -->

                                        <li class="control-group">
                                            <label for="contact_address" class="control-label span6">
                                                Address
                                            </label>
                                            <div class="controls">                                                
                                                <input id="contact_address" class="span6" type="text" name="contact_address" value="">
                                            </div>                                                                                       
                                        </li>
                                        <!-- // form item -->

                                        <li class="control-group">
                                            <label for="contact_city" class="control-label span6">
                                                City
                                            </label>
                                            <div class="controls">                                                
                                                <input id="contact_city" class="span6" type="text" name="contact_city" value="">
                                            </div>                                                                                       
                                        </li>
                                        <!-- // form item -->

                                        <li class="control-group">
                                            <label for="contact_state" class="control-label span6">
                                                State
                                            </label>
                                            <div class="controls">                                                
                                                <select id="contact_state" class="span6" name="contact_state">
                                                    <option value="1">Anglesey/Sir Fon</option>                                                    
                                                    <option value="2">Glamorgan/Morgannwg</option>                                                                                                        
                                                    <option value="3">Brecknockshire/Sir Frycheiniog</option>                                                                                                        
                                                    <option value="4">Merioneth/Meirionnydd</option>                                                                                                        
                                                </select>
                                            </div>                                                                                       
                                        </li>
                                        <!-- // form item -->

                                        <li class="control-group">
                                            <label for="contact_zip_code" class="control-label span6">
                                                ZIP Code
                                            </label>
                                            <div class="controls">                                                
                                                <input id="contact_zip_code" class="span6 maskZipcode" type="text" name="contact_zip_code" value="">
                                            </div>                                                                                       
                                        </li>
                                        <!-- // form item -->

                                        <li class="control-group">
                                            <label for="contact_day_phone" class="control-label span6">
                                                Day Phone
                                            </label>
                                            <div class="controls">                                                
                                                <input id="contact_day_phone" class="span6 maskPhoneExt" type="text" name="contact_day_phone" value="">
                                            </div>                                                                                       
                                        </li>
                                        <!-- // form item -->

                                        <li class="control-group">
                                            <label for="contact_evening_phone" class="control-label span6">
                                                Evening Phone
                                            </label>
                                            <div class="controls">                                                
                                                <input id="contact_evening_phone" class="span6 maskPhoneExt" type="text" name="contact_evening_phone" value="">
                                            </div>                                                                                       
                                        </li>
                                        <!-- // form item -->

                                        <li class="control-group">
                                            <label for="contact_email" class="control-label span6">
                                                Email
                                            </label>
                                            <div class="controls">                                                
                                                <input id="contact_email" class="span6" type="text" name="contact_email" value="">
                                            </div>                                                                                       
                                        </li>
                                        <!-- // form item -->

                                        <li class="control-group">
                                            <label for="interested_in_policy_discount" class="control-label span6">
                                                Are you interested in multiple-policy discount?
                                            </label>
                                            <div class="controls">
                                                <div id="interested_in_policy_discount" class="btn-group change" data-toggle="buttons-radio" data-target="wzNewGenderInput">
                                                    <button type="button" class="btn active" class-toggle="btn-green" name="interested_in_policy_discount" value="true">&nbsp; Yes &nbsp;</button>
                                                    <button type="button" class="btn" class-toggle="btn-green" name="interested_in_policy_discount" value="false">No</button>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- // form item -->

                                        <li class="control-group">
                                            <label for="interested_in_news_letter" class="control-label span6">
                                                Are you interested in NIRVANA news letter?
                                            </label>
                                            <div class="controls">
                                                <div id="interested_in_news_letter" class="btn-group change" data-toggle="buttons-radio" data-target="wzNewGenderInput">
                                                    <button type="button" class="btn active" class-toggle="btn-green" name="interested_in_news_letter" value="true">&nbsp; Yes &nbsp;</button>
                                                    <button type="button" class="btn" class-toggle="btn-green" name="interested_in_news_letter" value="false">No</button>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- // form item -->
                                    </ul>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <!-- // tab3  --> 
                </div>	
                <div class="section-content footer">
                    <ul class="wizard-action wizard-pager">
                        <li><a class="previous first btn" href="javascript:void(0);">First</a></li>
                        <li><a class="previous btn btn-blue" href="javascript:void(0);"><i class="fontello-icon-left-circle2"></i> Previous</a></li>
                        <li><a class="next last btn" href="javascript:void(0);">Last</a></li>
                        <li><a class="next btn btn-blue" href="javascript:void(0);">Next <i class="fontello-icon-right-circle2"></i></a></li>                        
                        <li><a class="next print btn btn-glyph" href="javascript:void(0);"><i class="fontello-icon-print-2"></i></a></li>
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