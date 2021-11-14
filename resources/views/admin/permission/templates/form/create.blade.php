{!! Form::open([
    'url' => route('admin.permission.store'),
    'class' => 'needs-validation',
    'novalidate' => true,
]) !!}
<div class="card">
    <div class="card-header">
        <h3 class="mb-0">{{ __('Add') }}</h3>
    </div>
    <div class="card-body">
        <div class="form-row">
            <div class="col-md-6 mb-3">
                {!! Form::label('role_id', __('Role'), ['class' => 'form-control-label']) !!}
                <span class="text-danger text-xs"> * </span>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fal fa-user-shield"></i>
                        </span>
                    </div>
                    <select class="form-control" data-toggle="select" data-live-search="true" name="role_id"
                        data-live-search-placeholder="{{ __('Search') }}" required>
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }}">
                                {{ $role->km }} - {{ $role->en }}
                            </option>
                        @endforeach
                    </select>
                    @error('role_id')
                        <div class="error-feedback d-block">
                            {{ $message }}
                        </div>
                    @else
                        <div class="invalid-feedback">
                            {{ __('validation.required', ['attribute' => __('Role')]) }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-6">
                <div class="form-row">
                    @foreach (config('languages') as $language)
                        <div class="col-md-6 mb-3">
                            {!! Form::label($language['code'], $language['name'], ['class' => 'form-control-label']) !!}
                            <span class="text-danger text-xs"> * </span>

                            <div class="input-group">
                                {!! Form::text($language['code'], null, ['class' => 'form-control', 'required' => true]) !!}
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <img src="{{ asset('images/flags/' . $language['code'] . '.svg') }}"
                                            width="20px">
                                    </span>
                                </div>
                                @error($language['code'])
                                    <div class="error-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @else
                                    <div class="invalid-feedback">
                                        {{ __('validation.required', ['attribute' => $language['name']]) }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        {!! Form::label('icon', __('Icon'), ['class' => 'form-control-label']) !!}
                        <div class="input-group">
                            {!! Form::text('icon', null, ['class' => 'form-control']) !!}
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fal fa-icons"></i>
                                </span>
                            </div>
                        </div>
                        @error('icon')
                            <div class="error-feedback d-block">
                                {{ $message }}
                            </div>
                        @else
                            <div class="invalid-feedback">
                                {{ __('validation.required', ['attribute' => __('Icon')]) }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                {!! Form::label('slug', __('Slug'), ['class' => 'form-control-label']) !!}
                <span class="text-danger text-xs"> * </span>
                <div class="form-row border rounded py-2">
                    <div class="col-xl-4">
                        {!! Form::text('slug', null, ['class' => 'form-control', 'required' => true]) !!}
                    </div>
                    <div class="col">
                        {!! Form::text('routes', 'index,create-store,edit-update,show,destroy', ['class' => 'form-control', 'data-toggle' => 'tags']) !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <a class="btn" href="{{ route('admin.permission.index') }}">{{ __('Back') }}</a>
        <div class="float-right ">
            <button class="btn btn-primary" type="submit">{{ __('Save') }}</button>
        </div>
    </div>
</div>
{!! Form::close() !!}
