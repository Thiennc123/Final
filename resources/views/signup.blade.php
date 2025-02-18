@extends('layouts.master_login')

@section('title','Signup')



@section('body')
	<div style= "text-align: center; font-size: 35px;font-family: Arial, Roboto, 'Times New Roman'; color: #1929A0;"> Fotobook Signup
	 		</div>
	 		<div style="background-color: #E1E1E1">
	 			<form class="p-4" id="form_signup" method="POST" action="{{url('register')}}">
	 				{{csrf_field()}}
	 				<div class="form-group">
					    <label for="exampleInputFirstName">User Name</label>
					    <input type="text" class="form-control" id="exampleInputFirstName" aria-describedby="firstNameHelp" placeholder="Enter First" name = "userName">
					    <small id="firstNameHelp" class="form-text text-muted d-none">text here</small>
					  </div>
					  <div class="form-group">
					    <label for="exampleInputFirstName">First Name</label>
					    <input type="text" class="form-control" id="exampleInputFirstName" aria-describedby="firstNameHelp" placeholder="Enter First" name = "firstName">
					    <small id="firstNameHelp" class="form-text text-muted d-none">text here</small>
					  </div>
					  <div class="form-group">
					    <label for="exampleInputLastName">Last Name</label>
					    <input type="text" class="form-control" id="exampleInputLastName" aria-describedby="lastNameHelp" placeholder="Enter Last Name" name="lastName">
					    <small id="lastNameHelp" class="form-text text-muted d-none">text here</small>
					  </div>
					  <div class="form-group">
					    <label for="exampleInputEmail">Email</label>
					    <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="EmailHelp" placeholder="Enter Email" name="email">
					    <small id="emailHelp" class="form-text text-muted d-none">text here</small>
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1"> Password</label>
					    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
					    <small id="password1Help" class="form-text text-muted d-none">We'll never share your email with anyone else.</small>
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword2">Confirmation Password</label>
					    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Confirmation Password" name="exampleInputPassword2">
					    <small id="password2Help" class="form-text text-muted d-none">We'll never share your email with anyone else.</small>
					  </div>
					  <div class="d-flex justify-content-center">
					  	<button type="submit" class="btn btn-primary">Submit</button>
					  </div>
					 
					</form>
	 		</div>
@endsection