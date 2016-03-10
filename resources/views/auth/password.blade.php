@if (session('status'))
Te llegará un email con la liga para que cambies tu password.
@else
<form method="POST" action="{{url ('password/email')}}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" value="">        
    </div>
    <button type="submit" class="btn btn-primary">
        Envíame un email para resetear mi password.
    </button>
</form>

@endif