@extends('layouts.landing_guest');

@section('landing_insurance_mini_form')
{{  Form::open(['method' => 'POST', 'url' => '/quote']) }}
<div class="row-fluid">
    <div class="span4"></div>
    <div class="span4">
        {{ Form::label('label_zip_code', 'Enter Zip Code')}}
        {{ Form::text('zip_code', '', $attributes = array('required' => 'required', 'class' => 'input-block-level', 'placeholder' => 'ZIP Code'))}}
        {{ Form::label('label_insurance_type', 'Select Insurance Service')}}
        {{ Form::select('insurance_type',array
                    (   
                        'auto' => 'Auto Insurance'
                        , 'home' => 'Home Insurance'
                        , 'renter' => 'Renters Insurance'
                        , 'business' => 'Business Insurance'
//                        , 'life' => 'Life Insurance'
//                        , 'health' => 'Health Insurance'
                    )
                    , null
                    , $attributes = array('class' => 'input-block-level')
                )}}        
        {{ Form::label('label_prev_insured', 'Have you been insured for last 6 months?') }}            
        {{ Form::radio('insured', 'true', false, ['style' => 'margin-left:5%;']) }} Yes
        {{ Form::radio('insured', 'false', true, ['style' => 'margin-left:10%;']) }} No
        <br />
        <br />            
        {{ Form::Submit('GET QUOTE', array('class' => 'btn btn-primary btn-large pull-right')) }}
    </div>
    <div class="span4"></div>
</div>
{{  Form::close() }}
@stop