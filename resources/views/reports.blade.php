@extends('parent')
@section('navbar')
<li><a class="waves-effect waves-light btn blue darken-4 white-text" href="">VIEW PATIENT</a></li>
<li><a class="waves-effect waves-light btn blue darken-4 white-text" href="">REPORTS</a></li>
<li><a class="waves-effect waves-light btn blue darken-4 white-text" href="">CHECK UP</a></li>
@endsection

@section('mainBody')
<div class="container">
	<br>
	<h4 class="thin">Admin List</h4>

	<div>
	<table id="example" class="display" cellspacing="0" width="100%">
	        <thead>
	            <tr>
	                <th>Patient No.</th>
	                <th>Name</th>
	                <th>Gender</th>
	                <th>Address</th>
	                <th>Diagnosis</th>
	                <th>Date Created</th>
	                <th>Actions</th>
	            </tr>
	        </thead>
	        <tbody>
	        	@foreach($admin_details as $admin_detail)
	            <tr>
	                <td>{!! $admin_detail->strLastName . ', ' . $admin_detail->strFirstName . ' ' . $admin_detail->strMiddleName !!}</td>
	                <td>{!! $admin_detail->strEmail !!}</td>
	                <td>{!! $admin_detail->strContactNo !!}</td>
	                <td>{!! $admin_detail->txtPermanentAddress !!}</td>
	                <td>{!! $admin_detail->zipCode !!}</td>
	                <td>{!! $admin_detail->created_at !!}</td>
	                <td> 
		         
	                </td>
	            </tr>
	            @endforeach
	        </tbody>
	    </table>
	</div>
</div>

@endsection