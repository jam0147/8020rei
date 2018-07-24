@foreach ($messages_received as $message_received)
  <tr>
    <td>{{$message_received->id}}</td>
    <td>{{$message_received->phone_number}}</td>
    <td>{{$message_received->response}}</td>
    <td>{{$message_received->created_at}}</td>
  </tr>
@endforeach