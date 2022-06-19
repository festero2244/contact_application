@extends("layout")
@section('content')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
        <h4>{{ $contact->name }}</h4>
        <h6>{{ $contact->subject }}</h6>
        <p>{{ $contact->message }}</p>
        <a href="{{ url('contacts'). '/' .$contact->id}}" class="btn btn-info">View </a>
  
    </hr>
  
  </div>
</div>
 
@stop