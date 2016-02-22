<table class="table table-responsive">
    <thead>
    <th>Id</th>
			<th>Name</th>
			<th>Email</th>
			<th>Password</th>
			<th>Created At</th>
			<th>Updated At</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($users as $users)
        <tr>
            <td>{!! $users->id !!}</td>
			<td>{!! $users->name !!}</td>
			<td>{!! $users->email !!}</td>
			<td>{!! $users->password !!}</td>
			<td>{!! $users->created_at !!}</td>
			<td>{!! $users->updated_at !!}</td>
            <td>
                <a href="{!! route('users.edit', [$users->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('users.delete', [$users->id]) !!}" onclick="return confirm('Are you sure wants to delete this Users?')">
                    <i class="glyphicon glyphicon-trash"></i>
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>