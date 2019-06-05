@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Contacts</div>
								<div class="card-body">

									<table class="table table-striped">
										<thead>
											<th>Name</th>
											<th>Address</th>
											<th>Phone</th>
											<th>Action</th>
										</thead>	
										<tbody>
											@foreach($contacts as $contact)
											<tr>
												<td>{{ $contact->name }}</td>	
												<td>{{ $contact->address }}</td>	
												<td>{{ $contact->phone }}</td>	
												<td>
													<a href="{{ route('contact.edit', [$contact->id]) }}">
														<button class="btn btn-success">Edit</button>
													</a>
													<a href="{{ route('contact.view', [$contact->id]) }}">
														<button class="btn btn-primary">view</button>
													</a>
													<form action="{{ route('contact.delete', [$contact->id]) }}" method="post">
														@csrf
														<button type="submit" class="btn btn-danger">Delete</button>
													</form>
												</td>
											</tr>
											@endforeach
										</tbody>
									</table>

								</div>
            </div>
        </div>
    </div>
</div>
@endsection
