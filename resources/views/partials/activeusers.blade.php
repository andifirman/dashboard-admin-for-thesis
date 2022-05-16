<table class="table table-sm table-hover">
  <thead class="thead">
    <tr>
      <th>User Name</th>
      <th>Games Submitted</th>
    </tr>
  </thead>

  <tbody>
    @foreach($activeusers as $activeuser)
      <tr>
        <td>{{ $activeuser->name }}</td>
        <td>{{ $activeuser->submitted_games }}</td>
      </tr>
    @endforeach
  </tbody>
</table>