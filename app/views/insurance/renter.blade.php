@extends('layouts.master');

@section('title')
<section class="title">
    <div class="container">
        <div class="row-fluid">
            <div class="span6">
                <h1>RENTER INSURANCE</h1>
            </div>
            <div class="span6">
                <ul class="breadcrumb pull-right">
                    <li><a href="/">Home</a> <span class="divider">/</span></li>                    
                    <li class="active">Renter Insurance</li>
                </ul>
            </div>
        </div>
    </div>
</section>
@stop

@section('content')
<div class="row-fluid">
    <div class="span1"></div>
    <div class="span10">                    
        <div class="well well-nice well-box wizard">
            <form id="DWZD" class="form-horizontal form-dark" method="" action="/" >
                <div class="navbar">
                    <div class="navbar-inner">
                        <div class="ccontainer">
                            <ul>
                                <li><a href="#get_started" data-toggle="tab">Get Started</a></li>
                                <li><a href="#property" data-toggle="tab">Property Details</a></li>
                                <li><a href="#coverage" data-toggle="tab">Coverage Information</a></li>                                                                
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
                    <div class="tab-pane" id="get_started">
                        <div class="row-fluid">
                            <div class="span12">
                                <fieldset>
                                    <legend><span>Lets get started with the basics</span></legend>
                                    <ul class="form-list label-left list-bordered dotted">
                                        <li class="control-group">
                                            <label for="select_property_type" class="control-label span6">Property Type</label>
                                            <div class="controls">
                                                <select id="select_property_type" class="span6" name="property_type">
                                                    <option value="" selected="selected">Select Property Type</option>
                                                    <option value="AL">Alabama</option>                                                   
                                                </select>
                                            </div>
                                        </li>
                                        <!-- // form item -->                                       

                                        <li class="control-group">
                                            <label for="year_built" class="control-label span6">
                                                Year Built                                                
                                            </label>
                                            <div class="controls">                                                
                                                <select id="year_built" class="span6" name="year_built">
                                                    <option value="" selected="selected">Select Built Year</option>
                                                    <option value="AL">2015</option>                                                    
                                                    <option value="AL">2014</option>                                                                                                        
                                                    <option value="AL">2013</option>                                                                                                        
                                                    <option value="AL">2012</option>                                                                                                        
                                                    <option value="AL">2011</option>                                                                                                        
                                                    <option value="AL">2010</option>                                                                                                        
                                                </select>
                                            </div>
                                        </li>
                                        <!-- // form item -->

                                        <li class="control-group">
                                            <label for="is_rented" class="control-label span6">
                                                Did you own or rent this property?                             
                                            </label>
                                            <div class="controls">
                                                <div id="is_rented" class="btn-group change" data-toggle="buttons-radio" data-target="wzNewGenderInput">
                                                    <button type="button" class="btn active" class-toggle="btn-green" name="is_rented" value="own">Own</button>
                                                    <button type="button" class="btn" class-toggle="btn-green" name="is_rented" value="rent">Rent</button>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- // form item -->

                                        <li class="control-group">
                                            <label for="is_living" class="control-label span6">
                                                Do you live at this property?
                                            </label>
                                            <div class="controls">
                                                <div id="is_living" class="btn-group change" data-toggle="buttons-radio" data-target="wzNewGenderInput">
                                                    <button type="button" class="btn active" class-toggle="btn-green" name="is_living" value="true">Yes</button>
                                                    <button type="button" class="btn" class-toggle="btn-green" name="is_living" value="false">No</button>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- // form item -->

                                        <li class="control-group">
                                            <label for="property_zip_code" class="control-label span6">
                                                Property ZIP Code                                             
                                            </label>
                                            <div class="controls">                                                
                                                <input id="property_zip_code" class="span6 maskZipcode" type="text" name="property_zip_code" value="">
                                            </div>
                                        </li>
                                        <!-- // form item -->                                        
                                    </ul>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <!-- // tab1 -->                    

                    <div class="tab-pane" id="property">
                        <div class="row-fluid">
                            <div class="span12">
                                <fieldset>
                                    <legend><i class="fontello-icon-home"></i> Where is your home located?</legend>
                                    <ul class="form-list label-left list-bordered dotted">
                                        <li class="control-group">
                                            <label for="property_address" class="control-label span6">
                                                Property Address
                                            </label>
                                            <div class="controls">                                                
                                                <input id="property_address" class="span6" type="text" name="property_address" value="">
                                            </div>                                                                                       
                                        </li>
                                        <!-- // form item -->

                                        <li class="control-group">
                                            <label for="property_apt_unit" class="control-label span6">
                                                Property_apt_unit
                                            </label>
                                            <div class="controls">                                                
                                                <input id="property_apt_unit" class="span6" type="text" name="property_apt_unit" value="">
                                            </div>
                                        </li>
                                        <!-- // form item -->

                                        <li class="control-group">
                                            <label for="property_city" class="control-label span6">
                                                Property City
                                            </label>
                                            <div class="controls">                                                
                                                <input id="property_city" class="span6" type="text" name="property_city" value="">
                                            </div>
                                        </li>
                                        <!-- // form item -->

                                        <li class="control-group">
                                            <label for="property_state" class="control-label span6">
                                                Property State
                                            </label>
                                            <div class="controls">                                                
                                                <select id="property_state" class="span6" name="property_state">
                                                    <option value="1">Anglesey/Sir Fon</option>                                                    
                                                    <option value="2">Glamorgan/Morgannwg</option>                                                                                                        
                                                    <option value="3">Brecknockshire/Sir Frycheiniog</option>                                                                                                        
                                                    <option value="4">Merioneth/Meirionnydd</option>                                                                                                        
                                                </select>
                                            </div>
                                        </li>
                                        <!-- // form item -->

                                        <li class="control-group">
                                            <label for="construction_type" class="control-label span6">
                                                Property ZIP Code
                                            </label>
                                            <div class="controls">                                                
                                                <input id="construction_type" class="span6 maskZipcode" type="text" name="construction_type" value="">
                                            </div>
                                        </li>
                                        <!-- // form item -->                                        

                                        <li class="control-group">
                                            <label for="approx_square_footage" class="control-label span6">
                                                Approximate Square Footage
                                            </label>
                                            <div class="controls">                                                
                                                <input id="approx_square_footage" class="span6" type="text" name="approx_square_footage" value="">
                                            </div>
                                        </li>
                                        <!-- // form item -->

                                        <li class="control-group">
                                            <label for="security_system" class="control-label span6">
                                                Fire Hydrant
                                            </label>
                                            <div class="controls">                                                
                                                <input id="security_system" class="span6" type="text" name="security_system" value="">
                                            </div>
                                        </li>
                                        <!-- // form item -->                                        

                                        <li class="control-group">
                                            <label for="has_pets" class="control-label span6">
                                                Do you have any pets
                                            </label>
                                            <div class="controls">                                                
                                                <input id="has_pets" class="span6" type="text" name="has_pets" value="">
                                            </div>
                                        </li>
                                        <!-- // form item -->

                                        <li class="control-group">
                                            <label for="is_on_food_plain" class="control-label span6">
                                                Is your home located on a food plain?
                                            </label>
                                            <div class="controls">                                                
                                                <input id="is_on_food_plain" class="span6" type="text" name="is_on_food_plain" value="">
                                            </div>
                                        </li>
                                        <!-- // form item -->

