<?php
$void = 'javascript:void(0)';
?>
@extends('layout')

@section('title',"Welcome")

@section('scripts')
    <!-- CKEditor -->
    <script src="lib/ckeditor/ckeditor.js"></script>
	<script src="lib/ckeditor/samples/js/sample.js"></script>
	<link rel="stylesheet" href="lib/ckeditor/samples/css/samples.css">
	<link rel="stylesheet" href="lib/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">

   <script>
      $(document).ready(() => {
         initSample('msg')
      })
   </script>
@stop

@section('content')
@include('header',['caption' => "Dashboard"])
<div class="row">
   <!--
    <div class="col-md-12 mt-3 mb-5">
         <div class="form-group">
            <p class="control-label">Test Results</p>
            <div id="test-result" class="form-control"></div>
         </div>
    </div>
-->
   <div class="col-md-12 mb-5">
      <input type="hidden" id="sender-id" value=""/>
         <div class="form-group">
            <p class="control-label">Select Sender</p>
            <select id="sender" class="form-control">
               <option value="none">Select sender</option>
               <?php
                foreach($senders as $s)
                {
               ?>
                <option data-xf="{{$s['id']}}" data-sn="{{$s['sn']}}" data-se="{{$s['se']}}" value="{{$s['id']}}">{{$s['sn']}}</option>
               <?php
                }
               ?>
            </select>
         </div>
    </div>
    <div class="col-md-6">
         <div class="form-group">
            <p class="control-label">Sender Name</p>
            <input type="text" id="sname" class="form-control" placeholder="Sender name"/>
         </div>
    </div>
    <div class="col-md-6">
         <div class="form-group">
            <p class="control-label">Sender Email</p>
            <input type="text" id="reply-to" class="form-control" placeholder="Reply-to email"/>
         </div>
    </div>
    <div class="col-md-12 mt-3">
         <div class="form-group">
            <p class="control-label">Subject</p>
            <input type="text" id="subject" class="form-control" placeholder="Subject"/>
         </div>
    </div>
    <div class="col-md-6 mt-3">
         <div class="form-group">
            <p class="control-label">Leads</p>
            <textarea type="text" id="leads" rows="15" class="form-control"></textarea>
         </div>
    </div>
    <div class="col-md-6 mt-3">
         <div class="form-group">
            <p class="control-label">Message</p>
            <div id="editor" class="form-control"></div>
         </div>
    </div>
    <div class="col-md-12 mt-2 mb-5">
         <div class="form-group">
            <button id="send-btn" class="btn btn-primary">Send</button>
         </div>
    </div>
    <div class="col-md-12 mb-5">
     <h2>Send Results</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm data-table">
          <thead>
            <tr>
              <th scope="col">Email address</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody id="result-body">
           
          </tbody>
        </table>
      </div>
    </div>
</div>

@stop
