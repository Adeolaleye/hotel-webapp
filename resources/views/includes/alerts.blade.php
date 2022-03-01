@if(session()->get('message'))
<div class="alert alert-success alert-dismissible" role="alert">
{{ session()->get('message')}}
</div>
@endif

@if(session()->get('error'))
<div class="alert alert-secondary alert-dismissible" role="alert">
{!! session()->get('error') !!}
</div>
@endif

@if(session()->get('warning'))
<div class="alert alert-warning alert-dismissible" role="alert">
{!! session()->get('warning') !!}
</div>
@endif

@if(session()->get('welcomeback'))
<div class="alert alert-success alert-dismissible" role="alert">
{{ session()->get('welcomeback')  }}
</div>
@endif

@if($errors->any())
<div class="alert alert-warning alert-dismissible" role="alert">
      @foreach($errors->all() as $error)
            {{ $error }}<br>
      @endforeach
</div>
@endif