<!--                                        <li class="control-group">
                                            <label for="is_on_food_plain" class="control-label span6">
                                                Select any additional features that apply 
                                            </label>
                                            <div class="controls">                                                
                                                <input id="has_dead_bolts" class="span6" type="checkbox" name="has_dead_bolts" value=""> Dead Bolts
                                                <input id="has_fire_extinguisher" class="span6" type="checkbox" name="has_fire_extinguisher" value=""> Fire Extinguisher
                                                <input id="has_covered_deck" class="span6" type="checkbox" name="has_covered_deck" value="">Covered Deck/Porch
                                                <input id="has_swimming_pool" class="span6" type="checkbox" name="has_swimming_pool" value=""> Swimming Pool
                                                <input id="has_trampoline" class="span6" type="checkbox" name="has_trampoline" value=""> Trampoline
                                            </div>
                                        </li>-->
                                        <!-- // form item -->
                                    </ul>
                                </fieldset>
                                <!-- // fieldset Input --> 
                            </div>
                        </div>
                    </div>
                    <!-- // tab2 -->

                    <div class="tab-pane summary" id="coverage">
                        <div class="row-fluid">
                            <div class="span12">
                                <fieldset>
                                    <legend><i class="fontello-icon-th-list-4"></i> Coverage Information</legend>
                                    <ul class="form-list label-left list-bordered dotted">
                                        <li class="control-group">
                                            <label for="no_of_rooms_dwelling" class="control-label span6">
                                                Total number of rooms in your dwelling except basement and bathrooms
                                            </label>
                                            <div class="controls">                                                
                                                <input id="no_of_rooms_dwelling" class="span6" type="text" name="no_of_rooms_dwelling" value="">
                                            </div>                                                                                       
                                        </li>
                                        <!-- // form item -->

                                        <li class="control-group">
                                            <label for="replacement_value" class="control-label span6">
                                                Replacement value of all posessions
                                            </label>
                                            <div class="controls">                                                
                                                <input id="replacement_value" class="span6" type="text" name="replacement_value" value="">
                                            </div>                                                                                       
                                        </li>
                                        <!-- // form item -->

                                        <li class="control-group">
                                            <label for="driver_dob" class="control-label span6">
                                                Personal Liability Coverage             
                                            </label>
                                            <div class="controls">                                                
                                                <input id="driver_dob" class="span6" type="text" name="driver_dob" value="">
                                            </div>                                                                                       
                                        </li>
                                        <!-- // form item -->

                                        <li class="control-group">
                                            <label for="driver_gender" class="control-label span6">
                                                Desired Deductible     
                                            </label>
                                            <div class="controls">                                                
                                                <input id="driver_gender" class="span6" type="text" name="driver_gender" value="">
                                            </div>                                                                                       
                                        </li>
                                        <!-- // form item -->

                                        <li class="control-group">
                                            <label for="interested_in_policy_discount" class="control-label span6">
                                                Have you reported any claims or losses to your insurance in the past 5 years?
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
                                            <label for="interested_in_policy_discount" class="control-label span6">
                                                Will this insurance replace an existing insurance policy?
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
                                            <label for="interested_in_policy_discount" class="control-label span6">
                                                Current Insurance Company
                                            </label>
                                            <div class="controls">
                                                <input id="driver_gender" class="span6" type="text" name="driver_gender" value="">
                                            </div>
                                        </li>
                                        <!-- // form item -->

                                        <li class="control-group">
                                            <label for="length_of_time_with_insurance_company" class="control-label span6">
                                                Length of time with insurance company
                                            </label>
                                            <div class="controls">
                                                <input id="length_of_time_with_insurance_company" class="span6" type="text" name="insurance_comp_length" value="">
                                            </div>
                                        </li>

                                        <li class="control-group">
                                            <label for="length_of_time_cont_insured" class="span6 control-label span6">
                                                Length of time continously insured
                                            </label>
                                            <div class="controls">
                                                <input id="length_of_time_cont_insured" class="span6" type="text" name="insurance_continously" value="">                                                
                                            </div>
                                        </li>
                                        
                                        <li class="control-group">
                                            <label for="interested_in_policy_discount" class="control-label span6">
                                                Are you interested in mortgage protection services?
                                            </label>
                                            <div class="controls">
                                                <div id="interested_in_policy_discount" class="btn-group change" data-toggle="buttons-radio" data-target="wzNewGenderInput">
                                                    <button type="button" class="btn active" class-toggle="btn-green" name="interested_in_policy_discount" value="true">&nbsp; Yes &nbsp;</button>
                                                    <button type="button" class="btn" class-toggle="btn-green" name="interested_in_policy_discount" value="false">No</button>
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
                                                Gender
                                            </label>
                                            <div class="controls">                                                
                                                 <select id="contact_gender" class="span6" name="contact_gender">
                                                    <option value="1">Male</option>                                                                                                        
                                                    <option value="2">Female</option>                                                                                                        
                                                </select>
                                            </div>                                                                                       
                                        </li>
                                        <!-- // form item -->

                                        <li class="control-group">
                                            <label for="contact_city" class="control-label span6">
                                                Date of Birth
                                            </label>
                                            <div class="controls">                                                
                                                <input id="contact_dob" class="span6" type="text" name="driver_dob" value="">
                                            </div>                                                                                       
                                        </li>
                                        <!-- // form item -->

                                        <li class="control-group">
                                            <label for="contact_state" class="control-label span6">
                                                Contact Number
                                            </label>
                                            <div class="controls">                                                
                                                <input id="contact_number" class="span6 maskPhoneExt" type="text" name="contact_state" value="">
                                            </div>                                                                                       
                                        </li>
                                        <!-- // form item -->

                                        <li class="control-group">
                                            <label for="contact_zip_code" class="control-label span6">
                                                Email
                                            </label>
                                            <div class="controls">                                                
                                                <input id="contact_zip_code" class="span6 email" type="text" name="contact_zip_code" value="">
                                            </div>                                                                                       
                                        </li>
                                        <!-- // form item -->

                                        <li class="control-group">
                                            <label for="contact_day_phone" class="control-label span6">
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
                                            <label for="interested_in_policy_discount" class="control-label span6">
                                                Is your contact address same as the property address?
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