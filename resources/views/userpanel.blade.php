<?PHP
if(session('usertype')=='user')
		{
			
		?>
<center><h1><u>User dashboard</u></h1></center>
<h2>Hello,{{session('user')}}</h2><br><br>
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
<td>{{ $user->photo->name }} </td>
<td>{{ $user->photo->path }} </td>
<tr>
</table>


<a href="/logout">Logout</a>
<?PHP
		}
		?>