<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<div><a href="/login"> Log in</a></div>
@auth
    <div><a href="/project"> Go to task list</a></div>
@endauth

</html>
