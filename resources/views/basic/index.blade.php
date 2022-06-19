@extends("layout")
@section('content')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
        @foreach($contacts as $contact)
        <h4>{{ $contact->name }}</h4>
        <h6>{{ $contact->subject }}</h6>
        <p>{{ $contact->message }}</p>
        <a href="{{ url('contact'). '/' .$contact->id}}" class="btn btn-info">View </a>
        <a href="{{ url('contact'). '/' .$contact->id. '/edit' }}" class="btn btn-info">Edit </a>
    </hr>
    @endforeach
  </div>
</div>
 
@stop