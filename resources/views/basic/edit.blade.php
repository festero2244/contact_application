
@extends("layout")
@section('content')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('contact/' .$contact->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$contact->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$contact->name}}" class="form-control"></br>
        <label>Subject</label></br>
        <input type="text" name="subject" id="subject" value="{{$contact->subject}}" class="form-control"></br>
        <label>Message</label></br>
        <input type="text" name="message" id="message" value="{{$contact->message}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
 
@stop