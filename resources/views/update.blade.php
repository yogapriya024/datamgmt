
<input name="_method" type="hidden" value="PUT">
<label for>Username</label><input type="text" name="username" value="{{ $user->username }}" /> <br><br>
<label for>Firstname</label><input type="text" name="username" value="{{ $user->firstname }}" /> <br><br>
<label for>Lastname</label><input type="text" name="username" value="{{ $user->lastname }}" /> <br><br>
<label for>Email</label><input type="email" name="email" value="{{ $user->email }}" /> <br><br>
<label for>Phone</label><input type="tel" name="phone" value="{{ $user->phone }}" /> <br><br>
<label for>Address</label><input type="text" name="address" value="{{ $user->address }}" /> <br><br>
<label for>City</label><input type="text" name="city" value="{{ $user->city }}" /> <br><br>
<label for>State</label><input type="text" name="state" value="{{$user->state }}" /> <br><br>
<label for>Zipcode</label><input type="text" name="zipcode" value="{{ $user->zipcode }}" /> <br><br>
<input type="submit" value="update" />
</form>