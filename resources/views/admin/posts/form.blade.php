<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('title', 'Title', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('slug') ? 'has-error' : ''}}">
    {!! Form::label('slug', 'Slug', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('slug', null, ['class' => 'form-control']) !!}
        {!! $errors->first('slug', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('content') ? 'has-error' : ''}}">
    {!! Form::label('content', 'Content', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
        {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('published_at') ? 'has-error' : ''}}">
    {!! Form::label('published_at', 'Published At', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::input('datetime-local', 'published_at', null, ['class' => 'form-control']) !!}
        {!! $errors->first('published_at', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('file') ? 'has-error' : ''}}">
    {!! Form::label('file', 'Select file', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::file('file', null, ['class' => 'form-control']) !!}
        {!! $errors->first('file', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
