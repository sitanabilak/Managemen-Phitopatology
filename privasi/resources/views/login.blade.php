@extends('template.app')
@section('content')
<div class="container">
<p></p>

  <div class="login-page">
  <div class="form">
     {!! Form::open(array('url'=>'/login', 'role'=>'form', 'class="login-form"')) !!}
	 
      <input name="username" type="text" placeholder="username"/>
	  
	  
      <input name="password" type="password" placeholder="password"/>
      <button>login</button>
	   <p class="message"><a href="{{URL('register')}}">Tambah Operator</a></p>
                   <!-- End SmartWizard Content -->
{!!Form::close()!!}
  </div>
</div>

@endsection
