
<div class = "from-group">
    {!! Form::Label('id','ID:') !!}
    {!! Form::text('id',null,['class'=>'form-control'])!!}
</div>
<div class = "from-group">
    {!! Form::Label('description','Description:') !!}
    {!! Form::text('description',null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>

