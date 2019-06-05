@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Contacts</div>
								<div class="card-body">
									<ul class="list-group">
										<li class="list-group-item">{{ $contact->name }}</li>
										<li class="list-group-item">{{ $contact->address }}</li>
										<li class="list-group-item">{{ $contact->phone }}</li>
									</ul>
								</div>
            </div>
        </div>
    </div>
</div>
@endsection
