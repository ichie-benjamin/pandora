<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $restaurants->name }}</p>
</div>

<!-- Phone Field -->
<div class="form-group">
    {!! Form::label('phone', 'Phone:') !!}
    <p>{{ $restaurants->phone }}</p>
</div>

<!-- Photo Field -->
<div class="form-group">
    {!! Form::label('photo', 'Photo:') !!}
    <p>{{ $restaurants->photo }}</p>
</div>

<!-- Address Field -->
<div class="form-group">
    {!! Form::label('address', 'Address:') !!}
    <p>{{ $restaurants->address }}</p>
</div>

<!-- About Field -->
<div class="form-group">
    {!! Form::label('about', 'About:') !!}
    <p>{{ $restaurants->about }}</p>
</div>

<!-- Twitter Field -->
<div class="form-group">
    {!! Form::label('twitter', 'Twitter:') !!}
    <p>{{ $restaurants->twitter }}</p>
</div>

<!-- Instagram Field -->
<div class="form-group">
    {!! Form::label('instagram', 'Instagram:') !!}
    <p>{{ $restaurants->instagram }}</p>
</div>

<!-- Youtube Field -->
<div class="form-group">
    {!! Form::label('youtube', 'Youtube:') !!}
    <p>{{ $restaurants->youtube }}</p>
</div>

<!-- Background Field -->
<div class="form-group">
    {!! Form::label('background', 'Background:') !!}
    <p>{{ $restaurants->background }}</p>
</div>

<!-- Slug Field -->
<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    <p>{{ $restaurants->slug }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $restaurants->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $restaurants->updated_at }}</p>
</div>

