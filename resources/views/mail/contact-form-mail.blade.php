@component('mail::message')

<h1>Thank You for contacting Us</h1>

<h1>First Name:<br>{{$data['first_name']}}</h1>
<h1>Second Name<br>{{$data['last_name']}}</h1>
<h1>Phone{{$data['phone']}}</h1>
<h1>Email{{$data['email']}}</h1>
<h1>Message{{$data['message']}}</h1>




@endcomponent
