<form action={{url('/login')}} method='POST'>
    <input type='text' name='email' value=''>
    <input type='password' name='password' value=''>
    <input type="submit" name="submit" value="Ainte">
    @csrf
</form>
