@extends('layouts.app')

@section('content')
	<div class="container">
		<h3>Adicionar Turma</h3>
	   <form action="{{ url('admin/criar-turma') }}" method="post" enctype="multipart/form-data" id="form_creatturma">
	    	{!! csrf_field() !!}
	    	<div class="row">
		    	<div class="form-group col-md-5">
					<label for="usr">Turma</label>
					<input type="text" class="form-control" name="nome" id="nome" placeholder="Ex: TURMA456">
		    	</div>
		    	<div class="form-group col-md-12">
					<button type="submit" class="btn btn-default">Salvar</button>
				</div>
	    	</div>
		</form>
	</div>
@endsection

@section('scripts')
	<script>
	    $(function(){
	        $("#form_creatturma").validate({
	            rules : {
	                nome:{
	                    required:true,
	                    minlength: 5
	                }
	            },
	            messages:{
	                nome:{
	                    required:"Por favor, informe uma turma",
	                    minlength:"A turma deve ter pelo menos 5 caracteres"
	                }    
	               }
	        });
	    });
	</script>
@endsection