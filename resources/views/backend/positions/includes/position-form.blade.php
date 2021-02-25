{!! Form::model($position, ['route' => [$route, $position], 'method' => $method, 'files' => true]) !!}
    {!! Form::token(); !!}

    <div class="row mb-2">
        <div class="col col-12 col-sm-2">
            <div class="form-group">
                {!! Form::label('is_active', 'Active'); !!}
                <div class="form-control-label">
                    <label class="c-switch c-switch-success">
                        {!! Form::checkbox('is_active', true, $position->is_active, [
                            'data-id'=>$position->id,
                            'class' => 'status-input c-switch-input',
                            'data-toggle'=>'toggle',
                            'data-onstyle' => 'success',
                            ]) !!}
                        <span class="c-switch-slider"></span>
                    </label>
                </div>
            </div>
        </div>
        <div class="col col-12 col-sm-10">
            {!! Form::label('title', 'Title'); !!}
            {!! Form::text('title',null, ['class' => 'form-control', 'placeholder' => 'Position Title']); !!}
        </div>
    </div>

    {!! Form::label('company', 'Company'); !!}
    {!! Form::text('company',null, ['class' => 'form-control', 'placeholder' => 'Company']); !!}

    {!! Form::label('short_description', 'Short Description'); !!}
    {!! Form::text('short_description', null, ['class' => 'form-control', 'placeholder' => 'Short Description']); !!}

    {!! Form::label('description', 'Description'); !!}
    {!! Form::text('description',null, ['class' => 'form-control', 'placeholder' => 'Description']); !!}

    {!! Form::label('page_content', 'Page Content'); !!}
    {!! Form::text('page_content',null, ['class' => 'form-control', 'placeholder' => 'Page Content']); !!}

    {!! Form::label('external_url', 'External URL'); !!}
    {!! Form::url('external_url',null, ['class' => 'form-control', 'placeholder' => 'External URL']); !!}


    {!! Form::label('start_date', 'Start Date'); !!}
    {!! Form::date('start_date',null, ['class' => 'form-control', 'placeholder' => 'Start Date']); !!}

    {!! Form::label('end_date', 'End Date'); !!}
    {!! Form::date('end_date',null, ['class' => 'form-control', 'placeholder' => 'End Date']); !!}


    {!! Form::label('media-label',"Upload Media"); !!}
    {!! Form::file('media[]', ['class' => 'form-control-file', 'multiple' => true]); !!}

    {!! Form::submit($actionText, ['class' => 'form-control btn btn-success']); !!}
{!! Form::close() !!}

