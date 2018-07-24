@foreach ($messages_sended as $message_sended)
          <tr>
                <td>{{$message_sended['id']}}</td>
                <td>{{$message_sended['phone_number']}}</td>
                <td>{{$message_sended['body']}}</td>
                <td>
                @if ($message_sended['status'])
                    <span class="label label-success">Approved</span>
                @else
                    <span class="label label-warning">Pending</span>
                @endif
                </td>
               <td>{{$message_sended['created_at']}}</td>
          </tr>
 @endforeach