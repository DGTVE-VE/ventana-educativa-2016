<form method="POST" action="{{url('password/reset')}}">
    {{csrf_field()}}
    <input type="hidden" name="token" value="{{$token}}" />
    <div class="form-group">
        <label for="email">Correo</label>
        <input type="email" class="form-control" name="email" value="">        
        <div class="text-danger">{{$errors->first ('email')}}</div>
    </div>
    <div class="form-group">
        <label for="password">Contraseña:</label>
        <input type="password" class="form-control" name="password" >
        <div class="text-danger">{{$errors->first ('password')}}</div>
    </div>
    <div class="form-group">
        <label for="password_confirmation">Confirmar Contraseña:</label>
        <input type="password" class="form-control" name="password_confirmation" >        
    </div>
    <button type="submit" class="btn btn-primary">
        Modificar contraseña
    </button>
</form>