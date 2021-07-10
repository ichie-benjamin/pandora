<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::number('phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Photo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('photo', 'Photo:') !!}
    {!! Form::file('photo') !!}
</div>
<div class="clearfix"></div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>

<!-- About Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('about', 'About:') !!}
    {!! Form::textarea('about', null, ['class' => 'form-control']) !!}
</div>

<!-- Twitter Field -->
<div class="form-group col-sm-6">
    {!! Form::label('twitter', 'Twitter:') !!}
    {!! Form::text('twitter', null, ['class' => 'form-control']) !!}
</div>

<!-- Instagram Field -->
<div class="form-group col-sm-6">
    {!! Form::label('instagram', 'Instagram:') !!}
    {!! Form::text('instagram', null, ['class' => 'form-control']) !!}
</div>

<!-- Youtube Field -->
<div class="form-group col-sm-6">
    {!! Form::label('youtube', 'Youtube:') !!}
    {!! Form::text('youtube', null, ['class' => 'form-control']) !!}
</div>

<!-- Background Field -->
<div class="form-group col-sm-6">
    {!! Form::label('background', 'Background:') !!}
    {!! Form::text('background', null, ['class' => 'form-control']) !!}
</div>

<!-- Slug Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('restaurants.index') }}" class="btn btn-secondary">Cancel</a>
</div>
