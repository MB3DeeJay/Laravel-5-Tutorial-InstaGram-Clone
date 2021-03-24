@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-3 p-5">
			<img src="/img/g2_decepticon_logo-RedShift.png" style="height: 60px;">
		</div>
		<div class="col-9 pt-5">
			<div><h1>{{ $user->username }}</h1></div>
			<div class="d-flex">
				<div class="pr-4"><strong>42</strong> posts</div>
				<div class="pr-4"><strong>1</strong> followers</div>
				<div class="pr-4"><strong>0</strong> following</div>
			</div>
			<div class="pt-4 font-weight-bold">Moon Base 3</div>
			<div>Moon Base 3 is a secret R&D and staging system.  You won't find us.  But if you're on our radar... we'll find you.</div>
			<div class="pt-4"><a href="http://www.moonbase3.org/">MoonBase3.org</a></div>
		</div>
	</div>
	
	<div class="row pt-5">
		<div class="col-4">
		   <img src="/img/DSCF3237.JPG" class="w-100">
		</div>
		<div class="col-4">
		   <img src="/img/DSCF3245.JPG" class="w-100">
		</div>
		<div class="col-4">
		   <img src="/img/DSCF3247.JPG" class="w-100">
		</div>
	</div>
</div>
@endsection
