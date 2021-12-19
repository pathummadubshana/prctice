<p>name</P>
<table border="1">
    <tr>
        <td>ID</td>
        <td>name</td>
        <td>email</td>
        <td>nic</td>
        <td>tel</td>
        <td>pass</td>
    </tr>
   @foreach($details as $details )
   <tr>
        <td>{{$details['id']}}</td>
        <td>{{$details['name']}}</td>
        <td>{{$details['email']}}</td>
        <td>{{$details['nic']}}</td>
        <td>{{$details['tel']}}</td>
        <td>{{$details['pass']}}</td>
    </tr>
   @endforeach
</table>