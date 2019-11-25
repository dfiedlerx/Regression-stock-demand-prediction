<div class="row mB-40">
	<div class="col-sm-8">
		<div class="bgc-white p-20 bd">
			{!! Form::myInput('text', 'name', 'Nome') !!}
		
			{!! Form::myInput('email', 'email', 'Email') !!}
	
			{!! Form::myInput('password', 'password', 'Senha') !!}
	
			{!! Form::myInput('password', 'password_confirmation', 'Repetir Senha') !!}
	
			{!! Form::mySelect('role', 'Permissões', config('variables.role'), null, ['class' => 'form-control select2']) !!}
	
			{!! Form::myFile('avatar', 'Foto') !!}
	
			{!! Form::myTextArea('bio', 'Descrição') !!}
		</div>  
	</div>
</div>