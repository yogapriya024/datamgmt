<html>
<head>
<title>View</title>
</head>
<body>
<table>
<tr>
<td>Username</td>
<td>Firstname</td>
<td>Lastname</td>
<td>Email</td>
<td>Phone</td>
<td>Address</td>
<td>City</td>
<td>State</td>
<td>Zipcode</td>
<td>name</td>
<td>path</td>
</tr>
<tr>
<td>{{ $user->username }} </td>
<td>{{ $user->firstname }} </td>
<td>{{ $user->lastname }} </td>
<td>{{ $user->email }} </td>
<td>{{ $user->contact->phone }} </td>
<td>{{ $user->contact->address }} </td>
<td>{{ $user->contact->city }} </td>
<td>{{ $user->contact->state }} </td>
<td>{{ $user->contact->zipcode }} </td>
@foreach($user->photo as $photo)
<td>{{ $photo->name }} </td>

<td><img src="{{storage_path('app/'.$photo->path )}}" width="100px;" height="100px;"  alt="image" ></td>
@endforeach
<tr>
</table>
</body>
</html>