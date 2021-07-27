<?PHP
if(session('usertype')=='admin')
		{
			
		?>
<center><h1><u>Admin dashboard</u></h1></center>
<h2>Hello,{{session('user')}}</h2><br><br>
<a href="{{ route('add') }}" >Add</a><br>
@foreach($users as $user)
{{ $user->username }} : {{ $user->contact->phone }} :{{$user->contact->address}}
<a href="{{ route('view',[$user->id]) }}" >View</a> 
<a href="{{ route('update',[$user->id]) }}" >Edit</a> 
<a href="{{ route('image',[$user->id]) }}" >Image Upload</a>
<a href="{{ route('TestMail',[$user->id]) }}" >Send-Mail</a> <br>

<form action="{{ route('del',[$user->id]) }}" method="post">
@csrf
<input name="_method" type="hidden" value="DELETE">
<input type="submit" value="Delete" />
</form>

<br>
@endforeach
		
		
<a href="/logout">Logout</a>
<?PHP
		}
		?>
		
		
		
		
		