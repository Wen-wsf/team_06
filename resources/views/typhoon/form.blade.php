<div class = "from-group">
    {!! Form::Label('year','Year:') !!}
    {!! Form::text('year',null,['class'=>'form-control'])!!}
</div>
<div class = "from-group">
    {!! Form::Label('id','ID:') !!}
    {!! Form::text('id',null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
    {!! Form::label('name', 'Name：') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('arrived', 'Arrived：') !!}
    {!! Form::text('arrived', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('powerLV', 'PowerLV：') !!}
    {!! Form::text('powerLV', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('level', 'Level：') !!}
    {!! Form::text('level', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>
