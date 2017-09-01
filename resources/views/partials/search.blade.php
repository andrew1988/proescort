<section class="section-search">
  {!!Form::open()!!}
    <div class="row">
        <div class="col-md-2 col-md-offset-1">
          {!! Form::select("city",['0'=>'Alege Judet'],null,['class'=>'form-control']) !!}
        </div>
        <div class="col-md-2">
          {!! Form::select("city",['0'=>'Alege Oras'],null,['class'=>'form-control']) !!}
        </div>
        <div class="col-md-2">
          Online {!! Form::checkbox('online',1,null,['class'=>'form-control']) !!}
        </div>
        <div class="col-md-2">
          Escorta sociala {!! Form::checkbox('social',1,null,['class'=>'form-control']) !!}
        </div>
        <div class="col-md-2">
          Cu video {!! Form::checkbox('video',1,null,['class'=>'form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}
</section>
